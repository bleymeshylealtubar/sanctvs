<?php
require "../functions/back-func.php";
require "../functions/theme-func.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SANCTVS: THEMATA</title>
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
            <div style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
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
        <section class="themata" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <form method="post" action="" class="clavis">
                    <input type="hidden" name="change_theme" value="Gold Key">
                    <button type="submit" class="theme-choice">
                        <img 
                            src="../assets/others/clavis-avrea.png" 
                            alt="Gold Key" title="Gold Key"
                            width="300px" height="300px"
                        >
                    </button>
                    <h3>CLAVIS AVREA</h3>
                </form>
                <form method="post" action="" class="clavis">
                    <input type="hidden" name="change_theme" value="Silver Key">
                    <button type="submit" class="theme-choice">
                        <img 
                            src="../assets/others/clavis-argentea.png" 
                            alt="Silver Key" title="Silver Key"
                            width="300px" height="300px"
                        >
                    </button>
                    <h3>CLAVIS ARGENTEA</h3>
                </form>
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
