<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title> Venise Démasquée </title>
</head>

<body>
<?php
    include("header.php");

    $credits=array("Crédits (Merci à eux)","Credits (Many thanks to them)");
?>
<div class="bg gris">
        <article class="centre">
            <?= "<h2>$credits[$lang]</h2>"?>
            <p>David Cabrera Navarro</p>
            <p>Filipo Bacci</p>
            <p>ALLEKO</p>
            <p>Francesco Vignali</p>
            <p>Atteztazione</p>
            <p>Ekaterina Fedulyeva</p>
            <p>Gustave Doré</p>
            <p>Faustin Besson</p>
            <p>Carl Ofterdinger</p>
            <p>Auguste Charpentier</p>
            <p>Charl Durand</p>
            <p>Boulogne Valentin</p>
            <p>Bogitw</p>
            <p>Piwasex</p>
            <p>Danjela Radakovic</p>
            <p>Je Leb</p>
            <p>loveEXPLORING</p>
            <p>e-Venise</p>
            <p>Huebistar</p>
            <p>Artheos</p>
            <p>Sarah Loetscher</p>
            <p>FuricXI</p>
            <p>NakNakNak</p>
            <p>Radmi25</p>
            <p>Awsoley</p>
            <p>RPerucho</p>
            <p>Emma Theresa</p>
        </article>
</div>
<?php
    include("footer.php");
?>
</body>