<?php
require '../functions/front-func.php';
require '../functions/customer-func.php';
require '../functions/theme-func.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SANCTVS: ORDINES MEI</title>
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
            <h3>ORDINES MEI</h3>
            <a href="../main/index.php">DOMVS</a>
        </header>
        <section class="orders" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <?php if (!empty($my_orders)): ?>
                    <?php foreach ($my_orders as $ord): ?>
                        <?php if ($ord['_status_']==='Delivered'): ?>
                            <div 
                                class="ordo"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>"
                            >
                                <img 
                                    src=".<?php echo htmlspecialchars($ord['_image_path_'], ENT_QUOTES, 'UTF-8'); ?>"
                                    alt="<?php echo htmlspecialchars($ord['_product_name_'], ENT_QUOTES, 'UTF-8'); ?>"
                                    title="<?php echo htmlspecialchars($ord['_product_name_'], ENT_QUOTES, 'UTF-8'); ?>"
                                    width="150px" height="200px"
                                    style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                                    
                                >
                                <p>Order completed and paid.</p>
                                <form method="post" action="./orders.php">
                                    <input type="hidden" name="remove_order_id" value="<?php echo (int)$ord['_id_']; ?>">
                                    <button 
                                        type="submit" title="Remove Order" style="width: 100%;"
                                        style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                                    >
                                        DELERE ORDINEM
                                    </button>
                                </form>
                            </div>
                        <?php else: ?>
                            <div 
                                class="ordo" 
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
                                <img 
                                    src=".<?php echo htmlspecialchars($ord['_image_path_'], ENT_QUOTES, 'UTF-8'); ?>"
                                    alt="<?php echo htmlspecialchars($ord['_product_name_'], ENT_QUOTES, 'UTF-8'); ?>"
                                    title="<?php echo htmlspecialchars($ord['_product_name_'], ENT_QUOTES, 'UTF-8'); ?>"
                                    width="150px" height="200px"
                                    style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                                >
                                <p>
                                    <strong>Total Cost</strong><br><br>
                                    &#8369;<?php 
                                        echo htmlspecialchars(number_format((float)$ord['_total_cost_'], 2),ENT_QUOTES,'UTF-8'); ?> (<?php 
                                        echo (int)$ord['_quantity_']; ?> + &#8369;<?php 
                                        echo htmlspecialchars(number_format((float)$ord['_shipping_'], 2), ENT_QUOTES, 'UTF-8'); 
                                    ?>)
                                </p>
                                <p>
                                    <strong>Ordered</strong><br><br>
                                    <?php echo htmlspecialchars($ord['_ordered_'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                                <p> 
                                    <strong>Delivery Date<br>(Weekly)</strong><br><br>
                                    <?php echo htmlspecialchars($ord['_delivery_date_'], ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                                <button 
                                    type="button" class="rescindereOrdinem" 
                                    data-id="<?php echo (int)$ord['_id_']; ?>" 
                                    title="Cancel Order"
                                    style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                                >
                                    RESCINDERE ORDINEM
                                </button>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p style="text-align: center; width: 100%;">No orders found.</p>
                <?php endif; ?>
            </div>
        </section>
        <footer style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
            <p>
                GLORIA PATRI, ET FILIO, ET SPIRITVI SANCTO,
                SICVT ERAT IN PRINCIPIO, ET NVNC, ET SEMPER,
                ET IN SAECVLA SAECVLORVM, AMEN.
            </p>
        </footer>
        <div id="rescindereOrdinem">
            <form 
                method="post" action="../main/orders.php" 
                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>"
            >
                <h1>RESCINDERE ORDINEM</h1>
                <p>Are you sure you want to cancel your order?</p>
                <input type="hidden" name="cancel_order_id" id="cancelOrder">
                <div class="confirmare">
                    <button 
                        type="submit" title="Confirm"
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
            </form>
        </div>
        <div id="onvstvs">
            <div></div>
        </div>
        <script src="../scripts/cancel-order.js"></script>
        <script src="../scripts/loading.js"></script>
        <script src="../scripts/ui.js"></script>
    </body>
</html>