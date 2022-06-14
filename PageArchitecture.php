<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/styleArchitecture.css">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title> Venise </title>
</head>

<body>
    <?php
    include("header.php");
    $venise = array("Venise démasquée", "Unmasking Venice");
    $sousTitre = array("La ville aux diverse style", "The city of many styles");
    $saviezvous = array("Le saviez-vous ?", "Did you know ?");
    $bienvenue = array("Venise est une ville regroupant des styles architecturaux de différentes époques sur cette page vous-y 
    trouverez tout ce qui les concernes.", "Venice is a city of different architectural styles from different periods. 
    On this page you will find everything about them.");

    $accrocheTitre = array("Bienvenue sur la page Architecture", "Welcome to the Architecture page");
    $accrocheTexte = array(
        "Venise est une ville regroupant des styles architecturaux de différentes époques sur cette page vous-y trouverez tout ce qui les concernes.",
        "Venice is a city of different architectural styles from different periods. On this page you will find everything about them."
    );

    $carouTitre = array("Les édifices à ne pas rater !", "Buildings not to be missed!");
    $carouImgTexte1 = array(
        "Il fait partie des 4 grands ponts qui traverse 
    le grand canal de Venise avec ses 48 mètres de longueur et ses 22 mètres de largeur.",
        "It is one of the four great bridges that cross the Grand Canal in Venice, 
    measuring 48 metres in length and 22 metres in width."
    );
    $carouImgTexte2 = array("Cette grande tout campanaire de 98.6 mètres de hauteur 
    isolé sur un côté de la place Saint-Marc.", "This large bell tower, 98.6 metres high, 
    stands alone on one side of St Mark's Square.");
    $carouImgTexte3 = array(
        "La basilique cathédrale Saint Marc est la plus importante de Venise, 
    elle s'impose avec ses 76.5 mètres de longueur et ses 62.5 mètres de largeur.",
        "St. Mark's Cathedral Basilica is the largest in Venice, 
    standing at 76.5 metres in length and 62.5 metres in width."
    );

    $style1Titre1 = array("ARCHITECTURE VÉNITIENNE VENETO-BYZANTINE", "VENETO-BYZANTINE VENETIAN ARCHITECTURE");
    $style1Texte1 = array(
        "Le style vénéto-byzantin est peu différent du style roman avec ses arcs en plein cintre (en demi-cercle). 
    Mais, il se distingue par ses fenêtres caractéristiques. Le haut est en forme de « fer à cheval », 
    c’est-à-dire se refermant vers le bas de l’arc. Et surtout par l’allongement dans le sens vertical.
    On savait construire des arcades hautes, mais pas large.
    Ce style comporte aussi l’emploi de patères, ces bas-reliefs décoratifs souvent ronds qui ornent les façades.",
        "The Venetian-Byzantine style is not very different from the Romanesque style with its semi-circular arches. 
    However, it is distinguished by its characteristic windows. The top is in the form of a horseshoe, 
    that is to say, it closes towards the bottom of the arch. And above all by the vertical elongation.
    High arches could be built, but not wide ones.
    This style also includes the use of pegs, the decorative bas-reliefs that often decorate the façades."
    );
    $s1Article1Texte1 = array(
        "Ces 2 palais, la Ca’ Loredan et Ca’ Farsetti à Venise, ont été construits au 13e siècle.
    Ils conservent en partie leur aspect de style veneto-byzantin, avec de hautes et étroites
    colonnades et leurs mascarons sur les murs.",
        "These 2 palaces, the Ca' Loredan and Ca' Farsetti in Venice, were built in the 13th century.
    They still retain some of their Veneto-Byzantine appearance, with high, narrow colonnades and
    colonnades and their mascarons on the walls."
    );
    $s1Article1Texte2 = array(
        "Aujourd’hui, ces 2 palais abritent la mairie de Venise.",
        "Today, these 2 palaces house the town hall of Venice."
    );
    $s1Article1LegImg = array(
        "A gauche la Ca' Loredan et à droite la Ca' Farsetti",
        "On the left the Ca' Loredan and on the right the Ca' Farsetti"
    );
    $s1Article1Saviezvous = array(
        "On les observe mieux depuis la rive opposée du Grand Canal, en franchissant le pont du Rialto tout proche.",
        "They are best seen from the opposite bank of the Grand Canal, crossing the nearby Rialto Bridge."
    );

    $style2Titre1 = array(
        "ARCHITECTURE VÉNITIENNE ROMANE",
        "ROMANESQUE VENETIAN ARCHITECTURE "
    );
    $style2Texte1 = array(
        "Le style architectural roman est plus facilement observable à Venise dans les constructions religieuses que civiles. 
    Les édifices religieux sont relativement fermés, possédant peu d’ouverture afin de faciliter le recueillement.",
        "The Romanesque architectural style is more easily observed in Venice in religious buildings than in civil ones. 
    Religious buildings are relatively closed, with few openings to facilitate meditation."
    );
    $style2Texte2 = array(
        "Dans l’habitation civile, les étages supérieurs accueillent les pièces à vivre, au-dessus du rez-de-chaussée qui sert d’entrepôt.
    Ainsi, ce rez-de-chaussée est-il souvent assez haut. Les fenêtres forment un arc de cercle vers le haut, soutenues par de fines colonnes, simples ou doubles.
        Ce style roman est aisément confondu avec le style vénéto-byzantin dans l’architecture civile.",
        "In civil housing, the upper floors are used for living quarters, above the ground floor, which is used for storage.
    Thus, the ground floor is often quite high. The windows are arched upwards, supported by slender single or double columns.
    This Romanesque style is easily confused with the Venetian-Byzantine style in civil architecture."
    );
    $s2Article1Texte1 = array(
        "La basilique est de forme octogonale pour évoquer une couronne dédiée à la Vierge.
    Pour assurer une transition harmonieuse entre les façades et les deux dômes, l’architecte a mis en
    place des « orecchioni »,« grandes oreilles » en italien, volutes coiffées de statues.",
        "The basilica is octagonal in shape to evoke a crown dedicated to the Virgin.
    To ensure a harmonious transition between the facades and the two domes, the architect placed
    the architect placed \"orecchioni\",\"big ears\" in Italian, volutes topped with statues."
    );
    $s2Article1Texte2 = array(
        "Placée en bordure du Grand Canal, elle repose sur plus d’un million de pilotis,
    pour supporter son poids !",
        "Placed on the edge of the Grand Canal, it rests on more than a million pilings,
    to support its weight!"
    );
    $s2Article1Texte3 = array(
        "Les façades sont richement décorées de statues de personnages, d’anges, des quatre évangélistes et
    au sommet du fronton une Vierge à l’enfant.
    Au sommet du plus grand dôme, se trouve une statue de la Vierge,
    tandis qu’au sommet du plus petit dôme, c’est Saint-Marc qui est honoré.",
        "The facades are richly decorated with statues of people, angels, the four evangelists and, at the top of the pediment, a Virgin and Child.
    and at the top of the pediment a Virgin and Child.
    At the top of the largest dome, there is a statue of the Virgin,
    while at the top of the smaller dome it is St Mark who is honoured."
    );
    $s2Article2Texte1 = array(
        "Commencée au 7ème siècle, et achevée telle que nous la voyons aujourd’hui au 12ème.",
        "Started in the 7th century, and completed as we see it today in the 12th century."
    );
    $s2Article2Texte2 = array(
        "The mosaic in the apse, the beautiful chevet (outer apse) and the mosaic paving, which is not only geometric but also has a number of other figures, are particularly noteworthy,
    and the mosaic pavement, whose figures are not only geometrical but also figurative
    figurative,
    which is exceptional, representing roosters, foxes, griffins and peacocks.",
        "La mosaïque de l'abside, le beau chevet (abside extérieure) et le pavement en mosaïque, dont les figures sont non seulement géométriques mais aussi figuratives, sont particulièrement remarquables,
    et le pavement en mosaïque, dont les figures ne sont pas seulement géométriques mais aussi figuratives
    figuratives,
    qui est exceptionnel, représentant des coqs, des renards, des griffons et des paons."
    );
    $s2Article2Texte3 = array(
        "Autre élément à noter qui caractérise cet édifice : le chevet de forme pentagonale et sa double
    rangée d’arcs soutenus par des colonnes,
    ceci donnant une étonnante légèreté à la construction.
    La couleur rosée de la pierre ajoute une note de douceur à la basilique, qui s’élève tout près du
    Grand Canal de Murano.",
        "Another feature of the building is the pentagonal chevet with a double row of arches supported by columns.
    of arches supported by columns,
    This gives a surprising lightness to the construction.
    The pinkish colour of the stone adds a gentle note to the basilica, which stands close to the
    Grand Canal of Murano."
    );

    $style3Titre1 = array("LE GOTHIQUE FLEURI TYPIQUE", "THE TYPICAL FLOWERY GOTHIC");
    $style3Texte1 = array(
        "L’architecture gothique à Venise développe principalement des décorations raffinées, surabondantes sans être trop chargées.
    Les ouvertures sont particulièrement travaillées. On peut dire qu’il s’agit d’un style vénitien, 
    car c’est un style typique qu’on rencontre essentiellement en Vénétie et dans les anciennes possessions de Venise.",
        "Gothic architecture in Venice mainly develops refined decorations, overabundant without being too busy.
    The openings are particularly elaborate. It can be said that this is a Venetian style, 
    because it is a typical style found mainly in the Veneto and in the former possessions of Venice."
    );
    $s3Article1Texte1 = array(
        "La Ca’ d’Oro est sans doute le palais le plus emblématique de Venise, après le Palais des Doges.",
        "The Ca' d'Oro is probably the most emblematic palace in Venice, after the Doge's Palace."
    );
    $s3Article1Texte2 = array(
        "En 1412, Marino Contarini fait construire un palais, dont il espère qu’il surpassera en beauté tous
    les autres palais de Venise.
    On surnomme ce palais la Ca’ d’Oro, la maison dorée.",
        "In 1412, Marino Contarini had a palace built, which he hoped would surpass in beauty all the other palaces in Venice.
    other palaces in Venice.
    This palace was called the Ca' d'Oro, the golden house."
    );
    $s3Article2Texte1 = array(
        "Le Palais des Doges abritait les appartements du doge et les différents organes de la République.
    Il se devait donc d’être imposant. Mais, il devait aussi étaler le faste,
    c’est-à-dire la puissance de Venise aux yeux des délégations étrangères et des personnalités
    accueillies.",
        "The Doge's Palace housed the flats of the Doge and the various organs of the Republic.
    It therefore had to be imposing. But it also had to show off its splendour,
    that is, the power of Venice in the eyes of the foreign delegations and personalities
    hosted."
    );
    $s3Article2SaviezVous = array(
        "L’intérieur du palais fut décoré par les meilleurs peintres vénitiens, c’est ainsi qu’il est devenu un magnifique musée",
        "The interior of the palace was decorated by the best Venetian painters, which is how it became a magnificent museum."
    );

    $style4Titre = array("LE STYLE RENAISSANCE", "THE RENAISSANCE STYLE");
    $style4Texte1 = array(
        "L’architecture Renaissance a donné naissance à des palais imposants, loin de la finesse de la future architecture gothique.
    L’inspiration est classique, grecque ou romaine. Les piliers et les autres éléments de la façade sont souvent purement décoratifs. 
    On commence à utiliser les balustres. Ainsi, dans ce style Renaissance, tout se veut géométrique, symétrique, équilibre, rythmique.",
        "Renaissance architecture gave rise to imposing palaces, far from the finesse of the future Gothic architecture.
    The inspiration is classical, Greek or Roman. The pillars and other elements of the façade are often purely decorative. 
    Balusters were used. Thus, in this Renaissance style, everything is geometric, symmetrical, balanced and rhythmic."
    );
    $s4Article1Texte1 = array(
        "Au Palais Grimani, on apprécie la galerie, la cour et l’escalier.
    On admire les peintures décoratives, œuvres d’artistes de
    l’Italie centrale : Giovanni da Udine, Francesco e Giuseppe Salviati, Camillo Mantovano e Federico
    Zuccari.",
        "In the Grimani Palace, you can appreciate the gallery, the courtyard and the staircase.
    You can admire the decorative paintings by central Italian artists
    Giovanni da Udine, Francesco and Giuseppe Salviati, Camillo Mantovano and Federico
    Zuccari."
    );
    $s4Article1Texte2 = array(
        "Malheureusement, le mobilier et autres richesses intérieures ont été dispersées.
    Une partie se trouve au Musée archéologique de San Marco.",
        "Unfortunately, the furniture and other interior treasures were dispersed.
    Some of it is in the Archaeological Museum of San Marco."
    );
    $s4Article1Texte3 = array(
        "Ne pas confondre avec le Palazzo Grimani di San Luca.",
        "Not to be confused with the Palazzo Grimani di San Luca."
    );
    $s4Article2Texte1 = array(
        "Santa Maria dei Miracoli est relativement tassée sur elle-même,
    c’est-à-dire qu’elle n’a pas l’aisance spatiale d’églises immenses.
    Non, elle est relativement petite et peu éclairée de façon naturelle.",
        "Santa Maria dei Miracoli is relatively cramped,
    that is, it does not have the spatial ease of huge churches.
    No, it is relatively small and not very naturally lit."
    );
    $s4Article2Texte2 = array(
        "On en reste encore, au XVe siècle,
    à des églises qui sont faites pour la méditation personnelle davantage que pour impressionner et
    donner un sentiment de puissance.",
        "In the 15th century, we are still left with
    churches that are designed for personal meditation rather than to impress and give a sense of
    to impress and give a sense of power."
    );

    $style5Titre1 = array("LE STYLE BAROQUE", "THE BAROQUE STYLE");
    $style5Texte1 = array(
        "A la mort du dernier Pesaro, le palais fut acheté par divers propriétaires,
    dont Felicita Bevilacqua La Masa, grande amatrice d’art.",
        "After the death of the last Pesaro, the palace was bought by various owners,
    including Felicita Bevilacqua La Masa, a great lover of art."
    );
    $s5Article1Texte1 = array(
        "A la mort du dernier Pesaro, le palais fut acheté par divers propriétaires,
    dont Felicita Bevilacqua La Masa, grande amatrice d’art.",
        "After the death of the last Pesaro, the palace was bought by various owners,
    including Felicita Bevilacqua La Masa, a great lover of art."
    );
    $s5Article1Texte2 = array(
        "A la toute fin du XIXe siècle, celle-ci fit don de son palais à la ville de Venise,
    elle-même propriétaire d’une belle collection établie grâce à la Biennale, pour y loger leurs
    collections respectives d’art moderne.",
        "At the very end of the 19th century, the latter donated its palace to the city of Venice,
    itself the owner of a fine collection established thanks to the Biennale, to house their
    their respective collections of modern art."
    );

    $recoTitre = array("Nos recomandations ;)", "Our recommendations ;)");
    $recoTexte = array(
        "Ces monuments ne sont absolument pas à rater si vous allez à Venise, une expérience que vous n'oublirez pas !",
        "These monuments are not to be missed if you go to Venice, an experience you won't forget!"
    );

    $rialtoTexte1 = array(
        "Le pont du Rialto est un des symboles de Venise. Pont le plus vieux et le plus connu de Venise, 
    il relie les berges du Grand Canal entre les quartiers de San Polo et San Marco.",
        "The Rialto Bridge is one of the symbols of Venice. It is the oldest and most famous bridge in Venice, 
    It connects the banks of the Grand Canal between the districts of San Polo and San Marco."
    );
    $rialtoTexte2 = array(
        "Le choix de construire ce pont en pierre et marbre d’Istrie dans ces zones marécageuses est une véritable prouesse architecturale. 
    Il mesure 48 mètres de long pour 22 mètres de large. Sa hauteur au-dessus de l’eau atteint 7,50 m en son milieu. 
    Il repose sur plus de 6000 pilotis.",
        "The choice to build this bridge in Istrian stone and marble in these marshy areas is a real architectural feat. 
    It is 48 metres long and 22 metres wide. Its height above the water reaches 7.50 m in the middle. 
    It rests on more than 6000 piles."
    );
    $rialtoTexte3 = array(
        "Le Pont du Rialto se compose de trois rampes d’escaliers pour piétons et d’une double rangée de boutiques ouverte vers le Grand Canal par six arches à la montée et six arches à descente. 
    En son centre, les trois voies piétonnes se rejoignent sous une grande arche. Sur les deux côtés sont sculptés deux saints patrons de la ville : Théodore et Marc. Le rendu est magnifique. 
    Le pont est majestueux, fonctionnel et se marie parfaitement avec l’architecture des lieux.",
        "The Rialto Bridge consists of three pedestrian staircases and a double row of shops opening onto the Grand Canal through six upward and six downward arches. 
    In its centre, the three pedestrian lanes meet under a large arch. On both sides are sculpted two patron saints of the city: Theodore and Mark. The rendering is magnificent. 
    The bridge is majestic, functional and blends perfectly with the architecture of the place."
    );

    $campanileTexte1 = array(
        "Le campanile de Saint-Marc est une tour campanaire construite en 912 et reconstruite en 1914.
    Surnommé autrefois “el padron de casa”, il servait de tour de garde.",
        "The campanile of San Marco is a bell tower built in 912 and rebuilt in 1914.
    Known in the past as \"el padron de casa\", it served as a watchtower."
    );
    $campanileTexte2 = array(
        " La tour, de 98,6 mètres de haut, se trouve seule dans un coin de la Place Saint-Marc, près de la façade de la basilique. 
    Le campanile a une forme simple, avec une tour en brique, de base carrée de 12 mètres de large et 50 mètres de hauteur, au-dessus de laquelle se trouve le clocher avec un logement pour cinq cloches. 
    Le clocher est surmonté d'un cube, sur les faces duquel sont représentés des lions et des allégories féminines de Venise (La Giustizia: Justice).",
        " The tower, 98.6 metres high, stands alone in a corner of St Mark's Square, near the façade of the basilica. 
    The bell tower has a simple shape, with a brick tower with a square base, 12 metres wide and 50 metres high, above which is the belfry with room for five bells. 
    The bell tower is surmounted by a cube, on the sides of which are represented lions and female allegories of Venice (La Giustizia: Justice)."
    );
    $campanileTexte3 = array(
        "La tour est surmontée d'une flèche pyramidale, au sommet de laquelle trône une girouette d'or sous la forme de l'archange Gabriel. 
    Le campanile a atteint sa forme actuelle en 1514.",
        "The tower is topped by a pyramid-shaped spire, at the top of which is a golden weathervane in the form of the Archangel Gabriel. 
    The bell tower reached its present form in 1514."
    );

    $basilicaTexte1 = array(
        "La Basilique Saint-Marc est l’édifice religieux le plus important de Venise. 
    La basilique est située sur la Place Saint Marc et a été depuis toujours le centre historique de la vie publique et religieuse de la ville",
        "St Mark's Basilica is the most important religious building in Venice. 
    The Basilica is located in St. Mark's Square and has always been the historical centre of the city's public and religious life"
    );
    $basilicaTexte2 = array(
        "Sa construction a débuté en 828 pour abriter le corps de Saint-Marc, ramené d’Alexandrie",
        "Its construction began in 828 to house the body of Saint Mark, brought from Alexandria"
    );
    $basilicaTexte3 = array(
        "La basilique actuelle comporte cinq dômes et a été construite en forme de croix grecque ; elle est devenue la cathédrale de la ville en 1807. 
    Elle compte plus de 4 000 mètres carrés de mosaïques (certaines d'entre elles datent du XIIIe siècle) et présente 500 colonnes remontant au IIIe siècle.",
        "The present basilica has five domes and was built in the shape of a Greek cross; it became the city's cathedral in 1807. 
    It has more than 4,000 square metres of mosaics (some of which date back to the 13th century) and 500 columns dating back to the 3rd century."
    );

    ?>
    <section class="showcase">

        <img src="Images/Architecture/Venise1Fond.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <?php
                echo "<h1>$venise[$lang]</h1>";
                echo "<h2>$sousTitre[$lang]</h2>";
                ?>
    </section>

    <div class="bg gris">
        <article class="centre">
            <?php
            echo "<h2>$accrocheTitre[$lang]</h2>";
            echo "<h3>$accrocheTexte[$lang]</h3>";
            ?>
        </article>
    </div>

    <div class="bg gris">
        <div class="fond">
            <?php
            echo "<h3>$carouTitre[$lang]</h3>";
            ?>
            <div id="carouselExemple" class="carousel slide" data-ride="carousel" data-interval="3000">

                <ol class="carousel-indicators">
                    <li data-target="#carouselExemple" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExemple" data-slide-to="1"></li>
                    <li data-target="#carouselExemple" data-slide-to="2"></li>
                </ol>


                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <a href="#PonteDiRialto">
                            <img src="Images/Architecture/PonteDiRialtoCarou.png" class="d-block">
                        </a>

                        <div class="carousel-caption d-none d-md-block">
                            <?php
                            echo "<h5>Ponte di Rialto</h5>";
                            echo "<p><b>$carouImgTexte1[$lang]</b></p>";
                            ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <a href="#CompanileSanMarco">
                            <img src="Images/Architecture/companileCarou.jpg" class="d-block">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <?php
                            echo "<h5>Campanile San Marco</h5>";
                            echo "<p><b>$carouImgTexte2[$lang]</b></p>";
                            ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <a href="#BasilicaSanMarco">
                            <img src="Images/Architecture/BasiliqueStMarcCarou.jpg" class="d-block">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Basilica San Marco</h5>
                            <?php
                            echo "<p><b>$carouImgTexte3[$lang]</b></p>";
                            ?>
                        </div>
                    </div>

                </div>

                <a href="#carouselExemple" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="ture"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#carouselExemple" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </div>
    <script>
        $('.carousel').carousel({
            pause: "null"
        })
    </script>

    <div class="bg gris">
        <div class="fond">
            <?php
            echo "<h3>$style1Titre1[$lang]</h3>";
            echo "<p>$style1Texte1[$lang]</p>";
            ?>
            <div class="article image-apres">
                <div class="zone-texte bordure-texte">
                    <h3>Ca’ Loredan | Ca’ Farsetti</h3>
                    <?php
                    echo "<p>$s1Article1Texte1[$lang]</p>";
                    echo "<p>$s1Article1Texte2[$lang]</p>";
                    ?>
                    <div class="zone-saviez-vous">
                        <div class="saviez-vous">
                            <div class="titre">
                                <img src="Images/DonnolaManger.png" alt="">
                                <?php
                                echo "<h3>$saviezvous[$lang]</h3>"
                                ?>
                            </div>
                            <?php
                            echo "<p>$s1Article1Saviezvous[$lang]</p>";
                            ?>
                        </div>
                    </div>
                </div>

                <div class="image-et-legende">
                    <img src="Images/Architecture/Caloredan.jpg" alt="">
                    <?php
                    echo "<p>$s1Article1LegImg[$lang]</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>


    <div class="bg gris">
        <div class="fond">

            <?php
            echo "<h3>$style2Titre1[$lang]</h3>";
            echo "<p>$style2Texte1[$lang]</p>";
            echo "<p>$style2Texte2[$lang]</p>";
            ?>
            <div class="article image-avant">
                <div class="image-et-legende">
                    <img src="Images/Architecture/SantaMaria.jpeg" alt="">
                    <p>Basilica Santa Maria della Salute</p>
                </div>
                <div class="zone-texte bordure-texte">
                    <h3>Basilica Santa Maria della Salute</h3>
                    <?php
                    echo "<p>$s2Article1Texte1[$lang]</p>";
                    echo "<p>$s2Article1Texte2[$lang]</p>";
                    echo "<p>$s2Article1Texte3[$lang]</p>";
                    ?>
                </div>
            </div>




            <div class="article image-apres">
                <div class="zone-texte bordure-texte">
                    <h3>Basilica Dei Santi Maria e Donato</h3>
                    <?php
                    echo "<p>$s2Article2Texte1[$lang]</p>";
                    echo "<p>$s2Article2Texte2[$lang]</p>";
                    echo "<p>$s2Article2Texte3[$lang]</p>";
                    ?>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Architecture/SanDonato.jpg" alt="">
                    <p>Basilica Dei Santi Maria e Donato</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="fond">
            <?php
            echo "<h3>$style3Titre1[$lang]</h3>";
            echo "<p>$style3Texte1[$lang]</p>";
            ?>
            <div class="article image-avant">
                <div class="image-et-legende">
                    <img src="Images/Architecture/Cadoro.jpg" alt="">
                    <p> Ca' D'oro</p>
                </div>
                <div class="zone-texte bordure-texte">
                    <h3>Ca' D'oro</h3>
                    <?php
                    echo "<p>$s3Article1Texte1[$lang]</p>";
                    echo "<p>$s3Article1Texte2[$lang]</p>";
                    ?>
                </div>
            </div>



            <div class="article image-apres">
                <div class="zone-texte bordure-texte">
                    <h3>Palazzo Ducale</h3>
                    <?php
                    echo "<p>$s3Article2Texte1[$lang]</p>";
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
                            echo "<p>$s3Article2SaviezVous[$lang]</p>";
                            ?>
                        </div>
                    </div>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Architecture/PalaisDesDoges.jpeg" alt="">
                    <p>Palazzo Ducale</p>
                </div>
            </div>

        </div>
    </div>

    <div class="bg gris">
        <div class="fond">
            <?php
            echo "<h3>$style4Titre[$lang]</h3>";
            echo "<p>$style4Texte1[$lang]</p>";
            ?>
            <div class="article image-avant">
                <div class="image-et-legende">
                    <img src="Images/Architecture/PalaisGrimani.jpg" alt="">
                    <p>Palazzo Grimani</p>
                </div>
                <div class="zone-texte bordure-texte">
                    <h3>Palazzo Grimani</h3>
                    <?php
                    echo "<p>$s4Article1Texte1[$lang]</p>";
                    echo "<p>$s4Article1Texte2[$lang]</p>";
                    echo "<p>$s4Article1Texte3[$lang]</p>";
                    ?>
                </div>
            </div>



            <div class="article image-apres">
                <div class="zone-texte bordure-texte">
                    <h3>Santa Maria dei Miracoli</h3>
                    <?php
                    echo "<p>$s4Article2Texte1[$lang]</p>";
                    echo "<p>$s4Article2Texte2[$lang]</p>";
                    ?>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Architecture/SantaMariadeiMiracoli.jpg" alt="">
                    <p>Santa Maria dei Miracoli</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="fond">
            <?php
            echo "<h3>$style5Titre1[$lang]</h3>";
            echo "<p>$style5Texte1[$lang]</p>";
            ?>
            <div class="article image-avant">
                <div class="image-et-legende">
                    <img src="Images/Architecture/CaPesaro.jpg" alt="">
                    <p>Ca' Pesaro</p>
                </div>
                <div class="zone-texte bordure-texte">
                    <h3>Ca' Pesaro</h3>
                    <?php
                    echo "<p>$s5Article1Texte1[$lang]</p>";
                    echo "<p>$s5Article1Texte2[$lang]</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="fond">
            <?php
            echo "<h3>$recoTitre[$lang]</h3>";
            echo "<p>$recoTexte[$lang]</p>";
            ?>

            <div class="article image-avant">
                <div class="image-et-legende">
                    <img src="Images/Architecture/PontiDiRialto.jpg" alt="">
                    <p>Ponte Di Rialto</p>
                </div>
                <div class="zone-texte bordure-texte" id="PonteDiRialto">
                    <h3>Ponte di Rialto</h3>
                    <?php
                    echo "<p>$rialtoTexte1[$lang]</p>";
                    echo "<p>$rialtoTexte2[$lang]</p>";
                    echo "<p>$rialtoTexte3[$lang]</p>";
                    ?>
                </div>
            </div>

            <div class="article image-apres">
                <div class="zone-texte bordure-texte" id="CompanileSanMarco">
                    <h3>Campanile San Marco</h3>
                    <?php
                    echo "<p>$campanileTexte1[$lang]</p>";
                    echo "<p>$campanileTexte2[$lang]</p>";
                    echo "<p>$campanileTexte3[$lang]</p>";
                    ?>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Architecture/CampanileSanMarco.jpg" alt="">
                    <p>Campanile San Marco</p>
                </div>
            </div>

            <div class="article image-avant">
                <div class="image-et-legende">
                    <img src="Images/Architecture/BasilicaSanMarco.jpg" alt="">
                    <p>Basilica San Marco</p>
                </div>
                <div class="zone-texte bordure-texte" id="BasilicaSanMarco">
                    <h3>Basilique Saint-Marc</h3>
                    <?php
                    echo "<p>$basilicaTexte1[$lang]</p>";
                    echo "<p>$basilicaTexte2[$lang]</p>";
                    echo "<p>$basilicaTexte3[$lang]</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>
<?php
include("footer.php");
?>

</html>