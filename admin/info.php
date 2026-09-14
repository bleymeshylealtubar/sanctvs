<?php
require '../functions/back-func.php';
require '../functions/info-func.php';
require '../functions/theme-func.php';
?>

<!DOCTYPE html>
<html>
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
                src="<?php echo $currentTheme==='Silver Key'?
                '../assets/others/modvs-beatvs.png':'../assets/others/modvs-sanctvs.png'; ?>"
                width="100px" height="100px"
            >
            <h3>DESCRIPTIO PRODVCTI</h3>
            <a href="./products.php?<?php 
                echo http_build_query(array_filter([
                    'filter_class'=>$_GET['filter_class']??'',
                    'filter_style'=>$_GET['filter_style']??'',
                    'filter_style_statue'=>$_GET['filter_style_statue']??'',
                    'filter_type'=>$_GET['filter_type']??'',
                    'filter_person'=>$_GET['filter_person']??''
                ],fn($value)=>$value!=='')); ?>"
            >
                PRODVCTA
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
                        style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                    >
                </div>
                <form 
                    class="singvlaria" method="POST" action="?<?php 
                        echo http_build_query(array_filter([
                            'id'=>$product_id,
                            'filter_class'=>$_GET['filter_class']??'',
                            'filter_style'=>$_GET['filter_style']??'',
                            'filter_style_statue'=>$_GET['filter_style_statue']??'',
                            'filter_type'=>$_GET['filter_type']??'',
                            'filter_person'=>$_GET['filter_person']??''
                        ],fn($value)=>$value!=='')); 
                    ?>"
                >
                    <h1 style="text-align: center;"><?php echo $displayProductName; ?></h1>
                    <?php if($product_class==='Portraits'||$product_class==='Statues' ): ?>
                        <div class="dvplex">
                            <input 
                                name="_years_" type="text" placeholder="Years (Birth-Death)" 
                                value="<?php echo htmlspecialchars( $details['_years_']??'',ENT_QUOTES,'UTF-8'); ?>"
                            >
                            <input 
                                name="_feast_day_" type="text" placeholder="Feast Day (Catholic)"
                                value="<?php echo htmlspecialchars($details['_feast_day_']??'',ENT_QUOTES,'UTF-8'); ?>"
                            >
                        </div>
                        <div class="dvplex">
                            <input 
                                name="_beatified_" type="text" placeholder="Beatified (Pope and Date)"
                                value="<?php echo htmlspecialchars($details['_beatified_']??'',ENT_QUOTES,'UTF-8');?>"
                                <?php if ($person!=='St. Joseph'&&$person!=='Saint'&&$person!=='Blessed'){
                                    echo 'disabled'; 
                                } ?>
                            >
                            <input 
                                name="_canonized_" type="text" placeholder="Canonized (Pope and Date)"
                                value="<?php echo htmlspecialchars($details['_canonized_']??'',ENT_QUOTES,'UTF-8'); ?>" 
                                <?php if($person==='Blessed'){
                                    echo 'disabled';
                                } ?>
                            >
                        </div>
                        <div class="dvplex">
                            <input 
                                name="_patronage_" type="text" placeholder="Patronage"
                                value="<?php echo htmlspecialchars($details['_patronage_']??'',ENT_QUOTES,'UTF-8'); ?>"
                            >
                            <input 
                                name="_veneration_site_" type="text" placeholder="Veneration Site"
                                value="<?php echo htmlspecialchars($details['_veneration_site_']??'',ENT_QUOTES,'UTF-8'); ?>"
                            >
                        </div>
                        <textarea 
                            name="_text_content_" rows="5" columns="50" placeholder="Discuss about this product..." 
                        ><?php echo htmlspecialchars($details['_life_']??'',ENT_QUOTES,'UTF-8'); ?></textarea>
                        <div class="dvplex">
                            <input 
                                name="_iconography_" class="singvlvs" type="text" placeholder="Iconography"
                                value="<?php echo htmlspecialchars($details['_iconography_']??'',ENT_QUOTES,'UTF-8'); ?>"
                            >
                            <input 
                                name="_stock_" class="singvlvs"
                                type="number" step="1" min="0"
                                placeholder="Stock"
                                value="<?php echo htmlspecialchars($product['_stock_']??0,ENT_QUOTES,'UTF-8'); ?>"
                            >
                        </div>
                    <?php elseif($product_class==='Accessories'): ?>
                        <textarea 
                            name="_text_content_" rows="5" columns="50" placeholder="Discuss about this product..." 
                        ><?php echo htmlspecialchars($details['_symbolism_']??'',ENT_QUOTES,'UTF-8'); ?></textarea>
                        <input 
                            name="_stock_" class="singvlvs"
                            type="number" step="1" min="0"
                            placeholder="Stock"
                            value="<?php echo htmlspecialchars($product['_stock_']??0,ENT_QUOTES,'UTF-8'); ?>"
                        >
                    <?php endif; ?>
                    <div class="dvplex">
                        <button 
                            type="submit" name="save_details" value="1" title="Save"
                            style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                        >
                            CONSERVARE
                        </button>
                        <button 
                            id="delehereProdvctvm" type="submit" title="Delete"
                            style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>"
                        >
                            DELEHERE
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <footer style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>"></footer>
        <div id="delehere">
            <div style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
                <h1>DELEHERE</h1>
                <p>Are you sure you want to delete this product?</p>
                <div class="confirmare">
                    <button 
                        id="confirmare" type="button" title="Confirm"
                        style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                    >
                        CONFIRMARE
                    </button>
                    <button 
                        id="cancellare" type="button" title="Cancel"
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
        <script src="../scripts/delete.js"></script>
        <script src="../scripts/loading.js"></script>
        <script src="../scripts/ui.js"></script>
    </body>
</html>