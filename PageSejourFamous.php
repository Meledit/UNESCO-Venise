<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Séjour culte</title>
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
  $sousTitre = array("Une ville remplie d'histoire", "a city full of history");
  $saviezvous = array("Le saviez-vous ?", "Did you know ?");
  $bienvenue = array("Explorez les lieux les plus cultes de la ville.", "Explore the most famous places in the city.");
  $bienvenueTexte = array("Venise est une ville ancienne avec une histoire riche et profonde.
  Découvrez pendant ce parcours les lieux, monuments et sites les plus connus
  de la ville italienne.", "Venice is an ancient city with a rich and deep history.
  Discover during this tour the most famous places, monuments and sites of the Italian
  of the Italian city.");
  ?>

  <img src="Images/Gastronomie/Fond2.jpg" alt="" class="imgBg">
  <div class="overlay"></div>

  <div class="container">
    <div class="text">
      <h1>Venise démasquée</h1>
      <h2>Une ville remplie d'histoire</h2>
    </div>
    </section>


    <div class="bg noir">
      <article class="centre">
        <h3>Explorez les lieux les plus cultes de la ville.</h3>
        <p>
          Venise est une ville ancienne avec une histoire riche et profonde.
          Découvrez pendant ce parcours les lieux, monuments et sites les plus connus
          de la ville italienne.
        </p>
      </article>
    </div>

    <div class="IMGparallax IMG1 IMG-microscopique"></div>

    <!-- partial:index.partial.html -->
    <div class="container-timeline">
      <h2 class="title">Parcours culte</h2>
      <div class="timeline">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=11)" data-year="Pont de Rialto">
              <div class="swiper-slide-content"><span class="timeline-lieu">Pont de Rialto</span>
                <h4 class="timeline-title">- fghj -</h4>
                <p class="timeline-text">
                  Le Pont du Rialto, monument célèbre et un des ponts les plus anciens de Venise traversant le Grand
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
                  ouvrant de 9h à 12h.
                </p>
              </div>
            </div>
            <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=12)" data-year="Palais des Doges">
              <div class="swiper-slide-content"><span class="timeline-lieu">Palais des Doges</span>
                <h4 class="timeline-title">Our nice super title</h4>
                <p class="timeline-text">
                  Le Palais des Doges à Venise, de style Gothique et Renaissance situé sur la plage Saint-Marc, fut le
                  siège de tous les pouvoirs. En effet, ce palais possédait trois grandes parties représentant les 3
                  pouvoirs : La Résidence Ducale (le pouvoir Législatif), Le Palais de Justice (le pouvoir Exécutif)
                  , Le Palais Communal (le pouvoir Judiciaire).
                </p>
                <p>
                  Son histoire remonte à l’époque où Venise dépendait de l’Empire Byzantin mais suite aux nombreux
                  conflits entre les byzantins et un ancien peuple germanique, un pouvoir émerge incarné par le premier
                  duc ou doge Paolucio Anafesto, c’est le début de l’émancipation de Venise qui continuera petit à petit
                  jusqu’à son émergence total de l’Empire Byzantin où Venise choisit l’obédience à Rome.
                  L’édifice était initialement un palais fortifié, un fortin rapidement flanqué d'une basilique. Son
                  aspect resta stable jusqu’au XIIe siècle où en 1340 où démarre la rénovation des 3 ailes du Palais
                  mais un incendie vers 1483, lorsque la dernière aile est en rénovation, détruit de nombreuses œuvres
                  et endommage le Palais, après cette période, plus de travaux.
                  Ce sera lors de l’annexion de Venise par le royaume d’Italie que l’édifice deviendra le musée et siège
                  du musée civique du Palazzo Ducale que nous connaissons.
                </p>
              </div>
            </div>
            <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=13)" data-year="Basilique Saint Marc">
              <div class="swiper-slide-content"><span class="timeline-lieu">Basilique Saint Marc</span>
                <h4 class="timeline-title">Our nice super title</h4>
                <p class="timeline-text">
                  La Basilique St Marc est la plus importante basilique à Venise.
                  Son histoire débute en 828 où la première église dédiée à St Marc fut érigée par le doge Giustiniano
                  Participazio, abritant les reliques St Marc par la suite. Mais après la révolte des Vénitiens contre le
                  doge Pietro IV Candiano, de nombreuses maisons ainsi que le Palais des Doges et l’église St Théodore
                  furent incendiées et ces monuments furent donc détruits. La même année, le doge Pietro Orseolo
                  entreprend directement de reconstruire/de réparer l'église St Marc.
                </p>
                <p class="timeline-text">
                  Au XVIIe siècle, avec les fonds disponibles, il fut décidé d’entreprendre une construction ingénieuse
                  en
                  l'honneur des douzes apôtres de Constantinople, qui deviendra la basilique St Marc. C’est ainsi qu’en
                  1060, le doge Domenico Contarini décide de reconstruire la basilique. Les ingénieurs venus construire
                  cette basilique venaient de Constantinople et avaient pour but de bâtir un "superbe temple singulier
                  et
                  rare".
                  La nouvelle église a été construite à l'emplacement de l'église Saint-Théodore et de la chapelle
                  Saint-Marc en reprenant un plan en croix grecque s'inspirant de l'église des Saints-Apôtres de
                  Byzance.
                  Elle devint, bien après la chute de la République, la grande église d'État, abritant les reliques St
                  Marc étant auparavant contenu dans l'église St Théodore et un monument incontournable à visiter
                  lorsqu'on voyage à Venise.
                </p>
              </div>
            </div>
            <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=14)" data-year="Place Saint Marc">
              <div class="swiper-slide-content"><span class="timeline-lieu">Place Saint Marc</span>
                <h4 class="timeline-title">Our nice super title</h4>
                <p class="timeline-text">
                  La place Saint-Marc, du nom de l'évangéliste, protecteur chrétien de Venise,
                  saint Marc se situe au bord du Grand Canal et constitue le cœur de la ville de Venise. Cette place fut
                  dans le passé le centre politique, religieux et économique de la république de venise.
                  Sa construction débute au IXe siècle et la place adopte sa taille et forme actuelle en 1177, mais ce
                  n'est que 100 ans plus tard que cette place a été pavée.
                  La place St Marc est liée à l'histoire de la Basilique St Marc située en face et fait partie d'une des
                  places les plus belles à Venise souvent visitées. Napoléon Bonaparte la définissait même comme étant «
                  Le plus beau salon d'Europe ».
                </p>
              </div>
            </div>
            <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=15)" data-year="Pont des soupirs">
              <div class="swiper-slide-content"><span class="timeline-lieu">Pont des soupirs</span>
                <h4 class="timeline-title">Our nice super title</h4>
                <p class="timeline-text">
                  Le pont des soupirs est un des nombreux ponts présents à Venise mais surtout un des lieux touristiques
                  les plus célèbres. Sa construction débute en 1602 et a pour objectif de relier le Palais des doges où
                  les prisonniers sont jugés à la nouvelle prison (achevée en 1604) par Antonio Contin. Il a été surnommé
                  le “sarcophage qui s’envole” par André Suarès en raison de sa structure. Le pont était totalement fermé
                  avec un toi et des murs épais afin d’éviter d’entendre les cris et lamentations des détenus enfermés et
                  d’éviter toute tentative de fuite, ou de suicide..
                  Il possède deux couloirs qui avaient pour objectif que pour aller dans un bâtiment ou l’autre, on devait
                  prendre un couloir fermé différents empêchant les prisonniers de se voir.
                  Ainsi il est devenu au fil du temps le monument célèbre et incontournable à visiter.
                </p>
              </div>
            </div>
            <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=16)" data-year="Murano">
              <div class="swiper-slide-content"><span class="timeline-lieu">Murano</span>
                <h4 class="timeline-title">Our nice super title</h4>
                <p class="timeline-text">
                  Murano est une île située au nord de Venise, dans sa lagune. Si cette île est connue, c’est
                  majoritairement pour ses souffleurs de verre ayant une renommée internationale.
                  En effet, l’histoire des souffleurs de verre commença en 1201, lorsque le Sénat de Venise rédigea et
                  vota un décret obligeant les verriers de Venise à installer leurs fours sur l'île de Murano suite à des
                  incendies déclarés au départ des fours de verriers.
                  Les maisons des Vénitiens étant à cette époque en bois, il y eut une inquiétude sur les risques
                  encourus. De plus, la condition de travailler sur une île permettait de protéger le secret de la
                  fabrication du verre aux autres puissances.
                  C'est ainsi que les verriers de Venise furent forcés de travailler sur l'île de Murano en amenant leurs
                  fours et ateliers et en conservant leurs secrets de génération en génération. Il en subsistait une
                  centaine dans les années 2000.
                </p>
                <p class="timeline-text">
                  Le musée du verre sur l'île de Murano est une des attractions privatisés du grand publique et des
                  touristes et une des plus célèbre à visiter lorsqu'on se rend à Venise tout comme l'île elle-même situé
                  dans la lagune et partagée en deux par un Grand Canal traversé par un seul pont, le Ponte Lungo.
                </p>
              </div>
            </div>
            <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=16)" data-year="Campanile de Saint Marc">
              <div class="swiper-slide-content"><span class="timeline-lieu">Campanile de Saint Marc</span>
                <h4 class="timeline-title">Our nice super title</h4>
                <p class="timeline-text">
                  La tour campanile de St Marc est une tour abritant des cloches afin de les faire sonner pour appeler les
                  fidèles à l’heure de la prière. Située sur le côté de la place St Marc et de la basilique St Marc, elle
                  mesure 98,6 mètres de haut.
                  <input type="radio" id="savoirPlus" name="savoirPlusMai">
                  <label for="savoirPlus">En savoir plus</label>
                  <span>
                    Sa construction initiale débute au IXe siècle sous le règne du doge Pietro Tribuno, elle fut terminée
                    au
                    XIIe siècle sous règne de Domenico Morosini et avait pour objectif initial de servir de tour de guet.
                    La
                    base du campanile était la loggetta, caserne pour les gardes du Palais des Doges.
                    C’est en 1489 que son histoire est bouleversée par un incendie causant des dégâts dont la destruction
                    de
                    la flèche en bois sur son sommet. La tour campanile prit sa forme finale au XVIe siècle suite aux
                    restaurations faites après un tremblement de terre causant à nouveau des dégâts sur la tour. Suite à
                    cela, des travaux furent fait sur la tour pour ajouter le sommet en marbre avec l’ajout d’une
                    sculpture
                    du lion st marc et une flèche en feuilles d'or remplaçant celle en bois, travaux réalisé par
                    l’architecte Giorgio Spavento.
                    Puis lui fut ajoutée une sculpture en bois doré de l’archange Gabriel par Marin Sanudo. Enfin, en
                    1776,
                    le campanile fut équipé d'un paratonnerre et en 1820, la statue de l'ange a été remplacée par celle de
                    Luigi Zandomeneghi pour nous retrouver avec la tour bien connu aujourd’hui des touristes étant
                    présente
                    sur la place St Marc, lieu déjà très prisé.
                    <input type="radio" id="savoirMoins" name="savoirPlusMai">
                    <label for="savoirMoins">Moins</label>
                  </span>
                </p>
              </div>
            </div>
            <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=16)" data-year="Burano">
              <div class="swiper-slide-content"><span class="timeline-lieu">Burano</span>
                <h4 class="timeline-title">Our nice super title</h4>
                <p class="timeline-text">
                  L’île de Burano, bien que moins connue que l’île de Murano, est aussi célèbre pour sa dentelle et ses
                  canaux bordés de maisons vivement colorés.
                  Situé aussi au nord de Venise, dans sa lagune, son histoire est courte.
                  Elle débute à l’époque romaine mais son développement commence réellement après la chute de l’Empire
                  romain d’Occident. Elle se développe assez rapidement mais son administration se fait depuis Torcello,
                  une autre île et elle ne reçoit aucun bénéfice de cette île ou de l’île Murano assez proche.
                </p>
                <p class="timeline-text">
                  C’est seulement lorsque des femmes de l’île se mettent à fabriquer de la dentelle et que celle-ci est
                  exportée à travers l’Europe que l’île commence à fleurir et se faire connaître pour sa dentelle
                  remarquable. Mais son commerce commence à décliner au XVIIIe siècle. Burano restera indépendant jusqu’en
                  1923 où elle sera annexée par Venise.
                  Malgré cette déclinaison, l’île reste florissante et un endroit à visiter même aujourd'hui après avoir
                  visité l’île Murano.
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js'></script>
    <script src="./script.js"></script>

</body>

</html>