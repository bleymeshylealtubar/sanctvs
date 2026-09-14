<?php
require "../functions/login-func.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SANCTVS: INSCRIBE TE</title>
        <link rel="icon" type="image/x-icon" href="../assets/others/clavis-avrea.ico">
        <link rel="stylesheet" type="text/css" href="../assets/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="inscribe-te">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div>
                    <img 
                        src="../assets/others/clavis-avrea.png" 
                        alt="Gold Key" title="Gold Key"
                        width="300px" height="300px"
                    >
                </div>
                <div>
                    <h1>INSCRIBE TE</h1>
                    <p>Enter user information to log in.</p>
                    <input 
                        type="text" 
                        name="username" 
                        value="<?php echo htmlspecialchars($_POST['username']??'',ENT_QUOTES,'UTF-8'); ?>"
                        placeholder="Username" 
                        required
                        autocomplete="username"
                    >
                    <input 
                        type="email"
                        name="email"
                        value="<?php echo htmlspecialchars($_POST['email']??'',ENT_QUOTES,'UTF-8'); ?>"
                        placeholder="Email Address"
                        required
                        autocomplete="email"
                    >
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Password" 
                        required
                        autocomplete="current-password"
                    >
                    <p><a href="../auth/password.php">Forgot password?</a></p>
                    <button id="inscribeTe" type="submit" title="Log In">INSCRIBE TE</button>
                    <p>Did not have an account? <a href="../auth/signup.php">Sign Up</a></p>
                </div>
            </form>
        </div>
        <div
            id="inscriptvs"
            style="<?php echo !empty($message)?'display: flex;':'display: none;'; ?>"
        >
            <div class="log-in <?php echo htmlspecialchars($messageType,ENT_QUOTES,'UTF-8'); ?>">
                <h1><?php echo $messageType==='success'?'SVCCESSVS':'NOTIFICATIO';?></h1>
                <p><?php echo htmlspecialchars($message,ENT_QUOTES,'UTF-8'); ?></p>
                <button type="button" onclick="closeModal()">
                    <?php echo $messageType==='success'?'INSCRIBE TE':'CLAVDERE';?>
                </button>
            </div>
        </div>
        <div id="onvstvs">
            <div></div>
        </div>
        <script>
            function closeModal(){
                const modal=document.getElementById('inscriptvs');
                modal.style.display='none';
                const loginSuccess=<?php echo $loginSuccess?'true':'false'; ?>;

                if(loginSuccess){
                    window.location.href='../customer/index.php';
                }
            }

            document.getElementById('inscriptvs').addEventListener('click',function(event){
                if(event.target===this){
                    closeModal();
                }
            });
        </script>
        <script src="../scripts/loading.js"></script>
        <script src="../scripts/ui.js"></script>
    </body>
</html>