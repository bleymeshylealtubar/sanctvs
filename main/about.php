<?php
require "../functions/front-func.php";
require "../functions/theme-func.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SANCTVS: DE NOBIS</title>
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
            <a href="...customer/contact.php" title="Contact Us">CONTACTA NOS</a>
            <a id="aperireIndicem" href="#" title="Menu">INDEX</a>
        </header>
        <section class="negotivm" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <form method="post" action="">
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
            <div class="prospectvs">
                <h1>PROSPECTVS</h1>
                <p>
                    SANCTVS is an e-commerce business based in the
                    Philippines where it sells portraits of saints
                    and blesseds, both Western and Eastern style, and
                    statues of them, both plain and painted, so that
                    Catholics can use them for prayer and devotion.
                    Aside from that, it also sells fundamentals such
                    as crucifixes, rosaries, scapulars, and novenas
                    to worship God and honor His mother as they pray.
                    They are sold with the vow of keeping the price
                    affordable for them.
                </p>
            </div>
            <form method="post" action="">
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
        </section>
        <div class="divisio" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"></div>
        <section class="fvndatores" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <h1>FVNDATORES</h1>
                <p>Learn the people who collaborated on founding SANCTVS.</p>
                <div class="fvndator">    
                    <div>
                        <img 
                            src="../assets/others/bleyme-shyle-altubar.png"
                            alt="Bleyme Altubar" title="Bleyme Altubar"
                            width="250px" height="250px"
                        >
                        <h3>BLEYME ALTUBAR</h3>
                        <p>
                            The founder of SANCTVS and developer of the 
                            web application system for e-commerce. His 
                            Catholic faith is symbolized by his mask
                            containing the Chi-Rho, a combination of 
                            two Greek letters to represent Christ.
                        </p>
                    </div>
                    <div>
                        <img 
                            src="../assets/others/virginia-sterling.png"
                            alt="Virginia Sterling" title="Virginia Sterling"
                            width="250px" height="250px"
                        >
                        <h3>VIRGINIA STERLING</h3>
                        <p>
                            The creator of the Western- and Eastern-style 
                            portraits of saints and blesseds. Her Catholic 
                            faith is symbolized by her ICHTHYS hairpin,
                            which describes Jesus Christ as the Son of God
                            and Savior, aka the Messiah.
                        </p>
                    </div>
                    <div>
                        <img 
                            src="../assets/others/sandor-dalisay.png"
                            alt="Sandor Dalisay" title="Sandor Dalisay"
                            width="250px" height="250px"
                        >
                        <h3>SANDOR DALISAY</h3>
                        <p>
                            The creator of the plain and painted marble 
                            statues of saints and blesseds. His Catholic 
                            faith is symbolized by his rosary, which it
                            involves praying for the intercession of the
                            Blessed Virgin Mary in the name of the Lord.
                        </p>
                    </div>
                    <div>
                        <img 
                            src="../assets/others/robin-aviary.png"
                            alt="Robin Aviary" title="Robin Aviary"
                            width="250px" height="250px"
                        >
                        <h3>ROBIN AVIARY</h3>
                        <p>
                            The creator of the crucifixes, rosaries, 
                            scapulars, and novenas. Her Catholic faith
                            is symbolized by her crucifix hairpin, which
                            remembers the Lord's sacrifice for our sins, 
                            calling Him the Lamb of God.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="divisio" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"></div>
        <section 
            class="missio-et-visio" 
            style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>"
        >
            <div>
                <h1>MISSIO ET VISIO</h1>
                <p>Learn the objectives and ideals of SANCTVS.</p>
                <div 
                    class="mission-vision" 
                    style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"
                >
                    <h3>MISSIO</h3>
                    <p>
                        To promote the traditions preserved by the Catholic Church where:
                    </p>
                    <p>
                        - Catholics can pray for the intercession of saints and blesseds
                        in the name of the Lord, for He made them holy and allowed them 
                        to deliver His messages and miracles. To pray with them, they need 
                        depictions of them where the iconographic elements of each determine 
                        the type of help they can offer as they intercede. They know that 
                        only God, through His power, made their intercession possible.
                    </p>
                    <p>
                        - Catholics can also build their lives by being inspired from saints
                        and blesseds, whether it is about martyrdom, charity, defense of faith, 
                        or leadership. They shall be encouraged to honor their lives during
                        their feast days, where devotion is the central part, along with
                        venerating the relics or statues of them to either ask for blessings
                        or healing. The memorials of those holy souls are His instruments.
                    </p>
                    <p>
                        - Catholics can at least pray for the intercession of the Mother
                        of God, the Blessed Virgin Mary, via the rosary, to start their 
                        journey as practicing individuals. They must witness the Lord's 
                        sacrifice in at least every Sunday Mass via the crucifix, honor 
                        His mother's intercession by wearing scapulars, and extend their
                        prayers to the Lord and His mother by earning specific novenas.
                    </p>
                    <h3>VISIO</h3>
                    <p>
                        We visualize a future of the Catholic Church where later generations
                        of youths still embrace the depth of its preserved traditions that 
                        helped on strengthening their Catholic faith as a result of the
                        earlier generations who promoted and passed them down, regardless
                        of hostilities in the modern world, whether they are about human
                        rights, technology, or even conflicts in doctrine and theology.
                    </p>
                    <p>
                        By developing SANCTVS as our offer, we are ready to serve products
                        for practicing Catholics at affordable prices, whether they need 
                        portraits, statues, or fundamental accessories, as long as they 
                        are still ready to preserve the traditions of the Catholic Church, 
                        as they are all inspired by the messages brought by Scripture, whether 
                        literal or implied, all while living in the modern world.
                    </p>
                </div>
            </div>
        </section>
        <footer style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(150,150,150);':''; ?>">
            <p>
                DOMINE NON SVM DIGNVS VT INTRES SVB TECTVM MEVM 
                SED TANTVM DIC VERBO ET SANABITVR PVER (ANIMA) MEVS. 
                MATTHAEVS 8:8
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