<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleEvenement.css">
    <link rel="stylesheet" href="style.css">
    <title> Venise </title>
</head>

<body>

    <?php 
        include ("header.php");

        // Préparation des textes traduits 

        $venise = array("Venise en action,","Venice in action,");
        $sousTitre = array("La ville de la fête","The party city");
        $saviezvous =array("Le saviez-vous ?","Did you know ?");
        $bienvenue = array("Bienvenue sur la page Evenemment&nbsp;!","Welcome to the Events page&nbsp;!");
        $bienvenueTexte = array("Venise est une ville très vivante et propose de nombreux évènements tout au long de l'année","Venice is a very lively city and offers many events throughout the year");
        $enSavoirPlus = array("En savoir plus","Read more");
        $enSavoirMoins = array("Moins","Less");

        $janvierMars = array("Janvier / Mars : Le Carnaval de Venise","January / March: The Venice Carnival");
        $mai = array("Mai : La Vogalonga de Venise","May: The Venice Vogalonga");
        $juinNovembre = array("Juin / Novembre : Biennales internationales d’art de Venise","June / November: Venice International Art Biennials");
        $juillet = array("Juillet : Fête du Rédempteur de Venise","July: Festival of the Redeemer of Venice");
        $aout = array("Août : Festival internationale du film de Venise","August: Venice International Film Festival");
        $septembre = array("Septembre : Régate historique de Venise","September: Historic Venice Regatta");
        $octobre = array("Octobre : Venice marathon","October: Venice marathon");
        $novembre = array("Novembre : Fête de la Madonna della Salute","November: Feast of the Madonna della Salute");

        $janvierMars1 = array("La Tradition du Carnaval à Venise remontant au Moyen Age, « il Carnevale di Venezia ».
        Dès le Xe siècle, le peuple profitait un maximum des derniers jours précédant les mortifications du
        carême en se divertissant et en savourant les plaisirs et les joies de la vie.","The tradition of Carnival in Venice dates back to the Middle Ages, 'il Carnevale di Venezia'. 
        As early as the 10th century, the people made the most of the last days before the mortifications of Lent by entertaining themselves and enjoying the pleasures and joys of life.
        Lent by entertaining themselves and enjoying the pleasures and joys of life.");
        $janvierMars2 = array("Il commence dix jours avant le mercredi des Cendres et se poursuit jusqu'au mardi gras.
        Connu pour ses costumes et ses masques, il attire des foules considérables.","It begins ten days before Ash Wednesday and continues until Shrove Tuesday.
        Known for its costumes and masks, it attracts huge crowds.");
        $janvierMars3 = array("Le carnaval de Venise transforme la ville en une émeute spectaculaire d’apparat, de couleurs, despectacles musicaux, de feux d’artifice et de bals vénitiens glamour.Si vous voulez profiter au mieux de l’atmosphère exotique de Venise, le carnaval est le moment
        idéal.","The Venice Carnival transforms the city into a spectacular riot of pageantry, colour, musical performances, fireworks and glamorous Venetian balls.
        musical performances, fireworks and glamorous Venetian balls.
        If you want to make the most of the exotic atmosphere of Venice, Carnival is the perfect time to
        the perfect time.");
        $janvierMars4 = array("Le carnaval de Venise, ces mascarades, spectacles, musique, jeux et couleurs.","                    The Venice carnival, its masquerades, shows, music, games and colours.");
        $janvierMarsSaviezVous = array("Les masques vénitiens ont été utilisés pour dissimuler l'identité de personnes impliquées dans des activités manifestement illégales.
        Apparus à Venise, ces masques distinctifs étaient faits de papier mâché et somptueusement décorés de fourrures, de tissus, de bijoux et de plumes.","Venetian masks were used to conceal the identity of people involved in blatantly illegal activities.
        Originating in Venice, these distinctive masks were made of papier-mâché and lavishly decorated with furs, fabrics, jewellery and feathers.");
        $janvierMarsLegende = array("Masques Vénitiens","Venetian masks");

        $mai1 = array("La Vogalonga est une régate comme forme de protestation contre le mouvement ondulatoire qui menacede détruire la ville lagunaire.","The Vogalonga is a regatta as a form of protest against the wave movement that threatens to destroy the lagoon city.
        to destroy the lagoon city.");
        $mai2 = array("En effet, cet événement fait depuis longtemps partie des grands rendez-vous de Venise, une manifestation qui attire des rameurs du
        monde entier et qui est caractérisée par le respect de l’environnement et de l’écosystème conjointement à la tradition.","Indeed, this event has long been one of Venice's great appointments, an event that attracts rowers from all over 
        the world and is characterised by respect for the environment and the ecosystem in conjunction with tradition.");
        $mai3 = array("L’histoire de la Vogalonga débute dans les années 1970  lorsqu’un groupe d’amis se rassemble lors
        d’une régate sur mascarete (type d’embarcation vénitienne).","The story of the Vogalonga began in the 1970s when a group of friends got together for a regatta on a mascot.
        a regatta on a mascarete
        (a type of Venetian boat).");
        $mai4 = array("Et c’est précisément après ce premier rendez-vous qu’est née l’idée d’organiser, chaque année,
        une importante régate non compétitive entièrement dédiée à la vogue à la vénitienne, l’une des
        traditions les plus solides de Venise.","And it was precisely after this first meeting that the idea was born to organise, every year
        an important non-competitive regatta entirely dedicated to the Venetian vogue, one of the most
        one of Venice's strongest traditions.");
        $mai5 = array("Le but de la Vogalonga depuis le début est de sensibiliser la population sur la dangerosité des
        barques à moteur pour le mouvement ondulatoire de la ville,
        ainsi que sur la dégradation qui en découle. Dès le début, il est établi que le départ de la
        Vogalonga aura précisément lieu dans le bassin de Saint-Marc,
        l’un des points névralgiques du trafic vénitien. La Vogalonga traverse ensuite les lieux les
        plus suggestifs de Venise et de sa lagune,
        dont les îles de Murano et de Burano. La longueur totale du parcours de la Vogalonga est
        d’environ 30 km, parcourus uniquement avec des bateaux à rames.
        Les spectateurs peuvent profiter d’un spectacle de bateaux de tout type défilant dans un silence
        religieux à l’intérieur d’une ville sans pollution acoustique,
        tout du moins à cette occasion.","The aim of the Vogalonga since the beginning has been to make the population aware of the danger of motor boats for the undulatory movement of the city.
        motorboats for the undulatory movement of the city,
        and the degradation that results from it. From the beginning, it was established that the start of the
        Vogalonga would take place in the Basin of San Marco,
        one of the nerve centres of Venetian traffic. The Vogalonga then passes through the most
        of Venice and its lagoon,
        including the islands of Murano and Burano. The total length of the Vogalonga route is approximately
        The total length of the Vogalonga is about 30 km, which is only covered by rowing boats.
        Spectators can enjoy a spectacle of boats of all types parading in religious silence inside a
        religious silence in a city without noise pollution,
        at least on this occasion.");
        $maiLegende = array("Vogalonga de Venise","Venice Vogalonga");

        $juinNovembre1 = array("La Biennale d’art de Venise est sans aucun doute l’exposition internationale d’art la plus
        importante et la plus prestigieuse qui existe au monde. Elle arrive à créer, à chaque manifestation,
        un esprit créatif extrêmement fort à même d’attirer non seulement des artistes de grand calibre qui
        interviennent volontiers en se mettant à l’épreuve, mais aussi de nombreux visiteurs provenant du
        monde entier.","The Venice Biennale of Art is without doubt the most important and prestigious international art exhibition in the world.
        prestigious international art exhibition in the world. It manages to create, at each event
        creative spirit that attracts not only high-calibre artists who are willing to put themselves forward
        artists who willingly participate by putting themselves to the test, but also many visitors from all over the
        from all over the world.");
        $juinNovembre2 = array("Il commence dix jours avant le mercredi des Cendres et se poursuit jusqu'au mardi gras. Connu pour
        ses costumes et ses masques, il attire des foules considérables.
        Le carnaval de Venise transforme la ville en une émeute spectaculaire d’apparat, de couleurs, de
        spectacles musicaux, de feux d’artifice et de bals vénitiens glamour. Si vous voulez profiter au
        mieux de l’atmosphère exotique de Venise, le carnaval est le moment idéal","It begins ten days before Ash Wednesday and continues until Shrove Tuesday. Known for
        costumes and masks, it attracts huge crowds.
        The Venice Carnival transforms the city into a spectacular riot of pageantry, colour, musical performances, fireworks and
        musical performances, fireworks and glamorous Venetian balls. If you want to make the most of
        the exotic atmosphere of Venice, Carnival is the perfect time.");
        $juinNovembre3 = array("Le carnaval de Venise, ces mascarades, spectacles, musique, jeux et couleurs.","The Venice Carnival, masquerades, shows, music, games and colours.");
        $juinNovembreSaviezVous = array("La Biennale de Venise est l'une  des plus anciennes expositions artistiques en Europe, en effet elle fut crée en 
        en 1893 et se tint pour la première fois en 1895 en tant que « Exposition Internationale d'Art de la Cité de Venise ».","The Venice Biennale is one of the oldest art exhibitions in Europe, in fact it was created in 
        in 1893 and was first held in 1895 as the « International Art Exhibition of the City of Venice ».");
        $juinNovembreLegende = array("Œuvre de Chiharu Shiota","Work by Chiharu Shiota");

        $juillet1 = array("La Fête du Rédempteur, l’une des manifestations les plus appréciées, se tient le troisième dimanche
        du mois.","The Festival of the Redeemer, one of the most popular events, is held on the third Sunday
        of the month.");
        $juillet2 = array("En effet, il s’agit d’une fête ancienne très appréciée des Vénitiens et les touristes.
        Durant la Fête du Rédempteur,
        des passerelles basculantes, véritables modules flottants en bois et en acier,
        sont installées et 34 barques sont disposées pour soutenir le pont qui relie pendant deux jours le
        quai des Zattere à l’île de la Giudecca,
        permettant ainsi aux piétons de rejoindre l’Église du Rédempteur.","It is an ancient festival that is very popular with Venetians and tourists alike.
        During the Festival of the Redeemer,
        swinging gangways, real floating modules made of wood and steel,
        and 34 boats are set up to support the bridge that connects the Zattere quay to the
        the Zattere quay to the Giudecca island,
        allowing pedestrians to reach the Church of the Redeemer.");
        $juilletLegende = array("Feu d’artifice du « Redentore »","« Redentore » fireworks");

        $aout1 = array("Le Festival International du Film de Venise est l'un des rendez-vous les plus importants se
        déroulant chaque année,
        entre fin août et début septembre.","The Venice International Film Festival is one of the most important events taking place every year.
        taking place every year,
        between late August and early September.");
        $aout2 = array("Durant cette période, Venise se transforme en un tapis rouge de célébrités nationales et
        internationales
        qui accourent du monde entier au festival, transformant ainsi cette magique ville en un lieu
        caractérisé par la mondanité raffinée et élégante.","During this period, Venice is transformed into a red carpet of national and international
        international celebrities
        from all over the world to the festival, transforming this magical city into a place
        a place of refined and elegant worldliness.");
        $aoutLegende = array("Festival du cinéma de Venise","Venice Film Festival");

        $septembre1 = array("La tradition exige qu’un cortège historique, composé d’embarcations typiques du XVIème siècle qui
        rappellent les anciennes gloires
        de l’une des plus puissantes Républiques Maritimes de la Méditerranée, se déroule le long du Grand
        Canal avant la véritable compétition.","Tradition demands that a historical procession, made up of typical 16th century boats that
        reminiscent of the ancient glories
        of one of the most powerful maritime republics in the Mediterranean, takes place along the Grand Canal before the
        Canal before the real competition.");
        $septembre2 = array("Vous ne pouvez absolument pas manquer la régate des Gondolini où les champions filent à toute
        vitesse sur le Grand Canal jusqu’à la ligne
        d’arrivée à la célèbre « machine », une estrade flottante à fort impact visuel qui est montée devant
        le palais de Ca’ Foscari.","You absolutely cannot miss the Gondolini regatta where the champions race at full speed along the Grand Canal to the
        the Grand Canal to the finish line at the famous
        the finish line at the famous « machine », a floating stage with a high visual impact that is set up in front of
        the Ca' Foscari Palace.");
        $septembreSaviezVous = array("La régate historique de Venise se déroule depuis le Bassin de Saint Marc, emprunte le Grand Canal, passe sous le pont de l’Accademia, 
        remonte presque jusqu’à la gare, et revient jusqu’au devant de la Ca Foscari.","The historic Venice Regatta starts in the Basin of San Marco, takes in the Grand Canal, passes under the Accademia Bridge, 
        goes up almost to the railway station, and returns to the front of Ca Foscari.");
        $septembreLegende = array("Regate de Venise","Venice Regatta");

        $octobre1 = array("Le Venice Marathon se tient chaque année, en règle générale le quatrième dimanche d’octobre,
        et il s’agit d’une manifestation que les sportifs amateurs et professionnels ne peuvent pas manquer.","The Venice Marathon is held every year, usually on the fourth Sunday in October,
        and is an event that amateur and professional athletes alike cannot afford to miss.");
        $octobre2 = array("La caractéristique la plus importante du Venice Marathon est son parcours de 42,195 km qui se
        déroule à travers les lieux très charmants
        de la province.","The most important feature of the Venice Marathon is its 42.195 km course, which runs through the most
        through some of the most charming places in the
        of the province.");
        $octobre3 = array("Le marathon complet est mondialement reconnu par l’IAAF (Association internationale des fédérations
        d’athlétisme)
        et certifié « Label de bronze ».","The full marathon is recognised worldwide by the IAAF (International Association of Athletics Federations)
        of Athletics Federations)
        and is certified « Bronze Label ».");
        $octobreLegende = array("Marathon de Venise","Venice Marathon");

        $novembre1 = array("La Fête de la Salute, événement caractérisé par une profonde spiritualité et par la participation
        des Vénitiens,
        se déroule chaque année le 21 novembre à Venise.","The Feast of the Salute, an event characterized by a deep spirituality and by the participation
        of the Venetians,
        takes place every year on 21 November in Venice.");
        $novembre2 = array("Cette fête remonte à la terrible épidémie de peste des années 1630-1631
        et au vœu fait par le Doge à l’époque pour obtenir l’intercession de la Vierge pour la grâce.","This festival dates back to the terrible plague epidemic of 1630-1631
        and the vow made by the Doge at the time to obtain the intercession of the Virgin for grace.");
        $novembreLegende = array("La Fête de la Salute à Venise","The Salute Festival in Venice");

        $JANVIERMARS = array("Janvier / Mars","January / March");
        $MAI = array("Mai","May");
        $JUIN = array("Juin","June");
        $JUILLET = array("Juillet","July");
        $AOUT = array("Aout","August");
        $SEPTEMBRE = array("Septembre","September");
        $OCTOBRE = array("Octobre","October");
        $NOVEMBRE = array("Novembre","November");

    ?>

    <section class="showcase">

        <img src="Images/ImagesEvenement/FondEvenement.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
            <?php
            echo "<h1>$venise[$lang]</h1>";
            echo "<h2>$sousTitre[$lang]</h2>";
            ?>
    </section>

    <div class="bg gris">
        <article>
            <?php
            echo "<h3>$bienvenue[$lang]</h3>";
            echo "<p>$bienvenueTexte[$lang]</p>";
            ?>
        </article>
    </div>

    <div class="bg-menu noir">

        
    <div class="menu-mois">

        <div class="groupe-de-mois">
            <div class="etiquette"> <?= "<a href=\"#JanvierMars\">$JANVIERMARS[$lang]</a>" ?> </div>
            <div class="etiquette"> <?= "<a href=\"#Mai\">$MAI[$lang]</a>" ?> </div>
            <div class="etiquette"> <?= "<a href=\"#Juin\">$JUIN[$lang]</a>" ?> </div>
            <div class="etiquette"> <?= "<a href=\"#Juillet\">$JUILLET[$lang]</a>" ?> </div>
        </div>

        <div class="groupe-de-mois">
            <div class="etiquette"> <?= "<a href=\"#Aout\">$AOUT[$lang]</a>" ?> </div>
            <div class="etiquette"> <?= "<a href=\"#Septembre\">$SEPTEMBRE[$lang]</a>" ?> </div>
            <div class="etiquette"> <?= "<a href=\"#Octobre\">$OCTOBRE[$lang]</a>" ?> </div>
            <div class="etiquette"> <?= "<a href=\"#Novembre\">$NOVEMBRE[$lang]</a>" ?></div>
            <!-- <div style="clear:both"></div> -->
    </div>
        
    </div>
    </div>


    <div class="bg gris" id="JanvierMars">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
            <?php
                echo "<h3>$janvierMars[$lang]</h3>";
                echo "<p>$janvierMars1[$lang]</p>";
                echo "<p>$janvierMars2[$lang]</p>";
                echo "<p>$janvierMars3[$lang]</p>";
                echo "<p>$janvierMars4[$lang]</p>";
            ?>

                <div class="zone-saviez-vous">
                        <div class="saviez-vous">
                            <div class="titre">
                                <img src="Images/DonnolaManger.png" alt="">
                                <?php
                                echo "<h3>$saviezvous[$lang]</h3>";
                                ?>
                            </div>
                            <?php
                            echo "<p>$janvierMarsSaviezVous[$lang]</p>";
                            ?>
                        </div>
                    </div>
                
            </div>
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/masqueAvecRose.jpg" alt="">
                <?php
                echo "<p>$janvierMarsLegende[$lang]</p>";
                ?>
            </div>
           </div>
        </div>
    </div>


    <div class="bg gris" id="Mai">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/vogalonga-venise-italie-91404733.jpg" alt="">
                <?= "<p>$maiLegende[$lang]</p>" ?>
            </div>
            <div class="zone-texte bordure-texte">
                <?= "<h3>$mai[$lang]</h3>" ?>
                <?php
                echo "<p>$mai1[$lang]</p>";
                echo "<p>$mai2[$lang]</p>";
                echo "<p>$mai3[$lang]</p>";
                echo "<p>$mai4[$lang]</p>";
                ?>
                    <input type="radio" id="savoirPlus" name="savoirPlusMai">
                    <?= "<label for=\"savoirPlus\">$enSavoirPlus[$lang]</label>" ?>
                    <span>
                    <?php
                        echo "$mai5[$lang]";
                    ?>
                        <input type="radio" id="savoirMoins" name="savoirPlusMai">
                        <?= "<label for=\"savoirMoins\">$enSavoirMoins[$lang]</label>" ?>
                        </span>
            </div>
        </div>
    </div>

    <div class="bg gris" id="Juin">
        <div class="article image-avant">
            <div class="zone-texte bordure-texte">
                <?= "<h3>$juinNovembre[$lang]</h3>" ?>
                <?php
                echo "<p>$juinNovembre1[$lang]</p>";
                echo "<p>$juinNovembre2[$lang]</p>";
                echo "<p>$juinNovembre3[$lang]</p>";
                ?>

                <div class="zone-saviez-vous">
                        <div class="saviez-vous">
                            <div class="titre">
                                <img src="Images/DonnolaManger.png" alt="">
                                <?php
                                echo "<h3>$saviezvous[$lang]</h3>";
                                ?>
                            </div>
                            <?php
                            echo "<p>$juinNovembreSaviezVous[$lang]</p>";
                            ?>
                        </div>
                    </div>
                
            </div>
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/biennal.jpg" alt="">
                <?=  "<p>$juinNovembreLegende[$lang]</p>" ?>
            </div>
        </div>
    </div>



    <div class="bg gris" id="Juillet">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/FeteRedemption.jpg" alt="">
                <?= "<p>$juilletLegende[$lang]</p>" ?>
            </div>
            <div class="zone-texte bordure-texte">
                <?= "<h3>$juillet[$lang]</h3>" ?>
                <?php
                echo "<p>$juillet1[$lang]</p>";
                echo "<p>$juillet2[$lang]</p>";
                ?>
            </div>
        </div>
    </div>

    <div class="bg gris" id="Aout">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <?= "<h3>$aout[$lang]</h3>" ?>
                <?php
                echo "<p>$aout1[$lang]</p>";
                echo "<p>$aout2[$lang]</p>";
                ?>
            </div>
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/MostradeVenise.png" alt="">
                <?= "<p>$aout[$lang]</p>" ?>
            </div>
        </div>
    </div>


    <div class="bg gris" id="Septembre">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/regata-Venise.jpg" alt="">
                <?= "<p>$septembreLegende[$lang]</p>" ?>
            </div>

            <div class="zone-texte bordure-texte">
                <?= "<h3>$septembre[$lang]</h3>" ?>
                <?php
                echo "<p>$septembre1[$lang]</p>";
                echo "<p>$septembre2[$lang]</p>";
                ?>
                <div class="zone-saviez-vous">
                        <div class="saviez-vous">
                            <div class="titre">
                                <img src="Images/DonnolaManger.png" alt="">
                                <?php
                                echo "<h3>$saviezvous[$lang]</h3>";
                                ?>
                            </div>
                            <?= "<p>$septembreSaviezVous[$lang]</p>" ?>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>

    <div class="bg gris" id="Octobre">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <?= "<h3>$octobre[$lang]</h3>" ?>
                <?php
                echo "<p>$octobre1[$lang]</p>";
                echo "<p>$octobre2[$lang]</p>";
                ?>
            </div>
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/Venise-marathon.png" alt="">
                <?= "<p>$octobreLegende[$lang]</p>" ?>
            </div>
        </div>
    </div>


    <div class="bg gris" id="Novembre">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/FeteMadonnaDeSalute.png" alt="">
                <?= "<p>$novembreLegende[$lang]</p>" ?>
            </div>

            <div class="zone-texte bordure-texte">
                <?= "<h3>$novembre[$lang]</h3>" ?>
                <?php
                echo "<p>$novembre1[$lang]</p>";
                echo "<p>$novembre2[$lang]</p>";
                ?>
            </div>
        </div>
    </div>

    <?php 
        include ("footer.php");
    ?>

</body>

</html>