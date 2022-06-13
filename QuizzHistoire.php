<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleQuizz.css">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title>Venise démasquée</title>
</head>

<body>
    <?php
    include("header.php")
    ?>
    <section class="showcase">
        <img src="Images/Gastronomie/Fond2.jpg" alt="" class="imgBg">
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
                    <img src="Images/Gastronomie/Carpaccio1.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <!-- name = questionX, id = questionX_numrep -->
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                    "Le Fegato alla Veneziana est accompagné d'oignons, mais dans sa recette originale, qu'est ce qui remplaçait les oignons ?",
                    "Fegato alla Veneziana comes with onions, but in the original recipe, what replaced the onions ?"
                );
                $q2_1 = array("Des olives", "Olives");
                $q2_2 = array("Des figues", "Figs");
                $q2_3 = array("Des petits pois", "Peas");
                $q2_4 = array("Des carrottes", "Carrots");

                echo "<h3>$q2[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Gastronomie/Fegatto1(ALLEKO).jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                    "Que sont les Bigolis, spécialité de la Vénétie, région d'Italie où se trouve Venise ?",
                    "What are Bigolis, a speciality of the Veneto region of Italy, where Venice is located ?"
                );
                $q3_1 = array("Des petits biscuits aux agrumes.", "Small citrus biscuits.");
                $q3_2 = array("Des spaghettis épaisses à base de blé complet.", "Thick spaghetti made from wholegrain wheat.");
                $q3_3 = array("Un plat à base de fruits de mer et d'encre de seiche.", "A seafood and squid ink dish.");
                $q3_4 = array("Des pâtes ressemblant à des bigoudis.", "Pasta that looks like curlers.");

                echo "<h3>$q3[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Gastronomie/Fond3.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                    "Les baicolis sont des petits gâteaux originaires de Venise. A quelles occasions étaient-ils principalement mangés ? ",
                    "Baicolis are small cakes from Venice. On what occasions were they mainly eaten?"
                );
                $q4_1 = array("Ils étaient dégustés pendant la période du Carnaval.", "They were eaten during the Carnival period.");
                $q4_2 = array("Ils accompagnaient les marins durant leurs voyages.", "They accompanied the sailors on their travels.");
                $q4_3 = array("Ils accompagnaient principalement les mariages, les naissances.", "They mainly accompanied weddings and births.");
                $q4_4 = array("Ils étaient dégustés pour tout les goûters.", "They were used for all the snacks.");

                echo "<h3>$q4[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Gastronomie/Baicoli.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                    "Comment est cuite la viande du Lampredotto ? ",
                    "How is the Lampredotto meat cooked ?"
                );
                $q5_1 = array("Elle est cuite longuement à l'eau", "It is boiled for a long time in water");
                $q5_2 = array("Elle est frite", "It is fried");
                $q5_3 = array("Elle est cuite au four", "It is cooked in the oven");

                echo "<h3>$q5[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Gastronomie/Lampredotto4(FrancescoVignali).jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                    "De quoi est composé le tour des Arancini, partie que l'on fait frire ensuite ? ",
                    "What is the round of the Arancini made of, the part that is fried afterwards ?"
                );
                $q6_1 = array("De semoule", "Of semolina");
                $q6_2 = array("De riz", "Of rice");
                $q6_3 = array("De pain", "Of bread");
                $q6_4 = array("De Maïs", "Of corn");

                echo "<h3>$q6[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Gastronomie/Arancini3.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
                                echo
                                "
                                <input type='radio' name='question6' id='question6_2' value='1'>
                                <label for='question6_2' class='bonne'>$q6_2[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question6' id='question6_2' value='1'>
                                <label for='question6_2'>$q6_2[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
                                echo
                                "
                                <input type='radio' name='question6' id='question6_3' value='0'>
                                <label for='question6_3' class='mauvaise'>$q6_3[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question6' id='question6_3' value='0'>
                                <label for='question6_3'>$q6_3[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
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

        <div class="bg gris">
            <div class="zone-question">
                <?php
                $q7 = array(
                    "Quel ingrédient n'est pas dans le recette Tiramisu originel ? ",
                    "Which ingredient is not in the original Tiramisu recipe ?"
                );
                $q7_1 = array("Le Mascarpone", "Mascarpone");
                $q7_2 = array("Le Café", "Coffee");
                $q7_3 = array("Le Cacao", "Cocoa");
                $q7_4 = array("La Vanille", "Vanilla");

                echo "<h3>$q7[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Gastronomie/Tiramisu4.jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
                                echo
                                "
                                <input type='radio' name='question7' id='question7_1' value='1' class='mauvaise' required>
                                <label for='question7_1' class='mauvaise'>$q7_1[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question7' id='question7_1' value='1' required>
                                <label for='question7_1'>$q7_1[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
                                echo
                                "
                                <input type='radio' name='question7' id='question7_2' value='0' class='mauvaise'>
                                <label for='question7_2' class='mauvaise'>$q7_2[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question7' id='question7_2' value='0'>
                                <label for='question7_2'>$q7_2[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
                                echo
                                "
                                <input type='radio' name='question7' id='question7_3' value='0' class='mauvaise'>
                                <label for='question7_3' class='mauvaise'>$q7_3[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question7' id='question7_3' value='0'>
                                <label for='question7_3'>$q7_3[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
                                echo
                                "
                                <input type='radio' name='question7' id='question7_4' value='1'>
                                <label for='question7_4' class='bonne'>$q7_4[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question7' id='question7_4' value='1'>
                                <label for='question7_4'>$q7_4[$lang]</label>
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
                $q8 = array(
                    "Quel ingrédient manque t-il dans la Piadina pour faire une vraie pâte à pain ? ",
                    "What ingredient is missing in the Piadina to make a real bread dough ? "
                );
                $q8_1 = array("De l'eau", "Water");
                $q8_2 = array("De la farine", "Flour");
                $q8_3 = array("De la levure", "Yeast");
                $q8_4 = array("Du sel", "Salt");

                echo "<h3>$q8[$lang]</h3>";
                ?>

                <div class="question bordure-texte">
                    <img src="Images/Gastronomie/Piadina1(Ekaterina Fedulyeva).jpg" alt="">
                    <div class="reponses">
                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
                                echo
                                "
                                <input type='radio' name='question8' id='question8_1' value='0' required>
                                <label for='question8_1' class='mauvaise'>$q8_1[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question8' id='question8_1' value='0' required>
                                <label for='question8_1'>$q8_1[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
                                echo
                                "
                                <input type='radio' name='question8' id='question8_2' value='0'>
                                <label for='question8_2' class='mauvaise'>$q8_2[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question8' id='question8_2' value='0'>
                                <label for='question8_2'>$q8_2[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
                                echo
                                "
                                <input type='radio' name='question8' id='question8_3' value='1'>
                                <label for='question8_3' class='bonne'>$q8_3[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question8' id='question8_3' value='1'>
                                <label for='question8_3'>$q8_3[$lang]</label>
                                ";
                            }
                            ?>
                        </div>

                        <div class="reponse">
                            <?php
                            if (isset($_POST["question1"]) && isset($_POST["question2"]) && isset($_POST["question3"]) && isset($_POST["question4"]) && isset($_POST["question5"]) && isset($_POST["question6"]) && isset($_POST["question7"]) && isset($_POST["question8"])) {
                                echo
                                "
                                <input type='radio' name='question8' id='question8_4' value='0'>
                                <label for='question8_4' class='mauvaise'>$q8_4[$lang]</label>
                                ";
                            } else {
                                echo
                                "
                                <input type='radio' name='question8' id='question8_4' value='0'>
                                <label for='question8_4'>$q8_4[$lang]</label>
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