<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title>Culture</title>
</head>
<body>
    <?php
        include("header.php");
        $aller = array("Aller","Go to");
        $presentationTitre = array("Venise, ses quatre forces&nbsp;...","Venice, its four forces&nbsp;...");
    
        $profondeur = array("Pour aller plus en profondeur","To go into more detail");
        $saGastronomie = array("Sa Gastronomie","Its Gastronomy");
        $gastronomie1 = array("La gastronomie de Venise vous intéresse ? Venez découvrir la gastronomie de Venise 
        sous tout ses angles, de sa proximité avec la mer à ses desserts  emblématiques en passant par sa Street-Food.","Are you 
        interested in the gastronomy of Venice? Come and discover the gastronomy of Venice from every angle from all angles, from 
        its proximity to the sea its emblematic desserts and its street food.");
    
        $sonArchitecture = array("Son Architecture","Its Architecture");
        $architecture1 = array("Venise regroupe en sa ville plusieurs styles architecturaux de différentes époques, venez découvrir ces styles 
        architecturaux unique à travers les différents édifices de Venise.","Venice is home to many different architectural styles from different 
        eras. Come and discover these unique architectural styles through the different buildings of Venice.");
    
        $sesEvenement = array("Ses Événements","Its events");
        $evenement1 = array("Découvrez Venise, la ville de la fête avec ses différents événements durant l'année qui vous révelera la vie intérieur 
        de la ville italienne.","Discover Venice, the city of celebrations with its various events during the year that will reveal the inner life 
        of the Italian city.");

        $sesOeuvres = array("Ses Personnalités et Oeuvres","Its personalities and arts");
        $oeuvre1 = array("Venise à été le berceau de nombreux artistes et inventeurs, mais elle à aussi inspiré de nombreuses oeuvres internationales. 
        Venez découvrir ceux qui ont tirés leurs inspirations de Venise, ainsi que la riche histoire de cette ville.","Venice has been the home of many 
        artists and inventors, but it has also inspired many international works. Come and discover those who have drawn their inspiration from Venice, 
        as well as the rich history of this city.");
    
    ?>
    <section class="showcase">
        <img src="Images/Gastronomie/Fond2.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <h1>Venise démasquée</h1>
                <h2>La ville du lion ailé vous révèle tous ses secrets</h2>
            </div>
    </section>

    <div class="bg noir">
        <article class="centre">
            <?php 
            echo "<h3>$presentationTitre[$lang]</h3>";
            ?>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Aliquid atque exercitationem ea voluptate, delectus quasi
                eaque tempore eveniet cupiditate praesentium.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Nam ab voluptates nihil 
                est quas nobis maxime quam fugiat aut at.
            </p>
        </article>
    </div>

    <div class="IMGparallax IMG1 IMG-microscopique"></div>

    <div class="bg gris">
        <article class="centre">
            <?="<h2>$profondeur[$lang]</h2>"?>
        </article>
        <div class="widget bordure-texte">
            <div class="zone image-avant">
                <img src="Images/Gastronomie/Fond2.jpg" alt="">
                <div class="resume">
                    <?php 
                        echo "<h3>$saGastronomie[$lang]</h3>";
                        echo "<p>$gastronomie1[$lang]</p>";
                    ?>
                </div>
            </div>
            <?= "<a href=\"PageGastronomie.php\"><div class=\"voir\">$aller[$lang]</div></a> "?>
        </div>
    </div>

    <div class="bg gris">
        <div class="widget bordure-texte">
            <div class="zone image-apres">
                <div class="resume">
                    <?php 
                        echo "<h3>$sonArchitecture[$lang]</h3>";
                        echo "<p>$architecture1[$lang]</p>";
                    ?>
                </div>
                <img src="Images/Architecture/Venise1Fond.jpg" alt="">
            </div>
            <?= "<a href=\"PageArchitecture.php\"><div class=\"voir\">$aller[$lang]</div></a>" ?>
        </div>
    </div>

    <div class="bg gris">
        <div class="widget bordure-texte">
            <div class="zone image-avant">
                <img src="Images/ImagesEvenement/FondEvenement.jpg" alt="">
                <div class="resume">
                    <?php
                        echo "<h3>$sesEvenement[$lang]</h3>";
                        echo "<p>$evenement1[$lang]</p>";
                    ?>
                </div>
            </div>
            <?= "<a href=\"PageEvenement.php\"><div class=\"voir\">$aller[$lang]</div></a>" ?>
        </div>
    </div>

    <div class="bg gris">
        <div class="widget bordure-texte">
            <div class="zone image-apres">
                <div class="resume">
                    <?php
                     echo "<h3>$sesOeuvres[$lang]</h3>";
                     echo "<p>$oeuvre1[$lang]</p>";
                    ?>
                </div>
                <img src="Images/Oeuvre/LionSaintMarc.jpg" alt="">
            </div>
            <?= "<a href=\"PageOeuvre.php\"><div class=\"voir\">$aller[$lang]</div></a>" ?>
        </div>
    </div>
    <?php
        include("footer.php");
    ?>
</body>
</html>