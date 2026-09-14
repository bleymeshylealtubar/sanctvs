<?php
require "../database/config.php";

$message="";
$messageType="";

if($_SERVER['REQUEST_METHOD']==='POST'&&isset($pdo)){
    $username=trim($_POST['username']??'');
    $email=trim($_POST['email']??'');
    $password=$_POST['password']??'';

    if(empty($username)||empty($email)||empty($password)){
        $message="All fields are required.";
        $messageType="error";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $message="Invalid email format.";
        $messageType="error";
    }elseif(strlen($password)<8){
        $message="Password must be at least 8 characters.";
        $messageType="error";
    }else{
        try{
            $stmt=$pdo->prepare("SELECT _id_ FROM users WHERE _username_ = :username OR _email_ = :email");
            $stmt->execute([':username'=>$username,':email'=>$email]);
            $existingUser=$stmt->fetch();

            if($existingUser){
                $message="Username or email is already taken.";
                $messageType="error";
            }else{
                $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
                $registered=date('Y-m-d H:i:s');
                $insertStmt=$pdo->prepare(
                    "INSERT INTO users (_username_, _email_, _password_, _role_, _registered_) VALUES 
                    (:username,:email,:password,:role,:registered)");
                $insertStmt->execute(
                    [':username'=>$username,':email'=>$email,':password'=>$hashedPassword,':role'=>'Customer',
                    ':registered'=>date('Y-m-d H:i:s')]);
                $message="Registration successful! You can now log in.";
                $messageType="success";
            }
        }catch(PDOException $e){
            $message="Database error: ".$e->getMessage();
            $messageType="error";
        }
    }
}
?>