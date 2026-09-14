<?php
require '../database/config.php';

$totalUsers=$pdo->query("SELECT COUNT(*) FROM users WHERE _role_ = 'Customer'")->fetchColumn();
$totalProducts=$pdo->query("SELECT COUNT(*) FROM products")->fetchColumn();
$totalOrders=$pdo->query("SELECT COUNT(*) FROM orders")->fetchColumn();
$totalRevenue=$pdo->query("SELECT SUM(_total_cost_) FROM orders WHERE _status_ = 'Delivered'")->fetchColumn() ?: 0.00;

function getProductCount($pdo,$category,$name){
    $stmt=$pdo->prepare("SELECT COUNT(*) FROM products WHERE _style_ = :style AND _person_ = :person OR _type_ = :type");
    $stmt->execute([':style'=>$category,':type'=>$category,':person'=>$name]);
    return $stmt->fetchColumn();
}
?>