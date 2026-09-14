<?php
require "../functions/front-func.php";
require "../functions/theme-func.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SANCTVS: TABERNA</title>
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
        <section class="occidentalis" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <h1>IMAGINES OCCIDENTALI PICTAE</h1>
                <p>Explore the realistic portraits of the West.</p>
                <div class="imagines-occidentali-pictae">
                    <div>
                        <a href="../main/search.php?class=Portraits&style=Western&person=Jesus%20Christ">
                            <img
                                src="../assets/portraits/western/divine-mercy.jpg"
                                alt="Divine Mercy" title="Divine Mercy"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>IESVS CHRISTVS</h3>
                    </div>
                    <div>
                        <a href="../main/search.php?class=Portraits&style=Western&person=Virgin%20Mary">
                            <img
                                src="../assets/portraits/western/our-lady-of-fatima.jpg"
                                alt="Our Lady of Fatima" title="Our Lady of Fatima"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>VIRGO MARIA</h3>
                    </div>
                    <div>
                        <a href="../main/search.php?class=Portraits&style=Western&person=St.%20Joseph">
                            <img
                                src="../assets/portraits/western/st-joseph-terror-of-demons.jpg"
                                alt="St. Joseph, Terror of Demons" title="St. Joseph, Terror of Demons"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                                
                            >
                        </a>
                        <h3>ST. IOSEPHVS</h3>
                    </div>
                    <?php if($currentTheme==='Silver Key'): ?>
                        <div>
                            <a href="../main/search.php?class=Portraits&style=Western&person=Blessed">
                                <img
                                    src="../assets/portraits/western/bl-justus-takayama-ukon.jpg"
                                    alt="Bl. Justus Takayama Ukon" title="Bl. Justus Takayama Ukon"
                                    width="200px" height="250px"
                                    style="background-color: rgb(100,100,100);"
                                >
                            </a>
                            <h3>BEATI</h3>
                        </div>
                    <?php else: ?>
                        <div>
                            <a href="../main/search.php?class=Portraits&style=Western&person=Saint">
                                <img
                                    src="../assets/portraits/western/st-peter.png"
                                    alt="St. Peter" title="St. Peter"
                                    width="200px" height="250px"
                                >
                            </a>
                            <h3>SANCTI</h3>
                        </div>
                    <?php endif; ?>    
                </div>
            </div>
        </section>
        <div class="divisio" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"></div>
        <section class="orientalis" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <h1>IMAGINES ORIENTALI PICTAE</h1>
                <p>Explore the symbolic portraits of the East.</p>
                <div class="imagines-orientali-pictae">
                    <div>
                        <a href="../main/search.php?class=Portraits&style=Eastern&person=Jesus%20Christ">
                            <img
                                src="../assets/portraits/eastern/christ-pantocrator-icon.jpg"
                                alt="Christ Pantocrator" title="Christ Pantocrator"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>IESVS CHRISTVS</h3>
                    </div>
                    <div>
                        <a href="../main/search.php?class=Portraits&style=Eastern&person=Virgin%20Mary">
                            <img
                                src="../assets/portraits/eastern/theotokos.jpg"
                                alt="Theotokos" title="Theotokos"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>VIRGO MARIA</h3>
                    </div>
                    <div>
                        <a href="../main/search.php?class=Portraits&style=Eastern&person=St.%20Joseph">
                            <img
                                src="../assets/portraits/eastern/st-joseph-the-betrothed.jpg"
                                alt="St. Joseph the Betrothed" title="St. Joseph the Betrothed"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>ST. IOSEPHVS</h3>
                    </div>
                    <?php if($currentTheme==='Silver Key'): ?>
                        <div>
                            <a href="../main/search.php?class=Portraits&style=Eastern&person=Blessed">
                                <img
                                    src="../assets/portraits/eastern/bl-justus-takayama-ukon-icon.jpg"
                                    alt="Bl. Justus Takayama Ukon" title="Bl. Justus Takayama Ukon"
                                    width="200px" height="250px"
                                    style="background-color: rgb(100,100,100);"
                                >
                            </a>
                            <h3>BEATI</h3>
                        </div>
                    <?php else: ?>
                        <div>
                            <a href="../main/search.php?class=Portraits&style=Eastern&person=Saint">
                                <img
                                    src="../assets/portraits/eastern/st-peter-icon.jpg"
                                    alt="St. Peter" title="St. Peter"
                                    width="200px" height="250px"
                                >
                            </a>
                            <h3>SANCTI</h3>
                        </div>
                    <?php endif; ?>  
                </div>
            </div>
        </section>
        <div class="divisio" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"></div>
        <section class="planvs" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <h1>STATVAE MARMORAE PLANAE</h1>
                <p>Explore the plain marble statues in small sizes.</p>
                <div class="statvae-marmorae-planae">
                    <div>
                        <a href="../main/search.php?class=Statues&style=Plain&person=Jesus%20Christ">
                            <img
                                src="../assets/statues/plain/divine-mercy-plain.png"
                                alt="Divine Mercy" title="Divine Mercy"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>IESVS CHRISTVS</h3>
                    </div>
                    <div>
                        <a href="../main/search.php?class=Statues&style=Plain&person=Virgin%20Mary">
                            <img
                                src="../assets/statues/plain/our-lady-of-guadalupe-plain.png"
                                alt="Our Lady of Guadalupe" title="Our Lady of Guadalupe"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>VIRGO MARIA</h3>
                    </div>
                    <div>
                        <a href="../main/search.php?class=Statues&style=Plain&person=St.%20Joseph">
                            <img
                                src="../assets/statues/plain/st-joseph-plain.png"
                                alt="St. Joseph" title="St. Joseph"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>ST. IOSEPHVS</h3>
                    </div>
                    <?php if($currentTheme==='Silver Key'): ?>
                        <div>
                            <a href="../main/search.php?class=Statues&style=Plain&person=Blessed">
                                <img
                                    src="../assets/statues/plain/bl-laura-vicuna-plain.png"
                                    alt="Bl. Laura Vicuna" title="Bl. Laura Vicuna"
                                    width="200px" height="250px"
                                    style="background-color: rgb(100,100,100);"
                                >
                            </a>
                            <h3>BEATI</h3>
                        </div>
                    <?php else: ?>
                        <div>
                            <a href="../main/search.php?class=Statues&style=Plain&person=Saint">
                                <img
                                    src="../assets/statues/plain/st-mary-magdalene-plain.png"
                                    alt="St. Mary Magdalene" title="St. Mary Magdalene"
                                    width="200px" height="250px"
                                >
                            </a>
                            <h3>SANCTI</h3>
                        </div>
                    <?php endif; ?>  
                </div>
            </div>
        </section>
        <div class="divisio" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"></div>
        <section class="pictvs" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <h1>STATVAE MARMORAE PICTAE</h1>
                <p>Explore the painted marble statues in small sizes.</p>
                <div class="statvae-marmorae-pictae">
                    <div>
                        <a href="../main/search.php?class=Statues&style=Painted&person=Jesus%20Christ">
                            <img
                                src="../assets/statues/painted/divine-mercy-painted.png"
                                alt="Divine Mercy" title="Divine Mercy"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>IESVS CHRISTVS</h3>
                    </div>
                    <div>
                        <a href="../main/search.php?class=Statues&style=Painted&person=Virgin%20Mary">
                            <img
                                src="../assets/statues/painted/our-lady-of-guadalupe-painted.png"
                                alt="Our Lady of Guadalupe" title="Our Lady of Guadalupe"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>VIRGO MARIA</h3>
                    </div>
                    <div>
                        <a href="../main/search.php?class=Statues&style=Painted&person=St.%20Joseph">
                            <img
                                src="../assets/statues/painted/st-joseph-painted.png"
                                alt="St. Joseph" title="St. Joseph"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>ST. IOSEPHVS</h3>
                    </div>
                    <?php if($currentTheme==='Silver Key'): ?>
                        <div>
                            <a href="../main/search.php?class=Statues&style=Painted&person=Blessed">
                                <img
                                    src="../assets/statues/painted/bl-laura-vicuna-painted.png"
                                    alt="Bl. Laura Vicuna" title="Bl. Laura Vicuna"
                                    width="200px" height="250px"
                                    style="background-color: rgb(100,100,100);"
                                >
                            </a>
                            <h3>BEATI</h3>
                        </div>
                    <?php else: ?>
                        <div>
                            <a href="../main/search.php?class=Statues&style=Painted&person=Saint">
                                <img
                                    src="../assets/statues/painted/st-mary-magdalene-painted.png"
                                    alt="St. Mary Magdalene" title="St. Mary Magdalene"
                                    width="200px" height="250px"
                                    style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                                >
                            </a>
                            <h3>SANCTI</h3>
                        </div>
                    <?php endif; ?>  
                </div>
            </div>
        </section>
        <div class="divisio" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"></div>
        <section class="accessories" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <h1>ACCESSORIA</h1>
                <p>Explore the fundamentals of the Catholic faith.</p>
                <div class="fvndamenta">
                    <div>
                        <a href="../main/search.php?class=Accessories&type=Crucifixes">
                            <img
                                src="../assets/accessories/crucifixes/wooden-crucifix.png"
                                alt="Crucifix" title="Crucifix"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>CRVCIFIXA</h3>
                    </div>
                    <div>
                        <a href="../main/search.php?class=Accessories&type=Rosaries">
                            <img
                                src="../assets/accessories/rosaries/red-rosary.png"
                                alt="Rosary" title="Rosary"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>ROSARIA</h3>
                    </div>
                    <div>
                        <a href="../mains/search.php?class=Accessories&type=Scapulars">
                            <img
                                src="../assets/accessories/scapulars/our-lady-of-mt-carmel-scapular.png"
                                alt="Scapular" title="Scapular"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>SCAPVLARIA</h3>
                    </div>
                    <div>
                        <a href="./customer/search.php?class=Accessories&type=Novenas">
                            <img
                                src="../assets/accessories/novenas/divine-mercy-novena.png"
                                alt="Novena" title="Novena"
                                width="200px" height="250px"
                                style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                            >
                        </a>
                        <h3>NOVENAE</h3>
                    </div>
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