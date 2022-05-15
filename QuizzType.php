<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleQuizz.css">
    <title>Quizz Gastronomie</title>
</head>
<body>
    <a href="#" class="jump"></a>

        <section class="showcase">
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
                            <div class="button">
                                <a href="PageType.html">
                                    <img class="picto livre" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                                    Histoire    
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="button">
                                <a href="PageGastronomieTest.html">
                                    <img class="picto masque" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                                    Culture    
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="button">
                                <a href="PageType.html">
                                    <img class="picto news" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                                    Actualités    
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="button">
                                <a href="PageType.html">
                                    <img class="picto ticket" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                                    Séjours    
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="https://www.univ-gustave-eiffel.fr/"><img src="Images/logo-gustave-eiffel.png" alt="Logo Gustave eiffel" class="logo"></a>
            </header>
   


            <img src="Images/Gastronomie/Fond2.jpg" alt="" class="imgBg">
            <div class="overlay"></div>
    
            <div class="container">
                <div class="text">
                    <h1>Venise démasquée,</h1>
                    <h2>une ville pleine de secrets.</h2>
        </section>

        <div class="bg">
            <div class="zone-article">
                <article>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Odio dolores similique ut distinctio et? Culpa impedit, 
                    ad quaerat mollitia tempora veniam a quos commodi ratione porro inventore quod fuga. 
                    Placeat odit dolores nam ducimus! Reiciendis ab ipsum iusto tenetur? Laborum, eos quia minima architecto voluptas aut. 
                    Sint beatae cum doloribus.
                </article>
            </div>
        </div>

        <div class="IMGparallax IMG1 IMG-petite"></div>

        <form action="" method="get">
            <div class="bg image-avant">
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Carpaccio1.jpg" alt="">
                </div>
                <div class="zone-question">
                    <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia illum velit exercitationem temporibus veritatis molestiae.?</h2>
                    <div>
                        <input type="radio" name="question1" id="reponse1-1" value="1">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo "<label for='reponse1-1' class='bonne-reponse'>Reponse 1</label>";
                            } else {
                                echo "<label for='reponse1-1'>Reponse 1</label>";
                            }
                        ?>     
                    </div>

                    <div>
                        <input type="radio" name="question1" id="reponse2-1" value="0">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo "<label for='reponse2-1' class='mauvaise-reponse'>Reponse 2</label>";
                            } else {
                                echo "<label for='reponse2-1'>Reponse 2</label>";
                            }
                        ?>
                    </div>

                    <div>
                        <input type="radio" name="question1" id="reponse3-1" value="0">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo "<label for='reponse3-1' class='mauvaise-reponse'>Reponse 3</label>";
                            } else {
                                echo "<label for='reponse3-1'>Reponse 3</label>";
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="bg image-avant">
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Carpaccio1.jpg" alt="">
                </div>
                <div class="zone-question">
                    <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia illum velit exercitationem temporibus veritatis molestiae.?</h2>
                    <div>
                        <input type="radio" name="question2" id="reponse1-2" value="1">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo "<label for='reponse1-2' class='bonne-reponse'>Reponse 1</label>";
                            } else {
                                echo "<label for='reponse1-2'>Reponse 1</label>";
                            }
                        ?>     
                    </div>

                    <div>
                        <input type="radio" name="question2" id="reponse2-2" value="0">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo "<label for='reponse2-2' class='mauvaise-reponse'>Reponse 2</label>";
                            } else {
                                echo "<label for='reponse2-2'>Reponse 2</label>";
                            }
                        ?>
                    </div>

                    <div>
                        <input type="radio" name="question2" id="reponse3-2" value="0">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo "<label for='reponse3-2' class='mauvaise-reponse'>Reponse 3</label>";
                            } else {
                                echo "<label for='reponse3-2'>Reponse 3</label>";
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="bg image-avant">
                <div class="image-et-legende">
                    <img src="Images/Gastronomie/Carpaccio1.jpg" alt="">
                </div>
                <div class="zone-question">
                    <h2>En quoi Venise est-elle connu ?</h2>
                    <div>
                        <input type="radio" name="question3" id="reponse1-3" value="1">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo "<label for='reponse1-3' class='bonne-reponse'>Reponse 1</label>";
                            } else {
                                echo "<label for='reponse1-3'>Reponse 1</label>";
                            }
                        ?>     
                    </div>

                    <div>
                        <input type="radio" name="question3" id="reponse2-3" value="0">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo "<label for='reponse2-3' class='mauvaise-reponse'>Reponse 2</label>";
                            } else {
                                echo "<label for='reponse2-3'>Reponse 2</label>";
                            }
                        ?>
                    </div>

                    <div>
                        <input type="radio" name="question3" id="reponse3-3" value="0">
                        <?php 
                            if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                                echo "<label for='reponse3-3' class='mauvaise-reponse'>Reponse 3</label>";
                            } else {
                                echo "<label for='reponse3-3'>Reponse 3</label>";
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="bg">
                <?php 
                    if (isset($_GET["question1"]) && isset($_GET["question2"])) {
                        echo "";
                    } else {
                        echo "<input type='submit' value='Fini !' class='valider'>";
                    }
                ?>

                <?php
                    if (isset($_GET["question1"]) && isset($_GET["question2"])) { 
                        $points = 0;
                        $size = count($_GET);
                        foreach ($_GET as $value) {
                            $points += $value;
                        }

                        if ($points >= ($size * 0.75)) {
                            echo "<div class='points'>
                                <h3>Vous avez brillamment réussi !</h3>
                                <p>$points"." / "."$size</p>
                                <a href=''>Revenir à la page d'avant</a>
                            </div>";
                        } else if ($points >= ($size * 0.5) && $points < ($size * 0.75)) {
                            echo "<div class='points'>
                                <h3>Vous avez très bien réussi !</h3>
                                <p>$points"." / "."$size</p>
                                <a href=''>Revenir à la page d'avant</a>
                            </div>";
                        } else if ($points >= ($size * 0.25) && $points < ($size * 0.5)) {
                            echo "<div class='points'>
                                <h3>On peut mieux faire !</h3>
                                <p>$points"." / "."$size</p>
                                <a href=''>Revenir à la page d'avant</a>
                            </div>";
                        } else {
                            echo "<div class='points'>
                                <h3>Dommage, la prochaine fois peut être.</h3>
                                <p>$points"." / "."$size</p>
                                <a href=''>Revenir à la page d'avant</a>
                            </div>";
                        }
                    }
                ?>
            </div>
        </form>

        <footer>
            <div class="section-footer">
                <h3>About us</h3>
                <p>Lorem ipsum dolor shit amet consectetur adipisicing elit. Vero voluptate optio libero tenetur nihil minima, veritatis iusto sint vitae eius!</p>
            </div>
            <div class="section-footer">
                <h3>Follow us</h3>
                <div class="img-footer">
                    <img src="Images/facebook.png" alt="">
                    <img src="Images/logoTwitter.png" alt="">
                    <img src="Images/logoInsta.png" alt="">
                </div>
            </div>
            <div class="section-footer">
                <h3>Inserez logos</h3>
                <div class="img-footer">
                    <img src="Images/logo-gustave-eiffel.png" alt="">
                    <img src="Images/logo-gustave-eiffel.png" alt="">
                    <img src="Images/logo-gustave-eiffel.png" alt="">
                </div>
            </div>
        </footer>
</body>
</html>