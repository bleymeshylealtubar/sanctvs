<?php
require "../functions/back-func.php";
require "../functions/products-func.php";
require "../functions/theme-func.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SANCTVS: PRODVCTA</title>
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
        <section class="prodvcta" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <h1>PRODVCTA</h1>
                <p>Check the portraits, statues, and accessories being uploaded.</p>
                <form 
                    method="get" action="../admin/products.php" class="colvm"
                    style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>"
                >
                    <h3>COLVM</h3>
                    <p>Filter the products by class, style, and person.</p>
                    <div>
                        <select 
                            name="filter_class" id="classisColandorvm"
                            style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                        >
                            <option 
                                value="All" 
                                <?php echo $filter_class==='All'?'selected':''; ?>
                                title="All"
                            >
                                OMNIA
                            </option>
                            <option 
                                value="Portraits" 
                                <?php echo $filter_class==='Portraits'?'selected':''; ?>
                                title="Portraits"
                            >
                                IMAGINES
                            </option>
                            <option 
                                value="Statues" 
                                <?php echo $filter_class==='Statues'?'selected':''; ?>
                                title="Statues"
                            >
                                STATVAE
                            </option>
                            <option 
                                value="Accessories" 
                                <?php echo $filter_class==='Accessories'?'selected':''; ?>
                                title="Accessories"
                            >
                                ACCESSORIA
                            </option>
                        </select>
                        <select 
                            name="filter_style" id="stilvs"
                            style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                        >
                            <option 
                                value="Western" 
                                <?php echo $filter_style==='Western'?'selected':''; ?>
                                title="Western"
                            >
                                OCCIDENTALIS
                            </option>
                            <option 
                                value="Eastern" 
                                <?php echo $filter_style==='Eastern'?'selected':''; ?>
                                title="Eastern"
                            >
                                ORIENTALIS
                            </option>
                        </select>
                        <select 
                            name="filter_style_statue" id="stilvsStatvarvm"
                            style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                        >
                            <option 
                                value="Plain" 
                                <?php echo $filter_style_statue==='Plain'?'selected':''; ?>
                                title="Plain"
                            >
                                PLANVS
                            </option>
                            <option
                                value="Painted" 
                                <?php echo $filter_style_statue==='Painted'?'selected':''; ?>
                                title="Painted"
                            >
                                PICTVS
                            </option>
                        </select>
                        <select 
                            name="filter_type" id="typvsColandi"
                            style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                        >
                            <option 
                                value="Crucifixes" 
                                <?php echo $filter_type==='Crucifixes'?'selected':''; ?>
                                title="Crucifixes"
                            >
                                CRVCIFIXA
                            </option>
                            <option 
                                value="Rosaries" 
                                <?php echo $filter_type==='Rosaries'?'selected':''; ?>
                                title="Rosaries"
                            >
                                ROSARIA
                            </option>
                            <option 
                                value="Scapulars" 
                                <?php echo $filter_type==='Scapulars'?'selected':''; ?>
                                title="Scapulars"
                            >
                                SCAPVLARIA
                            </option>
                            <option 
                                value="Novenas" 
                                <?php echo $filter_type==='Novenas'?'selected':''; ?>
                                title="Novenas"
                            >
                                NOVENAE
                            </option>
                        </select>
                        <select 
                            name="filter_person" id="selectioPersonarvm"
                            style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                        >
                            <option 
                                value="Jesus Christ" 
                                <?php echo $filter_person==='Jesus Christ'?'selected':''; ?>
                                title="Jesus Christ"
                            >
                                IESVS CHRISTVS
                            </option>
                            <option 
                                value="Virgin Mary" 
                                <?php echo $filter_person==='Virgin Mary'?'selected':''; ?>
                                title="Virgin Mary"
                            >
                                VIRGO MARIA
                            </option>
                            <option 
                                value="St. Joseph" 
                                <?php echo $filter_person==='St. Joseph'?'selected':''; ?>
                                title="St. Joseph"
                            >
                                ST. IOSEPHVS
                            </option>
                            <option 
                                value="Saint" 
                                <?php echo $filter_person==='Saint'?'selected':''; ?>
                                title="Saint"
                            >
                                SANCTI
                            </option>
                            <option 
                                value="Blessed" 
                                <?php echo $filter_person==='Blessed'?'selected':''; ?>
                                title="Blessed"
                            >
                                BEATI
                            </option>
                        </select>
                    </div>
                    <div>
                        <button 
                            type="submit" title="Apply Filter"
                            style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                        >
                            ADHIBERE COLVM
                        </button>
                        <button 
                            id="aperireImpositionem" 
                            type="button" title="Upload Product"
                            style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                        >
                            IMPONERE PRODVCTVM
                        </button>
                    </div>
                </form>
                <div class="impositvm">
                    <?php if (!empty($products)): ?> 
                        <?php foreach ($products as $prod): ?>
                            <div>
                                <a href="../admin/info.php?id=<?php echo (int)$prod['_id_']; ?>&<?php 
                                    echo http_build_query(array_filter([
                                        'filter_class'=>$_GET['filter_class']??'',
                                        'filter_style'=>$_GET['filter_style']??'',
                                        'filter_style_statue'=>$_GET['filter_style_statue']??'',
                                        'filter_type'=>$_GET['filter_type']??'',
                                        'filter_person'=>$_GET['filter_person']??''
                                    ],fn($value)=>$value!=='')); ?>"
                                >
                                    <img 
                                        src=".<?php echo htmlspecialchars($prod['_image_path_'],ENT_QUOTES,'UTF-8'); ?>" 
                                        alt="<?php echo htmlspecialchars($prod['_title_'],ENT_QUOTES,'UTF-8'); ?>"
                                        title="<?php echo htmlspecialchars( $prod['_title_'], ENT_QUOTES,'UTF-8'); ?>"
                                        width="200" height="250" 
                                        style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                                    >
                                </a>
                                <p><strong>
                                    <?php echo htmlspecialchars($prod['_product_name_'],ENT_QUOTES,'UTF-8');?>
                                </strong></p>
                                <p><strong>
                                    &#8369;<?php echo htmlspecialchars(number_format((float)$prod['_price_'],2),ENT_QUOTES,'UTF-8'); ?>
                                </strong></p>
                            </div>
                        <?php endforeach; ?> 
                    <?php else: ?> 
                        <p>No products found.</p> 
                    <?php endif; ?> 
                </div> 
            </div> 
        </section>
        <footer style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
            <p>IN NOMINE PATRIS, ET FILII, ET SPIRITVS SANCTI, AMEN.</p>
        </footer>
        <div id="imponere" class="imponere">
            <form 
                method="POST" action="" enctype="multipart/form-data"
                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>"
            >
                <h1>IMPONERE PRODVCTVM</h1>
                <p>Upload an image file and specify its class, style, and person.</p>
                <div class="flex">
                    <div class="fascicvlvs">
                        <div>
                            <img 
                                id="praevisio" 
                                src="<?php echo $currentTheme==='Silver Key'?
                                '../assets/others/gray-background.jpg':'../assets/others/yellow-background.jpg'; ?>"
                                alt="Click the image to choose a file." 
                                title="Click the image to choose a file." 
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            > 
                        </div> 
                        <input 
                            type="file" name="_image_file_" 
                            id="imago" accept=".jpg,.jpeg,.png" 
                            hidden required 
                        >
                        <p id="nomenFascicvli">No file chosen</p>
                    </div>
                    <div class="particvlaria">
                        <div>
                            <input type="text" name="_product_name_" placeholder="Product Name" required>
                            <input type="text" name="_title_" placeholder="Title" required>
                            <input type="number" step="0.01" min="0" name="_price_" placeholder="Price" required>
                        </div>
                        <div>
                            <select 
                                name="_product_class_"id="classis" required
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                                <option value="Portraits" title="Portraits">IMAGINES</option>
                                <option value="Statues" title="Statues">STATVAE</option>
                                <option value="Accessories" title="Accessories">ACCESSORIA</option>
                            </select>
                            <select 
                                name="_style_" id="imagines" required
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                                <option value="Western" title="Western">OCCIDENTALIS</option>
                                <option value="Eastern" title="Eastern">ORIENTALIS</option>
                            </select>
                            <select 
                                name="_style_" id="statvae" style="display: none;" required
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                                <option value="Plain" title="Plain">PLANVS</option>
                                <option value="Painted" title="Painted">PICTVS</option>
                            </select>
                            <select 
                                name="_type_" id="typvs" required
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                                <option value="Crucifixes" title="Crucifixes">CRVCIFIXA</option>
                                <option value="Rosaries" title="Rosaries">ROSARIA</option>
                                <option value="Scapulars" title="Scapulars">SCAPVLARIA</option>
                                <option value="Novenas" title="Novenas">NOVENAE</option>
                            </select>
                            <select 
                                name="_person_" id="persona" required
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                                <option value="Jesus Christ" title="Jesus Christ">IESVS CHRISTVS</option>
                                <option value="Virgin Mary" title="Virgin Mary">VIRGO MARIA</option>
                                <option value="St. Joseph" title="St. Joseph">ST. IOSEPHVS</option>
                                <option value="Saint" title="Saint">SANCTI</option>
                                <option value="Blessed" title="Blessed">BEATI</option>
                            </select>
                        </div>
                        <div>
                            <button 
                                name="upload_product" type="submit" title="Upload Product"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                                IMPONERE PRODVCTVM
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
            </form>
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
        <script src="../scripts/logout.js"></script>
        <script src="../scripts/products.js"></script>
        <script src="../scripts/loading.js"></script>
        <script src="../scripts/ui.js"></script>
    </body>
</html>