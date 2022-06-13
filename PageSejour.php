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

    $venise = array("Venise démasquée", "Unmasking Venice");
    $sousTitre = array("Une ville à voir sous tous les angles", "A city to see from every angle");
    $bienvenue = array("Bienvenue sur la page des séjours", "Welcome to the stays page");
    $bienvenueTexte = array(
        "Ici vous retrouverez différents parcours vous accompagnant pour découvrir les différents thèmes de Venise dans vos voyages dans la ville du lion ailé. Bon séjour!",
        "Here you will find different itineraries to help you discover the different themes of Venice in your travels in the city of the winged lion. Enjoy your stay!"
    );

    $titre = array("Nos parcours", "Our stays");

    $BoutonAller = array("Aller", "Go");

    $GourmandTitre = array("Parcours Gourmand", "The Gourmet Stay");
    $RomantiqueTitre = array("Parcours Romantique", "Romantic Journey");
    $IncontournablesTitre = array("Parcours des Incontournables", "The Must-See Stay");

    $Gourmand = array(
        "Un parcours de 2 jours permettant de découvrir toutes les spécialités culinaires
        de Venise à travers divers restaurants.",
        "A 2-day tour to discover all the culinary specialities of Venice
        of Venice through various restaurants."
    );

    $Romantique = array(
        "Un parcours de 3 jours à faire si vous venez avec votre partenaire afin de découvrir en couple
        ou lune de miel Venise dans sa splendeur romantique.",
        "A 3-day tour to do if you come with your partner to discover as a couple or on honeymoon Venice in its romantic splendour.
        or honeymoon Venice in its romantic splendour."
    );

    $Incontournables = array(
        "Un parcours de 4 jours à faire absolument en voyageant à Venise afin de découvrir ses lieux dont vous
        entendez toujours parler. Afin de pouvoir être celui qui a visité les classiques, ce parcours est là 
        pour vous.",
        "A 4-day tour is a must when travelling to Venice to discover the places you always hear about.
        you always hear about. If you want to be the one who has visited the classics, this itinerary is here 
        for you."
    );
    ?>

    <section class="showcase">
        <img src="Images/Sejours/bg.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <?php
                echo "<h1>$venise[$lang]</h1>";
                echo "<h2>$sousTitre[$lang]</h2>";
                ?>
            </div>
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

    <div class="IMGparallax IMG1 IMG-microscopique"></div>

    <div class="bg gris">
        <article class="centre">
            <h2><?= "$titre[$lang]" ?></h2>
        </article>
        <div class="widget bordure-texte">
            <div class="zone image-avant">
                <img src="Images/Sejours/ElMagazen.jpg" alt="">
                <div class="resume">
                    <?php
                    echo "<h3>$GourmandTitre[$lang]</h3>";
                    echo "<p> $Gourmand[$lang]</p>"
                    ?>
                </div>
            </div>
            <a href="PageSejourGourmand.php">
                <div class="voir"><?= "$BoutonAller[$lang]" ?></div>
            </a>
        </div>
    </div>

    <div class="bg gris">
        <div class="widget bordure-texte">
            <div class="zone image-avant">
            <img src="Images/Sejours/LaFenice.jpg" alt="">
                <div class="resume">
                    <?php
                    echo "<h3>$RomantiqueTitre[$lang]</h3>";
                    echo "<p> $Romantique[$lang]</p>"
                    ?>
                </div>
            </div>
            <a href="PageSejourRomantique.php">
                <div class="voir"><?= "$BoutonAller[$lang]" ?></div>
            </a>
        </div>
    </div>

    <div class="bg gris">
        <div class="widget bordure-texte">
            <div class="zone image-avant">
                <img src="Images/Sejours/PontDesSoupirs.jpg" alt="">
                <div class="resume">
                    <?php
                    echo "<h3>$IncontournablesTitre[$lang]</h3>";
                    echo "<p> $Incontournables[$lang]</p>"
                    ?>
                </div>
            </div>
            <a href="PageSejourFamous.php">
                <div class="voir"><?= "$BoutonAller[$lang]" ?></div>
            </a>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>

</body>

</html>