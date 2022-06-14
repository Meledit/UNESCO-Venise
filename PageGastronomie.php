<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGastronomie.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title>Venise Démasquée</title>
</head>

<body>
    <?php
    include("header.php");

    // Préparation des textes traduits

    $venise = array("Venise démasquée", "Unmasking Venice");
    $sousTitre = array("Une ville aux milles et une saveurs", "A city of a thousand and one flavours");
    $saviezvous = array("Le saviez-vous ?", "Did you know ?");
    $bienvenue = array("Bienvenue sur la page gastronomie&nbsp;!", "Welcome to the gastronomy page&nbsp;!");
    $bienvenueTexte = array("Ici vous retrouverez des informations concernant la gastronomie variée de Venise. Si vous souhaitez accéder à une partie précise de sa gastronomie, 
        cliquer sur l' image de la mosaique qui la concerne.", "Here you will be able to find information about the varied gastronomy of Venice. If you wish to access a specific part of its gastronomy 
        click on the picture of the mosaic that concerns it.");

    $poisson = array("Les poissons", "Fishes");
    $dessert = array("Les desserts", "Desserts");
    $viande = array("Les viandes", "Meats");
    $streetFood = array("La StreetFood", "StreetFood");
    $boisson = array("Les Cocktails & Boissons", "Cocktails & Drinks");
    $plat = array("Les Plats & Accompagnements", "Dishes And Accompaniments");

    $poisson1 = array("Venise possède une riche culture culinaire, sa gastronomie est grandement influencée par sa proximité à la mer, 
        avec beaucoup de plats à base de crustacés ou de poissons. A base de poissons, on note aussi le Pesce Al Forno, 
        du poisson, souvent bar ou dorade royale cuit au four, servie avec des tomates ou des pommes de terre. ", "Venice has a rich culinary culture, its gastronomy is greatly influenced by its proximity to the sea, with many dishes based on shellfish or fish. Fish-based dishes include Pesce Al Forno, fish, 
        often sea bass or sea bream baked in the oven, served with tomatoes or potatoes.");
    $poisson2 = array("Parmi les différents crustacés utilisées, il y a notamment les poulpes et seiches qui sont des éléments récurrents de la 
        gastronomie vénitienne, comme par exemple dans les seppia nero, des seiches cuisinées dans une sauce à base d’encre 
        noire qui peuvent être accompagnée de risotto ou de pâtes, elles aussi à l’encre de seiche. Il y aussi les Fritto Misto, 
        littéralement “Friture Mixte” parmi lesquels se trouvent les fritures de calamars, d’anchois, de crevettes et bien d’autres.
        La seiche est aussi parfois farcie à base de tomates, d'oignons et quelquefois de lardons ou de parmesan.", "Among the various crustaceans used, 
        octopus and cuttlefish are recurrent elements of Venetian gastronomy, as for example in seppia nero, cuttlefish cooked in a black ink sauce which can be accompanied by risotto or pasta, also with cuttlefish ink.  There is also Fritto Misto, literally \"Mixed Frying\", which includes fried squid, anchovies, shrimps and many others.
        Cuttlefish is also sometimes stuffed with tomatoes, onions and sometimes lardons or parmesan.");

    $viande1 = array("Les plats vénitiens ne se limitent pas aux poissons et crustacés, la viande y occupe aussi une place importante, on peut notamment 
        penser au carpaccio composé de fines tranches de bœuf cru assaisonné de citron, d'huile d’olive et parfois de parmesan. Le carpaccio
         peut également être parfois accompagné de pignons de pins ou de feuilles de roquettes. Le carpaccio a été inventé par Giuseppe Cipriani
          en 1950 pour une de ses clientes, Amalia Nani Mocenigo, à qui son médecin avait recommandé de manger de la viande crue.", "Venetian dishes are 
          not limited to fish and shellfish, meat also occupies an important place, such as carpaccio made of thin slices of raw beef seasoned with lemon, olive oil and occasionally parmesan. 
          Carpaccio can also be served with pine nuts or roquette leaves. Carpaccio was invented by Giuseppe Cipriani in 1950 for one of his clients, Amalia Nani Mocenigo, who was advised by her doctor to eat raw meat.");
    $viande2 = array("Il y a aussi le Fegato alla Veneziana, littéralement le foie à la vénitienne, du foie de veau accompagné d’oignons caramélisés, cette recette 
        remonte aux anciens Romains qui avaient l’habitude de cuisiner le foie, cependant la figue de la recette romaine a été remplacé par des oignons 
        bien plus présents dans la lagune vénitienne. Le Fegato alla Veneziana est souvent accompagné de polenta.", "There is also Fegato alla Veneziana, literally liver in the venetian 
        style, calf's liver accompanied by caramelized onions, this recipe dates back to the ancient Romans who used to cook liver, however the fig of the Roman recipe has been replaced by 
        onions which are much more present in the Venetian lagoon. Fegato alla Veneziana is often accompanied by polenta.");
    $viande3 = array("Le nom du Carpaccio rend hommage à <a href=\"PageOeuvre.php#Carpaccio\">Vittore Carpaccio</a>, un célèbre peintre vénitien du XV ème siècle, 
        connu pour ses peintures aux nuances d’un rouge vif.", "The name Carpaccio is a tribute to <a href=\"PageOeuvre.php#Carpaccio\">Vittore Carpaccio</a>, a famous Venetian painter of the 15th century, known for his bright red paintings");

    $plat1 = array("Afin d’accompagner ses spécialités, ou pour être dégustés seuls, Venise regorge d’accompagnement 
        à base de pâtes ou de riz. Comme par exemple, les Bigoli in salsa, des gros spaghettis au blé complet, 
        spécialité de la Vénétie, région d’Italie où se trouve Venise, qui sont accompagnées d’une sauce à base 
        d’anchois et d’oignons. À base de pâtes, on trouve aussi les spaghettis con vongole, des palourdes 
        sautéees au vin blanc, avec de l’ail. ", "To accompany its specialities, or to be eaten on their own, Venice has 
        plenty of pasta or rice-based accompaniments. For example, Bigoli in salsa, a large whole-wheat spaghetti speciality from the Veneto region of Italy, 
        where Venice is located, is served with a sauce made from anchovies and onions. Other pasta-based 
        dishes include spaghetti con vongole, clams sautéed in white wine with garlic.");

    $plat2 = array("À Venise on trouve aussi des accompagnements à base de riz, 
        comme le risotto qui est décliné que ce soit avec des fruits de mer, des champignons ou de la viande. 
        Ou encore le risi e bisi, du riz mijoté avec de petits pois, des oignons et des lardons. On y trouve 
        également la polenta, une préparation à base de semoule de maïs.", " In Venice there are also rice-based accompaniments, such as risotto, which can be served with seafood, mushrooms or meat. Or risi e bisi, 
        rice simmered with peas, onions and bacon. There is also polenta, a cornmeal-based preparation.
        ");

    $boisson1 = array("Parmi les spécialités vénitienne, on peut aussi évoquer certaines boissons, dont le Spritz, un cocktail 
        composé d’eau pétillante, de prosecco (un vin blanc effervescent italien) et  d’Aperol (un apéritif), 
        qui peut être accompagné d’une rondelle de citron ou d’orange. Le spritz tire son origine du XIXème siècle, 
        lorsque les autrichiens dominaient la Vénétie.", "Venetian specialities include drinks such as the Spritz, a cocktail made of sparkling water, 
        prosecco (an Italian sparkling white wine) and Aperol (an aperitif), which can be served with a slice of lemon or orange. The spritz has its origin in the 19th century, 
        when the Austrians controlled the Veneto region.");
    $boisson2 = array("Ou encore le Bellini, un cocktail à base de prosecco et de nectar de pêches blanches inventé par Giuseppe Cipriani, qui a également inventé le carpaccio. Venise possède 
        aussi plusieurs vins italiens et liqueurs dont le Maraschino à base de cerises.", "Or the Bellini, a cocktail made with prosecco and white peach nectar created by Giuseppe Cipriani, who also 
        created the carpaccio. Venice also has a variety of Italian wines and liqueurs, including the Maraschino made from cherries.");

    $streetFood1 = array("À Venise, la gastronomie se vit aussi dans la rue, au plus près de la lagune. En effet, la Street Food occupe une place
        importante, et passe par des spécialités très différentes  les unes des autres. On peut notamment citer les Arancini, 
        des petites boules de riz contenant de la sauce tomate, de la viande et des petits pois, qui sont ensuite panées et frites.
        Pour continuer dans les spécialités frites, il y a les Fritto Misto vues précédemment dans la partie Poissons, ou encore 
        aussi les olives all'ascolana, des olives généreuses, farcies avec de la viande qu’on fait frire.", "In Venice, gastronomy is also experienced in the street, 
        close to the lagoon. Street food is very important, with specialities that are very different from each other. These include Arancini, small balls of rice with 
        tomato sauce, meat and peas, which are then breaded and fried. To continue with the fried specialities, there are the Fritto Misto seen previously in the Fish section, 
        or also the olives all'ascolana, which are generous olives stuffed with meat that are fried.");
    $streetFood2 = array("La Street Food à Venise ne se limite pas aux aliments frits, il y a aussi des spécialités plus proches des burgers et sandwichs que l’on connaît
        bien. Comme par exemple, le Lampredotto, un sandwich à la caillette (une partie de l’estomac du boeuf) cuit à l’eau 
        avec des oignons, de la tomate et du persil, qu’on taille ensuite en petit morceau. Le lampredotto est considéré comme 
        un plat pauvre, dû au faible coût de la viande utilisée. On peut aussi penser aux Piadina, des pains sans levure, qu’on
        vient replier et garnir. Les piadina étant aussi considéré comme un élément fort de la cuisine des pauvres, ceux ci 
        n’ayant pas assez pour faire lever du pain.", "Street food in Venice is not limited to fried food, there are also specialities more like the usual burgers and sandwiches. 
        For example, the Lampredotto, a sandwich made of abomasum (part of the beef stomach) cooked in water with onions, tomato and parsley, which is then cut into small pieces.
         Lampredotto is considered a poor dish, due to the low cost of the meat used. One can also think of Piadina, breads without yeast, which are folded and garnished. Piadina 
         are also considered a strong element of the poor people's cooking, as they do not have enough to make bread rise.");

    $dessert1 = array("Venise présente aussi plusieurs spécialités sucrées, dont la plus célèbre est sûrement le tiramisu. Le tiramisu, composé de plusieurs couches successives 
        de biscuit et de crème au mascarpone, est le dessert préféré à Venise, cependant la Vénétie n’est pas la seule région à revendiquer l’origine du tiramisu.", "Venice also 
        has several sweet specialities, the most famous of which is surely tiramisu. Tiramisu, made of several layers of biscuit and mascarpone cream, is the most popular dessert 
        in Venice, but the Veneto is not the only region to claim the origin of tiramisu.");
    $dessert2 = array("L’île de Burano, à Venise possède ses propres biscuits, les Bussolà, des petits biscuits secs en 
        forme de S. Quand Venise était une grande puissance maritime, les baicoli aussi appelés \"les biscuits de bateau\" accompagnaient 
        les marins durant leurs longs voyages. Ces baicoli étaient aussi appréciés par les aristocrates vénitiens. Dans les rues de Venise, 
        il est également possible d’acheter des brioches con gelato, littéralement des brioches dans lesquelles on met de la glace.", "The island of Burano, in Venice, 
        has its own biscuits, the Bussolà, small dry biscuits in the shape of an S. When Venice was a great maritime power, the baicoli, also called \"ship's biscuits\", 
        used to accompany sailors on their long journeys. These baicoli were also appreciated by the Venetian aristocrats. In the streets of Venice it is also possible to buy 
        brioches con gelato, literally brioches with ice cream inside.");
    $dessert3 = array("Le tiramisu porte d’ailleurs bien son nom, en effet, ce dernier signifie littéralement \"Tire-moi vers le haut\",
        \"Remonte-moi le moral\" en italien.", "Tiramisu is aptly named, as it literally means \"pull me up\", \"cheer me up\" in Italian.");
    ?>
    <section class="showcase">

        <img src="Images/Gastronomie/Fond2.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <?php
                echo "<h1>$venise[$lang]</h1>";
                echo "<h2>$sousTitre[$lang]</h2>";
                ?>
            </div>
    </section>


    <div class="bgGallery milieu noir shadow">
        <article>
            <?php
            echo "<h3>$bienvenue[$lang]</h3>";
            echo "<p> $bienvenueTexte[$lang]</p>"
            ?>
        </article>

        <div class="wrapper">
            <div class="gallery">
                <div class="gallery__item gallery__item--1">
                    <a href="#Poissons" class="gallery__link">
                        <img src="Images/Gastronomie/Fritto_misto3.jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <?= "<span>$poisson[$lang]</span>" ?>
                        </div>
                    </a>
                </div>
                <div class="gallery__item gallery__item--2">
                    <a href="#Viandes" class="gallery__link">
                        <img src="Images/Gastronomie/Carpaccio2.jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <?= "<span>$viande[$lang]</span>" ?>
                        </div>
                    </a>
                </div>
                <div class="gallery__item gallery__item--3">
                    <a href="#Desserts" class="gallery__link">
                        <img src="Images/Gastronomie/Tiramisu3.jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <?= "<span>$dessert[$lang]</span>" ?>
                        </div>
                    </a>
                </div>
                <div class="gallery__item gallery__item--4">
                    <a href="#Cocktails" class="gallery__link">
                        <img src="Images/Gastronomie/Spritz2.jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <?= "<span>$boisson[$lang]</span>" ?>
                        </div>
                    </a>
                </div>
                <div class="gallery__item gallery__item--5">
                    <a href="#Accompagnements" class="gallery__link">
                        <img src="Images/Gastronomie/Bigoli-in-Salsa.jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <?= "<span>$plat[$lang]</span>" ?>
                        </div>
                    </a>
                </div>
                <div class="gallery__item gallery__item--6">
                    <a href="#StreetFood" class="gallery__link">
                        <img src="Images/Gastronomie/Arancini1.jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <?= "<span> $streetFood[$lang] </span>" ?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="IMGparallax IMG2 IMG-petite"></div>


    <div class="bg gris" id="Poissons">
        <div class="article image-avant">
            <div class="zone-images deux-images">
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Pesce1(Atteztazione).jpg" alt="image de pesce al forno">
                    <p>Pesce Al Forno</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/fritto_misto2.jpg" alt="image de fritures">
                    <p>Fritto Misto</p>
                </div>
            </div>
            <div class="zone-texte bordure-texte">
                <?php
                echo "<h3>$poisson[$lang]</h3>";
                echo "<p>$poisson1[$lang]</p>";
                echo "<p>$poisson2[$lang]</p>";
                ?>
            </div>
        </div>
    </div>

    <div class="bg gris shadow" id="Viandes">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <?php
                echo "<h3>$viande[$lang]</h3>";
                echo "<p>$viande1[$lang]</p>";
                echo "<p>$viande2[$lang]</p>";
                ?>

                <div class="zone-saviez-vous">
                    <div class="saviez-vous">
                        <div class="titre">
                            <img src="Images/DonnolaManger.png" alt="">
                            <?= "<h3>$saviezvous[$lang]</h3>" ?>
                        </div>
                        <p>
                            <?= " $viande3[$lang] " ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="zone-images deux-images">
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Carpaccio2.jpg" alt="image de carpaccio">
                    <p>Carpaccio</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Fegatto1(ALLEKO).jpg" alt="image de fegato alla veneziana">
                    <p>Fegato Alla Veneziana</p>
                </div>
            </div>
        </div>
    </div>

    <div class="IMGparallax IMG3 IMG-petite"></div>

    <div class="bg gris" id="Accompagnements">
        <div class="article image-avant">
            <div class="zone-images">
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Bigoli-in-Salsa.jpg" alt="image de bigoli">
                    <p>Bigoli in Salsa</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Risotto1.jpg" alt="image de risotto aux fruits de mer">
                    <p>Risotto aux Fruits de mers</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/RisiEBisi1.jpg" alt="image de risi e bisi">
                    <p>Risi e Bisi</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Polenta1.jpg" alt="image de polenta">
                    <p>Polenta</p>
                </div>
            </div>
            <div class="zone-texte bordure-texte">
                <?php
                echo "<h3>$plat[$lang]</h3>";
                echo "<p>$plat1[$lang]</p>";
                echo "<p>$plat2[$lang]</p>";
                ?>
            </div>
        </div>
    </div>

    <div class="bg gris shadow" id="Cocktails">
        <div class="article image-apres">
            <div class="zone-texte  bordure-texte">
                <?php
                echo "<h3>$boisson[$lang]</h3>";
                echo "<p>$boisson1[$lang] </p>";
                echo "<p>$boisson2[$lang] </p>";
                ?>
            </div>
            <div class="zone-images deux-images">
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Spritz2.jpg" alt="image de spritz">
                    <p>Spritz</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Bellini1(David Cabrera Navarro).jpg" alt="image de bellini">
                    <p>Bellini</p>
                </div>
            </div>
        </div>
    </div>

    <div class="IMGparallax IMG3 IMG-petite"></div>

    <div class="bg gris" id="StreetFood">
        <div class="article image-avant">
            <div class="zone-images">
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Arancini1.jpg" alt="image d'Arancini">
                    <p> Arancini</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Piadina1(Ekaterina Fedulyeva).jpg" alt="image de Piadina">
                    <p> Piadina</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Lampredotto3(FrancescoVignali).jpg" alt="image de Lampredotto">
                    <p> Lampredotto</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Olive1.jpg" alt="image d'Olive All'Ascolana">
                    <p> Olive all'Ascolana</p>
                </div>
            </div>
            <div class="zone-texte bordure-texte">
                <?php
                echo "<h3>$streetFood[$lang]</h3>";
                echo "<p>$streetFood1[$lang]</p>";
                echo "<p>$streetFood2[$lang]</p>";
                ?>
            </div>
        </div>
    </div>

    <div class="bg gris" id="Desserts">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <?php
                echo "<h3>$dessert[$lang]</h3>";
                echo "<p>$dessert1[$lang]</p>";
                echo "<p>$dessert2[$lang]</p>";
                ?>
                <div class="zone-saviez-vous">
                    <div class="saviez-vous">
                        <div class="titre">
                            <img src="Images/DonnolaManger.png" alt="">
                            <?= "<h3>$saviezvous[$lang]</h3>" ?>
                        </div>
                        <?= "<p>$dessert3[$lang]</p>" ?>

                    </div>
                </div>
            </div>
            <div class="zone-images deux-images">
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Tiramisu1.jpg" alt="image de tiramisu">
                    <p>Tiramisu</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Brioche1(FilipoBacci).jpg" alt="image de brioche con gellato">
                    <p>Brioche con Gelatto</p>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include("footer.php");
?>


</html>