<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title>Venise démasquée</title>
</head>

<body>
    <?php
    include("header.php");
    $venise = array("Venise démasquée","Unmasking Venice");
    $veniseSousTitre = array("La ville du lion ailé vous révèle tous ses secrets","The city of the winged lionreveal all its secrets to you");
    $carteLegende = array("Légende de la carte", "Map legend");
    $Marco = array("Marco le lion, pour les lieux uniques", "Marco the lion, for unique places");
    $Donnola = array("Donnola la belette, pour les restaurants et hotels", "Donnola the weasel, for restaurants and hotels");
    $Gufo = array("Gufo le hibou, pour les monuments historiques", "Gufo the owl, for historical monuments");  
    $Laguna = array("Laguna le poulpe, pour les lieux aquatiques", "Laguna the octopus, for watery places");   
    $boutonHistoire = array("Histoire","History");
    $boutonCulture = array("Culture","Culture");
    $boutonSejour=  array("Séjours","Stays");
    $boutonQuizz = array("Quizz","Quiz");
    $introTitre = array("Venise un patrimoine unique&nbsp;!","Venice a unique patrimony&nbsp;!");
    $intro = array("Venez découvrir Venise à travers toutes ses facettes ; son Histoire, sa riche gastronomie, son unique architecture, la
    pluralité de ses événements, ses fameuses œuvres et personalités... Découvrez nos propositions de séjour à Venise et venez vous tester sur nos différents quizz sur la
    Culture de Venise.","Come and discover Venice through all its facets; its history, its rich gastronomy, its unique architecture, the variety of its events, its famous arts and personalities... Discover our suggestions for your stay in Venice and test yourself on our different quizzes on the
    Culture of Venice.");
    $carteTitre = array("Un peu perdu ?","A bit lost?");
    $recommandations = array("Nos recommandations","Our suggestions");
    $naissanceVenise = array("La naissance de Venise","The birth of Venice");
    $naissanceVeniseTexte=array("Début de l'histoire","Début de l'histoire");
    $voir = array("Voir","See");
    $carnaval = array("Le Carnaval de Venise","The Venice Carnival");
    $carnavalTexte = array("Envie de découvrir l'évènement incontournable de Venise
     qu'est le Carnaval de Venise ? ","Would you like to discover the unmissable event of Venice, the Venice Carnival? ");
    $romantique = array("Un voyage à deux","A journey together");
    $romantiqueTexte = array("Pour ceux qui viennent en couple ou lune de miel, nous vous proposons un séjour
    pour découvrir le côté romantique de Venise.","For those who come as a couple or on honeymoon, we propose a stay
    to discover the romantic side of Venice.");
    $rialto=array("Le pont de Rialto","The Rialto Bridge");
    $rialtoTexte=array("pont","pont");
    ?>
    <section class="showcase">

        <video src="videos/backscreen.mov" muted loop autoplay></video>
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <?php 
                echo "<h1> $venise[$lang]</h1>";
                echo "<h2> $veniseSousTitre[$lang]</h2>";
                ?>
            </div>

            <div class="buttons">
                <div class="button">
                    <a href="PageHistoire.php">
                        <img class="picto livre" alt=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                        <?= "$boutonHistoire[$lang]"?>
                    </a>
                </div>
                <div class="button">
                    <a href="PageCulture.php">
                        <img class="picto masque" alt=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                            <?= "$boutonCulture[$lang]"?>
                    </a>
                </div>
                <div class="button">
                    <a href="PageSejour.php">
                        <img class="picto ticket" alt=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                            <?= "$boutonSejour[$lang]"?>
                    </a>
                </div>
                <div class="button">
                    <a href="PageType.html">
                        <img class="picto quizz" alt=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                            <?= "$boutonQuizz[$lang]"?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="bg noir shadow">
        <article>
            <?php
            echo "<h3>$introTitre[$lang]</h3>";
            echo "<p>$intro[$lang]</p>";
            ?>
        </article>
    </div>

    <div class="bg gris">
        <article class="centre">
            <?="<h3>$carteTitre[$lang]</h3>" ?>
            <iframe src="https://www.google.com/maps/d/u/1/embed?mid=10e37lMcDlTZxPesq9tDFjZrluzEZW0X6&ehbc=2E312F"
                width="640" height="480"></iframe>
            <div class="legende-carte">
                <?= "<h3>$carteLegende[$lang]</h3>"?>
                <div>
                    <img src="Images/Marco.png" alt="">
                    <?= "<p>$Marco[$lang]</p>"?>
                </div>
                <div>
                    <img src="Images/DonnolaDodo.png" alt="">
                    <?= "<p>$Donnola[$lang]</p>"?>
                </div>
                <div>
                    <img src="Images/Gufo.png" alt="">
                    <?= "<p>$Gufo[$lang]</p>"?>
                </div>
                <div>
                    <img src="Images/LagunaOuvert.png" alt="">
                    <?= "<p>$Laguna[$lang]</p>"?>
                </div>
            </div>
        </article>
    </div>

    <div class="IMGparallax IMG1 IMG-microscopique"></div>

    <div class="bg gris">
        <article class="centre">
            <?= "<h2>$recommandations[$lang]</h2>"?>
        </article>
        <div class="widget bordure-texte">
            <div class="zone image-avant">
                <img src="Images/Arancini1.jpg" alt="">
                <div class="resume">
                    <?php
                        echo "<h3>$naissanceVenise[$lang]</3>";
                        echo "<p>$naissanceVeniseTexte[$lang]</p>";
                    ?>
                </div>
            </div>
            <a href="PageHistoire.php#un">
                <?= "<div class=\"voir\">$voir[$lang]</div>"?>
            </a>
        </div>
    </div>

    <div class="bg gris">
        <div class="widget bordure-texte">
            <div class="zone image-avant">
                <img src="Images/ImagesEvenement/masqueAvecRose.jpg" alt="">
                <div class="resume">
                    <?php
                        echo "<h3>$carnaval[$lang]</h3>";
                        echo "<p>$carnavalTexte[$lang]</p>";
                    ?>
                </div>
            </div>
            <a href="PageEvenement.php#JanvierMars">
                <?= "<div class=\"voir\">$voir[$lang]</div>"?>
            </a>
        </div>
    </div>

    <div class="bg gris">
        <div class="widget bordure-texte">
            <div class="zone image-avant">
                <img src="Images/Arancini1.jpg" alt="">
                <div class="resume">
                    <?php
                        echo "<h3>$romantique[$lang]</h3>";
                        echo "<p>$romantiqueTexte[$lang]</p>";
                    ?>
                </div>
            </div>
            <a href="PageSejourRomantique.php">
                <?= "<div class=\"voir\">$voir[$lang]</div>"?>
            </a>
        </div>
    </div>

    <div class="bg gris">
        <div class="widget bordure-texte">
            <div class="zone image-avant">
                <img src="Images/Arancini1.jpg" alt="">
                <div class="resume">
                <?php
                        echo "<h3>$rialto[$lang]</h3>";
                        echo "<p>$rialtoTexte[$lang]</p>";
                    ?>
                </div>

            </div>
            <a href="PageArchitecture.php#pontDeRialto">
                <?= "<div class=\"voir\">$voir[$lang]</div>"?>
            </a>
        </div>
    </div>
    <?php
        include("footer.php");
    ?>
</body>

</html>