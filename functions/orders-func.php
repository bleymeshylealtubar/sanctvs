<?php    
require '../database/config.php';

$product_id=filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
$stmt=$pdo->prepare("SELECT * FROM products WHERE _id_ = :id AND _available_ = 'Yes' LIMIT 1");
$stmt->execute([':id'=>$product_id]);
$product=$stmt->fetch();
$product_class=$product['_product_class_'];
$price=(float)$product['_price_'];
$stock=(int)$product['_stock_'];
$shipping=0.00;

if($product_class==='Portraits'){
    $shipping=21.00;
}elseif($product_class==='Statues'){
    $shipping=11.00;
}

if($_SERVER['REQUEST_METHOD']==='POST'){
    $quantity=filter_input(INPUT_POST,'quantity',FILTER_VALIDATE_INT);
    $complete_address=trim($_POST['complete_address'] ?? '');
    $username=$_SESSION['username'];

    $userStmt=$pdo->prepare("SELECT _email_ FROM users WHERE _username_ = :username LIMIT 1");
    $userStmt->execute([':username'=>$username]);
    $user=$userStmt->fetch();
    $email=$user['_email_']??'';

    if($product&&$quantity>0&&$quantity<=$stock&&!empty($complete_address)){
        $product_name=$product['_product_name_'];
        $ordered=date('Y-m-d');
        $delivery_date=date('Y-m-d',strtotime('+7 days'));
        $payment_method='Cash-on-Delivery';
        $status='Ordered';

        try{
            $pdo->beginTransaction();
            $orderStmt=$pdo->prepare("INSERT INTO orders (_product_id_,_product_name_,_price_,_quantity_,
                _shipping_,_username_,_email_,_complete_address_,_payment_method_,_ordered_,_delivery_date_,_status_)
                VALUES (:product_id, :product_name, :price, :quantity, :shipping, :username, :email,
                :complete_address, :payment_method, :ordered, :delivery_date, :status)");
            $orderStmt->execute([':product_id'=>$product_id,':product_name'=>$product_name,':price'=>$price,
                ':quantity'=>$quantity,':shipping'=>$shipping,':username'=>$username,':email'=>$email,
                ':complete_address'=>$complete_address,':payment_method'=>$payment_method,':ordered'=>$ordered,
                ':delivery_date'=>$delivery_date,':status'=>$status]);
                
            $newStock=$stock-$quantity;
            $updStmt=$pdo->prepare("UPDATE products SET _stock_ = :stock WHERE _id_ = :id");
            $updStmt->execute([':stock'=>$newStock,':id'=>$product_id]);
            $pdo->commit();
        }catch(Throwable $e){
            if($pdo->inTransaction()){
                $pdo->rollBack();
            }

            echo '<pre>'.htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8').'</pre>';
        }
    }
}
?>