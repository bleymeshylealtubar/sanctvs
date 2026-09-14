<?php
require '../database/config.php';

$user_id=filter_input(INPUT_GET,'user_id',FILTER_VALIDATE_INT);
$userStmt=$pdo->prepare("SELECT _username_ FROM users WHERE _id_ = :id LIMIT 1");
$userStmt->execute([':id'=>$user_id]);
$targetUser=$userStmt->fetch();
$targetUsername=$targetUser['_username_'];

if($_SERVER['REQUEST_METHOD']==='POST'&& isset($_POST['complete_order_id'])){
    $order_id=filter_input(INPUT_POST,'complete_order_id',FILTER_VALIDATE_INT);
    
    if($order_id){
        try{
            $pdo->beginTransaction();
            $updateStmt=$pdo->prepare("UPDATE orders SET _status_ = 'Delivered' WHERE _id_ = :id");
            $updateStmt->execute([':id'=>$order_id]);

            $pdo->commit();
            header("Location: customers.php?user_id=".$user_id);
            exit();
        }catch(Throwable $e){
            if($pdo->inTransaction()){
                $pdo->rollBack();
            }
        }
    }
}

$ordersStmt=$pdo->prepare("SELECT o.*, p._image_path_ FROM orders o 
    JOIN products p ON o._product_id_ = p._id_ WHERE o._username_ = ?
    ORDER BY o._id_ ASC
");
$ordersStmt->execute([$targetUsername]);
$my_orders=$ordersStmt->fetchAll();
?>