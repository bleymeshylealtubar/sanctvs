<?php
require '../database/config.php';

$message='';
$messageType='';
$loginSuccess=false;

if($_SERVER['REQUEST_METHOD']==='POST'){
    $email=trim($_POST['email']??'');
    $password=$_POST['password']??'';
    $confirmPassword=$_POST['confirm_password']??'';

    if ($email===''||!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $message='Please enter a valid email address.';
        $messageType='error';
    }elseif($password===''){
        $message='Please enter a new password.';
        $messageType='error';
    }elseif(strlen($password)<8){
        $message='The new password must contain at least 8 characters.';
        $messageType='error';
    } elseif ($password!==$confirmPassword){
        $message='The passwords do not match.';
        $messageType='error';
    }else{
        $stmt=$pdo->prepare("SELECT _id_, _email_ FROM users WHERE _email_ = :email LIMIT 1");
        $stmt->execute([':email'=>$email]);
        $user=$stmt->fetch();

        if(!$user){
            $message='No account was found with that email address.';
            $messageType='error';
        }else{
            $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
            $updateStmt = $pdo->prepare("UPDATE users SET _password_ = :password WHERE _id_ = :id");
            $updateStmt->execute([':password'=>$hashedPassword,':id'=>$user['_id_']]);
            $message='Your password has been changed successfully.';
            $messageType='success';
            $loginSuccess=true;
        }
    }
}
?>