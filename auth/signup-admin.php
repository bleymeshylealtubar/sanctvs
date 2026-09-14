<?php
require "../functions/signup-func.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SANCTVS: ADSCRIBE TE</title>
        <link rel="icon" type="image/x-icon" href="../assets/others/clavis-avrea.ico">
        <link rel="stylesheet" type="text/css" href="../assets/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="adscribe-te">
            <form method="post" action="">
                <div>
                    <img 
                        src="../assets/others/clavis-avrea.png" 
                        alt="Gold Key" title="Gold Key"
                        width="300px" height="300px"
                    >
                </div>
                <div>
                    <h1>ADSCRIBE TE</h1>
                    <p>Enter user information to sign up.</p>
                    <input 
                        type="text" 
                        name="username" 
                        placeholder="Username" 
                        value="<?php echo htmlspecialchars( $_POST['username']??'',ENT_QUOTES,'UTF-8'); ?>"
                        required
                        autocomplete="username"
                    >
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Email Address" 
                        value="<?php echo htmlspecialchars( $_POST['email']??'',ENT_QUOTES,'UTF-8'); ?>"
                        required
                        autocomplete="email"
                    >
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Password" 
                        required
                        autocomplete="new-password"
                    >
                    <button type="submit" title="Sign In">ADSCRIBE TE</button>
                    <p>Already had an account? <a href="../auth/login-admin.php">Log In</a></p>
                </div>
            </form>
        </div>
        <div
            id="adscriptvs"
            style="<?php echo !empty($message)?'display: flex;':'display: none;'; ?>"
        >
            <div class="sign-up <?php echo htmlspecialchars($messageType); ?>">
                <h1><?php echo $messageType==='success'?'SVCCESSVS':'NOTIFICATIO';?></h1>
                <p><?php echo htmlspecialchars($message); ?></p>
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
                const modal=document.getElementById('adscriptvs');
                modal.style.display='none';

                <?php if ($messageType==='success'): ?>
                    window.location.href='../auth/login-admin.php';
                <?php endif; ?>
            }

            document.getElementById('adscriptvs').addEventListener('click',function(event){
                if(event.target===this){
                    closeModal();
                }
            });
        </script>
        <script src="../scripts/loading.js"></script>
        <script src="../scripts/ui.js"></script>
    </body>
</html>