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

    $venise = array("Venise démasquée", "Unmasking Venice");
    $sousTitre = array("Découverte accompagnée de la ville Lumière", "Guided tour of the City of Lumières");
    $bienvenue = array("Bienvenue sur la page des séjours", "Welcome to the stays page");
    $bienvenueTexte = array(
        "Ici vous retrouverez différents parcours vous accompagnant pour découvrir les différents thèmes de Venise dans vos voyages dans la ville du lion ailé. Bon séjour!",
        "Here you will find different itineraries to help you discover the different themes of Venice in your travels in the city of the winged lion. Enjoy your stay!"
    );

    $titre = array("Nos parcours", "Our routes");

    $BoutonAller = array("Aller", "Go");

    $GourmandTitre = array("Parcours Gourmand", "The Gourmet Route");
    $RomantiqueTitre = array("Parcours Romantique", "Romantic Journey");
    $IncontournablesTitre = array("Parcours des Incontournables", "The Must-See Route");

    $Gourmand = array(
        "Un parcours de 2 jours permettant de découvrir toutes les spécialités culinaires
        de Venise à travers divers restaurants.",
        "A 2-day tour to discover all the culinary specialities of Venice
        of Venice through various restaurants."
    );

    $Romantique = array(
        "Un parcours de 3 jours à faire si vous venez avec votre partenaire afin de découvrir en couple
        ou lune de miel Venise dans sa splendeur romantique.",
        "A 3-day tour to do if you come with your partner to discover as a couple or on honeymoon Venice in its romantic splendour.
        or honeymoon Venice in its romantic splendour."
    );

    $Incontournables = array(
        "Un parcours de 4 jours à faire absolument en voyageant à Venise afin de découvrir ses lieux dont vous
        entendez toujours parler. Afin de pouvoir être celui qui a visité les classiques, ce parcours est là 
        pour vous.",
        "A 4-day tour is a must when travelling to Venice to discover the places you always hear about.
        you always hear about. If you want to be the one who has visited the classics, this itinerary is here 
        for you."
    );
    ?>

    <section class="showcase">
        <video src="videos/backscreen.mov" muted loop autoplay></video>
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
                <div class="texte-sans-titre">Venise et sa lagune, ville portuaire du Nord-Est de l’Italie située sur la mer Adriatique et patrimoine mondial à l'Unesco, est aujourd’hui menacé par plusieurs phénomènes et menace de disparaître dans le futur. Entre les inondations et la montée des eaux, et le tourisme de masse, la cité de la lagune subit de lourdes dégradations de ses bâtiments et de l’écosystème de sa lagune.</div>
            </article>
        </div>

        <div class="IMGparallax inondation IMG-petite">
        </div>

        <div class="bg gris">
            <div class="article image-après">
                <div class="zone-texte bordure-texte">
                    <h3>Le Tourisme</h3>
                    <p>
                        Le tourisme de masse, près de 25 à 30 millions de visiteurs annuels est déjà un phénomène important ayant un fort impact sur Venise et sa lagune, entraînant la dégradation des bâtiments et la fuite des habitants de Venise, saturés de ce tourisme de masse présent dans leur vie quotidienne.
                    </p>
                </div>
                <img src="Images/ImagesVeniseEnDanger/Tourisme.jpg" alt="" class="imgBg">
            </div>
        </div>

        <div class="bg gris">
            <div class="article image-avant">
                <img src="Images/ImagesVeniseEnDanger/Inondation1.jpg" alt="" class="imgBg">
                <div class="zone-texte bordure-texte">
                    <h3>Les Inondations</h3>
                    <p>Venise est une ville particulièrement exposée aux inondations, qui correspondent à des pics de marée particulièrement prononcés et présents entre l'automne et le printemps. Ces pics sont liés à un phénomène qui impacte de plus en plus la reine de l’Adriatique : il s’agit du phénomène d’Acqua Alta.</p>
                    <p><span>Acqua Alta:</span> phénomène périodique de Venise se produisant lors de la montée de la mer Adriatique d’un cran ce qui provoque des inondations à Venise.
                    <p>L’Acqua Alta est devenu une habitude pour les habitants de Venise, qui voient ce phénomène se produire une vingtaine de fois par an. Les inondations sont particulièrement visibles à la place St Marc où plusieurs zones de la ville sont inondées lors de ces montées.
                </div>
            </div>
        </div>

        <div class="IMGparallax inondation IMG-petite">
        </div>

        <div class="bg gris">
            <div class="article image-après">
                <div class="zone-texte bordure-texte">
                    <h3>Le réchauffement climatique, quel lien ?</h3>
                    <p>Ce phénomène risque malheureusement de se produire de plus en plus souvent et d’évoluer bien plus vite dans les années à venir.
                    En effet, suite à l’augmentation du réchauffement climatique de plus en plus important qui participe à la montée des mers et océans du Monde en provoquant la fonte des glaciers, Venise se trouve indéniablement touchée elle aussi fortement de par sa situation géographique délicate.</p>
                </div>
                <img src="Images/ImagesVeniseEnDanger/Inondation2.jpg" alt="" class="imgBg">
            </div>
        </div>
        <div class="bg gris">
            <article>
                <div class="texte-sans-titre">Quelles solutions envisagées face aux inondations ?</div>
            </article>
        </div>
        <div class="bg gris">
            <div class="article image-avant">
                <img src="Images/ImagesVeniseEnDanger/ProjetMose.jpg" alt="" class="imgBg">
                <div class="zone-texte bordure-texte">
                    <h3>Le projet Mose</h3>
                    <p>
                        Afin de protéger Venise, le projet Mose, encouragé par l’Unesco, a été conçu en 1984 et lancé en 2003. Le projet Mose a pour but de protéger les villes situées aux entrées de la lagune, il est constitué de 78 digues capables de s’élever lorsque le niveau de la mer monte trop.
                        Ce projet ambitieux n’est toujours pas inauguré à l’heure actuelle suite aux nombreux scandales et problèmes ayant eu lieu en 2016, retardant son inauguration.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>