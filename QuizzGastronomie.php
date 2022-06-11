<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleQuizz.css">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title>Quizz Gastronomie</title>
</head>

<body>
    <?= include("header.php") ?>
    <section class="showcase">
        <img src="Images/Gastronomie/Fond2.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <h1>Venise démasquée</h1>
                <h2>Une ville aux milles et une saveurs</h2>
            </div>
        </div>
    </section>

    <form action="" method="POST">
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
                <?php
                $q1 = array("D'où le Carpaccio tire-t-il son nom ?", "Where does Carpaccio get its name from ?");
                $q1_1 = array("D'un célèbre peintre italien", "From a famous Italian painter");
                $q1_2 = array("D'une ville aux maisons rouges au sud de l'Italie", "From a town with red houses in southern Italy");
                $q1_3 = array("De \"Carpet\" en anglais qui signifie Tapis, et donc cette idée de finesse", "From \"Carpet\" and therefore this idea of finesse");
                $q1_4 = array("De la partie de la viande utilisée dans le plat", "From the part of the meat used in the dish");
                echo "<h3>$q1[$lang]</h3>";

                ?>
                <div class="question bordure-texte">
                    <img src="Images/Gastronomie/Carpaccio1.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <!-- name = questionX, id = questionX_numrep -->
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                                echo
                                "
                                <input type='radio' name='question1' id='question1_4' value='0' class='mauvaise'>
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
                $q2 = array("Le Fegato alla Veneziana est accompagné d'oignons, mais dans sa recette originale, qu'est ce qui remplaçait les oignons ?",
                "Fegato alla Veneziana comes with onions, but in the original recipe, what replaced the onions ?");
                $q2_1=array("Des olives","Olives");
                $q2_2=array("Des figues","Figs");
                $q2_3=array("Des petits pois","Peas");
                $q2_4=array("Des carrottes","Carrots");
                
                echo "<h3>$q2[$lang]</h3>";
                ?>
                
                <div class="question bordure-texte">
                    <img src="Images/Gastronomie/Fegatto1(ALLEKO).jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_1' value='1' class='mauvaise' required>
                                <label for='question2_1' class='mauvaise'>$q2_1[$lang]</label>
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_2' value='0' class='bonne'>
                                <label for='question2_2' class='bonne'>$q2_2[$lang]</label>
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                                echo
                                "
                                <input type='radio' name='question2' id='question2_3' value='0' class='mauvaise'>
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
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
                $q3 = array("Que sont les Bigolis, spécialité de la Vénétie, région d'Italie où se trouve Venise ?",
                "What are Bigolis, a speciality of the Veneto region of Italy, where Venice is located ?");
                $q3_1=array("Des petits biscuits aux agrumes.","Small citrus biscuits.");
                $q3_2=array("Des spaghettis épaisses à base de blé complet.","Thick spaghetti made from wholegrain wheat.");
                $q3_3=array("Un plat à base de fruits de mer et d'encre de seiche.","A seafood and squid ink dish.");
                $q3_4=array("Des pâtes ressemblant à des bigoudis.","Pasta that looks like curlers.");
                
                echo "<h3>$q3[$lang]</h3>";
                ?>
                
                <div class="question bordure-texte">
                    <img src="Images/Gastronomie/Fegatto1(ALLEKO).jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_1' value='1' class='mauvaise' required>
                                <label for='question3_1' class='mauvaise'>$q3_1[$lang]</label>
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_2' value='0' class='bonne'>
                                <label for='question3_2' class='bonne'>$q3_2[$lang]</label>
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                                echo
                                "
                                <input type='radio' name='question3' id='question3_3' value='0' class='mauvaise'>
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
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
                $q4 = array("Les baicolis sont des petits gâteaux originaires de Venise. A quelles occasions étaient-ils principalement mangés ? ",
                "Baicolis are small cakes from Venice. On what occasions were they mainly eaten?");
                $q4_1=array("Ils étaient dégustés pendant la période du Carnaval.","They were eaten during the Carnival period.");
                $q4_2=array("Ils accompagnaient les marins durant leurs voyages.","They accompanied the sailors on their travels.");
                $q4_3=array("Ils accompagnaient principalement les mariages, les naissances.","They mainly accompanied weddings and births.");
                $q4_4=array("Ils étaient dégustés pour tout les goûters.","They were used for all the snacks.");
                
                echo "<h3>$q4[$lang]</h3>";
                ?>
                
                <div class="question bordure-texte">
                    <img src="Images/Gastronomie/Fond3.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                                echo
                                "
                                <input type='radio' name='question4' id='question4_1' value='1' class='mauvaise' required>
                                <label for='question4_1' class='mauvaise'>$q4_1[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question4' id='question4_1' value='1' required>
                                <label for='question4_1'>$q4_1[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                                echo
                                "
                                <input type='radio' name='question4' id='question4_2' value='0' class='bonne'>
                                <label for='question4_2' class='bonne'>$q4_2[$lang]</label>
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                                echo
                                "
                                <input type='radio' name='question4' id='question4_3' value='0' class='mauvaise'>
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
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
                $q5 = array("Comment est cuite la viande du Lampredotto ? ",
                "How is the Lampredotto meat cooked ?");
                $q5_1=array("Ils étaient dégustés pendant la période du Carnaval.","They were eaten during the Carnival period.");
                $q5_2=array("Ils accompagnaient les marins durant leurs voyages.","They accompanied the sailors on their travels.");
                $q5_3=array("Ils accompagnaient principalement les mariages, les naissances.","They mainly accompanied weddings and births.");
                $q5_4=array("Ils étaient dégustés pour tout les goûters.","They were used for all the snacks.");
                
                echo "<h3>$q5[$lang]</h3>";
                ?>
                
                <div class="question bordure-texte">
                    <img src="Images/Gastronomie/Fond3.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                                echo
                                "
                                <input type='radio' name='question5' id='question5_1' value='1' class='mauvaise' required>
                                <label for='question5_1' class='mauvaise'>$q5_1[$lang]</label>
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                                echo
                                "
                                <input type='radio' name='question5' id='question5_2' value='0' class='bonne'>
                                <label for='question5_2' class='bonne'>$q5_2[$lang]</label>
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                                echo
                                "
                                <input type='radio' name='question5' id='question5_3' value='0' class='mauvaise'>
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

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                                echo
                                "
                                <input type='radio' name='question5' id='question5_4' value='0'>
                                <label for='question5_4' class='mauvaise'>$q5_4[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question5' id='question5_4' value='0'>
                                <label for='question5_4'>$q5_4[$lang]</label>
                                ";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg gris">
            <input type="submit" value="J'ai fini !" class="valider">

            <?php
            if (isset($_POST["question1"]) && isset($_POST["question2"])) {
                $points = 0;
                $size = count($_POST);
                foreach ($_POST as $value) {
                    $points += $value;
                }

                if ($points >= ($size * 0.75)) {
                    echo
                    "
                        <div class='score bordure-texte'>
                            <h3>Bravo ! Votre score est de ...</h3>
                            <p>$points" . " / " . "$size</p>
                        </div>
                        ";
                } else if ($points >= ($size * 0.5) && $points < ($size * 0.75)) {
                    echo
                    "
                        <div class='score bordure-texte'>
                            <h3>Bien ! Votre score est de ...</h3>
                            <p>$points" . " / " . "$size</p>
                        </div>
                        ";
                } else if ($points >= ($size * 0.25) && $points < ($size * 0.5)) {
                    echo
                    "
                        <div class='score bordure-texte'>
                            <h3>Peu mieux faire ! Votre score est de ...</h3>
                            <p>$points" . " / " . "$size</p>
                        </div>
                        ";
                } else {
                    echo
                    "
                        <div class='score bordure-texte'>
                            <h3>Dommage ! Votre score est de ...</h3>
                            <p>$points" . " / " . "$size</p>
                        </div>
                        ";
                }
            }
            ?>
        </div>
    </form>
    <?= include("footer.php") ?>
</body>

</html>