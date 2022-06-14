<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleQuizz.css">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title> Quizz Architecture </title>
</head>

<body>
    <?php
    include("header.php");

    $venise = array("Venise démasquée", "Unmasking Venice");
    $sousTitre = array("La ville aux diverses styles", "The party city in action");
    $bienvenue = array("Bienvenue sur le Quizz Architecture&nbsp;!", "Welcome to the Architecture Quiz&nbsp;!");
    $bienvenueTexte = array("Ici vous pourrez tester vos connaissances liées à la page Architecture.
    Nous vous conseillons fortement de lire la page Architecture avant de vous lancer dans le quizz.
    Si vous êtes prêts, vous pouvez répondre en question ci-dessous.
     Bonne chance à vous !", "Here you can test your knowledge related to the Architecture page.
     We strongly advise you to read the Architecture page before taking the quiz.
     If you are ready, you can answer the questions below. Good luck to you!");
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

    <form action="" method="POST">

    <div class="bg gris">
            <article>
            <?php
            echo "<h3>$bienvenue[$lang]</h3>";
            echo "<p>$bienvenueTexte[$lang]</p>";
            ?>
            </article>
        </div>

        <div class="IMGparallax IMGArchitecture IMG-petite"></div>

        <div class="bg gris">
            <div class="zone-question">
                <?php
                $q1 = array("Quelle architecture n'est pas présente dans Venise ?", "What architecture is not present in Venice? ");
                $q1_1 = array("L'architecture vénitienne veneto-byzantine", "Venetian veneto-byzantine architecture");
                $q1_2 = array("Le style renaissance", "The renaissance style");
                $q1_3 = array("L’architecture classique", "Classical architecture");
                $q1_4 = array("Le style baroque", "The Baroque style");
                echo "<h3>$q1[$lang]</h3>";

                ?>
                <div class="question bordure-texte">
                    <img src="Images/Architecture/VeniseArchitecture.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <!-- name = questionX, id = questionX_numrep -->
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_1' value='0' required>
                                <label for='question1_1' class='mauvaise'>$q1_1[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_1' value='0' required>
                                <label for='question1_1'>$q1_1[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_2' value='0'>
                                <label for='question1_2' class='mauvaise'>$q1_2[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_2' value='0'>
                                <label for='question1_2'>$q1_2[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"])  && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_3' value='1'>
                                <label for='question1_3' class='bonne'>$q1_3[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_3' value='1'>
                                <label for='question1_3'>$q1_3[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"])  && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_4' value='0'>
                                <label for='question1_4' class='mauvaise'>$q1_4[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_4' value='0'>
                                <label for='question1_4'>$q1_4[$lang]</label>
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
                <?php
                $q2 = array(
                    "Combien de ponts Venise possède-t-elle ?",
                    "How many bridges does Venice have ?"
                );
                $q2_1 = array("455", "455");
                $q2_2 = array("450", "450");
                $q2_3 = array("325", "325");
                $q2_4 = array("438", "438");

                echo "<h3>$q2[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Architecture/PontsVenise.jpeg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_1' value='1' required>
                                <label for='question2_1' class='bonne'>$q2_1[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_1' value='1' required>
                                <label for='question2_1'>$q2_1[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_2' value='0'>
                                <label for='question2_2' class='mauvaise'>$q2_2[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_2' value='0'>
                                <label for='question2_2'>$q2_2[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_3' value='0'>
                                <label for='question2_3' class='mauvaise'>$q2_3[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_3' value='0'>
                                <label for='question2_3'>$q2_3[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_4' value='0'>
                                <label for='question2_4' class='mauvaise'>$q2_4[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_4' value='0'>
                                <label for='question2_4'>$q2_4[$lang]</label>
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
                <?php
                $q3 = array(
                    "Citez un édifice de Venise utilisant l'architecture de la Renaissance ",
                    "Name a building of Venice using Renaissance architecture "
                );
                $q3_1 = array("Ca' Pesaro", "Ca' Pesaro");
                $q3_2 = array("Campanile de Saint-Marc", "Campanile di San Marco");
                $q3_3 = array("Palais des Doges", "Palazzo Ducale");
                $q3_4 = array("Palais Grimani", "Palazzo Grimani");

                echo "<h3>$q3[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Architecture/SantaMariadeiMiracoli.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_1' value='0' required>
                                <label for='question3_1' class='mauvaise'>$q3_1[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_1' value='0' required>
                                <label for='question3_1'>$q3_1[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_2' value='0' >
                                <label for='question3_2' class='mauvaise'>$q3_2[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_2' value='0'>
                                <label for='question3_2'>$q3_2[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_3' value='0'>
                                <label for='question3_3' class='mauvaise'>$q3_3[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_3' value='0'>
                                <label for='question3_3'>$q3_3[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_4' value='1'>
                                <label for='question3_4' class='bonne'>$q3_4[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_4' value='1'>
                                <label for='question3_4'>$q3_4[$lang]</label>
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
                <?php
                $q4 = array(
                    "Quel est le pont le plus visité de Venise ?  ",
                    "What is the most visited bridge in Venice ? "
                );
                $q4_1 = array("Le pont des soupirs", "Ponte dei sospiri");
                $q4_2 = array("Le pont du Rialto", "Ponte di Rialto");
                $q4_3 = array("Le pont de l'Académie", "Ponte dell'Accademia");
                $q4_4 = array("Le pont de la Constitution", "Ponte della Costituzione");

                echo "<h3>$q4[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Architecture/DifferentsPontsVenise.jpeg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question4' id='question4_1' value='0'required>
                                <label for='question4_1' class='mauvaise'>$q4_1[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question4' id='question4_1' value='0' required>
                                <label for='question4_1'>$q4_1[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question4' id='question4_2' value='1'>
                                <label for='question4_2' class='bonne'>$q4_2[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question4' id='question4_2' value='1'>
                                <label for='question4_2'>$q4_2[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question4' id='question4_3' value='0'>
                                <label for='question4_3' class='mauvaise'>$q4_3[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question4' id='question4_3' value='0'>
                                <label for='question4_3'>$q4_3[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question4' id='question4_4' value='0'>
                                <label for='question4_4' class='mauvaise'>$q4_4[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question4' id='question4_4' value='0'>
                                <label for='question4_4'>$q4_4[$lang]</label>
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
                <?php
                $q5 = array(
                    "En quelle année le Ca'D'oro à été construit ?",
                    "In what year was Ca'D'oro built ?"
                );
                $q5_1 = array("1412", "1412");
                $q5_2 = array("1414 ", "1414");
                $q5_3 = array("1420", "1420");

                echo "<h3>$q5[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Architecture/Cadoro.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question5' id='question5_1' value='1'required>
                                <label for='question5_1' class='bonne'>$q5_1[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question5' id='question5_1' value='1' required>
                                <label for='question5_1'>$q5_1[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question5' id='question5_2' value='0'>
                                <label for='question5_2' class='mauvaise'>$q5_2[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question5' id='question5_2' value='0'>
                                <label for='question5_2'>$q5_2[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question5' id='question5_3' value='0'>
                                <label for='question5_3' class='mauvaise'>$q5_3[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question5' id='question5_3' value='0'>
                                <label for='question5_3'>$q5_3[$lang]</label>
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
            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
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

    