<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Séjour Gourmand</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800'>
  <link rel="stylesheet" href="styleSéjour.css">
  <link rel="stylesheet" href="style.css">

</head>

<body>
<?php
    include("header.php");

    $venise = array("Venise démasquée", "Unmasking Venice");
    $sousTitre = array("Une ville pleine de saveurs", "A city full of flavour");

    $bienvenue = array("Découvrez les endroits les plus gourmants de Venise", "Discover the most delicious places in Venice");
    $bienvenueTexte = array(
        "Venise est connu pour beaucoup de choses, sa lagune, ses paysages
        , mais aussi sa gastronomie. Si vous êtes amateur de nourriture et voulez
        découvrir les meilleurs restaurant de Venise, alors vous êtes au bon endroit !
        Nous allons vous montrer les meilleurs lieux à visiter pour manger comme un roi !",
        "Venice is known for many things, its lagoon, its landscapes
        but also its gastronomy. If you are a food lover and want to discover the best
        discover the best restaurants in Venice, then you are at the right place!
        We will show you the best places to visit to eat like a king!"
    );

    $titre = array("Parcours Gourmand", "The Gourmet Stay");

    $BistrotDeVeniseTitre = array("Bistrot de Venise", "Venice Bistro");
    $GelatotecaSusoTitre = array("Gelatoteca Suso", "Gelatoteca Suso");
    $LeChatquiritTitre = array("Le Chat qui rit", "Le Chat qui rit");
    $HarrysBarTitre = array("Harry's Bar", "Harry's Bar");
    $RosaSalvaTitre = array("Rosa Salva", "Rosa Salva");
    $ElMagazenTitre = array("El Magazen", "El Magazen");

    $premierjour = array("- Premier jour -", "- First day -");
    $deuxiemejour = array("- Deuxième jour -", "- Second day -");

    $BistrotDeVenise = array(
        "Restaurant axé sur tous les types de cuisines de Venise, de l’historique au classique et jusqu’au
        moderne ce qui vous permettra de tester en grands les différents types de plats présents dans Venise.
        Ils sont aussi axés sur les différents vins historiques en plus des plats offrant une grande
        représentation du goût de Venise.
        Ils proposent aussi une table spéciale romantique à l’abri des regards et un dessert spécial pour un
        dîner inoubliable avec votre partenaire.",
        "Restaurant focusing on all types of cuisine in Venice, from historical to classic to modern, allowing you to try the different types of
        This will allow you to try out the different types of dishes present in Venice.
        They also focus on different historical wines in addition to dishes that offer a great representation of the
        representation of the taste of Venice.
        They also offer a special romantic table out of sight and a special dessert for an
        unforgettable dinner with your partner."
    );

    $GelatotecaSuso = array(
        "Pour agrémenter les pauses durant le voyage, une glace n’est pas de refus, et quoi de mieux que l’un des
        glaciers les plus populaires de Venise situé près du pont Rialto. Le visuel des glaces est aussi
        alléchant que leur goût est délicieux. Un glacier à visiter absolument entre deux pauses à Venise ou
        après le marché Rialto.",
        "To enhance the breaks during the journey, an ice cream is not to be refused, and what better than one of the most popular ice cream parlours in Venice located near the Rialto Bridge.
        What better place than one of Venice's most popular ice cream parlours near the Rialto Bridge. The ice creams are as appealing visually as they
        as they taste. A must visit ice cream parlour between two breaks in Venice or after the
        after the Rialto market."
    );

    $LeChatquirit = array(
        "A quelques pas de la Place St Marc, se trouve le restaurant “Le chat qui rit”. De
        par sa décoration vous vous laisserez attirer dans ce restaurant, mais plus que son ambiance
        chaleureuse, ce sera sa cuisine qui vous tiendra en haleine inspiré des recettes traditionnelles
        vénitiennes avec les produits de la Lagune. Un des incontournables à Venise si l’on cherche à tester le
        goût de cette ville.",

        "Just a few steps from St. Mark's Square is the restaurant 'Le chat qui rit'. From
        decoration you will be attracted to this restaurant, but more than its warm atmosphere
        but more than its warm atmosphere, it will be its cuisine that will keep you in suspense, inspired by traditional Venetian recipes
        with the products of the Lagoon. A must in Venice if you want to test the
        taste of this city."
    );

    $HarrysBar = array(
        "Si vous cherchez à vous rafraîchir et vous posez à un endroit agréable après de
        longues visites de Venise, pourquoi pas un bar centenaire dans un style new-yorkais dénotant un peu de
        Venise? Réputé pour ses cocktails et son piano-bar intimiste en sous-sol, ce restaurant fondé en 1931
        est un restaurant historique dont deux de ses créations sont très connues et à tester: le cocktail
        Bellini et le carpaccio.",
        "If you're looking for a place to cool off and relax after a long tour of Venice, why not
        Venice, how about a century-old bar in a New York style that is a little different from
        Venice? Renowned for its cocktails and intimate basement piano bar, this restaurant, founded in 1931
        is a historic restaurant with two of its creations very well known and to be tried: the
        Bellini cocktail and the carpaccio."
    );

    $RosaSalva = array(
        "Rien de mieux qu’une des plus anciennes pâtisseries de Venise pour le goûter.
        Afin de faire une pause, autant en faire une gourmande, c’est ce que propose cette pâtisserie à l’aspect
        traditionnel. On peut y prendre un café avec une belle vue sur l’église Basilique Santa Giovanni e Paolo
        et goûter à des gâteaux gras et très représentatifs de Venise.",
        "There is nothing better than one of the oldest pastry shops in Venice for a snack.
        If you want to take a break, you might as well make it a gourmet one, which is what this traditional-looking pastry shop offers.
        traditional look. You can have a coffee with a beautiful view of the Basilica of Santa Giovanni e Paolo
        and taste fatty cakes that are very representative of Venice."
    );

    $ElMagazen = array(
        "Vue sur les canaux et style traditionnel et chaleureux, ce restaurant est aussi
        une des pépites de Venise, proposant des repas proche de l’apéro digestif parfait et les plats de pâtes
        sont nombreux et variés mais tous intéressants. Un restaurant certes acculé mais qui n’est pas
        attrape-touriste, à visiter.",
        "With a view of the canals and a warm, traditional style, this restaurant is also
        one of the nuggets of Venice, offering meals close to the perfect digestive aperitif and the pasta dishes
        are numerous and varied but all interesting. A restaurant that is certainly crowded but not
        a tourist attraction, worth a visit."
    );
    ?>

    <a href="#" class="jump">
        <img src="images/btt.png" alt="">
    </a>

    <section class="showcase">
        <img src="Images/Sejours/ElMagazen.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <div class="text">
                    <?php
                    echo "<h1>$venise[$lang]</h1>";
                    echo "<h2>$sousTitre[$lang]</h2>";
                    ?>
                </div>
    </section>


  <div class="bg noir">
    <article>
      <h3><?= "$bienvenue[$lang]" ?></h3>
      <p>
        <?= "$bienvenueTexte[$lang]" ?>
      </p>
    </article>
  </div>

  <div class="IMGparallax IMG1 IMG-microscopique"></div>

  <div class="container-timeline">
    <h2 class="title"><?= "$titre[$lang]" ?></h2>
    <div class="timeline">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image: url(Images/Sejours/BistrotDeVenise.jpg)"
            data-year="Bistrot Venezia">
            <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$BistrotDeVeniseTitre[$lang]" ?></span>
              <h4 class="timeline-title"><?= "$premierjour[$lang]" ?></h4>
              <p class="timeline-text">
                <?= "$BistrotDeVenise[$lang]" ?>
              </p>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(Images/Sejours/Gelatoteca.jpg)"
            data-year="Gelatoteca Suso">
            <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$GelatotecaSusoTitre[$lang]" ?></span>
              <h4 class="timeline-title"><?= "$premierjour[$lang]" ?></h4>
              <p class="timeline-text">
                <?= "$GelatotecaSuso[$lang]" ?>
              </p>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(Images/Sejours/LeChatquirit.jpg)"
            data-year="Le Chat qui rit">
            <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$LeChatquiritTitre[$lang]" ?></span>
              <h4 class="timeline-title"><?= "$premierjour[$lang]" ?></h4>
              <p class="timeline-text">
                <?= "$LeChatquirit[$lang]" ?>  
              </p>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(Images/Sejours/HarryBar.jpg)"
            data-year="Harry's Bar">
            <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$HarrysBarTitre[$lang]" ?></span>
              <h4 class="timeline-title"><?= "$deuxiemejour[$lang]" ?></h4>
              <p class="timeline-text">
                <?= "$HarrysBar[$lang]" ?>
              </p>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(Images/Sejours/RosaSalva.png)"
            data-year="Rosa Salva">
            <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$RosaSalvaTitre[$lang]" ?></span>
              <h4 class="timeline-title"><?= "$deuxiemejour[$lang]" ?></h4>
              <p class="timeline-text">
                <?= "$RosaSalva[$lang]" ?>
              </p>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(Images/Sejours/ElMagazen.jpg)"
            data-year="El Magazen">
            <div class="swiper-slide-content"><span class="timeline-lieu"><?= "$ElMagazenTitre[$lang]" ?></span>
              <h4 class="timeline-title"><?= "$deuxiemejour[$lang]" ?></h4>
              <p class="timeline-text">
                <?= "$ElMagazen[$lang]" ?>
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js'></script>
  <script src="./scriptSejour.js"></script>

  <?php
  include("footer.php");
  ?>

</body>

</html>