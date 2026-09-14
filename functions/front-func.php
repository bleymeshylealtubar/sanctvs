<?php
require "../database/config.php";

session_start();
    
if(!isset($_SESSION['user_id'])){ 
    header("Location: ../auth/login.php"); 
    exit(); 
}

$sessionUsername=$_SESSION['username']??'User'; 
$sessionRole=$_SESSION['role']??'Customer';
$displayUsername=htmlspecialchars($sessionUsername,ENT_QUOTES,'UTF-8');
$displayRole=htmlspecialchars($sessionRole,ENT_QUOTES,'UTF-8');
?>