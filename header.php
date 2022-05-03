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
    
</head>
<body>
    <?php 
        session_start();
        
        if (isset($_GET['lang'])){
            $_SESSION['lang'] = $_GET['lang'];
            $lang = $_GET['lang'];
        }else if (!isset($_SESSION['lang']) || empty($_SESSION['lang'])){
            $_SESSION['lang'] = 0;
            $lang = 0;
        }else{
            $lang = $_SESSION['lang'];
        }

        

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
            $url = "https"; 
        else
            $url = "http"; 
            
        // Ajoutez // à l'URL.
        $url .= "://"; 
            
        // Ajoutez l'hôte (nom de domaine, ip) à l'URL.
        $url .= $_SERVER['HTTP_HOST']; 
            
        // Ajouter l'emplacement de la ressource demandée à l'URL
        $url .= $_SERVER['PHP_SELF']
            
        // Afficher l'URL
        //echo $url; 
    ?>


    <a href="#" class="jump"></a>
            <header>
    
                    <input type="radio" id="burger" name="burger" checked>
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
            <a href="https://www.univ-gustave-eiffel.fr/"><img src="images/logo-gustave-eiffel.png" alt="Logo Gustave eiffel" class="logo"></a>
            <?php
                echo $url; 
                echo "<a href=\"accueil.php\"> Acc </a>";
                echo $lang;
                echo $_SESSION['lang'];
                echo "<a href=\"$url?lang=0\"> FR </a>";
                echo "<a href=\"$url?lang=1\"> EN </a>";
            ?>
        </header>


</body>
</html>