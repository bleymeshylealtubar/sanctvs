<?php
require '../functions/back-func.php';
require '../functions/dashboard-func.php';
require '../functions/theme-func.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SANCTVS: TABVLA MODERAMINIS</title>
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
        <section 
            class="tabvla-moderaminis" 
            style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>"
        >
            <div>
                <h1>TABVLA MODERAMINIS</h1>
                <p>Check the daily information of users and products.</p>
                <div class="tabvla" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>">
                    <h3>INFORMATIO GENERALIS</h3>
                    <div>
                        <p style="text-align: center;">
                            <strong>VSORES</strong><br><br>
                            <?php echo (int)$totalUsers; ?>
                        </p> 
                        <p style="text-align: center;"> 
                            <strong>PRODVCTA</strong><br><br>
                            <?php echo (int)$totalProducts; ?>
                        </p>
                        <p style="text-align: center;"> 
                            <strong>ORDINES</strong><br><br>
                            <?php echo (int)$totalOrders; ?>
                        </p>
                        <p style="text-align: center;">
                            <strong>REDITVS</strong><br><br>
                            &#8369;<?php echo htmlspecialchars(number_format((float)$totalRevenue, 2), ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                    </div>
                </div>
                <div class="tabvla" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>">
                    <h3>IMAGINES OCCIDENTALI PICTAE</h3>
                    <div>
                        <p style="text-align: center;">
                            <strong>IESVS CHRISTVS</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Western','Jesus Christ'); ?>
                        </p> 
                        <p style="text-align: center;"> 
                            <strong>VIRGO MARIA</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Western','Virgin Mary'); ?>
                        </p>
                        <p style="text-align: center;"> 
                            <strong>ST. IOSEPHVS</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Western','St. Joseph'); ?>
                        </p>
                        <p style="text-align: center;">
                            <strong>SANCTI</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Western','Saint'); ?>
                        </p>
                        <p style="text-align: center;">
                            <strong>BEATI</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Western','Blessed'); ?>
                        </p>
                    </div>
                </div>
                <div class="tabvla" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>">
                    <h3>IMAGINES ORIENTALI PICTAE</h3>
                    <div>
                        <p style="text-align: center;">
                            <strong>IESVS CHRISTVS</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Eastern','Jesus Christ'); ?>
                        </p> 
                        <p style="text-align: center;"> 
                            <strong>VIRGO MARIA</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Eastern','Virgin Mary'); ?>
                        </p>
                        <p style="text-align: center;"> 
                            <strong>ST. IOSEPHVS</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Eastern','St. Joseph'); ?>
                        </p>
                        <p style="text-align: center;">
                            <strong>SANCTI</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Eastern','Saint'); ?>
                        </p>
                        <p style="text-align: center;">
                            <strong>BEATI</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Eastern','Blessed'); ?>
                        </p>
                    </div>
                </div>
                <div class="tabvla" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>">
                    <h3>STATVAE MARMORAE PLANAE</h3>
                    <div>
                        <p style="text-align: center;">
                            <strong>IESVS CHRISTVS</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Plain','Jesus Christ'); ?>
                        </p> 
                        <p style="text-align: center;"> 
                            <strong>VIRGO MARIA</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Plain','Virgin Mary'); ?>
                        </p>
                        <p style="text-align: center;"> 
                            <strong>ST. IOSEPHVS</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Plain','St. Joseph'); ?>
                        </p>
                        <p style="text-align: center;">
                            <strong>SANCTI</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Plain','Saint'); ?>
                        </p>
                        <p style="text-align: center;">
                            <strong>BEATI</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Plain','Blessed'); ?>
                        </p>
                    </div>
                </div>
                <div class="tabvla" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>">
                    <h3>STATVAE MARMORAE PICTAE</h3>
                    <div>
                        <p style="text-align: center;">
                            <strong>IESVS CHRISTVS</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Painted','Jesus Christ'); ?>
                        </p> 
                        <p style="text-align: center;"> 
                            <strong>VIRGO MARIA</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Painted','Virgin Mary'); ?>
                        </p>
                        <p style="text-align: center;"> 
                            <strong>ST. IOSEPHVS</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Painted','St. Joseph'); ?>
                        </p>
                        <p style="text-align: center;">
                            <strong>SANCTI</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Painted','Saint'); ?>
                        </p>
                        <p style="text-align: center;">
                            <strong>BEATI</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Painted','Blessed'); ?>
                        </p>
                    </div>
                </div>
                <div class="tabvla" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>">
                    <h3>ACCESSORIA</h3>
                    <div>
                        <p style="text-align: center;">
                            <strong>CRVCIFIXA</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Crucifixes',''); ?>
                        </p> 
                        <p style="text-align: center;"> 
                            <strong>ROSARIA</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Rosaries',''); ?>
                        </p>
                        <p style="text-align: center;"> 
                            <strong>SCAPVLARIA</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Scapulars',''); ?>
                        </p>
                        <p style="text-align: center;">
                            <strong>NOVENAE</strong><br><br>
                            <?php echo (int)getProductCount($pdo,'Novenas',''); ?>
                        </p>
                    </div>
                </div>
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