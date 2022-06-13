<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleOeuvre.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="Image/png" sizes="16x16" href="Images/eye-mask.png">
    <title>Venise Oeuvre et Personalités</title>
</head>

<body>
    <?php
    include("header.php");

    $venise = array("Venise démasquée", "Unmasking Venice");
    $sousTitre = array("Une ville au coeur de la culture", "A city at the heart of culture");
    $saviezvous = array("Le saviez-vous ?", "Did you know ?");
    $bienvenue = array("Bienvenue sur la page Oeuvres et Personalités&nbsp;!", "Welcome to the Arts and Personalities page&nbsp;!");
    $bienvenueTexte = array("Ici vous retrouverez des informations et anecdotes sur les artistes, oeuvres et inventeurs de Venise, ainsi que sur Venise elle-même !
        Pour accéder directement à la partie de votre choix, cliquer sur l'image la concernant dans la mosaique ci-dessous.", "Here you will be able to discover information and anecdotes about the artists, arts and discoverers of Venice, as well as about Venice itself!
        To go directly to the part of your choice, click on the image in the mosaic below.");

    $saintMarcTitre = array("Saint-Marc", "Saint Mark");
    $chatBotteTitre = array("Le Chat Botté", "The Puss in Boots");

    $sandLegende = array("George Sand (par Auguste Charpentier)", "George Sand (by Auguste Charpentier)");
    $mussetLegende = array("Alfred Musset (par Faustin Besson)", "Alfred Musset (by Faustin Besson)");
    $sandMussetTitre = array("Les origines de la ville de l'amour :", "Origins of the city of love :");
    $sandMusset1 = array("En décembre 1833, George Sand et Alfred De Musset, deux grands écrivains français vivant au XIXème siècle, en couple à cette époque, se rendent à Venise. 
        Suite à certains problèmes de santé, ils rentreront chacun de leur côté.", "In December 1833, George Sand and Alfred De Musset, two famous French writers living in the 19th century, who were 
        a couple at the time, went to Venice. Due to health problems, they returned separately.");
    $sandMusset2 = array("George Sand racontera par la suite dans  Histoire de ma vie un recueil épistolaire autobiographique publié en 1855, leur voyage à Venise. Ce voyage qui a également inspiré le 
        drame romantique Lorenzaccio d' Alfred Musset. Le couple participe alors au lancement de la mode de Venise comme ville romantique et destination idéale pour les amoureux.", "George Sand later recounted 
        their trip to Venice in Histoire de ma vie, an autobiographical epistolary collection published in 1855. This trip also inspired the romantic drama Lorenzaccio by Alfred Musset. The couple helped 
        to launch the fashion for Venice as a romantic city and ideal destination for lovers.");
    $sandMusset3 = array(
        "On attribue à Venise, la réputation de ville de l’amour. Et pourtant le couple qui lancé cette réputation à connu une relation tumultueuse là bas et rompirent peu après. ",
        "Venice is said to be the city of love. Yet the couple who started this reputation had a tumultuous relationship there and broke up soon after. "
    );

    $saintMarcTitre2 = array("Saint Marc, symbole de Venise :", "Saint Mark, symbol of Venice:");
    $saintMarc1 = array("Saint Marc, dans la tradition chrétienne est considéré comme le Saint patron des secrétaires, notaires, écrivains, greffiers, vitriers, opticiens, mais est surtout le Saint Patron de Venise. 
        En effet, ce dernier est devenue le symbole de la ville de Venise après être passé dans la lagune où un ange lui aurait dit la phrase “Pax tibi Marce, evangelista meus” littéralement “Que la paix soit avec toi, 
        Marc, mon évangéliste”, devenue la devise de la ville.", "Saint Mark, in the Christian tradition, is known as the patron saint of secretaries, notaries, writers, clerks, glaziers, opticians, but is above all the 
        patron saint of Venice. Indeed, he has become the symbol of the city of Venice after passing through the lagoon where an angel would have said to him the sentence \"Pax tibi Marce, evangelista meus\" literally 
        \"Peace be with you, Mark, my evangelist\", which has become the city motto.");
    $saintMarc2 = array("Saint Marc est d’ailleurs représenté comme un lion auréolé tenant un livre ou une épée, on voit d’ailleurs le lion ailé de Saint-Marc sur le palais des Doges. 
        Le lion de saint Marc apparaît également dans le pavillon militaire et le pavillon de commerce de l’Italie.", "St. Mark is also represented as a lion with a halo holding a book or a sword, and the winged lion of St. Mark can be seen on the Doge's Palace. 
        The lion of St. Mark also appears in the military and trade pavilion of Italy.");
    $saintMarcLegende = array("Saint-Marc (par Boulogne Valentin)", "Saint-Marc (by Boulogne Valentin)");
    $lionSaintMarcLegende = array("Le Lion de Saint-Marc sur la basilique Saint-Marc", "The Lion of St Mark on St Mark's Basilica");

    $marcoPoloLegende = array("Sculpture de Marco Polo au Palazzo Doria-Tursi à Gênes", "Sculpture by Marco Polo at the Palazzo Doria-Tursi in Genoa");
    $marcoPolo1 = array("Venise a toujours eu une place importante dans le commerce mondial, et ce grâce à sa place stratégique dans les voies maritimes. Et de part sa position maritime, il n’est pas étonnant que les 
        Vénitiens aient voulu explorer le reste du monde. Et quand on parle, d’explorateur vénitien, le premier nom qui vient est sûrement celui de Marco Polo, né le 15 septembre 1254 à Venise. Marco Polo est un célèbre 
        marchand italien, mais est surtout célèbre pour son voyage en Chine.", "Venice has always had an important place in world trade, thanks to its strategic position in the sea routes. And because of its maritime position, 
        it is not surprising that the Venetians wanted to explore the rest of the world. And when we talk about Venetian explorers, the first name that comes to mind is surely that of Marco Polo, born on 15 September 1254 in 
        Venice. Marco Polo is a famous Italian merchant, but he is most famous for his journey to China.");
    $marcoPolo2 = array("En effet à ses 17 ans il partit avec son père et son oncle pour un voyage vers l’Asie, où il restera 24 ans avant de revenir en Italie en 1295. Bien qu’il n'ait pas été le premier européen à se 
        rendre en Chine, il est un des premier à avoir décrit aussi précisément ce qu’il y a vu, et à avoir mentionné le Japon. Son voyage a eu un impact très important sur la cartographie mondiale, et a également inspiré un 
        autre explorateur européen: Christophe Colomb.", " At the age of 17 he left with his father and uncle on a journey to Asia, where he stayed for 24 years before returning to Italy in 1295. Although he was not the first 
        European to visit China, he was one of the first to describe in such detail what he saw there, and to mention Japan. His voyage had a very important impact on world cartography, and also inspired another European 
        explorer: Christopher Columbus.");

    $carpaccio1 = array(
        "Vittore Carpaccio, né en 1465 à Venise, est un célèbre peintre italien de son époque issue de l’école vénitienne. Vittore Carpaccio fut un des premiers artistes à placer l’architecture au centre de ses œuvres, 
        faisant ainsi partie d’un des premiers représentants du védutisme. Le védutisme est un genre pictural basé sur la représentation de paysages urbains. Carpaccio représente ainsi dans ses œuvres la réalité de Venise en marge de la mode de son époque.",
        "Vittore Carpaccio, born in 1465 in Venice, was a famous Italian painter of his time from the Venetian school. Vittore Carpaccio was one of the first painters to place architecture at the centre of his works, thus becoming one of the first representatives
         of Vedutism. Vedutism is a pictorial genre based on the representation of urban landscapes. In his works, Carpaccio depicts the reality of Venice on the fringe of the fashion of his time."
    );
    $carpaccio2 = array("Ses œuvres se discernent aussi par la prédominance du rouge vif, cette prédominance inspire d’ailleurs, en 1963, le nom du plat composé de fines tranches de bœuf nommé <a href=\"PageGastronomie.php#Viandes\">Carpaccio</a>. Parmi ces oeuvres les plus célèbres, Deux Dames Vénitiennes
         (Due dame veneziane), Le Miracle de la relique de la Croix au pont du Rialto (Miracolo della Croce al ponte di Rialto) qui représente une vision du Grand Canal de Venise et l’ancien pont du Rialto ou Mort de la Vierge (Morte della Vergine).", "His works are also 
         distinguished by the predominance of bright red, which in 1963 inspired the name of the dish made of thin slices of beef called <a href=\"PageGastronomie.php#Viandes\">Carpaccio</a>. Among his most famous works are Two Venetian Ladies (Due dame veneziane), The Miracle of the Relic of the Cross at the 
         Ponte di Rialto (Miracolo della Croce al ponte di Rialto), which depicts a vision of the Grand Canal of Venice and the ancient Rialto Bridge or Death of the Virgin (Morte della Vergine).");

    $panoramaLegende = array("Extrait de Panorama du Grand Canal pris d'un Bateau", "Extract from \"Panorama du Grand Canal pris d'un bateau\"");
    $panoramaTitre = array("Panorama du Grand Canal pris d'un bateau :", "Panorama du Grand Canal pris d'un bateau (a french film):");
    $panorama1 = array("Alexandre Promio est l’un des cadreur formés par Louis Lumière, qui avec son frère Auguste Lumière ont joué un rôle primordial dans l’histoire du cinéma. En 1986, Alexandre Promio est envoyé par la Société Lumière dans 
        le monde entier pour ramener des prises de vues. C’est le 25 octobre 1896, lorsque Promio se trouve à Venise, que lui vient une idée qui révolutionna le cinéma.", "Alexandre Promio is one of the cameramen trained by Louis Lumière, who along 
        with his brother Auguste Lumière played a major role in the history of cinema. In 1986, Alexandre Promio was sent by the Lumière Company to bring back footage from all over the world. It was on 25 October 1896, when Promio was in Venice, that 
        he came up with an idea that revolutionized cinema.");
    $panorama2 = array("Il profite du cadre de Venise et de ses canaux pour essayer un nouveau procédé. Il utilisa alors une gondole pour réaliser sa prise de vue, et en profitant du mouvement de la gondole sur l’eau, réalisa un film documentaire de 43 secondes intitulé Panorama 
        du Grand Canal pris d’un bateau. Alexandre Promio fut alors l’un des premier à réaliser un travelling latéral dans l’histoire du cinéma, mais surtout fut le premier à le théoriser et à en comprendre l’intérêt. Les frères Lumière baptisèrent cet effet le “Panorama Lumière”", "He took 
        advantage of the setting of Venice and its canals to experiment with a new process. He used a gondola to take the shot, and by taking advantage of the movement of the gondola on the water, made a 43-second documentary film entitled Panorama du Grand Canal pris d'un bateau. Alexandre Promio 
        was then one of the first to make a lateral travelling shot in the history of cinema, but above all he was the first to theorise about it and understand its interest. The Lumière brothers called this effect the \"Panorama Lumière\".");
    $panorama3 = array("Constant Girel, lui aussi employé par les frères Lumière, fut le premier à réaliser  ce “Panorama Lumière” en septembre 1896, mais le fit simplement par paresse et désinvolture, il fut d’ailleurs renvoyé de la Société Lumière pour cette raison.", "Constant Girel, also employed by the Lumière brothers,
         was the first to make this \"Panorama Lumière\" in September 1896, but he did so purely out of laziness and carelessness, and was fired from the Société Lumière for this reason.");

    $daPonte1 = array(
        "Antonio da Ponte, né en 1512, est un ingénieur suisso-italien connu pour les travaux qu’il a mené à Venise. Il est notamment à l’origine de la reconstruction du Palais des Doges qui avait été lourdement endommagé par un incendie en 1574, et lui a donné l’aspect qu’on lui connaît aujourd’hui.",
        "Antonio da Ponte, born in 1512, was a Swiss-Italian engineer known for the work he carried out in Venice. He was responsible for the reconstruction of the Doge's Palace, which had been heavily damaged by fire in 1574, and gave it the appearance we know today."
    );
    $daPonte2 = array("Antonio da Ponte ne s’est pas arrêté là, le pont du Rialto, alors en bois se détériorait régulièrement, il a alors participé à sa reconstruction entre 1588 et 1591, en effet un concours organisé par les autorité locales pour choisir l’architecte chargé du pont du Rialto eu lieu. Et 
    bien que moins connu Antonio remporta le concours devant d’autres architectes plus célèbres comme Michel-Ange.", "Antonio da Ponte did not stop there, the Rialto bridge, then made of wood, was deteriorating regularly, so he participated in its reconstruction between 1588 and 1591, in fact a competition 
    organised by the local authorities to choose the architect in charge of the Rialto bridge took place. And although less known, Antonio won the competition before other more famous architects such as Michelangelo.");
    $daPonteLegende1 = array("Palais des Doges", "Doge's Palace");
    $daPonteLegende2 = array("Pont du Rialto (par Charl Durand)", "Rialto Bridge (by Charl Durand)");

    $chatBotteLegende1 = array("Le Chat Botté face à l'ogre (par Gustave Doré)", "Puss in Boots facing the ogre (by Gustave Doré)");
    $chatBotteLegende2 = array("Le Chat Botté (par Carl Offterdinger)", "Puss in Boots (by Carl Offterdinger)");
    $chatBotteTitre2 = array("Le Chat Botté :", "Puss in Boots:");
    $chatBotte1 = array(
        "Le Chat Botté ou Le Maître Chat est un célèbre conte franco-italien qui raconte l’histoire d’un chat qui utilise sa ruse pour offrir le pouvoir, la fortune et la main d’une princesse à son maître. On attribue très souvent l’origine de ce célèbre conte à Charles Perrault, qui l’a en effet 
    publié en le 11 janvier 1967 dans son recueil Les Contes de ma mère l’Oye, qui comporte d’autres contes célèbre comme Cendrillon, le Petit Chaperon Rouge ou Le Petit Poucet. Le chat Botté a ensuite connu une diffusion mondiale et à inspirer de nombreux compositeurs, auteurs et autres artistes jusqu’à aujourd’hui.",
        "The Puss in Boots is a famous Franco-Italian tale about a cat who uses his cunning to offer power, fortune and the hand of a princess to his master. The origin of this famous tale is often attributed to Charles Perrault, who published it on 11 January 1967 in his collection Les Contes de ma mère l'Oye, which 
    includes other famous tales such as Cinderella, Little Red Riding Hood and Tom Thumb. Puss in Boots has since spread throughout the world and has inspired many composers, authors and other artists to this day."
    );
    $chatBotte2 = array("Cependant, Charles Perrault n’est pas l’inventeur de la figure du chat Botté, en effet en 1553 paraît La Chatte de Constantin le fortuné (Constantino Fortunato) un conte similaire, publié à Venise dans Les Nuits Facétieuses (Le Piacevole notti) de Giovanni Francesco Straparola. Cependant il 
    y a quelques différences avec le conte que l’on connaît aujourd’hui. Par exemple dans le conte de Straparola le chat est une fée déguisée en chatte, ou encore le maître du chat n’est pas le fils du meunier mais le fils d’une veuve Bohême. Le conte Costantino Fortunato est alors considéré comme une version 
    primitive du conte que l’on connaît tous aujourd’hui.", "However, Charles Perrault is not the inventor of the figure of Puss in Boots, in fact in 1553 appears The Pussycat of Constantine the Fortunate (Constantino Fortunato) a similar tale, published in Venice in The Facetious Nights (Le Piacevole notti) of 
    Giovanni Francesco Straparola. However, there are some differences with the tale we know today. For example, in Straparola's tale the cat is a fairy dressed as a cat, or the cat's master is not the miller's son but the son of a Bohemian widow. The Costantino Fortunato tale is therefore considered to be a 
    primitive version of the tale we all know today.");

    $vivaldi1=array("Antonio Vivaldi, célèbre violoniste et compositeur de musique classique, né à Venise le 4 mars 1678, est un pilier de la musique de son temps. De son vrai nom Antonio Lucio Vivaldi, un des plus grands compositeurs baroque, est un des principaux initiateurs du concerto de soliste, qui se discerne 
    des autres concerto, par la recherche de la virtuosité pour elle-même et accentue le contraste entre l’orchestre et un interprète prodige. Ce qui a changé la perception des concertos, qui seront par la suite écrits à la demande des solistes qui souhaitent les interpréter.","Antonio Vivaldi, the famous violinist 
    and composer of classical music, born in Venice on 4 March 1678, was a pillar of the music of his time. His real name was Antonio Lucio Vivaldi, one of the greatest Baroque composers, and one of the main originators of the solo concerto, which is distinguished from other concertos by its focus on virtuosity for 
    its own sake and the contrast between the orchestra and a prodigious performer. This changed the perception of the concertos, which were later written at the request of soloists who wished to perform them.");
    $vivaldi2= array("Vivaldi a eu une immense influence dans toute l’Europe, et a influencé de nombreux autres artistes comme Bach qui a adapté beaucoup de ses œuvres. Vivaldi est principalement connu de nos jours pour sa musique et ses compositions, mais peu savent qu’il a également composée des musiques religieuses.
     D’autant plus que Vivaldi a également été prêtre à Venise où il est connu sous le sobriquet d’ il Prete rosso, “Le Prêtre roux”."," Vivaldi had a huge influence throughout Europe, and influenced many other artists such as Bach who adapted many of his works. Vivaldi is mainly known nowadays for his music and compositions, 
     but few know that he also composed religious music. Especially since Vivaldi was also a priest in Venice, where he is known as il Prete rosso, 'The Red-Haired Priest'.");

    $turner1=array("Le célèbre peintre, aquarelliste et graveur William Turner, de son vrai nom Joseph Mallord William Turner, né à Londres le 23 avril 1775 est connu comme précurseur de l'impressionnisme. Turner est connu pour ses représentations de paysages à l'aquarelle pour lesquelles dont  Le Dernier Voyage du Téméraire 
    (The Fighting Temeraire), une peinture à l’huile de 1838, ou Pêcheurs en mer (Fishermen at Sea) en 1796.","The famous painter, watercolourist and printmaker William Turner, whose real name was Joseph Mallord William Turner, was born in London on 23 April 1775. Turner is known for his watercolour landscape paintings, including 
    The Fighting Temeraire (1838), an oil painting, and Fishermen at Sea (1796).");
    $turner2=array("Parmi les différents paysages qu’il a peints, William Turner a à de multiples reprises représenté la ville de Venise. La première fois avec San Giorgio Maggiore at Dawn en 1819, puis en 1835 avec The Grand Canal - Venice. Il a également représenté le Pont des Soupirs, célèbre pont de Venise, dans sa toile Venice, 
    the bridge of Sighs en 1840.","Among the various landscapes he painted, William Turner repeatedly depicted the city of Venice. The first time was San Giorgio Maggiore at Dawn in 1819, followed by The Grand Canal - Venice in 1835. He also depicted the famous Bridge of Sighs in his painting Venice, the Bridge of Sighs in 1840.");


    ?>
    <section class="showcase">
        <img src="Images/Fond2.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <?php
                echo "<h1>$venise[$lang]</h1>";
                echo "<h2>$sousTitre[$lang]</h2>";
                ?>
    </section>

    <div class="bgGallery milieu noir">
        <article>
            <?php
            echo "<h3>$bienvenue[$lang]</h3>";
            echo "<p>$bienvenueTexte[$lang]</p>";
            ?>
        </article>

        <div class="wrapper">
            <div class="gallery">
                <div class="gallery__item gallery__item--1">
                    <a href="#AntonioDaPonte" class="gallery__link">
                        <img src="Images/Oeuvre/PontDuRialto(CharlDurand).jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <span>Antonio Da Ponte</span>
                        </div>
                    </a>
                </div>
                <div class="gallery__item gallery__item--2">
                    <a href="#Turner" class="gallery__link">
                        <img src="Images/Oeuvre/WilliamTurner.jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <span>William Turner</span>
                        </div>
                    </a>
                </div>
                <div class="gallery__item gallery__item--3">
                    <a href="#MarcoPolo" class="gallery__link">
                        <img src="Images/Oeuvre/MarcoPolo.jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <span>Marco Polo</span>
                        </div>
                    </a>
                </div>
                <div class="gallery__item gallery__item--4">
                    <a href="#SandMusset" class="gallery__link">
                        <img src="Images/Oeuvre/GeorgeSand(AugusteCharpentier).jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <span>George sand & Alfred Musset</span>
                        </div>
                    </a>
                </div>
                <div class="gallery__item gallery__item--5">
                    <a href="#PanoramaDuGrandCanal" class="gallery__link">
                        <img src="Images/Oeuvre/Panorama_du_grand_Canal.jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <span>Panorama du Grand Canal</span>
                        </div>
                    </a>
                </div>
                <div class="gallery__item gallery__item--6">
                    <a href="#SaintMarc" class="gallery__link">
                        <img src="Images/Oeuvre/LionSaintMarc.jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <?= "<span>$saintMarcTitre[$lang]</span>" ?>
                        </div>
                    </a>
                </div>
                <div class="gallery__item gallery__item--7">
                    <a href="#Vivaldi" class="gallery__link">
                        <img src="Images/Oeuvre/Vivaldi.jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <span>Antonio Vivaldi</span>
                        </div>
                    </a>
                </div>
                <div class="gallery__item gallery__item--8">
                    <a href="#ChatBotte" class="gallery__link">
                        <img src="Images/Oeuvre/ChatBotte(CarlOffterdinger).jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <?= "<span>$chatBotteTitre[$lang]</span>" ?>
                        </div>
                    </a>
                </div>
                <div class="gallery__item gallery__item--9">
                    <a href="#Carpaccio" class="gallery__link">
                        <img src="Images/Oeuvre/VittoreCarpaccio.jpg" class="gallery__image" />
                        <div class="gallery__overlay">
                            <span>Vittore Carpaccio</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="IMGparallax IMG IMG-petite"></div>

    <div class="bg gris" id="SandMusset">
        <div class="article image-avant">
            <div class="zone-images deux-images">
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/GeorgeSand(AugusteCharpentier).jpg" alt="image de George Sand">
                    <?= "<p>$sandLegende[$lang]</p>" ?>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/AlfredMusset(FaustinBesson).jpg" alt="image d'Alfred Musset'">
                    <?= "<p>$mussetLegende[$lang]</p>" ?>
                </div>
            </div>
            <div class="zone-texte bordure-texte">
                <?php
                echo "<h3>$sandMussetTitre[$lang]</h3>";
                echo "<p>$sandMusset1[$lang]</p>";
                echo "<p>$sandMusset2[$lang]</p>";
                ?>

                <div class="zone-saviez-vous">
                    <div class="saviez-vous">
                        <div class="titre">
                            <img src="Images/Gufo.png" alt="">
                            <?= "<h3>$saviezvous[$lang]</h3>" ?>
                        </div>
                        <?= "<p>$sandMusset3[$lang]</p>" ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg gris" id="SaintMarc">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <?php
                echo "<h3>$saintMarcTitre2[$lang]</h3>";
                echo "<p>$saintMarc1[$lang]</p>";
                echo "<p>$saintMarc2[$lang]</p>";
                ?>
            </div>
            <div class="zone-images deux-images">
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/SaintMarc(BoulogneValentin).jpg" alt="image de Saint-Marc">
                    <?= "<p>$saintMarcLegende[$lang]</p>" ?>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/LionSaintMarc.jpg" alt="image du lion de Saint-Marc">
                    <?= "<p> $lionSaintMarcLegende[$lang]</p>" ?>
                </div>
            </div>
        </div>
    </div>

    <div class="bg gris" id="MarcoPolo">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/Oeuvre/MarcoPolo.jpg" alt="image de Marco Polo">
                <?= "<p>$marcoPoloLegende[$lang]</p>" ?>
            </div>
            <div class="zone-texte bordure-texte">
                <?php
                echo "<h3> Marco Polo:</h3>";
                echo "<p>$marcoPolo1[$lang] </p>";
                echo "<p>$marcoPolo2[$lang] </p>";
                ?>
            </div>
        </div>
    </div>

    <div class="IMGparallax IMG2 IMG-petite"></div>

    <div class="bg gris" id="Carpaccio">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <?php
                echo "<h3> Vittore Carpaccio: </h3>";
                echo "<p>$carpaccio1[$lang] </p>";
                echo "<p>$carpaccio2[$lang] </p>";
                ?>
            </div>
            <div class="zone-images">
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/VittoreCarpaccio.jpg" alt="image de Vittore Carpaccio">
                    <p>Vittore Carpaccio</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/DeuxDamesVenitiennes.jpg" alt="image de Deux Dames Vénitiennes">
                    <p>Due dame veneziane</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/MiracleDelPonte.jpg" alt="image du Miracle de la relique de la Croix au pont du Rialto">
                    <p>Miracolo della Croce al ponte di Rialto</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/LaMortDeLaVierge.jpg" alt="image de La Morte de la Vierge">
                    <p>Morte della Vergine</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg gris" id="PanoramaDuGrandCanal">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/Oeuvre/Panorama_du_grand_Canal.jpg" alt="image de Panorama du Grand Canal pris d'un Bateau">
                <?= "<p>$panoramaLegende[$lang]</p>" ?>
            </div>
            <div class="zone-texte bordure-texte">
                <?php
                echo "<h3>$panoramaTitre[$lang]</h3>";
                echo "<p>$panorama1[$lang]</p>";
                echo "<p>$panorama2[$lang]</p>";
                ?>
                <div class="zone-saviez-vous">
                    <div class="saviez-vous">
                        <div class="titre">
                            <img src="Images/Gufo.png" alt="">
                            <?= "<h3>$saviezvous[$lang]</h3>" ?>
                        </div>
                        <?= "<p>$panorama3[$lang]</p>" ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg gris" id="AntonioDaPonte">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <h3> Antonio da Ponte : </h3>
                <?php
                echo "<p>$daPonte1[$lang]</p>";
                echo "<p>$daPonte2[$lang]</p>";
                ?>
            </div>
            <div class="zone-images deux-images">
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/PalaisDesDoges.jpg" alt="image du Palais des Doges">
                    <?= "<p>$daPonteLegende1[$lang]</p>" ?>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/PontDuRialto(CharlDurand).jpg" alt="image du Pont du rialto">
                    <?= "<p>$daPonteLegende2[$lang]</p>" ?>
                </div>
            </div>
        </div>
    </div>

    <div class="IMGparallax IMG2 IMG-petite"></div>

    <div class="bg gris" id="ChatBotte">
        <div class="article image-avant">
            <div class="zone-images deux-images">
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/ChatBotte(GustaveDore).jpg" alt="image de Panorama du Chat Botté">
                    <?= "<p>$chatBotteLegende1[$lang]</p>" ?>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/ChatBotte(CarlOffterdinger).jpg" alt="image de Panorama du Chat Botté">
                    <?= "<p>$chatBotteLegende2[$lang]</p>" ?>
                </div>
            </div>

            <div class="zone-texte bordure-texte">
                <?php
                echo "<h3> $chatBotteTitre2[$lang]</h3>";
                echo "<p> $chatBotte1[$lang]</p>";
                echo "<p> $chatBotte2[$lang]</p>";
                ?>

            </div>
        </div>
    </div>

    <div class="bg gris" id="Vivaldi">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <h3> Antonio Vivaldi : </h3>
                <?php 
                    echo "<p>$vivaldi1[$lang]</p>";
                    echo "<p>$vivaldi2[$lang]</p>";
                ?>
            </div>
            <div class="image-et-legende">
                <img src="Images/Oeuvre/Vivaldi.jpg" alt="image d'Antonio Vivaldi'">
                <p>Antonio Vivaldi</p>
            </div>
        </div>
    </div>

    <div class="bg gris" id="Turner">
        <div class="article image-avant">
            <div class="zone-images">
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/WilliamTurner.jpg" alt="image dede William Turner">
                    <p> William Turner</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/SanGiorgio.jpg" alt="image de San Giorgio Maggiore at Dawn">
                    <p>San Giorgio Maggiore at Dawn</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/TheGrandCanal.jpg" alt="image de The Grand Canal - Venice">
                    <p>The Grand Canal - Venice</p>
                </div>
                <div class="image-et-legende">
                    <img src="Images/Oeuvre/BridgeOfSighs.jpg" alt="image de The Bridge of Sighs">
                    <p>The Bridge of Sighs</p>
                </div>
            </div>

            <div class="zone-texte bordure-texte">
                <h3> William Turner :</h3>
                <?php 
                    echo "<p>$turner1[$lang]</p>";
                    echo "<p>$turner2[$lang]</p>";
                ?>

            </div>
        </div>
    </div>
    <?php
    include("footer.php");

    ?>
</body>

</html>