<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/styleQuizz.css">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title>Venise Démasquée</title>
</head>

<body>
    <?php
    include("header.php")
    ?>
    <section class="showcase">
        <img src="Images/QuizzBg.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <h1>Venise démasquée</h1>
                <h2>Une ville historique</h2>
            </div>
        </div>
    </section>

    <form action="" method="POST">
        <div class="bg noir shadow">
            <article class="centre">
                <h3>Vous pensez tout savoir sur l'histoire de Venise&nbsp;?</h3>
                <p>
                    Ici vous retrouverez plusieurs questions pour tester vos
                    connaissances sur l'histoire de la ville lumière. Vous pouvez vous aidez si vous
                    le souhaitez de <a href="PageHistoire.php">la page histoire.</a>
                </p>
            </article>
        </div>

        <div class="IMGparallax IMG1 IMG-microscopique"></div>

        <div class="bg gris">
            <div class="zone-question">
                <?php
                $q1 = array(
                    "Pourquoi les habitants de Venise ont-ils choisient d'habiter sur une lagune ?",
                    "Why did the inhabitants of Venice choose to live on a lagoon?"
                );
                $q1_1 = array(
                    "Pour avoir une défense naturelle contre les adversaires",
                    "To have a natural defense against opponents"
                );
                $q1_2 = array("Pour se rafraichir en été", "To cool down in summer");
                $q1_3 = array("Car ils vénéraient des dieux aquatiques", "For they worshipped aquatic gods");
                echo "<h3>$q1[$lang]</h3>";
                ?>
                <div class="question bordure-texte">
                    <img src="Images/Histoire/veniseLaguneAvant.jpg" alt="Background de quizz">
                    <div class="reponses">
                        <div class="reponse">
                            <!-- name = questionX, id = questionX_numrep -->
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_1' value='1' required>
                                <label for='question1_1' class='bonne'>$q1_1[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_1' value='1' required>
                                <label for='question1_1'>$q1_1[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_3' value='0'>
                                <label for='question1_3' class='mauvaise'>$q1_3[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_3' value='0'>
                                <label for='question1_3'>$q1_3[$lang]</label>
                                ";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="bg gris">
            <div class="zone-question">
                <?php
                $q2 = array(
                    "Dans quelle région se situe Venise ?",
                    "In which region is Venice located?"
                );
                $q2_1 = array("La Sicile", "Sicily");
                $q2_2 = array("La Vénétie", "Veneto");
                $q2_3 = array("La Sardaigne", "Sardinia");
                $q2_4 = array("La Lombardie", "Lombardy");

                echo "<h3>$q2[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Histoire/Venetie.jpg" alt="Vénétie">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_1' value='0' required>
                                <label for='question2_1' class='mauvaise'>$q2_1[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_1' value='0' required>
                                <label for='question2_1'>$q2_1[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_2' value='1'>
                                <label for='question2_2' class='bonne'>$q2_2[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_2' value='1'>
                                <label for='question2_2'>$q2_2[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
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
                    "Comment se nommait la personne qui gouvernait Venise ?",
                    "What was called the person who governed Venice ?"
                );
                $q3_1 = array("L'empereur", "The emperor");
                $q3_2 = array("Le doge", "The doge");
                $q3_3 = array("Le pape", "The Pope");
                $q3_4 = array("Le président", "The president");

                echo "<h3>$q3[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Histoire/Doge.jpg" alt="Doge de Venise">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_2' value='1' >
                                <label for='question3_2' class='bonne'>$q3_2[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_2' value='1'>
                                <label for='question3_2'>$q3_2[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_4' value='0'>
                                <label for='question3_4' class='mauvaise'>$q3_4[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_4' value='0'>
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
                    "Où se sont regrouper les petites communanutés de Venise au VIIème siècle ?",
                    "Where did the small communities of Venice gather in the 7th century?"
                );
                $q4_1 = array("Murano", "Murano");
                $q4_2 = array("Rialto", "Rialto");
                $q4_3 = array("Burano", "Burano");
                $q4_4 = array("Rome", "Rome");

                echo "<h3>$q4[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Histoire/Rialto.jpg" alt="Rialto">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
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
                    "Pourquoi Venise a-t-elle du pouvoir ?",
                    "Why does Venice have power?"
                );
                $q5_1 = array("C'est une ville centrale dans le commerce maritime", "It is a central city in the maritime trade");
                $q5_2 = array("C'est une ville centrale dans l'agriculture de l'Italie", "It is a central city in the agriculture of Italy");
                $q5_3 = array("C'est une ville militaire importante", "It is an important military city");

                echo "<h3>$q5[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Histoire/venise20emeSiecle.jpg" alt="Venise au 20ème siècle">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
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

        <div class="bg gris">
            <div class="zone-question">
                <?php
                $q6 = array(
                    "Venise était une ...",
                    "Vense was a ..."
                );
                $q6_1 = array("République démocratique", "Democratic Republic");
                $q6_3 = array("République aristocratique", "Aristocratic Republic");
                $q6_2 = array("République constitutionnelle", "Constitutional Republic");
                $q6_4 = array("Monarchie", "Monarchy");

                echo "<h3>$q6[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Histoire/veniseAujourdhui.jpg" alt="Venise aujourd'hui">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
                                echo
                                "
                                <input type='radio' name='question6' id='question6_1' value='0' required>
                                <label for='question6_1' class='mauvaise'>$q6_1[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question6' id='question6_1' value='0' required>
                                <label for='question6_1'>$q6_1[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
                                echo
                                "
                                <input type='radio' name='question6' id='question6_2' value='0'>
                                <label for='question6_2' class='mauvaise'>$q6_2[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question6' id='question6_2' value='0'>
                                <label for='question6_2'>$q6_2[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
                                echo
                                "
                                <input type='radio' name='question6' id='question6_3' value='1'>
                                <label for='question6_3' class='bonne'>$q6_3[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question6' id='question6_3' value='1'>
                                <label for='question6_3'>$q6_3[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
                                echo
                                "
                                <input type='radio' name='question6' id='question6_4' value='0'>
                                <label for='question6_4' class='mauvaise'>$q6_4[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question6' id='question6_4' value='0'>
                                <label for='question6_4'>$q6_4[$lang]</label>
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
            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"])) {
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