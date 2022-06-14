<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title> Venise Démasquée </title>
</head>

<body>
<?php
    include("header.php");

    $propriétaire=array("Propriétaire","Owner");

    $createurs=array("Créateurs","Creators");
    
    $conditions=array("Conditions Générales d'Utilisation","Terms and Conditions of Use");
    $conditions1=array("Ce site a pour unique objectif de promouvoir la culture autour de Venise et sa Lagune. Venise et sa Lagune sont inscrit au patrimoine culturel de l'UNESCO. Afin de partager la culture autour de Venise, vous trouverez sur ce site des articles et des quizz afin de tester vos connaissances.",
    "The sole purpose of this site is to promote the culture around Venice and its Lagoon. Venice and its Lagoon are part of the UNESCO cultural heritage. In order to share the culture around Venice, you will find on this site articles and quizzes to test your knowledge.");
    $conditions2=array("Vous pourriez trouvez sur ce site, des liens menant à des sites externes. Nous nous sommes assurés en amont de ce que présentaient ces sites, mais ne pouvons contrôler leurs potentiels changements dans leur futur","You may find links on this site to external sites. We have checked these sites in advance, but cannot control how they may change in the future.");
    $conditions3=array("Ce site ayant pour objectif de vous partager la culture de Venise, l'accès n'est restreint à personne.","As this site aims to share the culture of Venice with you, access is not restricted to anyone.");
    $conditions4=array("Nous ne récupérons aucune de vos données personnelles. La seule et unique information que nous utilisons est la langue que vous avez sélectionnée pour vos futures visites","We do not collect any of your personal data. The only information we use is the language you have selected for future visits");
    $hebergeur=array("Hébergeur","Host");
?>
<div class="bg gris">
        <article class="centre">
            <?= "<h2>$propriétaire[$lang]</h2>"?>
            <p>Idrissi Nidal</p>
            <p>28 avenue de la victoire, Lagny Sur Marne 77400</p>
            <p>07 82 20 07 42</p>
            <p>nidalidrissi7@gmail.com</p>
        </article>
</div>
<div class="bg gris">
        <article class="centre">
            <?= "<h2>$createurs[$lang]</h2>"?>
            <p>Idrissi Nidal</p>
            <p>Poulain Kyrian</p>
            <p>Motuel Valentin</p>
            <p>Villa Alessandro</p>
            <p>Leveque Lucas</p>
        </article>
</div>

<div class="bg gris">
        <article class="centre">
            <?php
            echo"<h2>$conditions[$lang]</h2>";
            echo "<p>$conditions1[$lang]</p>";
            echo "<p>$conditions2[$lang]</p>";
            echo "<p>$conditions3[$lang]</p>";
            echo "<p>$conditions4[$lang]</p>";
            ?>


        </article>
</div>

<div class="bg gris">
        <article class="centre">
            <?= "<h2>$hebergeur[$lang]</h2>"?>
            <p>Université Gustave Eiffel</p>
            <p> 01 60 95 75 00</p>
            <p> 5 Bd Descartes, 77454 Champs-sur-Marne</p>
        </article>
</div>
<?php
    include("footer.php");
?>
</body>