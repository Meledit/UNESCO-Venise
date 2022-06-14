<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title>Venise</title>
</head>

<body>
    <?php
    // Gestion de la traduction
    session_start();

    if (isset($_GET['lang'])) {
        $_SESSION['lang'] = $_GET['lang'];
        $lang = $_GET['lang'];
    } else if (!isset($_SESSION['lang']) || empty($_SESSION['lang'])) {
        $_SESSION['lang'] = 0;
        $lang = 0;
    } else {
        $lang = $_SESSION['lang'];
    }
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https";
    else
        $url = "http";

    // Ajoutez // à l'URL.
    $url .= "://";

    // Ajoutez l'hôte (nom de domaine, ip) à l'URL.
    $url .= $_SERVER['HTTP_HOST'];

    // Ajouter l'emplacement de la ressource demandée à l'URL
    $url .= $_SERVER['PHP_SELF'];

    // Preparation des textes affichés

    $culture = array("Culture", "Culture");
    $gastronomie = array("Gastronomie", "Gastronomy");
    $histoire = array("Histoire", "History");
    $sejours = array("Séjours", "Stays");
    $langues = array("Langues", "Languages");
    $architecture = array("Architecture", "Architecture");
    $quizz = array("Quizz", "Quiz");
    $quizz2 = array("Nos quizz", "Our quizzes");
    $evenement = array("Événements", "Events");
    $oeuvres = array("Oeuvres et Personnalités", "Arts and Personalities");

    ?>


    <a href="#" class="jump">
        <img src="Images/btt.png" alt="">
    </a>
    <header>
        <input type="radio" id="burger" name="burger">
        <label for="burger"><img src="Images/menu.png" alt=""></label>
        <div class="navbar">
            <div class="burgerSquare">
                <div class="zoneBurger">
                    <input type="radio" id="burgerClose" name="burger">
                    <label for="burgerClose"><img src="Images/close.png" alt=""></label>
                </div>
            </div>
            <ul>
                <li>
                    <?php
                    echo "<h3>$histoire[$lang]</h3>";
                    echo "<a href=\"PageHistoire.php\">$histoire[$lang]</a>";
                    ?>


                </li>
                <li>
                    <?php
                    echo "<h3>$culture[$lang]</h3>";
                    echo "<a href=\"PageGastronomie.php\">$gastronomie[$lang]</a>";
                    ?>

                    <?= "<a href=\"PageArchitecture.php\">$architecture[$lang]</a>" ?>
                    <?= "<a href=\"PageEvenement.php\">$evenement[$lang]</a>" ?>
                    <?= "<a href=\"PageOeuvre.php\">$oeuvres[$lang]</a>" ?>
                </li>
                <li>
                    <?php
                    echo "<h3>$sejours[$lang]</h3>";
                    echo "<a href=\"PageSejour.php\">$sejours[$lang]</a>";
                    ?>
                </li>
                <li>
                    <?= "<h3>$quizz[$lang]</h3>" ?>
                    <?= "<a href=\"PageQuizz.php\">$quizz2[$lang]</a>" ?>
                </li>
                <li>
                    <?php
                    echo "<h3>$langues[$lang]</h3>";
                    ?>

                    <div class="drapeaux">
                        <?php
                        echo "<a href=\"$url?lang=0\"><img src=\"Images/drapeau0.png\" alt=\"\"></a>";
                        echo "<a href=\"$url?lang=1\"><img src=\"Images/drapeau1.png\" alt=\"\"></a>";
                        ?>
                    </div>
                </li>
            </ul>
        </div>
        </div>
        <a href="index.php"><img src="Images/eye-mask.png" alt="Logo du site" class="logo"></a>
    </header>


</body>

</html>