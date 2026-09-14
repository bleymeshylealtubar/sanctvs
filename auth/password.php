<?php
require '../functions/password-func.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SANCTVS: MVTARE TESSERAM</title>
        <link rel="icon" type="image/x-icon" href="../assets/others/clavis-avrea.ico">
        <link rel="stylesheet" type="text/css" href="../assets/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="mvtare-tesseram">
            <form id="changePasswordForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div>
                    <img 
                        src="../assets/others/clavis-avrea.png" 
                        alt="Gold Key" title="Gold Key"
                        width="300px" height="300px"
                    >
                </div>
                <div>
                    <h1>MVTARE TESSERAM</h1>
                    <p>Change your forgotten password with a new one.</p>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Email Address"
                        autocomplete="email"
                        value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                        required
                    >
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="New Password"
                        autocomplete="new-password"
                        required
                    >
                    <input
                        type="password"
                        id="confirm_password"
                        name="confirm_password"
                        placeholder="Confirm Password"
                        autocomplete="new-password"
                        required
                    >
                    <p id="passwordStatus" class="password-status"></p>
                    <button id="mvtareTesseram" type="submit" title="Save">CONSERVARE</button>
                    <p>Remembered your password? <a href="../auth/login.php">Log In</a></p>
                </div>
            </form>
        </div>
        <div
            id="mvtatvs"
            style="<?php echo !empty($message)?'display: flex;':'display: none;'; ?>"
        >
            <div class="change <?php echo htmlspecialchars($messageType,ENT_QUOTES,'UTF-8'); ?>">
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
        <script src="../scripts/password.js"></script>
        <script>
            function closeModal(){
                const modal=document.getElementById('mvtatvs');
                modal.style.display='none';
                const loginSuccess=<?php echo $loginSuccess?'true':'false'; ?>;

                if(loginSuccess){
                    window.location.href='../auth/login.php';
                }
            }

            document.getElementById('mvtatvs').addEventListener('click',function(event){
                if(event.target===this){
                    closeModal();
                }
            });
        </script>
        <script src="../scripts/loading.js"></script>
        <script src="../scripts/ui.js"></script>
    </body>
</html>