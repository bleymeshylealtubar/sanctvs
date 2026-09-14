<?php
require '../functions/front-func.php';
require '../functions/info-func.php';
require '../functions/orders-func.php';
require '../functions/theme-func.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SANCTVS: DESCRIPTIO PRODVCTI</title>
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
        <header class="horizontal" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
            <img
                class="insigne-prodvcti"
                src="<?php echo $currentTheme==='Silver Key'?
                '../assets/others/modvs-beatvs.png':'../assets/others/modvs-sanctvs.png'; ?>"
                width="100px" height="100px"
            >
            <h3>DESCRIPTIO PRODVCTI</h3>
            <a href="../main/search.php?<?php 
                    echo http_build_query(array_filter([
                        'q'=>$_GET['q']??'',
                        'class'=>$_GET['class']??'',
                        'style'=>$_GET['style']??'',
                        'type'=>$_GET['type']??'',
                        'person'=>$_GET['person']??''
                    ],fn($value)=>$value!==''));
                ?>"
            >   
                QVAERE
            </a>
        </header>
        <section class="informatio" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <div class="preview">
                    <img
                        src=".<?php echo $displayImage; ?>" 
                        alt="<?php echo $displayTitle; ?>" 
                        title="<?php echo $displayTitle; ?>"
                        width="350px" height="400px"
                        style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>"
                    >
                </div>
                <div class="descriptio">
                    <h1 style="text-align: center;"><?php echo $displayProductName; ?></h1>
                    <?php if($product_class==='Portraits'||$product_class==='Statues' ): ?>
                        <p>
                            <strong>Years: </strong>
                            <?php echo htmlspecialchars( $details['_years_']??'',ENT_QUOTES,'UTF-8'); ?><br>
                            <strong>Feast Day:</strong>
                            <?php echo htmlspecialchars($details['_feast_day_']??'',ENT_QUOTES,'UTF-8'); ?><br>
                        </p>
                        <?php if(($details['_beatified_']??'')!==''&&($details['_canonized_']??'')!==''): ?>
                            <p>
                                <strong>Beatified: </strong>
                                <?php echo htmlspecialchars($details['_beatified_']??'',ENT_QUOTES,'UTF-8');?><br>
                                <strong>Canonized: </strong>
                                <?php echo htmlspecialchars($details['_canonized_']??'',ENT_QUOTES,'UTF-8'); ?>
                            </p>
                        <?php elseif(($details['_beatified_']??'')!==''&&($details['_canonized_']??'')===''): ?>
                            <p>
                                <strong>Beatified: </strong>
                                <?php echo htmlspecialchars($details['_beatified_']??'',ENT_QUOTES,'UTF-8');?><br>
                            </p>
                        <?php else: ?>
                            <p>
                                <strong>Canonized: </strong>
                                <?php echo htmlspecialchars($details['_canonized_']??'',ENT_QUOTES,'UTF-8'); ?>
                            </p>
                        <?php endif; ?>
                        <p>
                            <strong>Patronage: </strong>
                            <?php echo htmlspecialchars($details['_patronage_']??'',ENT_QUOTES,'UTF-8'); ?><br>
                            <strong>Veneration Site/s: </strong>
                            <?php echo htmlspecialchars($details['_veneration_site_']??'',ENT_QUOTES,'UTF-8'); ?>
                        </p>
                        <p><?php echo htmlspecialchars($details['_life_']??'',ENT_QUOTES,'UTF-8'); ?></p>
                        <p>
                            <strong>Iconography: </strong>
                            <?php echo htmlspecialchars($details['_iconography_']??'',ENT_QUOTES,'UTF-8'); ?>
                        </p>
                    <?php elseif($product_class==='Accessories'): ?>
                        <p><?php echo htmlspecialchars($details['_symbolism_']??'',ENT_QUOTES,'UTF-8'); ?></p>
                    <?php endif; ?>
                    <button 
                        type="button" id="ordinareProdvctvm" title="Order Product"
                        style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                    >
                        ORDINARE PRODVCTVM
                    </button>
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
        <div id="ordo">
            <form 
                method="post" action="" 
                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>"
            >
                <h1>ORDINARE PRODVCTVM</h1>
                <p>Carefully enter important details for a safe delivery.</p>
                <input type="hidden" name="id" value="<?php echo $product_id; ?>">
                <div class="flex">
                    <div class="imago-prodvcti">
                        <div>
                            <img 
                                id="praevisio" src=".<?php echo $displayImage; ?>" 
                                alt="<?php echo $displayTitle; ?>" 
                                title="<?php echo $displayTitle; ?>" 
                                width="200px" height="250px" 
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            > 
                        </div>
                        <p><?php echo $displayProductName; ?></p>
                    </div>
                    <div class="details">
                        <div>
                            <input 
                                type="number" id="price" value="<?php 
                                    echo htmlspecialchars(number_format((float)$price,2),ENT_QUOTES,'UTF-8'); 
                                ?>" 
                                placeholder="Price (in Pesos)" readonly
                            >
                            <input 
                                type="number" id="quantity" name="quantity" 
                                step="1" min="1" max="<?php echo $stock; ?>" 
                                placeholder="Quantity" required
                            >
                        </div>
                        <div>
                            <input 
                                type="number" id="shipping" value="<?php echo 
                                    htmlspecialchars(number_format((float)$shipping,2),ENT_QUOTES,'UTF-8'); 
                                ?>" 
                                placeholder="Shipping (in Pesos)" readonly>
                            <input type="number" id="total" placeholder="Total Cost" readonly>
                        </div>
                        <input id="locvs" type="text" name="complete_address" placeholder="Complete Address" required>
                        <select 
                            name="payment_method"
                            style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                        >
                            <option value="Cash-on-Delivery" title="Cash-on-Delivery">PECVNIA IN TRADITIONE</option>
                        </select>
                        <div class="confirmare">
                            <button 
                                type="submit" title="Order Product"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                                ORDINARE PRODVCTVM
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
            </form>
        </div>
        <div id="onvstvs">
            <div></div>
        </div>
        <script src="../scripts/orders.js"></script>
        <script src="../scripts/loading.js"></script>
        <script src="../scripts/ui.js"></script>
    </body>
</html>