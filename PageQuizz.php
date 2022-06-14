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

        $veniseTitre=array("Venise démasquée","Unmasking Venice");
        $veniseSousTitre=array("Une ville pleine de culture","A city full of culture");
        $aller = array("Aller","Go");
        $presentationTitre = array("Venise, en quatres quizz&nbsp;...","Venice, in four quizzes&nbsp;...");
        $presentation = array("Venise possède une riche culture, que vous avez pu découvirir à travers tous nos articles. Pensez-vous connaître Venise désormais ?
        Nous vous proposons de vous tester sur quatres quizz différents. Chaque quizz possède son thème, êtes vous prêt à relever le défi ?","Venice has a rich culture, 
        which you have been able to discover through all our articles. Do you think you know Venice now?
        We suggest you test yourself on four different quizzes. Each quiz has its own theme, are you ready to take up the challenge?");
    
        $testezvous = array("Pour vous tester","To test yourself");
        $quizzGastronomie = array("Quizz Gastronomie","Gastronomy Quiz");
        $quizzGastronomie1 = array("Vous pensez tout connaître de la gastronomie de Venise, de sa StreetFood à ses plats les plus célèbres. Venez testez vos connaissances",
        "You think you know everything about the gastronomy of Venice, from its StreetFood to its most famous dishes. Come and test your knowledge");
    
        $quizzArchitecture = array("Quizz Architecture","Architecture Quiz");
        $quizzArchitecture1 = array("Vous pensez tout connaître de l'architecure de Venise et des différents styles qui se sont succéder. Venez testez vos connaissances","You 
        think you know everything about the architecture of Venice and the different styles that followed. Come and test your knowledge");
    
        $quizzEvenement = array("Quizz Événements","Events Quiz");
        $quizzEvenement1 = array("Vous pensez tout connaître des évènements de Venise, de son célèbre carnaval à son marathon. Venez testez vos connaissances","You think you 
        know everything about Venice, from its famous carnival to its marathon. Come and test your knowledge");

        $quizzHistoire = array("Quizz Histoire","History Quiz");
        $quizzHistoire1 = array("Vous pensez tout connaître de l'Histoire de Venise, de sa création à aujourd'hui. Venez testez vos connaissances","You think you know everything 
        about the history of Venice, from its creation to today. Come and test your knowledge");
    
    ?>
    <section class="showcase">
        <img src="Images/Gastronomie/Fond3.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <?php
                echo "<h1>$veniseTitre[$lang]</h1>";
                echo "<h2>$veniseSousTitre[$lang]</h2>";
                ?>
            </div>
    </section>

    <div class="bg noir shadow">
        <article class="centre">
            <?php 
            echo "<h3>$presentationTitre[$lang]</h3>";
            echo "<p>$presentation[$lang]</p>";
            ?>
        </article>
    </div>

    <div class="IMGparallax IMG1 IMG-microscopique"></div>

    <div class="bg gris">
        <article class="centre">
            <?="<h2>$testezvous[$lang]</h2>"?>
        </article>
        <div class="widget bordure-texte">
            <div class="zone image-avant">
                <img src="Images/Gastronomie/Tiramisu3.jpg" alt="">
                <div class="resume">
                    <?php 
                        echo "<h3>$quizzGastronomie[$lang]</h3>";
                        echo "<p>$quizzGastronomie1[$lang]</p>";
                    ?>
                </div>
            </div>
            <?= "<a href=\"QuizzGastronomie.php\"><div class=\"voir\">$aller[$lang]</div></a> "?>
        </div>
    </div>

    <div class="bg gris">
        <div class="widget bordure-texte">
            <div class="zone image-apres">
                <div class="resume">
                    <?php 
                        echo "<h3>$quizzArchitecture[$lang]</h3>";
                        echo "<p>$quizzArchitecture1[$lang]</p>";
                    ?>
                </div>
                <img src="Images/Architecture/Venise1Fond.jpg" alt="">
            </div>
            <?= "<a href=\"QuizzArchitecture.php\"><div class=\"voir\">$aller[$lang]</div></a>" ?>
        </div>
    </div>

    <div class="bg gris">
        <div class="widget bordure-texte">
            <div class="zone image-avant">
                <img src="Images/ImagesEvenement/FondEvenement.jpg" alt="">
                <div class="resume">
                    <?php
                        echo "<h3>$quizzEvenement[$lang]</h3>";
                        echo "<p>$quizzEvenement1[$lang]</p>";
                    ?>
                </div>
            </div>
            <?= "<a href=\"QuizzEvenement.php\"><div class=\"voir\">$aller[$lang]</div></a>" ?>
        </div>
    </div>

    <div class="bg gris">
        <div class="widget bordure-texte">
            <div class="zone image-apres">
                <div class="resume">
                    <?php 
                        echo "<h3>$quizzHistoire[$lang]</h3>";
                        echo "<p>$quizzHistoire1[$lang]</p>";
                    ?>
                </div>
                <img src="Images/Architecture/Venise1Fond.jpg" alt="">
            </div>
            <?= "<a href=\"QuizzHistoire.php\"><div class=\"voir\">$aller[$lang]</div></a>" ?>
        </div>
    </div>
    <?php
        include("footer.php");
    ?>
</body>
</html>