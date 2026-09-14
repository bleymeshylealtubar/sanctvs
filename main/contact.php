<?php
require "../functions/front-func.php";
require "../functions/theme-func.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SANCTVS: CONTACTA NOS</title>
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
       <header class="transversvs" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
            <img 
                src="<?php echo $currentTheme==='Silver Key'?
                '../assets/others/clavis-argentea.png':'../assets/others/clavis-avrea.png'; ?>"
                width="100px" height="100px"
            >
            <a href="../main/index.php" title="Home">DOMVS</a>
            <a href="../main/shop.php" title="Shop">TABERNA</a>
            <a href="../main/about.php" title="About Us">DE NOBIS</a>
            <a href="../main/contact.php" title="Contact Us">CONTACTA NOS</a>
            <a id="aperireIndicem" href="#" title="Menu">INDEX</a>
        </header>
        <section 
            class="retia-socialia" 
            style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>"
        >
            <div>
                <h1>RETIA SOCIALIA</h1>
                <p>Ready to help us? Feel free to contact us!</p>
                <div class="tabvlata">
                    <button 
                        type="button" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                    >
                        <img 
                            src="../assets/others/facebook-com-logo.png"
                            alt="Facebook" title="Facebook"
                            width="50px" height="50px"
                        >
                        SANCTVS CAERVLEVM
                    </button>
                    <button 
                        type="button" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                    >
                        <img 
                            src="../assets/others/youtube-com-logo.png"
                            alt="YouTube" title="YouTube"
                            width="50px" height="50px"
                        >
                        SANCTVS RVBRVM
                    </button>
                    <button 
                        type="button"
                        style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                    >
                        <img 
                            src="../assets/others/x-com-logo.png"
                            alt="X" title="X"
                            width="50px" height="50px"
                        >
                        SANCTVS NIGRVM
                    </button>
                    <p>
                        Your feedback can help us improve the e-commerce
                        to further satisfy the experience. Moreover, aside
                        from monthly release of new products, we can also
                        add new features in the future to ensure that we
                        can preserve the traditions of the Catholic Church
                        while adapting in the modern world.
                    </p>
                </div>
            </div>
        </section>
        <div class="divisio" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"></div>
        <section class="pater-noster" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <h1>PATER NOSTER</h1>
                <p>Also "contact" God by praying to Him. Start praying in Latin now with this prayer.</p>
                <div class="our-father" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>">
                    <p>IN NOMINE PATRIS, ET FILII, ET SPIRITVS SANCTI, AMEN.</p>
                    <p>
                        PATER NOSTER, QVI ES IN CAELIS, SANCTIFICETVR 
                        NOMEN TVVM. ADVENIAT REGNVM TVVM. FIAT VOLVNTAS
                        TVA, SICVT IN CAELO ET IN TERRA. PANEM NOSTRVM
                        QVOTIDIANVM DA NOBIS HODIE. ET DIMITTE NOBIS
                        DEBITA NOSTRA, SICVT ET NOS DIMITTIMVS DEBITORIBVS
                        NOSTRIS. ET NE NOS INDVCAS IN TENTATIONEM, SED
                        LIBERA NOS A MALO. AMEN.
                    </p>
                    <p>IN NOMINE PATRIS, ET FILII, ET SPIRITVS SANCTI, AMEN.</p>
                    <p>PAX TECVM ET DEO GRATIAS!</p>
                </div>
            </div>
        </section>
        <footer style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
            <p>
                OMNIS QVI CREDIT IN EVM NON PEREAT SED HABEAT
                VITAM AETERNAM. IOANNES 3:16
            </p>
        </footer>
        <div id="index">
            <div style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
                <div class="profilvm-vsoris">
                    <img 
                        src="<?php echo $currentTheme==='Silver Key'?
                        '../assets/others/modvs-beatvs.png':'../assets/others/modvs-sanctvs.png'; ?>"
                        width="100px" height="100px"
                    >
                    <h3><?php echo $displayUsername; ?></h3>
                    <a href="../main/orders.php" title="Orders">ORDINES</a>
                    <a id="logOut" title="Log Out">EXIRE</a>
                </div>
            </div>
        </div>
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
        <script src="../scripts/menu-logout.js"></script>
        <script src="../scripts/loading.js"></script>
        <script src="../scripts/ui.js"></script>
    </body>
</html>