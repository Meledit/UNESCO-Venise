<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Séjour Romantique</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800'>
    <link rel="stylesheet" href="styleSéjour.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
    include("header.php");

    $venise = array("Venise démasquée", "Unmasking Venice");
    $sousTitre = array("La ville du romantisme", "The city of romance");

    $bienvenue = array("Découvrez les endroits les plus romantiques de Venise", "Discover the most romantic places in Venice.");
    $bienvenueTexte = array(
        "Venise est connu pour beaucoup de choses, sa lagune, ses paysages , 
        mais aussi son romantisme. Si vous voyagez avec votre partenaire vous ne pourrez passer à côté des endroits magnifiques 
        que propose cette ville pour renforcer votre union. vous êtes donc au bon endroit car nous avons préparer un parcours romantique.",
        "Venice is known for many things, its lagoon, its landscapes, but also its romanticism. 
        If you are travelling with your partner you cannot miss the beautiful places that this city offers to strengthen your union. 
        You are in the right place because we have prepared a romantic itinerary."
    );

    $titre = array("Parcours Romantique", "Romantic Journey");

    $GrandCanalTitre = array("Grand Canal", "Canal Grande");
    $PontDeRialtoTitre = array("Pont de Rialto", "Ponte di Rialto");
    $BistrotDeVeniseTitre = array("Bistrot de Venise", "Venice Bistro");
    $LaFeniceTitre = array("Théâtre la Fenice", "Teatro la Fenice");
    $DorsoduroTitre = array("Dorsoduro", "Dorsoduro");
    $PlaceStMarcTitre = array("Place Saint Marc", "Piazza san Marco");
    $CampanileStMarcTitre = array("Campanile de Saint Marc", "Campanile di san Marco");
    $ElMagazenTitre = array("El Magazen", "El Magazen");
    $MuranoTitre = array("Murano", "Murano");

    $premierjour = array("- Premier jour -", "- First day -");
    $deuxiemejour = array("- Deuxième jour -", "- Second day -");
    $troisiemejour = array("- Troisième jour -", "- Third day -");

    $carteTitre = array("Un peu perdu ?", "A bit lost ?");
    $carteLegende = array("Légende de la carte", "Map legend");
    $Marco = array("Marco le lion, pour les lieux uniques", "Marco the lion, for unique places");
    $Donnola = array("Donnola la belette, pour les restaurants et hotels", "Donnola the weasel, for restaurants and hotels");
    $Gufo = array("Gufo le hibou, pour les monuments historiques", "Gufo the owl, for historical monuments");
    $Laguna = array("Laguna le poulpe, pour les lieux aquatiques", "Laguna the octopus, for watery places");

    $GrandCanal = array(
        "Artère maritime de Venise, c’est un endroit idéal pour se balader en gondole. Il est le
        plus grand et large canal de Venise et vous pourrez passer par le pont de Rialto, seul
        pont le traversant jusqu’au XIXe siècle et voir des édifices datant du XIIIe au XVIIIe
        siècle avec leurs styles d’antan.",

        "Venice's maritime artery, it is an ideal place to take a gondola ride. It is the largest and widest 
        canal in Venice and you can travel over the Rialto Bridge, the only bridge that crossed it until the 19th century 
        and see buildings dating from the 13th to the 18th century with their ancient styles."
    );

    $PontDeRialto = array(
        "Le Pont du Rialto, monument célèbre et un des ponts les plus anciens de Venise
        traversant le Grand canal.
        A l’origine un pont en bois réalisé par Nicolo Barattieri, il était le seul pont
        traversant le Grand canal de Venise et était donc une place de choix pour le commerce
        d’autant plus que le plus grand marché de poisson et légumes se tenait à l’autre bout,
        le marché de Rialto.
        C’est ainsi qu’après de nombreux problèmes amenant à la destruction du pont plusieurs
        fois étant en bois et donc peu solide, Antonio da Ponte, entre 1588 et 1591, remplace
        l’ancien pont en bois par un pont solide en marbre et pierre d’Istrie désignant une
        roche calcaire compacte à faible porosité.
        On peut d’ailleurs voir, sur les reliefs de chaque côté du pont, les deux saints patrons
        de la ville, Théodore et Marc.
        Passer sous ce pont en empruntant une gondole est une balade romantique
        charmante mais si vous voulez voir le marché de Rialto ouvert de 9h à 12h avec votre
        partenaire, vous pouvez traverser celui-ci avec une belle vue sur le Grand Canal.",

        "The Rialto Bridge, a famous monument and one of the oldest bridges in Venice crossing the Grand Canal. 
        Originally a wooden bridge built by Nicolo Barattieri, it was the only bridge crossing the Grand Canal 
        in Venice and was therefore a place of choice for trade, especially as the largest fish and vegetable market 
        was held at the other end, the Rialto market. Thus, after many problems leading to the destruction of the bridge, 
        which was made of wood and therefore not very solid, Antonio da Ponte, between 1588 and 1591, replaced the old wooden bridge 
        with a solid bridge made of marble and Istrian stone, which is a compact limestone with low porosity. The two patron saints of the town, 
        Theodore and Mark, can be seen on the reliefs on either side of the bridge. 
        Passing under this bridge in a gondola is a charming romantic stroll, but if you want to see the Rialto market, open from 9am to 12pm, with your partner, 
        you can cross it with a gondola. partner, you can cross it with a beautiful view of the Grand Canal."
    );

    $BistrotDeVenise = array(
        "Restaurant axé sur tous les types de cuisines de Venise, de
        l’historique au classique et jusqu’au moderne ce qui vous permettra de tester en grands
        les différents types de plats présents dans Venise. Ils sont aussi axés sur les
        différents vins historiques en plus des plats offrant une grande représentation du goût
        de Venise.
        Ils proposent aussi une table spéciale romantique à l’abri des regards et un dessert
        spécial pour un dîner inoubliable avec votre partenaire.",

        "Restaurant focusing on all types of Venetian cuisine, from historical to from the historical 
        to the classic to the modern, which will allow you to try out in great the different types of dishes present in Venice. 
        They also focus on the different different historical wines in addition to dishes that offer a great representation of the taste of of Venice. 
        They also offer a special romantic table out of sight and a special dessert for an unforgettable dinner with your partner."
    );

    $LaFenice = array(
        "Théâtre datant du XVIIIe siècle, il est l’un des plus vieux
        théâtres et un des plus prestigieux. Surnommé 'Le Phénix' en français, il possède un nom
        collant parfaitement à ses origines, né d’un incendie en 1836 et reconstruit après un
        autre le 29 Janvier 1996. Il renaît en 2001 après de nombreux travaux afin de lui
        redonner son luxe d’antan. Il a plusieurs fois donné des premières mondiales comme Blue
        Lady, le ballet de Carolyn Carlson en 1983 et l’opéra The Rake's Progress d'Igor
        Stravinsky en 1951. Pour ceux qui aime les pièces d’opéra vous serez ravis et si vous
        souhaitez surtout visité le monument vous avez accès à des visites guidées d’un monument
        magnifique et dans un style luxueux et romantique.",

        "The theatre dates from the 18th century and is one of the oldest and most theatres and one of 
        the most prestigious. nicknamed 'Le Phénix' in French, it has a name that fits perfectly with its origins, 
        born of a fire in 1836 and rebuilt after another one on 29 January rebuilt on 29 January 1996. 
        It was reborn in 2001 after extensive work to restore its former its former luxury. 
        It has given several world premieres such as Blue Lady, Carolyn Carlson's ballet in 1983 and Igor Stravinsky's opera 
        The Rake's Progress in Stravinsky's The Rake's Progress in 1951. If you like opera you will be delighted and if you want 
        to visit the and if you wish to visit the monument you have access to guided tours of a magnificent and in a luxurious 
        and romantic style."
    );

    $Dorsoduro = array(
        "Dorsoduro est le quartier universitaire de Venise, mais il a son
        charme particulier du fait qu’il est reculé, il est parfaitement dans le style de la
        ville actuelle et un très bon endroit pour visiter et voir le quotidien des habitants de
        cette ville. Un endroit à visiter absolument si vous passez à côté lors de vos balades
        romantiques.",
        "Dorsoduro is the university district of Venice, but it has its own particular charm because 
        it is secluded, perfectly in the style of the present city and a very good place to visit and see 
        the daily life of the inhabitants of this city. A place to visit if you pass by on your romantic walks."
    );

    $PlaceStMarc = array(
        "La place Saint-Marc, du nom de l'évangéliste, protecteur chrétien de Venise, saint Marc
        se situe au bord du Grand Canal et constitue le cœur de la ville de Venise. Cette place
        fut dans le passé le centre politique, religieux et économique de la république de
        venise.
        Sa construction débute au IXe siècle et la place adopte sa taille et forme actuelle en
        1177, mais ce n'est que 100 ans plus tard que cette place a été pavée.
        La place St Marc est liée à l'histoire de la Basilique St Marc située en face et fait
        partie d'une des places les plus belles à Venise souvent visitées. Napoléon Bonaparte la
        définissait même comme étant « Le plus beau salon d'Europe ». Un endroit charmant et
        très beau pour un rendez-vous dehors.",
        "St Mark's Square, named after the evangelist and Christian patron of Venice, St Mark is 
        located on the banks of the Grand Canal and is the heart of the city of Venice. 
        This square was in the past the political, religious and economic centre of the republic of Venice. 
        Its construction began in the 9th century and the square adopted its present size and shape in 1177, 
        but it was not until 100 years later that the square was paved. St Mark's Square is linked to the history of 
        St Mark's Basilica opposite and is part of one of the and is one of the most beautiful squares in Venice often visited. 
        Napoleon Bonaparte even Napoleon Bonaparte even defined it as 'the most beautiful salon in Europe'. 
        A charming and A charming and beautiful place for a meeting outside."
    );

    $CampanileStMarc = array(
        "La tour campanile de St Marc est une tour abritant des cloches afin de les faire sonner
        pour appeler les fidèles à l’heure de la prière. Située sur le côté de la place St Marc
        et de la basilique St Marc, elle mesure 98,6 mètres de haut.
        Cette tour offre une très belle vue de Venise et de la place St Marc de par sa hauteur
        et est un très bon endroit pour se poser et contempler la ville et les îles de la lagune
        grâce à sa vue disponible à 360 degrés.",
        "The campanile tower of St Mark's is a tower housing bells to ring them to call the 
        faithful at the hour of prayer. Located on the side of St Mark's Square and St Mark's Basilica, 
        it is 98.6 metres high. This tower offers a beautiful view of Venice and St Mark's square due to its height 
        and is a great place to sit and contemplate the city and the islands of the lagoon thanks to its 360 degree view."
    );

    $ElMagazen = array(
        "Vue sur les canaux et style traditionnel et chaleureux, ce restaurant est aussi une des
        pépites de Venise, proposant des repas proche de l’apéro digestif parfait et les plats
        de pâtes sont nombreux et variés mais tous intéressants. Un restaurant certes acculé
        mais qui n’est pas attrape-touriste, à visiter avec votre partenaire.",
        "With a view of the canals and a warm, traditional style, this restaurant is also one of 
        the nuggets of Venice, offering meals that are close to the perfect digestive aperitif and the 
        pasta dishes are The pasta dishes are numerous and varied but all interesting. A restaurant that 
        is certainly cornered but not a tourist trap, to visit with your partner."
    );

    $Murano = array(
        "Murano est une île située au nord de Venise, dans sa lagune. Si
        cette île est connue, c’est majoritairement pour ses souffleurs de verre ayant une
        renommée internationale.
        Le musée du verre sur l'île de Murano est une des attractions privatisés du grand public
        et une des plus célèbres à visiter lorsqu'on se rend à Venise. Il peut être un très bon
        endroit pour découvrir à deux les beautés de la mise en forme du verre tout comme l'île
        elle-même est un site touristique très beau et agréable à parcourir seul et encore plus
        à plusieurs.",
        "Murano is an island located north of Venice, in its lagoon. If this island is known, 
        it is mainly for its glassblowers having an international glassblowers with an international reputation. 
        The glass museum on the island of Murano is one of the most popular attractions for the general public and one 
        of the most famous to visit when visiting Venice. It can be a very good place to place to discover together 
        the beauties of glass shaping as well as the island itself is a very itself is a very beautiful and pleasant tourist site 
        to visit alone and even more so with several people."
    );
    ?>

    <a href="#" class="jump">
        <img src="images/btt.png" alt="">
    </a>

    <section class="showcase">
        <img src="Images/Sejours/LaFenice.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <div class="text">
                    <?php
                    echo "<h1>$venise[$lang]</h1>";
                    echo "<h2>$sousTitre[$lang]</h2>";
                    ?>
                </div>
    </section>

    <div class="bg noir">
        <article>
            <?php
            echo "<h3>$bienvenue[$lang]</h3>";
            echo "<p> $bienvenueTexte[$lang]</p>"
            ?>
        </article>
    </div>
    <div class="bg gris">
        <article class="centre">
            <h3><?= "$carteTitre[$lang]" ?></h3>
            <iframe src="https://www.google.com/maps/d/u/1/embed?mid=10e37lMcDlTZxPesq9tDFjZrluzEZW0X6&ehbc=2E312F"
                width="640" height="480"></iframe>
            <div class="legende-carte">
                <h3><?= "$carteLegende[$lang]" ?></h3>
                <div>
                    <img src="Images/Marco.png" alt="">
                    <p><?= "$Marco[$lang]" ?></p>
                </div>
                <div>
                    <img src="Images/DonnolaDodo.png" alt="">
                    <p><?= "$Donnola[$lang]" ?></p>
                </div>
                <div>
                    <img src="Images/Gufo.png" alt="">
                    <p><?= "$Gufo[$lang]" ?></p>
                </div>
                <div>
                    <img src="Images/LagunaOuvert.png" alt="">
                    <p><?= "$Laguna[$lang]" ?></p>
                </div>
            </div>
        </article>
    </div>

    <div class="IMGparallax IMG1 IMG-microscopique"></div>

    <div class="container-timeline">
        <h2 class="title"><?= "$titre[$lang]" ?></h2>
        <div class="timeline">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url(Images/Sejours/GrandCanal.jpg)" data-year="Canal Grande">
                    <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$GrandCanalTitre[$lang]" ?></span>
                        <h4 class="timeline-title"><?= "$premierjour[$lang]" ?></h4>
                        <p class="timeline-text">
                            <?= "$GrandCanal[$lang]" ?>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url(Images/Sejours/PontDeRialto.jpg)" data-year="Ponte di Rialto">
                <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$PontDeRialtoTitre[$lang]" ?></span>
                    <h4 class="timeline-title"><?= "$premierjour[$lang]" ?></h4>
                    <p class="timeline-text">
                        <?= "$PontDeRialto[$lang]" ?>
                    </p>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url(Images/Sejours/BistrotDeVenise.jpg)" data-year="Bistrot Venezia">
            <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$BistrotDeVeniseTitre[$lang]" ?></span>
                <h4 class="timeline-title"><?= "$premierjour[$lang]" ?></h4>
                <p class="timeline-text">
                    <?= "$BistrotDeVenise[$lang]" ?>
                </p>
            </div>
        </div>
        <div class="swiper-slide" style="background-image: url(Images/Sejours/LaFenice.jpg)" data-year="La Fenice">
        <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$LaFeniceTitre[$lang]" ?></span>
            <h4 class="timeline-title"><?= "$premierjour[$lang]" ?></h4>
            <p class="timeline-text">
                <?= "$LaFenice[$lang]" ?>
            </p>
        </div>
    </div>
    <div class="swiper-slide" style="background-image: url(Images/Sejours/Dorsoduro.jfif)" data-year="Dorsoduro">
    <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$DorsoduroTitre[$lang]" ?></span>
        <h4 class="timeline-title"><?= "$deuxiemejour[$lang]" ?></h4>
        <p class="timeline-text">
            <?= "$Dorsoduro[$lang]" ?>
        </p>
    </div>
    </div>
    <div class="swiper-slide" style="background-image: url(Images/Sejours/PlaceSaintMarc.jpg)" data-year="Piazza San Marco">
    <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$PlaceStMarcTitre[$lang]" ?></span>
        <h4 class="timeline-title"><?= "$deuxiemejour[$lang]" ?></h4>
        <p class="timeline-text">
            <?= "$PlaceStMarc[$lang]" ?>
        </p>
    </div>
    </div>
    <div class="swiper-slide" style="background-image: url(Images/Sejours/Campanile.jpg)" data-year="Campanile di San Marco">
    <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$CampanileStMarcTitre[$lang]" ?></span>
        <h4 class="timeline-title"><?= "$deuxiemejour[$lang]" ?></h4>
        <p class="timeline-text">
            <?= "$CampanileStMarc[$lang]" ?>
        </p>
    </div>
    </div>
    <div class="swiper-slide" style="background-image: url(Images/Sejours/ElMagazen.jpg)" data-year="El Magazen">
    <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$ElMagazenTitre[$lang]" ?></span>
        <h4 class="timeline-title"><?= "$deuxiemejour[$lang]" ?></h4>
        <p class="timeline-text">
            <?= "$ElMagazen[$lang]" ?>
        </p>
    </div>
    </div>
    <div class="swiper-slide" style="background-image: url(Images/Sejours/Murano.jpg)" data-year="Murano">
    <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$MuranoTitre[$lang]" ?></span>
        <h4 class="timeline-title"><?= "$troisiemejour[$lang]" ?></h4>
        <p class="timeline-text">
            <?= "$Murano[$lang]" ?>
        </p>
    </div>
    </div>
    </div>
    <div class="swiper-pagination"></div>
    </div>
    </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js'></script>
    <script src="./scriptSejour.js"></script>

    <?php
    include("footer.php");
    ?>

</body>

</html>