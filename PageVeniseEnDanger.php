<!DOCTYPE html>
<html lang="fr">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleHistoire.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title> Venise </title>
</head>
<?php
    include("header.php");

    $venise = array("Venise submergée", "Submerged Venice");
    $sousTitre = array("Une ville sous les flots", "A city under water");
    $bienvenue = array(
        "Venise et sa lagune, ville portuaire du Nord-Est de l’Italie 
        située sur la mer Adriatique et patrimoine mondial à l'Unesco, est aujourd’hui menacé par plusieurs phénomènes et menace de disparaître dans le futur. 
        Entre les inondations et la montée des eaux, et le tourisme de masse, la cité de la lagune subit de lourdes dégradations de ses bâtiments et de l’écosystème de sa lagune.", 
        "Venice and its lagoon, a port city in north-eastern Italy 
        located on the Adriatic Sea and a Unesco World Heritage Site, is today threatened by several phenomena and is in danger of disappearing in the future. 
        Between flooding and rising waters, and mass tourism, the lagoon city is undergoing heavy degradation of its buildings and the ecosystem of its lagoon."
    );

    $TourismeTitre = array("Le Tourisme", "Tourism");
    $InondationTitre = array("Les Inondations", "The Floods");
    $RechauffementClimatiqueTitre = array("Le réchauffement climatique, quel lien ?", "Global warming, what is the link?");
    $ProjetMoseTitre = array("Le projet Mose", "Mose project");

    $Tourisme = array(
        "Le tourisme de masse, près de 25 à 30 millions de visiteurs annuels est déjà un phénomène important ayant un fort impact sur Venise et sa lagune, 
        entraînant la dégradation des bâtiments et la fuite des habitants de Venise, saturés de ce tourisme de masse présent dans leur vie quotidienne.",
        "Mass tourism, with around 25 to 30 million visitors a year, is already a major phenomenon with a strong impact on Venice and its lagoon, 
        leading to the degradation of buildings and the flight of the inhabitants of Venice, saturated by this mass tourism in their daily life."
    );

    $Inondation1 = array(
        "Venise est une ville particulièrement exposée aux inondations, qui correspondent à des pics de marée particulièrement prononcés et présents entre l'automne et le printemps. 
        Ces pics sont liés à un phénomène qui impacte de plus en plus la reine de l’Adriatique : il s’agit du phénomène d’Acqua Alta.",
        "Venice is a city particularly exposed to flooding, which corresponds to particularly pronounced tidal peaks that occur between autumn and spring. 
        These peaks are linked to a phenomenon that is increasingly affecting the Queen of the Adriatic: the Acqua Alta phenomenon."
    );

    $Inondation2 = array(
        "Acqua Alta: phénomène périodique de Venise se produisant lors de la montée de la mer Adriatique d’un cran ce qui provoque des inondations à Venise.",
        "Acqua Alta: a periodic phenomenon in Venice that occurs when the Adriatic Sea rises a notch, causing flooding in Venice."
    );

    $Inondation3 = array(
        "L’Acqua Alta est devenu une habitude pour les habitants de Venise, qui voient ce phénomène se produire une vingtaine de fois par an. 
        Les inondations sont particulièrement visibles à la place St Marc où plusieurs zones de la ville sont inondées lors de ces montées.",
        "Acqua Alta has become a habit for the inhabitants of Venice, who see this phenomenon occur about twenty times a year. 
        The flooding is particularly noticeable in St Mark's Square, where several areas of the city are inundated during these rises."
    );

    $RechauffementClimatique = array(
        "Ce phénomène risque malheureusement de se produire de plus en plus souvent et d’évoluer bien plus vite dans les années à venir. 
        En effet, suite à l’augmentation du réchauffement climatique de plus en plus important qui participe à la montée des mers et océans 
        du Monde en provoquant la fonte des glaciers, Venise se trouve indéniablement touchée elle aussi fortement de par sa situation géographique délicate.",
        "Unfortunately, this phenomenon is likely to occur more and more often and to evolve much more rapidly in the years to come. 
        Indeed, following the increase in global warming, which is contributing to the rise of the world's seas and oceans by causing the melting of glaciers, 
        Venice is undeniably also strongly affected by this phenomenon. 
        and oceans by causing glaciers to melt, Venice is undeniably also strongly affected by its delicate geographical situation."
    );

    $Question = array(
        "Quelles solutions envisagées face aux inondations ?",
        "What solutions are being considered for flooding ?"
    );

    $ProjetMose = array(
        "Afin de protéger Venise, le projet Mose, encouragé par l’Unesco, a été conçu en 1984 et lancé en 2003. 
        Le projet Mose a pour but de protéger les villes situées aux entrées de la lagune, 
        il est constitué de 78 digues capables de s’élever lorsque le niveau de la mer monte trop. Ce projet ambitieux n’est toujours pas inauguré à l’heure actuelle 
        suite aux nombreux scandales et problèmes ayant eu lieu en 2016, retardant son inauguration.",
        "In order to protect Venice, the Mose project, promoted by UNESCO, was conceived in 1984 and launched in 2003. 
        The Mose project aims to protect the cities located at the entrances to the lagoon, 
        It consists of 78 dykes capable of rising when the sea level rises too much. This ambitious project has still not been inaugurated 
        following the numerous scandals and problems that occurred in 2016, delaying its inauguration."
    );
    ?>

    <section class="showcase">
        <img src="Images/ImagesVeniseEnDanger/Background.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <?php
                echo "<h1>$venise[$lang]</h1>";
                echo "<h2>$sousTitre[$lang]</h2>";
                ?>
            </div>
        </div>
    </section>

        <div class="bg noir">
            <article>
                <div class="texte-sans-titre"><?= "$bienvenue[$lang]" ?></div>
            </article>
        </div>

        <div class="IMGparallax inondation IMG-petite">
        </div>

        <div class="bg gris">
            <div class="article image-après">
                <div class="zone-texte bordure-texte">
                    <h3><?= "$TourismeTitre[$lang]" ?></h3>
                    <p>
                        <?= "$Tourisme[$lang]" ?>
                    </p>
                </div>
                <img src="Images/ImagesVeniseEnDanger/Tourisme.jpg" alt="" class="imgBg">
            </div>
        </div>

        <div class="bg gris">
            <div class="article image-avant">
                <img src="Images/ImagesVeniseEnDanger/Inondation1.jpg" alt="" class="imgBg">
                <div class="zone-texte bordure-texte">
                    <h3><?= "$InondationTitre[$lang]" ?></h3>
                    <p>
                        <?= "$Inondation1[$lang]" ?>
                    </p>
                    <p>
                        <?= "$Inondation2[$lang]" ?>
                    </p>
                    <p>
                        <?= "$Inondation3[$lang]" ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="IMGparallax inondation IMG-petite">
        </div>

        <div class="bg gris">
            <div class="article image-après">
                <div class="zone-texte bordure-texte">
                    <h3><?= "$RechauffementClimatiqueTitre[$lang]" ?></h3>
                    <p>
                        <?= "$RechauffementClimatique[$lang]" ?>
                    </p>
                </div>
                <img src="Images/ImagesVeniseEnDanger/Inondation2.jpg" alt="" class="imgBg">
            </div>
        </div>
        <div class="bg gris">
            <article>
                <div class="texte-sans-titre"><?= "$Question[$lang]" ?></div>
            </article>
        </div>
        <div class="bg gris">
            <div class="article image-avant">
                <img src="Images/ImagesVeniseEnDanger/ProjetMose.jpg" alt="" class="imgBg">
                <div class="zone-texte bordure-texte">
                    <h3><?= "$ProjetMoseTitre[$lang]" ?></h3>
                    <p>
                        <?= "$ProjetMose[$lang]" ?>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>