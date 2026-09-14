<?php
require "../database/config.php";

$loginSuccess=false;

if($_SERVER['REQUEST_METHOD']==='POST'&&isset($pdo)){
    $username=trim($_POST['username']??'');
    $email=trim($_POST['email']??'');
    $password=$_POST['password']??'';

    if($username===''||$email===''||$password===''){
        $message="All fields are required.";
        $messageType="error";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $message="Invalid email format.";
        $messageType="error";
    }else{
        try{
            $stmt=$pdo->prepare(
                "SELECT _id_,_username_,_email_,_password_,_role_ FROM users WHERE 
                _username_ = :username AND _email_ = :email");
            $stmt->execute([':username'=>$username,':email'=>$email]);
            $userRecord=$stmt->fetch();

            if($userRecord&&password_verify($password,$userRecord['_password_'])){
                if(strtolower(trim($userRecord['_role_']??''))!=='admin'){
                    $message="Administrator access only.";
                    $messageType="error";
                    $loginSuccess=false;
                }else{
                    session_start();

                    $_SESSION['user_id']=$userRecord['_id_'];
                    $_SESSION['username']=$userRecord['_username_'];
                    $_SESSION['email']=$userRecord['_email_'];
                    $_SESSION['role']=$userRecord['_role_'];
                    $message="Login successful! Welcome back, ".htmlspecialchars($userRecord['_username_'],ENT_QUOTES,'UTF-8').".";
                    $messageType="success";
                    $loginSuccess=true;
                }
            }else{
                $message="Invalid username, email, or password.";
                $messageType="error";
            }
        }catch(PDOException $e){
            $message="Something went wrong while logging in.";
            $messageType="error";
            $message="Database error: ".$e->getMessage();
        }
    }
}
?>