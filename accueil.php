<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title> Venise </title>
</head>

<body>
    <?php
    include("header.php");

    $titre = ["<h1>Venise démasquée</h1>
            <h2>La ville du lion ailé vous révèle tous ses secrets</h2>
        ", "<h1>Venice unsmasked</h1>
        <h2>The Winged Lion's city show you all her secrets</h2>"];
    ?>


    <section class="showcase">

        <video src="videos/backscreen.mov" muted loop autoplay></video>
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <?php
                echo $titre[$lang];
                ?>
            </div>

            <div class="buttons">
                <div class="button">
                    <a href="PageType.html">
                        <img class="picto livre" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                        Histoire
                    </a>
                </div>
                <div class="button">
                    <a href="PageGastronomieTest.html">
                        <img class="picto masque" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                        Culture
                    </a>
                </div>
                <div class="button">
                    <a href="PageType.html">
                        <img class="picto news" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                        Actualités
                    </a>
                </div>
                <div class="button">
                    <a href="PageType.html">
                        <img class="picto ticket" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                        Séjours
                    </a>
                </div>
            </div>
        </div>

    </section>

    <div class="bg gauche">
        <article>
            <h3>Nous sommes heureux de vous voir&nbsp;!</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid atque exercitationem ea voluptate, delectus quasi eaque tempore eveniet cupiditate praesentium.</p>
        </article>
    </div>

    <div class="IMGparallax IMG1">
        <div class="zoneCarte">
            <article>
                <h3>sdfghj</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3364.598163920213!2d12.333703951312005!3d45.437987943110265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477eb1c7faa33a3b%3A0x732011a1298ecc89!2sPont%20du%20Rialto!5e1!3m2!1sfr!2sfr!4v1640898297497!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" class="carte"></iframe>
            </article>
        </div>
    </div>



    <footer>
        <div class="section-footer">
            <h3>About us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptate optio libero tenetur nihil minima, veritatis iusto sint vitae eius!</p>
        </div>
        <div class="section-footer">
            <h3>Follow us</h3>
            <div class="img-footer">
                <img src="images/facebook.png" alt="">
                <img src="images/facebook.png" alt="">
                <img src="images/facebook.png" alt="">
            </div>
        </div>
        <div class="section-footer">
            <h3>Inserez logos</h3>
            <div class="img-footer">
                <img src="images/logo-gustave-eiffel.png" alt="">
                <img src="images/logo-gustave-eiffel.png" alt="">
                <img src="images/logo-gustave-eiffel.png" alt="">
            </div>
        </div>
    </footer>
</body>

</html>