<?php
$users=[]; 
$dberror="";
    
if($pdo!==null){ 
    try{
        $stmt=$pdo->prepare("SELECT _id_,_username_,_email_,_theme_ FROM users WHERE _role_='Customer' ORDER BY _id_ ASC");
        $stmt->execute(); 
        $users=$stmt->fetchAll();
    }catch(PDOException $e){ 
        $dbError="Unable to retrieve users.";
        $dbError="Database error: ".$e->getMessage();
    }
}else{
    $dbError="Database connection failed.";
}

$displayUsername=htmlspecialchars($_SESSION['username']??'Administrator',ENT_QUOTES,'UTF-8');
?>