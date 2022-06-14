<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800'>
  <link rel="stylesheet" href="Style/styleSejour.css">
  <link rel="stylesheet" href="Style/Style/style.css">
  <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
  <title>Venise Démasquée</title>
</head>

<body>
  <!-- Bouton en savoir plus -->
  <script>
    function plus(s) {
      var toto = document.getElementById(s);
      toto.style.display = "block";
    }

    function moins(s) {
      var toto = document.getElementById(s);
      toto.style.display = "none";
    }
  </script>

  <?php
  include("header.php");

  $venise = array("Venise démasquée", "Unmasking Venice");
  $sousTitre = array("Une ville remplie d'histoire", "A city full of history");
  $saviezvous = array("Le saviez-vous ?", "Did you know ?");
  $bienvenue = array("Explorez les lieux les plus cultes de la ville.", "Explore the most famous places in the city.");
  $bienvenueTexte = array(
    "Venise est une ville ancienne avec une histoire riche et profonde.
    Découvrez pendant ce parcours les lieux, monuments et sites les plus connus
    de la ville italienne.",
    "Venice is an ancient city with a rich and deep history.
    Discover during this tour the most famous places, monuments and sites of the Italian
    of the Italian city."
  );

  $Plus = array("En savoir plus", "Know more");
  $Moins = array("Moins", "Know less");

  $titre = array("Parcours des Incontournables", "The Must-See Stay");

  $PontRialto = array("Pont de Rialto", "Ponte di Rialto");
  $PalaisDoges = array("Palais des Doges", "Palazzo Ducale");
  $BStMarc = array("Basilique Saint Marc", "Basilica di san Marco");
  $placeStMarc = array("Palace Saint Marc", "piazza san Marco");
  $PontSoupirs = array("Pont des soupirs", "Ponte dei Sospiri");
  $Murano = array("Murano", "Murano");
  $Campanile = array("Campanile de Saint Marc", "Campanile di san Marco");
  $Burano = array("Burano", "Burano");

  $premierjour = array("- Premier jour -", "- First day -");
  $deuxiemejour = array("- Deuxième jour -", "- Second day -");
  $troisiemejour = array("- Troisième jour -", "- Third day -");

  $carteTitre = array("Un peu perdu ?", "A bit lost ?");
  $carteLegende = array("Légende de la carte", "Map legend");
  $Marco = array("Marco le lion, pour les lieux uniques", "Marco the lion, for unique places");
  $Donnola = array("Donnola la belette, pour les restaurants et hotels", "Donnola the weasel, for restaurants and hotels");
  $Gufo = array("Gufo le hibou, pour les monuments historiques", "Gufo the owl, for historical monuments");
  $Laguna = array("Laguna le poulpe, pour les lieux aquatiques", "Laguna the octopus, for watery places");

  $PontRialto1 = array(
    "Le Pont du Rialto, monument célèbre et un des ponts les plus anciens de Venise traversant le Grand
    canal.
    A l’origine un pont en bois réalisé par Nicolo Barattieri, il était le seul pont traversant le Grand
    canal de Venise et était donc une place de choix pour le commerce d’autant plus que le plus grand marché
    de poisson et légumes se tenait à l’autre bout, le marché de Rialto.
    C’est ainsi qu’après de nombreux problèmes amenant à la destruction du pont plusieurs fois étant en bois
    et donc peu solide, Antonio da Ponte, entre 1588 et 1591, remplace l’ancien pont en bois par un pont
    solide en marbre et pierre d’Istrie désignant une roche calcaire compacte à faible porosité.
    On peut d’ailleurs voir, sur les reliefs de chaque côté du pont, les deux saints patrons de la ville,
    Théodore et Marc.
    Vous ne pourrez pas passer à côté de ce marché abondant de légumes et fruits colorés sur les étalages
    ouvrant de 9h à 12h.",

    "The Ponte di Rialto, a famous monument and one of the oldest bridges in Venice crossing the Grand Canal
    Canal.
    Originally a wooden bridge built by Nicolo Barattieri, it was the only bridge crossing the Grand Canal in
    the Grand Canal of Venice and was therefore a place of choice for trade, especially since the largest market
    and vegetables was held at the other end, the Rialto market.
    Thus, after many problems leading to the destruction of the bridge several times being in wood
    and therefore not very solid, Antonio da Ponte, between 1588 and 1591, replaces the old wooden bridge with a
    and Istrian stone, a compact limestone with low porosity.
    The two patron saints of the city can be seen on the reliefs on either side of the bridge,
    Theodore and Mark.
    You can't miss this market full of colorful vegetables and fruits on the stalls
    open from 9am to 12pm."
  );

  $PalaisDoges1 = array(
    "Le Palais des Doges à Venise, de style Gothique et Renaissance situé sur la plage Saint-Marc, fut le
    siège de tous les pouvoirs. En effet, ce palais possédait trois grandes parties représentant les 3
    pouvoirs : La Résidence Ducale (le pouvoir Législatif), Le Palais de Justice (le pouvoir Exécutif)
    , Le Palais Communal (le pouvoir Judiciaire).",

    "The Palazzo Ducale in Venice, of Gothic and Renaissance style located on the beach of Saint Mark, was the
    seat of all the powers. In fact, this palace had three main parts representing the 3 powers
    powers: The Ducal Residence (the legislative power), the Palace of Justice (the executive power)
    The Communal Palace (the Judicial power)."
  );

  $PalaisDoges2 = array(
    "Son histoire remonte à l’époque où Venise dépendait de l’Empire Byzantin mais suite aux nombreux
    conflits entre les byzantins et un ancien peuple germanique, un pouvoir émerge incarné par le premier
    duc ou doge Paolucio Anafesto, c’est le début de l’émancipation de Venise qui continuera petit à petit
    jusqu’à son émergence total de l’Empire Byzantin où Venise choisit l’obédience à Rome.
    L’édifice était initialement un palais fortifié, un fortin rapidement flanqué d'une basilique. Son
    aspect resta stable jusqu’au XIIe siècle où en 1340 où démarre la rénovation des 3 ailes du Palais
    mais un incendie vers 1483, lorsque la dernière aile est en rénovation, détruit de nombreuses œuvres
    et endommage le Palais, après cette période, plus de travaux.
    Ce sera lors de l’annexion de Venise par le royaume d’Italie que l’édifice deviendra le musée et siège
    du musée civique du Palazzo Ducale que nous connaissons.",

    "Its history goes back to the time when Venice depended on the Byzantine Empire but following the numerous
    conflicts between the Byzantines and an ancient Germanic people, a power emerges incarnated by the first
    duke or doge Paolucio Anafesto, it is the beginning of the emancipation of Venice which will continue little by little
    until its total emergence from the Byzantine Empire where Venice chose obedience to Rome.
    The building was initially a fortified palace, a fortress quickly flanked by a basilica. Its
    aspect remained stable until the twelfth century when in 1340 the renovation of the 3 wings of the Palace began
    but a fire around 1483, when the last wing was being renovated, destroyed many works
    and damages the Palace, after this period, no more works.
    It was during the annexation of Venice by the Kingdom of Italy that the building became the museum and seat of the
    of the civic museum of the Palazzo Ducale that we know."
  );

  $BStMarc1 = array(
    "La Basilique St Marc est la plus importante basilique à Venise.
    Son histoire débute en 828 où la première église dédiée à St Marc fut érigée par le doge Giustiniano
    Participazio, abritant les reliques St Marc par la suite. Mais après la révolte des Vénitiens contre le
    doge Pietro IV Candiano, de nombreuses maisons ainsi que le Palais des Doges et l’église St Théodore
    furent incendiées et ces monuments furent donc détruits. La même année, le doge Pietro Orseolo
    entreprend directement de reconstruire/de réparer l'église St Marc.",

    "Basilica di san Marco is the most important basilica in Venice.
    Its history begins in 828 when the first church dedicated to St. Mark was erected by Doge Giustiniano
    Participazio, housing the relics of St. Mark thereafter. But after the revolt of the Venetians against the
    doge Pietro IV Candiano, many houses as well as the Doge's Palace and the church of St. Theodore
    were burned and these monuments were destroyed. In the same year, the doge Pietro Orseolo
    undertook directly to rebuild/repair the church of St. Mark."
  );

  $BStMarc2 = array(
    "Au XVIIe siècle, avec les fonds disponibles, il fut décidé d’entreprendre une construction ingénieuse
    en
    l'honneur des douzes apôtres de Constantinople, qui deviendra la basilique St Marc. C’est ainsi qu’en
    1060, le doge Domenico Contarini décide de reconstruire la basilique. Les ingénieurs venus construire
    cette basilique venaient de Constantinople et avaient pour but de bâtir un \"superbe temple singulier
    et
    rare\".
    La nouvelle église a été construite à l'emplacement de l'église Saint-Théodore et de la chapelle
    Saint-Marc en reprenant un plan en croix grecque s'inspirant de l'église des Saints-Apôtres de
    Byzance.
    Elle devint, bien après la chute de la République, la grande église d'État, abritant les reliques St
    Marc étant auparavant contenu dans l'église St Théodore et un monument incontournable à visiter
    lorsqu'on voyage à Venise.",

    "In the 17th century, with the funds available, it was decided to undertake an ingenious construction
    in
    in honor of the twelve apostles of Constantinople, which will become the Basilica of St. Mark. Thus, in
    1060, the doge Domenico Contarini decided to rebuild the basilica. The engineers who came to build
    this basilica came from Constantinople and had for goal to build a \"superb singular temple
    and
    rare\".
    The new church was built on the site of the church of St. Theodore and the chapel of St. Mark
    The new church was built on the site of the church of St. Theodore and the chapel of St. Mark with a Greek cross plan inspired by the church of the Holy Apostles in
    Byzantium.
    It became, long after the fall of the Republic, the great state church, housing the relics of St. Mark, which were previously contained in the church of St. Peter.
    relics of St. Mark, previously contained in the church of St. Theodore and a must-see monument
    when traveling in Venice."
  );

  $placeStMarc1 = array(
    "La place Saint-Marc, du nom de l'évangéliste, protecteur chrétien de Venise,
    saint Marc se situe au bord du Grand Canal et constitue le cœur de la ville de Venise. Cette place fut
    dans le passé le centre politique, religieux et économique de la république de venise.
    Sa construction débute au IXe siècle et la place adopte sa taille et forme actuelle en 1177, mais ce
    n'est que 100 ans plus tard que cette place a été pavée.
    La place St Marc est liée à l'histoire de la Basilique St Marc située en face et fait partie d'une des
    places les plus belles à Venise souvent visitées. Napoléon Bonaparte la définissait même comme étant \"
    Le plus beau salon d'Europe\".",

    "St. Mark's Square, named after the evangelist, Christian protector of Venice,
    St. Mark's is located on the banks of the Grand Canal and is the heart of the city of Venice. This square was
    in the past the political, religious and economic center of the republic of Venice.
    Its construction began in the ninth century and the square adopted its current size and shape in 1177, but it was not until 100 years later that the
    100 years later it was paved.
    St. Mark's square is linked to the history of St. Mark's Basilica located in front of it and is part of one of the
    the most beautiful squares in Venice often visited. Napoleon Bonaparte even defined it as \"
    The most beautiful salon in Europe\"."
  );

  $PontSoupirs1 = array(
    "Le pont des soupirs est un des nombreux ponts présents à Venise mais surtout un des lieux touristiques
    les plus célèbres. Sa construction débute en 1602 et a pour objectif de relier le Palais des doges où
    les prisonniers sont jugés à la nouvelle prison (achevée en 1604) par Antonio Contin. Il a été surnommé
    le \"sarcophage qui s’envole\" par André Suarès en raison de sa structure. Le pont était totalement fermé
    avec un toi et des murs épais afin d’éviter d’entendre les cris et lamentations des détenus enfermés et
    d’éviter toute tentative de fuite, ou de suicide..
    Il possède deux couloirs qui avaient pour objectif que pour aller dans un bâtiment ou l’autre, on devait
    prendre un couloir fermé différents empêchant les prisonniers de se voir.
    Ainsi il est devenu au fil du temps le monument célèbre et incontournable à visiter.",

    "he Bridge of Sighs is one of the many bridges present in Venice but above all one of the most
    most famous tourist sites. Its construction began in 1602 and its purpose was to connect the Palace of the Doges where the prisoners were
    prisoners are judged to the new prison (completed in 1604) by Antonio Contin. It was nicknamed
    the \"sarcophagus that flies\" by André Suarès because of its structure. The bridge was totally closed
    and thick walls in order to avoid hearing the cries and lamentations of the locked inmates and to prevent any
    and to avoid any attempt of escape or suicide.
    It has two corridors that had as objective that to go to one building or the other, one had to
    take a different closed corridor preventing the prisoners from seeing each other.
    Thus it has become over time the famous and unmissable monument to visit."
  );

  $Murano1 = array(
    "Murano est une île située au nord de Venise, dans sa lagune. Si cette île est connue, c’est
    majoritairement pour ses souffleurs de verre ayant une renommée internationale.
    En effet, l’histoire des souffleurs de verre commença en 1201, lorsque le Sénat de Venise rédigea et
    vota un décret obligeant les verriers de Venise à installer leurs fours sur l'île de Murano suite à des
    incendies déclarés au départ des fours de verriers.
    Les maisons des Vénitiens étant à cette époque en bois, il y eut une inquiétude sur les risques
    encourus. De plus, la condition de travailler sur une île permettait de protéger le secret de la
    fabrication du verre aux autres puissances.
    C'est ainsi que les verriers de Venise furent forcés de travailler sur l'île de Murano en amenant leurs
    fours et ateliers et en conservant leurs secrets de génération en génération. Il en subsistait une
    centaine dans les années 2000.",

    "Murano is an island located north of Venice, in its lagoon. If this island is known, it is
    for its internationally renowned glassblowers.
    Indeed, the history of glassblowers began in 1201, when the Senate of Venice wrote and voted a decree
    and voted a decree obliging the glassmakers of Venice to install their furnaces on the island of Murano following
    fires declared at the departure of the glassmakers furnaces.
    The houses of the Venetians being at that time in wood, there was a concern on the risks
    incurred. In addition, the condition of working on an island allowed to protect the secret of the
    manufacture of glass to the other powers.
    Thus, the glassmakers of Venice were forced to work on the island of Murano by bringing their
    and workshops and keeping their secrets from generation to generation. There were still about
    a hundred of them in the years 2000."
  );

  $Murano2 = array(
    "Le musée du verre sur l'île de Murano est une des attractions privatisés du grand publique et des
    touristes et une des plus célèbre à visiter lorsqu'on se rend à Venise tout comme l'île elle-même situé
    dans la lagune et partagée en deux par un Grand Canal traversé par un seul pont, le Ponte Lungo.",

    "The glass museum on the island of Murano is one of the most popular attractions for the general public and
    and one of the most famous to visit when visiting Venice as well as the island itself located in the lagoon
    in the lagoon and divided in two by a Grand Canal crossed by a single bridge, the Ponte Lungo."
  );

  $Campanile1 = array(
    "La tour campanile de St Marc est une tour abritant des cloches afin de les faire sonner pour appeler les
    fidèles à l’heure de la prière. Située sur le côté de la place St Marc et de la basilique St Marc, elle
    mesure 98,6 mètres de haut.",

    "The campanile tower of St. Mark's is a tower housing bells to ring them to call the faithful at prayer time.
    the faithful at the hour of prayer. Located on the side of St. Mark's square and St. Mark's basilica, it
    measures 98.6 meters high."
  );

  $Campanile2 = array(
    "Sa construction initiale débute au IXe siècle sous le règne du doge Pietro Tribuno, elle fut terminée
    au XIIe siècle sous règne de Domenico Morosini et avait pour objectif initial de servir de tour de guet. La
    base du campanile était la loggetta, caserne pour les gardes du Palais des Doges.
    C’est en 1489 que son histoire est bouleversée par un incendie causant des dégâts dont la destruction
    de la flèche en bois sur son sommet. La tour campanile prit sa forme finale au XVIe siècle suite aux
    restaurations faites après un tremblement de terre causant à nouveau des dégâts sur la tour. Suite à
    cela, des travaux furent fait sur la tour pour ajouter le sommet en marbre avec l’ajout d’une
    sculpture
    du lion st marc et une flèche en feuilles d'or remplaçant celle en bois, travaux réalisé par
    l’architecte Giorgio Spavento.
    Puis lui fut ajoutée une sculpture en bois doré de l’archange Gabriel par Marin Sanudo. Enfin, en
    1776, le campanile fut équipé d'un paratonnerre et en 1820, la statue de l'ange a été remplacée par celle de
    Luigi Zandomeneghi pour nous retrouver avec la tour bien connu aujourd’hui des touristes étant
    présente sur la place St Marc, lieu déjà très prisé.",

    "Its initial construction began in the ninth century during the reign of Doge Pietro Tribuno and was completed
    in the It was completed in the 12th century under the reign of Domenico Morosini and its initial purpose was to serve as a watchtower.
    The base of the bell tower was the loggetta, the barracks for the guards of the Doge's Palace.
    It was in 1489 that its history was disrupted by a fire causing damage including the destruction
    of the wooden spire on its top. The campanile tower took its final shape in the sixteenth century following the
    after an earthquake that again caused damage to the tower. As a result of this
    work was done on the tower to add the marble top with the addition of a
    sculpture of the lion of St. Mark and a spire in gold leaf replacing that in wood, work done by
    by the architect Giorgio Spavento. Then was added to it a sculpture in gilded wood of the archangel Gabriel by Marin Sanudo. Finally, in
    1776, the bell tower was equipped with a lightning rod and in 1820 the statue of the angel was replaced by that of
    Luigi Zandomeneghi to find us with the tower well known today to tourists being present
    in St. Mark's Square, a place already very popular."
  );

  $Burano1 = array(
    "L’île de Burano, bien que moins connue que l’île de Murano, est aussi célèbre pour sa dentelle et ses
    canaux bordés de maisons vivement colorés.
    Situé aussi au nord de Venise, dans sa lagune, son histoire est courte.
    Elle débute à l’époque romaine mais son développement commence réellement après la chute de l’Empire
    romain d’Occident. Elle se développe assez rapidement mais son administration se fait depuis Torcello,
    une autre île et elle ne reçoit aucun bénéfice de cette île ou de l’île Murano assez proche.",

    "The island of Burano, although less known than the island of Murano, is also famous for its lace and its
    canals lined with brightly colored houses.
    Also located north of Venice, in its lagoon, its history is short.
    It begins in Roman times but its development really starts after the fall of the Western Roman Empire.
    Roman Empire. It develops quite quickly but its administration is done from Torcello,
    another island and it does not receive any benefit from this island or from the nearby Murano island."
  );

  $Burano2 = array(
    "C’est seulement lorsque des femmes de l’île se mettent à fabriquer de la dentelle et que celle-ci est
    exportée à travers l’Europe que l’île commence à fleurir et se faire connaître pour sa dentelle
    remarquable. Mais son commerce commence à décliner au XVIIIe siècle. Burano restera indépendant jusqu’en
    1923 où elle sera annexée par Venise.
    Malgré cette déclinaison, l’île reste florissante et un endroit à visiter même aujourd'hui après avoir
    visité l’île Murano.",

    "It is only when women of the island start to make lace and that this one is exported through Europe that the
    exported throughout Europe that the island begins to flourish and to be known for its lace
    remarkable lace. But its trade begins to decline in the eighteenth century. Burano will remain independent until
    1923 when it will be annexed by Venice.
    Despite this decline, the island remains flourishing and a place to visit even today after having
    after visiting the island Murano."
  );
  ?>

  <section class="showcase">
    <img src="Images/Sejours/PontDesSoupirs.jpg" alt="" class="imgBg">
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
    <article class="centre">
      <?php
      echo "<h3>$bienvenue[$lang]</h3>";
      echo "<p> $bienvenueTexte[$lang]</p>"
      ?>
    </article>
  </div>
  <div class="bg gris">
    <article class="centre">
      <h3><?= "$carteTitre[$lang]" ?></h3>
      <iframe src="https://www.google.com/maps/d/u/2/embed?mid=1tjOzk2Sy68lXNEYEt1WbcVhjTrDfASU&ehbc=2E312F" width="640" height="480"></iframe>
      <div class="legende-carte">
        <h3><?= "$carteLegende[$lang]" ?></h3>
        <div>
          <img src="Images/Marco.png" alt="">
          <p><?= "$Marco[$lang]" ?></p>
        </div>
        <div>
          <img src="Images/DonnolaDodo.png" alt="">
          <p><?= "$Donnola[$lang]" ?></p>
        </div>
        <div>
          <img src="Images/Gufo.png" alt="">
          <p><?= "$Gufo[$lang]" ?></p>
        </div>
        <div>
          <img src="Images/LagunaOuvert.png" alt="">
          <p><?= "$Laguna[$lang]" ?></p>
        </div>
      </div>
    </article>
  </div>

  <div class="IMGparallax IMG1 IMG-microscopique"></div>

  <div class="container-timeline">
    <?= "<h2 class=\"title\">$titre[$lang]</h2>" ?>
    <div class="timeline">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image: url(Images/Sejours/PontDeRialto.jpg)" data-year="Ponte di Rialto">
            <?= "<div class=\"swiper-slide-content\"><span class=\"timeline-lieu\">$PontRialto[$lang]</span>" ?>
            <h4 class="timeline-title"><?= "$premierjour[$lang]" ?></h4>
            <p class="timeline-text">
              <?= "$PontRialto1[$lang]" ?>
            </p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(Images/Sejours/PalaisDesDoges.jpg)" data-year="Palazzo Ducale">
          <?= "<div class=\"swiper-slide-content\"><span class=\"timeline-lieu\">$PalaisDoges[$lang]</span>" ?>
          <h4 class="timeline-title"><?= "$premierjour[$lang]" ?></h4>
          <p class="timeline-text">
            <?= "$PalaisDoges1[$lang]" ?>
          </p>
          <p>
            <?= "$PalaisDoges2[$lang]" ?>
          </p>
        </div>
      </div>
      <div class="swiper-slide" style="background-image: url(Images/Sejours/Basilique.jpg)" data-year="Basilica di San Marco">
        <?= "<div class=\"swiper-slide-content\"><span class=\"timeline-lieu\">$BStMarc[$lang]</span>" ?>
        <h4 class="timeline-title"><?= "$premierjour[$lang]" ?></h4>
        <p class="timeline-text">
          <?= "$BStMarc1[$lang]" ?>
        </p>
        <p class="timeline-text">
          <?= "$BStMarc2[$lang]" ?>
        </p>
      </div>
    </div>
    <div class="swiper-slide" style="background-image: url(Images/Sejours/PlaceSaintMarc.jpg)" data-year="Piazza San Marco">
      <?= "<div class=\"swiper-slide-content\"><span class=\"timeline-lieu\">$placeStMarc[$lang]</span>" ?>
      <h4 class="timeline-title"><?= "$premierjour[$lang]" ?></h4>
      <p class="timeline-text">
        <?= "$placeStMarc1[$lang]" ?>
      </p>
    </div>
  </div>
  <div class="swiper-slide" style="background-image: url(Images/Sejours/Campanile.jpg)" data-year="Campanile di San Marco">
    <?= "<div class=\"swiper-slide-content\"><span class=\"timeline-lieu\">$Campanile[$lang]</span>" ?>
    <h4 class="timeline-title"><?= "$premierjour[$lang]" ?></h4>
    <p class="timeline-text">
      <?= "$Campanile1[$lang]" ?>
    <p><a onclick="plus('1')"><?= "$Plus[$lang]" ?></a></p>
    <div id="1" style="display: none;">
      <p>
        <?= "$Campanile2[$lang]" ?>
      <p><a onclick="moins('1')"><?= "$Moins[$lang]" ?></a></p>
      </p>
    </div>
    </p>
  </div>
  </div>
  <div class="swiper-slide" style="background-image: url(Images/Sejours/PontDesSoupirs.jpg)" data-year="Ponte dei Sospiri">
    <?= "<div class=\"swiper-slide-content\"><span class=\"timeline-lieu\">$PontSoupirs[$lang]</span>" ?>
    <h4 class="timeline-title"><?= "$premierjour[$lang]" ?></h4>
    <p class="timeline-text">
      <?= "$PontSoupirs1[$lang]" ?>
    </p>
  </div>
  </div>
  <div class="swiper-slide" style="background-image: url(Images/Sejours/Murano.jpg)" data-year="Murano">
    <?= "<div class=\"swiper-slide-content\"><span class=\"timeline-lieu\">$Murano[$lang]</span>" ?>
    <h4 class="timeline-title"><?= "$deuxiemejour[$lang]" ?></h4>
    <p class="timeline-text">
      <?= "$Murano1[$lang]" ?>
    </p>
    <p class="timeline-text">
      <?= "$Murano2[$lang]" ?>
    </p>
  </div>
  </div>
  <div class="swiper-slide" style="background-image: url(Images/Sejours/Burano.jpg)" data-year="Burano">
    <?= "<div class=\"swiper-slide-content\"><span class=\"timeline-lieu\">$Burano[$lang]</span>" ?>
    <h4 class="timeline-title"><?= "$troisiemejour[$lang]" ?></h4>
    <p class="timeline-text">
      <?= "$Burano1[$lang]" ?>
    </p>
    <p class="timeline-text">
      <?= "$Burano2[$lang]" ?>
    </p>
  </div>
  </div>
  </div>
  <div class="swiper-pagination"></div>
  </div>
  </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js'></script>
  <script src="Script/scriptSejour.js"></script>

  <?php
  include("footer.php");
  ?>

</body>

</html>