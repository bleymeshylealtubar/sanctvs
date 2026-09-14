<?php
require "../functions/front-func.php";
require "../functions/theme-func.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SANCTVS: DOMVS</title>
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
        <section class="salvtatio" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div class="pax-tecvm">
                <h1>PAX TECVM!</h1>
                <p>
                    Welcome to SANCTVS! Strengthen 
                    your Catholic faith in the modern 
                    world through the tradition of icon 
                    veneration with portraits and statues 
                    and fundamental accessories for your 
                    prayers at affordable prices! What 
                    are you waiting for? Explore the shop, 
                    order one now and let us bring the best 
                    service for you as we deliver your
                    portraits, statues, or accessories!
                </p>
            </div>
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
        <section class="definitio" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <?php if($currentTheme==='Silver Key'): ?>
                <div class="sancti">
                    <img 
                        src="../assets/portraits/western/bl-charlemagne.jpg" 
                        alt="Bl. Charlemagne" title="Bl. Charlemagne"
                        width="150px" height="200px"
                    >
                    <img 
                        src="../assets/portraits/western/bl-guy-de-montpellier.jpg" 
                        alt="Bl. Guy de Montpellier" title="Bl. Guy de Montpellier"
                        width="150px" height="200px"
                    >
                    <img 
                        src="../assets/portraits/western/pope-bl-urban-v.jpg" 
                        alt="Pope Bl. Urban V" title="Pope Bl. Urban V"
                        width="150px" height="200px"
                    >
                    <img 
                        src="../assets/portraits/western/bl-karl-of-austria.jpg" 
                        alt="Bl. Karl of Austria" title="Bl. Karl of Austria"
                        width="150px" height="200px"
                    >
                    <img 
                        src="../assets/portraits/eastern/bl-laura-vicuna-icon.jpg" 
                        alt="Bl. Laura Vicuna" title="Bl. Laura Vicuna"
                        width="150px" height="200px"
                    >
                    <img 
                        src="../assets/portraits/eastern/bl-maria-restituta-kafka-icon.jpg" 
                        alt="Bl. Maria Restituta Kafka" title="Bl. Maria Restituta Kafka"
                        width="150px" height="200px"
                    >
                    <img 
                        src="../assets/portraits/eastern/pope-bl-innocent-v-icon.jpg" 
                        alt="Pope Bl. Innocent V" title="Pope Bl. Innocent V"
                        width="150px" height="200px"
                    >
                    <img 
                        src="../assets/portraits/eastern/bl-anne-catherine-emmerich-icon.jpg" 
                        alt="Bl. Anne Catherine Emmerich" title="Bl. Anne Catherine Emmerich"
                        width="150px" height="200px"
                    >
                </div>
                <div class="qvid-svnt-sancti">
                    <h1>QVID SVNT BEATI?</h1>
                    <p>
                        Blesseds, also known as lesser saints, are 
                        people who were faithful to our Lord God, 
                        served for Him aside from their faith 
                        through actions such as martyrdom, charity, 
                        defense of doctrine, and leadership, and 
                        their imperfect souls were perfected by the 
                        fires of purification in the Purgatory 
                        before finally reaching His kingdom, 
                        ready to intercede to bring His 
                        miracles for those in need who 
                        prayed, in accordance to His will.
                    </p>
                </div>
            <?php else: ?>
                <div class="sancti">
                    <img 
                        src="../assets/portraits/western/st-peter.png" 
                        alt="St. Peter" title="St. Peter"
                        width="150px" height="200px"
                    >
                    <img 
                        src="../assets/portraits/western/st-agnes-of-rome.jpg" 
                        alt="St. Agnes of Rome" title="St. Agnes of Rome"
                        width="150px" height="200px"
                    >
                    <img 
                        src="../assets/portraits/western/st-francis-of-assisi.jpg" 
                        alt="St. Francis of Assisi" title="St. Francis of Assisi"
                        width="150px" height="200px"
                    >
                    <img 
                        src="../assets/portraits/western/st-bernadette-soubirous.jpg" 
                        alt="St. Bernadette Soubirous" title="St. Bernadette Soubirous"
                        width="150px" height="200px"
                    >
                    <img 
                        src="../assets/portraits/eastern/st-mary-magdalene-icon.jpg" 
                        alt="St. Mary Magdalene" title="St. Mary Magdalene"
                        width="150px" height="200px"
                    >
                    <img 
                        src="../assets/portraits/eastern/st-ignatius-of-antioch-icon.jpg" 
                        alt="St. Ignatius of Antioch" title="St. Ignatius of Antioch"
                        width="150px" height="200px"
                    >
                    <img 
                        src="../assets/portraits/eastern/st-joan-of-arc-icon.jpg" 
                        alt="St. Joan of Arc" title="St. Joan of Arc"
                        width="150px" height="200px"
                    >
                    <img 
                        src="../assets/portraits/eastern/pope-st-pius-x-icon.jpg" 
                        alt="Pope St. Pius X" title="Pope St. Pius X"
                        width="150px" height="200px"
                    >
                </div>
                <div class="qvid-svnt-sancti">
                    <h1>QVID SVNT SANCTI?</h1>
                    <p>
                        Saints are people who were faithful 
                        to our Lord God, served for Him 
                        aside from their faith through actions 
                        such as martyrdom, charity, defense 
                        of doctrine, and leadership, and their 
                        imperfect souls were perfected by the 
                        fires of purification in the Purgatory 
                        before finally reaching His kingdom, 
                        ready to intercede to bring His 
                        miracles for those in need who 
                        prayed, in accordance to His will.
                    </p>
                </div>
            <?php endif; ?>
        </section>
        <div class="divisio" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"></div>
        <section class="notitia" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <?php if($currentTheme==='Silver Key'): ?>
                    <h1>DISCE DE BEATIS!</h1>
                    <p>
                        Learn about blesseds through these three 
                        portions of knowledge.
                    </p>
                <?php else: ?>
                    <h1>DISCE DE SANCTIS!</h1>
                    <p>
                        Learn about saints through these three 
                        portions of knowledge.
                    </p>
                <?php endif; ?>
                <div class="scientia">
                    <div style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>">
                        <h3>VITA</h3>
                        <p>
                            Learn about their lives that
                            will soon lead them to their 
                            sainthood, associate with their 
                            patronage based on the significant 
                            events and contributions, and be 
                            inspired by their faith and service, 
                            regardless of how the world has 
                            changed, whether for the good or for
                            the evil.
                        </p>
                    </div>
                    <div style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>">
                        <h3>HONOR</h3>
                        <p>
                            Celebrate them upon integrating
                            joy with faith in the most special
                            times, remember their faith and
                            service that also treasured their
                            relationship with God in their
                            whole lives, and pray for their
                            intercession through their relics,
                            in accordance to His will, to save
                            the unfortunate.
                        </p>
                    </div>
                    <div style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>">
                        <h3>SIGNIFICATIO</h3>
                        <p>
                            Learn the elements as seen by
                            their connections with certain
                            material objects, understand the
                            context as they all define the
                            significant moments of their
                            lives, and admire the creativity
                            in them as they, whether for better
                            or worse, all contribute to a
                            particular story.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="divisio" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"></div>
        <section class="mercimonia" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <h1>MERCIMONIA</h1>
                <p>Learn about the three classes of products to order.</p>
                <div class="classes">
                    <?php if($currentTheme==='Silver Key'): ?>
                        <div>
                            <div class="imagines">
                                <img 
                                    src="../assets/portraits/western/bl-raymond-lull.jpg" 
                                    alt="Bl. Raymond Lull" title="Bl. Raymond Lull"
                                    width="150px" height="200px"
                                    style="background-color: rgb(100,100,100);"
                                >
                                <img 
                                    src="../assets/portraits/western/bl-laura-vicuna.jpg" 
                                    alt="Bl. Laura Vicuna" title="Bl. Laura Vicuna"
                                    width="150px" height="200px"
                                    style="background-color: rgb(100,100,100);"
                                    
                                >
                                <img 
                                    src="../assets/portraits/eastern/bl-anne-catherine-emmerich-icon.jpg" 
                                    alt="Bl. Anne Catherine Emmerich" title="Bl. Anne Catherine Emmerich"
                                    width="150px" height="200px"
                                    style="background-color: rgb(100,100,100);"
                                >
                                <img 
                                    src="../assets/portraits/eastern/bl-justus-takayama-ukon-icon.jpg" 
                                    alt="Bl. Justus Takayama Ukon" title="Bl. Justus Takayama Ukon"
                                    width="150px" height="200px"
                                    style="background-color: rgb(100,100,100);"
                                >
                            </div>
                            <h3>IMAGINES</h3>
                            <p>
                                Adore the high-quality portraits
                                of blesseds whose iconography
                                represents the significant moments
                                of their lives. Portraits are first 
                                available in Western style, painted
                                in oil-based colors, yet the Eastern 
                                style is also available for Catholics
                                who prefer simpler yet ancient 
                                representations.
                            </p>
                        </div>
                        <div>
                            <div class="statvae">
                                <img 
                                    src="../assets/statues/plain/bl-charlemagne-plain.png" 
                                    alt="Bl. Charlemagne" title="Bl. Charlemagne"
                                    width="150px" height="200px"
                                    style="background-color: rgb(100,100,100);"
                                >
                                <img 
                                    src="../assets/statues/plain/bl-maria-restituta-kafka-plain.png" 
                                    alt="Bl. Maria Restituta Kafka" title="Bl. Maria Restituta Kafka"
                                    width="150px" height="200px"
                                    style="background-color: rgb(100,100,100);"
                                >
                                <img 
                                    src="../assets/statues/painted/bl-laura-vicuna-painted.png" 
                                    alt="Bl. Laura Vicuna" title="Bl. Laura Vicuna"
                                    width="150px" height="200px"
                                    style="background-color: rgb(100,100,100);"
                                >
                                <img 
                                    src="../assets/statues/painted/bl-clemens-august-graf-von-galen-painted.png" 
                                    alt="Bl. Clemens August Graf von Galen" title="Bl. Clemens August Graf von Galen"
                                    width="150px" height="200px"
                                    style="background-color: rgb(100,100,100);"
                                >
                            </div>
                            <h3>STATVAE</h3>
                            <p>
                                Also adore the high-quality miniature
                                statues of blesseds where realism
                                defined their presence, aside from 
                                iconography. Statues are first available 
                                in plain marble while accuracy remains 
                                crucial, yet painted marble types are 
                                also available for colorful minds to 
                                further visualize their presence.
                            </p>
                        </div>
                        <div>
                            <div class="accessoria">
                                <img 
                                    src="../assets/accessories/crucifixes/wooden-crucifix.png" 
                                    alt="Crucifix" title="Crucifix"
                                    width="150px" height="200px"
                                    style="background-color: rgb(100,100,100);"
                                >
                                <img 
                                    src="../assets/accessories/rosaries/red-rosary.png" 
                                    alt="Rosary" title="Rosary"
                                    width="150px" height="200px"
                                    style="background-color: rgb(100,100,100);"
                                >
                                <img 
                                    src="../assets/accessories/scapulars/our-lady-of-mt-carmel-scapular.png" 
                                    alt="Scapular" title="Scapular"
                                    width="150px" height="200px"
                                    style="background-color: rgb(100,100,100);"
                                >
                                <img 
                                    src="../assets/accessories/novenas/divine-mercy-novena.png" 
                                    alt="Novena" title="Novena"
                                    width="150px" height="200px"
                                    style="background-color: rgb(100,100,100);"
                                >
                            </div>
                            <h3>ACCESSORIA</h3>
                            <p>
                                Feel free to get the fundamental
                                accesssories of the Catholic faith,
                                such as crucifixes, rosaries, scapulars,
                                and novenas. Worship our Lord God, honor 
                                His mother, and pray for His mediation 
                                as you pray for the intercession of saints, 
                                for He brings holiness to them and allows
                                them to help others.
                            </p>
                        </div>
                    <?php else: ?>
                        <div>
                            <div class="imagines">
                                <img 
                                    src="../assets/portraits/western/st-elijah.jpg" 
                                    alt="St. Elijah" title="St. Elijah"
                                    width="150px" height="200px"
                                >
                                <img 
                                    src="../assets/portraits/western/st-olga-of-kiev.jpg" 
                                    alt="St. Olga of Kiev" title="St. Olga of Kiev"
                                    width="150px" height="200px"
                                >
                                <img 
                                    src="../assets/portraits/eastern/st-rose-of-viterbo-icon.png" 
                                    alt="St. Rose of Viterbo" title="St. Rose of Viterbo"
                                    width="150px" height="200px"
                                >
                                <img 
                                    src="../assets/portraits/eastern/st-lorenzo-ruiz-icon.jpg" 
                                    alt="St. Lorenzo Ruiz" title="St. Lorenzo Ruiz"
                                    width="150px" height="200px"
                                >
                            </div>
                            <h3>IMAGINES</h3>
                            <p>
                                Adore the high-quality portraits
                                of saints whose iconography
                                represents the significant moments
                                of their lives. Portraits are first 
                                available in Western style, painted
                                in oil-based colors, yet the Eastern 
                                style is also available for Catholics
                                who prefer simpler yet ancient 
                                representations.
                            </p>
                        </div>
                        <div>
                            <div class="statvae">
                                <img 
                                    src="../assets/statues/plain/st-dismas-plain.png" 
                                    alt="St. Dismas" title="St. Dismas"
                                    width="150px" height="200px"
                                >
                                <img 
                                    src="../assets/statues/plain/st-agnes-of-rome-plain.png" 
                                    alt="St. Agnes of Rome" title="St. Agnes of Rome"
                                    width="150px" height="200px"
                                >
                                <img 
                                    src="../assets/statues/painted/st-joan-of-arc-painted.png" 
                                    alt="St. Joan of Arc" title="St. Joan of Arc"
                                    width="150px" height="200px"
                                >
                                <img 
                                    src="../assets/statues/painted/st-juan-diego-painted.png" 
                                    alt="St. Juan Diego" title="St. Juan Diego"
                                    width="150px" height="200px"
                                >
                            </div>
                            <h3>STATVAE</h3>
                            <p>
                                Also adore the high-quality miniature
                                statues of saints where realism
                                defined more about their presence,
                                aside from iconography. Statues are
                                first available in plain marble
                                while accuracy remains crucial, yet
                                painted marble types are also 
                                available for colorful minds to 
                                further visualize their presence.
                            </p>
                        </div>
                        <div>
                            <div class="accessoria">
                                <img 
                                    src="../assets/accessories/crucifixes/wooden-crucifix.png" 
                                    alt="Crucifix" title="Crucifix"
                                    width="150px" height="200px"
                                >
                                <img 
                                    src="../assets/accessories/rosaries/red-rosary.png" 
                                    alt="Rosary" title="Rosary"
                                    width="150px" height="200px"
                                >
                                <img 
                                    src="../assets/accessories/scapulars/our-lady-of-mt-carmel-scapular.png" 
                                    alt="Scapular" title="Scapular"
                                    width="150px" height="200px"
                                >
                                <img 
                                    src="../assets/accessories/novenas/divine-mercy-novena.png" 
                                    alt="Novena" title="Novena"
                                    width="150px" height="200px"
                                >
                            </div>
                            <h3>ACCESSORIA</h3>
                            <p>
                                Feel free to get the fundamental
                                accesssories of the Catholic faith,
                                such as crucifixes, rosaries, scapulars,
                                and novenas. Worship our Lord God, honor 
                                His mother, and pray for His mediation 
                                as you pray for the intercession of saints, 
                                for He brings holiness to them and allows
                                them to help others.
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <div class="divisio" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>"></div>
        <section class="exercitivm" style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(200,200,200);':''; ?>">
            <div>
                <h1>FI CATHOLICVS EXERCENS</h1>
                <p>Strengthen your faith by learning these teachings.</p>
                <?php if($currentTheme==='Silver Key'): ?>
                    <div class="praecepta">
                        <div style="background-color: rgb(150,150,150);">
                            <h3>BIBLIA CATHOLICA</h3>
                            <p>
                                Learn the word of God by reading the
                                Scripture that was officially recognized
                                by the Church to deepen your understanding
                                of the Catholic faith at the fundamental 
                                level. Consisting of 73 books and letters, 
                                both the Old and New Testaments combined, 
                                it was first started by Pope St. Damasus 
                                I and translated in Latin by St. Jerome,
                                known as the Latin Vulgate, all done while
                                he was in Bethlehem.
                            </p>
                            <button 
                                id="bibliaCatholica" type="button" title="Enter"
                                style="background-color: rgb(100,100,100);"
                            >
                                INTRA
                            </button>
                        </div>
                        <div style="background-color: rgb(150,150,150);">
                            <h3>PRECES ROSARII</h3>
                            <p>
                                Learn the most fundamental intercessory
                                prayer to the Mother of God, the Blessed
                                Virgin Mary, through the tradition of the
                                Rosary. By announcing the mysteries, you
                                will think about the life of Jesus Christ
                                and His mother as you repetitively pray
                                while holding its beads, and this is the
                                best tradition to start strengthening 
                                your Catholic faith before praying with
                                other Catholic blesseds.
                            </p>
                            <button 
                                id="precesRosarii" type="button" title="Enter"
                                style="background-color: rgb(100,100,100);"
                            >
                                INTRA
                            </button>
                        </div>
                    </div>
                    <div class="praecepta">
                        <div style="background-color: rgb(150,150,150);">
                            <h3>CATECHISMVS</h3>
                            <p>
                                Learn the official teachings of the 
                                Church by reading this magisterial
                                code, inspired from Scripture and
                                external works written by Catholic
                                saints and faithful Catholics. Aside
                                from being faithful, strengthen your 
                                moral ground as a Catholic, especially
                                during times when you have to face
                                enemies by your own, whether in battles,
                                arguments, sufferings, difficulties, and
                                temptations.
                            </p>
                            <button 
                                id="catechismvs" type="button" title="Enter"
                                style="background-color: rgb(100,100,100);"
                            >
                                INTRA
                            </button>
                        </div>
                        <div style="background-color: rgb(150,150,150);">
                            <h3>CODEX IVRIS CANONICI</h3>
                            <p>
                                Learn the official rules of the Church
                                by reading this constitutional code of
                                the Holy See, especially when you want
                                to become part of the clergy where
                                authority must be practiced properly.
                                Through this, you will become not just
                                a faithful Catholic, but also an obedient
                                one as well, which is important for the 
                                Church's unity to ensure that confusion
                                will not escalate.
                            </p>
                            <button 
                                id="codexCanonici" type="button" title="Enter"
                                style="background-color: rgb(100,100,100);"
                            >
                                INTRA
                            </button>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="praecepta">
                        <div>
                            <h3>BIBLIA CATHOLICA</h3>
                            <p>
                                Learn the word of God by reading the
                                Scripture that was officially recognized
                                by the Church to deepen your understanding
                                of the Catholic faith at the fundamental 
                                level. Consisting of 73 books and letters, 
                                both the Old and New Testaments combined, 
                                it was first started by Pope St. Damasus 
                                I and translated in Latin by St. Jerome,
                                known as the Latin Vulgate, all done while
                                he was in Bethlehem.
                            </p>
                            <button id="bibliaCatholica" type="button" title="Enter">INTRA</button>
                        </div>
                        <div>
                            <h3>PRECES ROSARII</h3>
                            <p>
                                Learn the most fundamental intercessory
                                prayer to the Mother of God, the Blessed
                                Virgin Mary, through the tradition of the
                                Rosary. By announcing the mysteries, you
                                will think about the life of Jesus Christ
                                and His mother as you repetitively pray
                                while holding its beads, and this is the
                                best tradition to start strengthening 
                                your Catholic faith before praying with
                                other Catholic saints.
                            </p>
                            <button id="precesRosarii" type="button" title="Enter">INTRA</button>
                        </div>
                    </div>
                    <div class="praecepta">
                        <div>
                            <h3>CATECHISMVS</h3>
                            <p>
                                Learn the official teachings of the 
                                Church by reading this magisterial
                                code, inspired from Scripture and
                                external works written by Catholic
                                saints and faithful Catholics. Aside
                                from being faithful, strengthen your 
                                moral ground as a Catholic, especially
                                during times when you have to face
                                enemies by your own, whether in battles,
                                arguments, sufferings, difficulties, and
                                temptations.
                            </p>
                            <button id="catechismvs" type="button" title="Enter">INTRA</button>
                        </div>
                        <div>
                            <h3>CODEX IVRIS CANONICI</h3>
                            <p>
                                Learn the official rules of the Church
                                by reading this constitutional code of
                                the Holy See, especially when you want
                                to become part of the clergy where
                                authority must be practiced properly.
                                Through this, you will become not just
                                a faithful Catholic, but also an obedient
                                one as well, which is important for the 
                                Church's unity to ensure that confusion
                                will not escalate.
                            </p>
                            <button id="codexCanonici" type="button" title="Enter">INTRA</button>
                        </div>
                    </div>
                <?php endif; ?>
                
            </div>
        </section>
        <footer style="<?php echo $currentTheme==='Silver Key'?'background-color: rgb(100,100,100);':''; ?>">
            <p>IN NOMINE PATRIS, ET FILII, ET SPIRITVS SANCTI, AMEN.</p>
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
                    <a href="./customer/orders.php" title="Orders">ORDINES</a>
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
        <script src="../scripts/catholic-teachings.js"></script>
        <script src="../scripts/loading.js"></script>
        <script src="../scripts/ui.js"></script>
    </body>
</html>