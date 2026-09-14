<?php
require '../functions/front-func.php';
require "../functions/search-func.php";
require '../functions/theme-func.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SANCTVS: QVAERE</title>
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
        <form 
            class="qvaere" method="get" action="../main/search.php"
            style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>"
        >
            <input name="q" type="text" placeholder="Search products...">
            <button 
                type="submit" title="Search"
                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
            >
                QVAERE
            </button>
        </form>
        <section class="search" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <p><strong><?php echo htmlspecialchars($heading_text,ENT_QUOTES,'UTF-8'); ?></strong></p>
                <p>Search relevant products in this section.</p>
                <div class="pertinens">
                    <?php if (!empty($products)): ?> 
                        <?php foreach ($products as $prod): ?> 
                            <div>
                                <?php if(($prod['_available_']??'Yes')==='Yes'): ?>
                                    <a href="../main/description.php?id=<?php echo (int)$prod['_id_']; ?>&<?php 
                                            echo http_build_query(array_filter([
                                                'q'=>$_GET['q']??'',
                                                'class'=>$_GET['class']??'',
                                                'style'=>$_GET['style']??'',
                                                'type'=>$_GET['type']??'',
                                                'person'=>$_GET['person']??''
                                            ],fn($value)=>$value!==''));
                                        ?>"
                                    >
                                        <img 
                                            src=".<?php echo htmlspecialchars($prod['_image_path_'],ENT_QUOTES,'UTF-8'); ?>" 
                                            alt="<?php echo htmlspecialchars($prod['_title_'],ENT_QUOTES,'UTF-8'); ?>"
                                            title="<?php echo htmlspecialchars( $prod['_title_'], ENT_QUOTES,'UTF-8'); ?>"
                                            width="200" height="250" 
                                            style="<?php echo $currentTheme==='Silver Key'?
                                            'background-color: rgb(100,100,100);':''; ?>"
                                        >
                                    </a>
                                <?php endif; ?>
                                <p><strong>
                                    <?php echo htmlspecialchars($prod['_product_name_'],ENT_QUOTES,'UTF-8');?>
                                </strong></p>
                                <p><strong>
                                    &#8369;<?php echo htmlspecialchars(number_format((float)$prod['_price_'],2),ENT_QUOTES,'UTF-8'); ?>
                                </strong></p>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?> 
                </div> 
            </div>
        </section>
        <footer style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
            <p>
                GLORIA PATRI, ET FILIO, ET SPIRITVI SANCTO,
                SICVT ERAT IN PRINCIPIO, ET NVNC, ET SEMPER,
                ET IN SAECVLA SAECVLORVM, AMEN.
            </p>
        </footer>
        <div id="index">
            <div style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
                <div class="profilvm-vsoris">
                    <img 
                        src="<?php echo $currentTheme==='Silver Key'?
                        '../assets/others/modvs-beatvs.png':'./assets/others/modvs-sanctvs.png'; ?>"
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