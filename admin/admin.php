<?php
require "../functions/back-func.php";
require "../functions/users-func.php";
require "../functions/theme-func.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SANCTVS: CLIENTES</title>
        <link 
            rel="icon" type="image/x-icon" 
            href="<?php echo $currentTheme==='Silver Key'?
            '../assets/others/clavis-argentea.ico':'../assets/others/clavis-avrea.ico' ?>"
        >
        <link rel="stylesheet" type="text/css" href="../assets/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
    </head>
    <body>
        <nav class="directvs" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
            <div>
                <img 
                    src="<?php echo $currentTheme==='Silver Key'?
                    '../assets/others/modvs-beatvs.png':'../assets/others/modvs-sanctvs.png'; ?>"
                    width="100px" height="100px"
                >
                <a href="../admin/admin.php" title="Customers">CLIENTES</a>
                <a href="../admin/products.php" title="Products">PRODVCTA</a>
                <a href="../admin/dashboard.php" title="Dashboard" style="text-align: center;">TABVLA MODERAMINIS</a>
                <a href="../admin/themes.php" title="Themes">THEMATA</a>
                <a id="logOut" title="Log Out">EXIRE</a>
            </div>
        </nav>
        <section class="vsores" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <h1>CLIENTES</h1>
                <p>Check the customers' registered information and their orders.</p>
                <?php if (!empty($users)): ?> 
                    <?php foreach ($users as $registeredUser): ?>
                        <?php $customerTheme=$registeredUser['_theme_']??'Gold Key'; ?>
                        <div
                            class="vsor" 
                            style="<?php echo $currentTheme==='Silver Key'?
                            'background-color: rgb(150,150,150);':''; ?>"
                        >
                            <img 
                                src="<?php echo $customerTheme==='Silver Key'?
                                '../assets/others/modvs-beatvs.png':'../assets/others/modvs-sanctvs.png'; ?>"
                                width="100px" height="100px"
                            >
                            <p style="text-align: center;">
                                <strong>Customer</strong><br><br>
                                <?php echo htmlspecialchars($registeredUser['_username_'],ENT_QUOTES,'UTF-8'); ?>
                            </p> 
                            <p style="text-align: center;"> 
                                <strong>Email Address</strong><br><br>
                                <?php echo htmlspecialchars($registeredUser['_email_'],ENT_QUOTES, 'UTF-8'); ?>
                            </p>
                            <button 
                                type="button" title="Orders" 
                                onclick="window.location.href='./customers.php?user_id=<?php echo (int) $registeredUser['_id_']; ?>'"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                                ORDINES 
                            </button> 
                        </div> 
                    <?php endforeach; ?>
                <?php elseif (empty($dbError)): ?> 
                    <p>No registered users found.</p>
                <?php endif; ?>
            </div>
        </section>
        <footer style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
            <p>IN NOMINE PATRIS, ET FILII, ET SPIRITVS SANCTI, AMEN.</p>
        </footer>
        <div id="exire">
            <div style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
                <h1>EXIRE</h1>
                <p>Are you sure you want to log out?</p>
                <div class="confirmare">
                    <button 
                        id="confirmare" type="button"
                        style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                    >
                        CONFIRMARE
                    </button>
                    <button 
                        id="cancellare" type="button"
                        style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>"
                    >
                        CANCELLARE
                    </button>
                </div>
            </div>
        </div>
        <div id="onvstvs">
            <div></div>
        </div>
        <script src="../scripts/logout.js"></script>
        <script src="../scripts/loading.js"></script>
        <script src="../scripts/ui.js"></script>
    </body>
</html>