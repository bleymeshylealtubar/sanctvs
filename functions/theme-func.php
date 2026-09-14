<?php
require '../database/config.php';

function getUserTheme(PDO $pdo,int $userId): string{
    $stmt=$pdo->prepare("SELECT _theme_ FROM users WHERE _id_ = :id LIMIT 1");
    $stmt->execute([':id'=>$userId]);
    $theme=$stmt->fetchColumn();

    return in_array($theme,['Gold Key','Silver Key'],true)?$theme:'Gold Key';
}
function setUserTheme(PDO $pdo,int $userId,string $theme): bool{
    if(!in_array($theme,['Gold Key','Silver Key'],true)){
        return false;
    }

    $stmt=$pdo->prepare("UPDATE users SET _theme_ = :theme WHERE _id_ = :id LIMIT 1");

    return $stmt->execute([':theme'=>$theme,':id'=>$userId]);
}
function handleThemeChange(PDO $pdo,int $userId): string{
    if($_SERVER['REQUEST_METHOD']==='POST'&&isset($_POST['change_theme'])) {
        $theme=trim($_POST['change_theme']);

        if(setUserTheme($pdo, $userId, $theme)){
            $query=$_SERVER['QUERY_STRING']??'';
            $redirect=$_SERVER['PHP_SELF'];

            if($query!==''){
                $redirect.='?'.$query;
            }

            header('Location: '.$redirect);
            exit();
        }
    }

    return getUserTheme($pdo, $userId);
}


$userId=(int)($_SESSION['user_id'] ?? 0);
$currentTheme='Gold Key';

if($userId>0){
    $currentTheme=handleThemeChange($pdo,$userId);
}
?>