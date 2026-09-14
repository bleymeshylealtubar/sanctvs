<?php
require '../database/config.php';

$username=$_SESSION['username'];

if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['cancel_order_id'])){
        $order_id=filter_input(INPUT_POST,'cancel_order_id',FILTER_VALIDATE_INT);
    
        if($order_id){
            try{
                $pdo->beginTransaction();
                $checkStmt=$pdo->prepare("SELECT _product_id_, _quantity_ FROM orders 
                    WHERE _id_ = :id AND _username_ = :username LIMIT 1");
                $checkStmt->execute([':id'=>$order_id,':username'=>$username]);
                $orderData=$checkStmt->fetch();

                if($orderData){
                    $product_id=$orderData['_product_id_'];
                    $quantity=$orderData['_quantity_'];
                    $restoreStmt=$pdo->prepare("UPDATE products SET _stock_ = _stock_ + :quantity WHERE _id_ = :id");
                    $restoreStmt->execute([':quantity'=>$quantity,':id'=>$product_id]);
                    $delStmt=$pdo->prepare("DELETE FROM orders WHERE _id_ = :id AND _username_ = :username");
                    $delStmt->execute([':id'=>$order_id,':username'=>$username]);
                }

                $pdo->commit();
            }catch(Throwable $e){
                if($pdo->inTransaction()){
                    $pdo->rollBack();
                }
            }
        }
    }elseif(isset($_POST['remove_order_id'])){
        $order_id=filter_input(INPUT_POST,'remove_order_id',FILTER_VALIDATE_INT);
        
        if($order_id){
            $delStmt=$pdo->prepare("DELETE FROM orders WHERE _id_ = :id AND _username_ = :username AND _status_ = 'Delivered'");
            $delStmt->execute([':id'=>$order_id,':username'=>$username]);
        }
    }
}

$ordersStmt=$pdo->prepare("SELECT o.*, p._image_path_ FROM orders o 
    JOIN products p ON o._product_id_ = p._id_ WHERE o._username_ = :username
    ORDER BY o._id_ ASC
");
$ordersStmt->execute([':username'=>$username]);
$my_orders=$ordersStmt->fetchAll();
?>