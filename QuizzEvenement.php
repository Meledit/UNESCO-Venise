<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleQuizz.css">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title> Quizz Evenement </title>
</head>

<body>
    <?php
    include("header.php");

    $venise = array("Venise démasquée", "Unmasking Venice");
    $sousTitre = array("La ville de la fête en action", "The party city in action");
    $bienvenue = array("Bienvenue sur le Quizz Evenemment&nbsp;!", "Welcome to the Events Quiz&nbsp;!");
    $bienvenueTexte = array("Ici vous pourrez tester vos connaissances liées à la page Evenement.
    Nous vous conseillons fortement de lire la page Evenement avant de vous lancer dans le quizz.
    Si vous êtes prêts, vous pouvez répondre en question ci-dessous.
    Bonne chance à vous !", "Here you can test your knowledge of the Events page.
    We strongly advise you to read the Events page before taking the quiz.
    If you are ready, you can answer the questions below. Good luck to you!");
    ?>

    <section class="showcase">
        <img src="Images/ImagesEvenement/FondEvenement.jpg" alt="" class="imgBg">
            <div class="overlay"></div>
                <div class="container">
                    <div class="text">
                    <?php
                        echo "<h1>$venise[$lang]</h1>";
                        echo "<h2>$sousTitre[$lang]</h2>";
                    ?>
    </section>

    <form action="" method="POST">

    <div class="bg noir">
        <article>
        <?php
            echo "<h3>$bienvenue[$lang]</h3>";
            echo "<p>$bienvenueTexte[$lang]</p>";
            ?>
        </article>
    </div>

    <div class="IMGparallax IMGEvenement IMG-petite"></div>

    <div class="bg gris">
            <div class="zone-question">
                <?php
                $q1 = array("Combien de temps chaque année dure le Carnaval de Venise ?", "How long does the Venice Carnival last each year?");
                $q1_1 = array("8 jours", "8 days");
                $q1_2 = array("10 jours", "10 days");
                $q1_3 = array("12 jours", "12 days");
                $q1_4 = array("15 jours", "15 dayss");
                echo "<h3>$q1[$lang]</h3>";

                ?>
                <div class="question bordure-texte">
                    <img src="Images/ImagesEvenement/carnaval-Venise.jpeg" alt="">
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
                                <input type='radio' name='question1' id='question1_2' value='1'>
                                <label for='question1_2' class='bonne'>$q1_2[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_2' value='1'>
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
                    "Quand s'est déroulé la première fête du Redentore ?",
                    "When did the first Redentore party take place ?"
                );
                $q2_1 = array("Le 12 Juillet 1578", "The 12 July 1578");
                $q2_2 = array("Le 14 Juillet 1620", "The 14th July 1620");
                $q2_3 = array("Le 30 Mars 1577", "The 30th March 1577");
                $q2_4 = array("Le 21 Juillet 1577", "The 21st July 1577");

                echo "<h3>$q2[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/ImagesEvenement/quizz-BiennalesVenise.png" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
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
                                <input type='radio' name='question2' id='question2_4' value='1'>
                                <label for='question2_4' class='bonne'>$q2_4[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_4' value='1'>
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
                    "Qui est le créateur du festival internationale du film de Venise ?",
                    "Who created the Venice International Film Festival?"
                );
                $q3_1 = array("Giuseppe Volpi di Misurata", "Giuseppe Volpi di Misurata");
                $q3_2 = array("Luciano de Feo", "Luciano de Feo");
                $q3_3 = array("Guillermo del Toro", "Guillermo del Toro");
                $q3_4 = array("Amedeo Nazzari", "Amedeo Nazzari");

                echo "<h3>$q3[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/ImagesEvenement/festival-filmVenise.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_1' value='1' required>
                                <label for='question3_1' class='bonne'>$q3_1[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_1' value='1' required>
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
                    "Par quel lieu ne passe pas le Venice Marathon ? ",
                    "Where does the Venice Marathon not go ?"
                );
                $q4_1 = array("Piazza San Marco", "Piazza San Marco");
                $q4_2 = array("Palais des Doges", "Palazzo Ducale");
                $q4_3 = array("Riva Sette Martiri", "Riva Sette Martiri");
                $q4_4 = array("Pont du Rialto ", "Ponte di Rialto");

                echo "<h3>$q4[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/ImagesEvenement/Venise-marathon.png" alt="">
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
                                <input type='radio' name='question4' id='question4_2' value='0'>
                                <label for='question4_2' class='mauvaise'>$q4_2[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question4' id='question4_2' value='0'>
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
                                <input type='radio' name='question4' id='question4_4' value='1'>
                                <label for='question4_4' class='bonne'>$q4_4[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question4' id='question4_4' value='1'>
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
                    "Quel est depuis le début le but de la Vogalonga de Venise ? ",
                    "What has been the purpose of the Venice Vogalonga from the beginning ?"
                );
                $q5_1 = array("Inviter les habitants à sortir plus de chez eux ", "Inviting people to get out of their homes more ");
                $q5_2 = array("Avoir la plus belle embarcation ", "Have the most beautiful boat ");
                $q5_3 = array("Sensibiliser la population sur la dangerosité des barques à moteur pour le mouvement ondulatoire de la ville", "Raise awareness of the danger of motorboats for the undulatory movement of the city");

                echo "<h3>$q5[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/ImagesEvenement/Vogalonga-Venise.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"])) {
                                echo
                                "
                                <input type='radio' name='question5' id='question5_1' value='0'required>
                                <label for='question5_1' class='mauvaise'>$q5_1[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question5' id='question5_1' value='0' required>
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
                                <input type='radio' name='question5' id='question5_3' value='1'>
                                <label for='question5_3' class='bonne'>$q5_3[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question5' id='question5_3' value='1'>
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