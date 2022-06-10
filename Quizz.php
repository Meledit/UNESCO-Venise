<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleQuizz.css">
    <title>Quizz random</title>
</head>
<body>
    <a href="#" class="jump">
        <img src="images/btt.png" alt="">
    </a>
    <section class="showcase">
        <header>
                <input type="radio" id="burger" name="burger">
                <label for="burger"><img src="images/menu.png" alt=""></label>
                <div class="navbar">
                    <div class="burgerSquare">
                        <div class="zoneBurger">
                            <input type="radio" id="burgerClose" name="burger">
                            <label for="burgerClose"><img src="images/close.png" alt=""></label>    
                        </div>
                    </div>
                    <ul>
                        <li>
                            <h3>Histoire</h3>
                            <a href="">Histoire</a>
                        </li>
                        <li>
                            <h3>Culture</h3>
                            <a href="">Gastronomie</a>
                            <a href="">Architecture</a>
                            <a href="">Événement</a>
                            <a href="">Oeuvres</a>
                        </li>
                        <li>
                            <h3>Séjours</h3>
                            <a href="">Séjour</a>
                        </li>
                        <li>
                            <h3>Quiz</h3>
                            <a href="">Nos quiz</a>
                        </li>
                        <li>
                            <h3>Langues</h3>
                            <div class="drapeaux">
                                <a href=""><img src="images/Fond1.jpg" alt=""></a>
                                <a href=""><img src="images/Fond1.jpg" alt=""></a>
                                <a href=""><img src="images/Fond1.jpg" alt=""></a>
                                <a href=""><img src="images/Fond1.jpg" alt=""></a>
                            </div>
                        </li>
                    </ul>
                </div>    
            </div>
            <a href="index.html"><img src="images/eye-mask.png" alt="Logo Gustave eiffel" class="logo"></a>
        </header>



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

        <div class="bg gris">
            <input type="submit" value="J'ai fini !" class="valider">

            <?php 
                if (isset($_GET["question1"]) && isset($_GET["question2"])) { 
                    $points = 0;
                    $size = count($_GET);
                    foreach ($_GET as $value) {
                        $points += $value;
                    }

                    if ($points >= ($size * 0.75)) {
                        echo
                        "
                        <div class='score bordure-texte'>
                            <h3>Bravo ! Votre score est de ...</h3>
                            <p>$points"." / "."$size</p>
                        </div>
                        ";

                    } else if ($points >= ($size * 0.5) && $points < ($size * 0.75)) {
                        echo 
                        "
                        <div class='score bordure-texte'>
                            <h3>Bien ! Votre score est de ...</h3>
                            <p>$points"." / "."$size</p>
                        </div>
                        ";

                    } else if ($points >= ($size * 0.25) && $points < ($size * 0.5)) {
                        echo 
                        "
                        <div class='score bordure-texte'>
                            <h3>Peu mieux faire ! Votre score est de ...</h3>
                            <p>$points"." / "."$size</p>
                        </div>
                        ";

                    } else {
                        echo 
                        "
                        <div class='score bordure-texte'>
                            <h3>Dommage ! Votre score est de ...</h3>
                            <p>$points"." / "."$size</p>
                        </div>
                        ";  
                    }
                }
            ?>
        </div>
    </form>
</body>
</html>