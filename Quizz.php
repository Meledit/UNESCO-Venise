<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/styleQuizz.css">
    <title>Venise Démasquée</title>
</head>
<body>
<?php
    include("header.php");
    ?>
    <section class="showcase">
        <img src="Images/Gastronomie/Fond2.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <h1>Venise démasquée</h1>
                <h2>Une ville aux milles et une saveurs</h2>
    </section>

    <form action="" method="get">
        <div class="bg noir">
            <article class="centre">
                <h3>Bienvenue sur la page gastronomie&nbsp;!</h3>
                <p>
                    Ici vous retrouverez des informations 
                    concernant la gastronomie variée de Venise.
                    Si vous souhaitez accéder à une partie 
                    précise de sa gastronomie, cliquer sur une 
                    image de la mosaique qui la concerne.
                </p>
            </article>
        </div>

        <div class="IMGparallax IMG1 IMG-microscopique"></div>

        <div class="bg gris">
            <div class="zone-question">
                <h3>Question sur les putes batard</h3>
                <div class="question bordure-texte">
                    <img src="images/Arancini1.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                        <!-- name = questionX, id = questionX_numrep --> 
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_1' value='1' required>
                                <label for='question1_1' class='bonne'>Reponse numero 1</label>
                                ";
                            } else {
                                echo 
                                "
                                <input type='radio' name='question1' id='question1_1' value='1' required>
                                <label for='question1_1'>Reponse numero 1</label>
                                ";
                            }
                        ?>
                        </div>

                        <div class="reponse">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_2' value='0'>
                                <label for='question1_2' class='mauvaise'>Reponse numero 1</label>
                                ";
                            } else {
                                echo 
                                "
                                <input type='radio' name='question1' id='question1_2' value='0'>
                                <label for='question1_2'>Reponse numero 1</label>
                                ";
                            }
                        ?>
                        </div>

                        <div class="reponse">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_3' value='0'>
                                <label for='question1_3' class='mauvaise'>Reponse numero 1</label>
                                ";
                            } else {
                                echo 
                                "
                                <input type='radio' name='question1' id='question1_3' value='0'>
                                <label for='question1_3'>Reponse numero 1</label>
                                ";
                            }
                        ?>
                        </div>

                        <div class="reponse">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_4' value='0' class='mauvaise'>
                                <label for='question1_4' class='mauvaise'>Reponse numero 1</label>
                                ";
                            } else {
                                echo 
                                "
                                <input type='radio' name='question1' id='question1_4' value='0'>
                                <label for='question1_4'>Reponse numero 1</label>
                                ";
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg gris">
            <div class="zone-question">
                <h3>Question sur les putes batard</h3>
                <div class="question bordure-texte">
                    <img src="images/Arancini1.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_1' value='1' class='bonne' required>
                                <label for='question2_1' class='bonne'>Reponse numero 1</label>
                                ";
                            } else {
                                echo 
                                "
                                <input type='radio' name='question2' id='question2_1' value='1' required>
                                <label for='question2_1'>Reponse numero 1</label>
                                ";
                            }
                        ?>
                        </div>

                        <div class="reponse">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_2' value='0' class='mauvaise'>
                                <label for='question2_2' class='mauvaise'>Reponse numero 1</label>
                                ";
                            } else {
                                echo 
                                "
                                <input type='radio' name='question2' id='question2_2' value='0'>
                                <label for='question2_2'>Reponse numero 1</label>
                                ";
                            }
                        ?>
                        </div>

                        <div class="reponse">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_3' value='0'>
                                <label for='question2_3' class='mauvaise'>Reponse numero 1</label>
                                ";
                            } else {
                                echo 
                                "
                                <input type='radio' name='question2' id='question2_3' value='0'>
                                <label for='question2_3'>Reponse numero 1</label>
                                ";
                            }
                        ?>
                        </div>

                        <div class="reponse">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_4' value='0'>
                                <label for='question2_4' class='mauvaise'>Reponse numero 1</label>
                                ";
                            } else {
                                echo 
                                "
                                <input type='radio' name='question2' id='question2_4' value='0'>
                                <label for='question2_4'>Reponse numero 1</label>
                                ";
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $fini = array("J'ai fini !", "I'm done !");
        ?>
        <div class="bg gris">
            <?= "<input type=\"submit\" value=\"$fini[$lang]\" class=\"valider\"> " ?>

            <?php
            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
                $points = 0;
                $size = count($_POST);
                foreach ($_POST as $value) {
                    $points += $value;
                }

                $score1 = array("Bravo ! Votre score est de ...", "Well done! Your score is ...");
                $score2 = array("Bien ! Votre score est de ...", "Good! Your score is ...");
                $score3 = array("Peut mieux faire ! Votre score est de ...", "You can do better ! Your score is ...");
                $score4 = array("Dommage ! Votre score est de ...", "Too bad! Your score is ...");
                if ($points >= ($size * 0.75)) {

                    echo
                    "
                        <div class='score bordure-texte'>
                            <h3>$score1[$lang]</h3>
                            <p>$points" . " / " . "$size</p>
                        </div>
                        ";
                } else if ($points >= ($size * 0.5) && $points < ($size * 0.75)) {
                    echo
                    "
                        <div class='score bordure-texte'>
                        <h3>$score2[$lang]</h3>
                            <p>$points" . " / " . "$size</p>
                        </div>
                        ";
                } else if ($points >= ($size * 0.25) && $points < ($size * 0.5)) {
                    echo
                    "
                        <div class='score bordure-texte'>
                        <h3>$score3[$lang]</h3>
                            <p>$points" . " / " . "$size</p>
                        </div>
                        ";
                } else {
                    echo
                    "
                        <div class='score bordure-texte'>
                        <h3>$score4[$lang]</h3>
                            <p>$points" . " / " . "$size</p>
                        </div>
                        ";
                }
            }
            ?>
        </div>

        
    </form>
    <?php
    include("footer.php");
    ?>
</body>
</html>