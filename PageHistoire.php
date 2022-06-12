<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="./styleHistoire.css">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
    <title>Histoire</title>
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
    $sousTitre = array("Une ville aux milles et une saveurs", "A city of a thousand and one flavours");
    $saviezvous = array("Le saviez-vous ?", "Did you know ?");
    $bienvenue = array("Venise, ses quatre forces&nbsp;...", "Venice, it's four strenths&nbsp;...");
    $bienvenueTexte = array(
        "Curieux de l'histoire de Venise ? Vous vous demandez comment cette ville manifique est venu à naitre ? Vous êtes 
    au bon endroit ! Ici vous pourrez découvrir tout sur les quatre plus grandes époques de Venise.",
        "Curious about the history of Venice? Do you wonder how this manifest city came to be? You are in the right 
    the right place! Here you can find out all about the four greatest eras of Venice."
    );

    $siecle1 = array(
        "Découvrez les premières années de Venise, sa création, son développement et les problèmes
    que les habitants ont rencontrés.",
        "Curious about the history of Venice? Do you wonder how this manifest city came to be? You are in the right 
    the right place! Here you can find out all about the four greatest eras of Venice."
    );

    $siecle2 = array(
        "Apprenez en plus sur l'expansion de Venise et comment elle est devenue la ville culte
    qu'elle est aujourd'hui.",
        "Apprenez en plus sur l'expansion de Venise et comment elle est devenue la ville culte
    qu'elle est aujourd'hui."
    );

    $siecle3 = array(
        "Venise perd de sa suprematie maritime. Decouvrez ce qu'il s'est passé, les enjeux et les
    conséquences des décisions prises lors de cette époque mouvementée.",
        "Venice loses its maritime supremacy. Discover what happened, what was at stake and the consequences of
        consequences of the decisions taken during this eventful period."
    );

    $siecle4 = array(
        "Découvrez Venise d'aujourd'hui, ces événements les plus marquants.",
        "Discover the Venice of today, its most important events."
    );

    $creation1 = array(
        "Aucune source historique fiable n’ayant été découverte, la création de Venise et les premiers
    siècles de son histoire relèvent du mythe plus qu’autre chose. La ville aurait été fondée le 25 mars
    421 sur le coup de midi par trois consuls de Padoue, une ville située à quarante kilomètres de
    Venise. Sa fondation avait pour but de jeter les bases de l'église de San Giacomo di Rialto. Suite à
    l’invasion de l’Italie par les Huns, certaines personnes se seraient réfugiées sur les îlots de
    sable de la lagune, cette dernière offrant une protection naturelle contre les invasions comme des
    sortes de douves naturelles.",

        "Since no reliable historical sources have been found, the creation of Venice and the first centuries of its history are more myth than anything else.
    history are more myth than anything else. The city was founded on March 25
    421 at noon by three consuls of Padua, a city located at forty kilometers from
    Venice. Its foundation was intended to lay the foundations of the church of San Giacomo di Rialto. Following the
    the invasion of Italy by the Huns, some people would have taken refuge on the islands of sand of the lagoon, this
    of the lagoon, the latter offering a natural protection against the invasions as
    natural moat."
    );

    $creation2 = array(
        "Au VIIe siècle, les Vénitiens auraient érigé un système politique. Le chef était un doge dont le
    pouvoir est encadré. Cela était très différent du système monarchique qui s’impose sur l'Europe
    à la
    même époque. Cela dit, il faut évidemment prendre ces informations avec des pincettes, ces
    dernières
    étant tirées de contes, de chants ou encore de la Cronaca Venezia del Diacono, des chroniques
    vénitiennes du diacre Jean.",
        "In the 7th century, the Venetians would have set up a political system. The chief was a doge whose
    power is framed. This was very different from the monarchical system that was imposed on Europe
    at the
    same period. That said, it is obviously necessary to take this information with a pinch of salt, these
    last
    taken from tales, songs or even the Cronaca Venezia del Diacono, the Venetian chronicles of
    of the deacon John."
    );

    $migration1 = array(
        "Si plusieurs personnes ont décidé de s’installer sur la lagune ce n’est pas pour rien. En effet,
    deux facteurs principaux expliquent ce phénomène. Ces facteurs sont la baisse et la stabilisation du
    niveau de la mer et l’invasion de l’Italie par les Huns, les Ostrogoths mais surtout par les
    Lombards en 568 qui déclencha une migration massive vers le littoral. Les habitants de Venise
    viennent de tous les coins de l’Italie.",
        "If several people decided to settle on the lagoon it is not for nothing. In fact, there are two main reasons for this,
    two main factors explain this phenomenon. These factors are the decrease and the stabilization of the sea level and the invasion of Italy by the
    and the invasion of Italy by the Huns, the Ostrogoths but especially by the Lombards in 568 which
    Lombards in 568 which triggered a massive migration to the coast. The inhabitants of Venice
    come from all over Italy."
    );

    $migration2 = array(
        "En voici quelques exemples :",
        "Here are some examples :"
    );

    $migration3 = array(
        "<ul>
        <li>Oderzo, qui fut prise par Rothari en 639</li>
        <li>Altino, dont les habitants, guidés par leurs évêques, s’installèrent sur l'îlot de Torcello;</li>
        <li>Padoue, ville des supposés fondateurs de Venise;</li>
        <li>Aquilée, dont les habitants se réfugièrent à Grado.</li>
        </ul>",

        "<ul>
        <li>Oderzo, which was taken by Rothari in 639</li>
        <li>Altino, whose inhabitants, guided by their bishops, settled on the islet of Torcello;</li>
        <li>Padua, city of the supposed founders of Venice;</li>
        <li>Aquileia, whose inhabitants took refuge in Grado.</li>
        </ul>"
    );

    $migration4 = array(
        "Au début, tous ces peuples étaient éparpillés sur les îles de la lagune, isolés les uns des
    autres,
    formant des communautés séparés où les conditions de vie étaient très inégales.
    La lagune ne devait être qu’un refuge temporaire, cependant l’insécurité de la terre ferme
    poussa
    les réfugiés à s’installer de manière prolongée en créant une ville sur la lagune. La
    construction
    de cette ville nécessita un effort monumental de la part de ses habitants. En effet, il a fallu
    planter des milliers de petits pieux en bois dans la vase, cette dernière n’étant pas assez
    solide
    pour supporter les maisons. De plus, les rives furent consolidées et le sol drainé. Rapidement,
    plusieurs petites cités et églises s’élevèrent comme la basilique de la Vierge en 639. La ville
    devint rapidement intermédiaire commerciale entre l'Empire romain d’Orient (byzantin) et
    l’Occident
    et se développa économiquement notamment par le biais de la pêche mais aussi du travail du
    verre, du bronze et de la corne.",
        "In the beginning, all these peoples were scattered on the islands of the lagoon, isolated from each other, and
    from each other,
    forming separate communities where the living conditions were very unequal.
    The lagoon was only meant to be a temporary refuge, but the insecurity of the mainland
    pushed
    the refugees to settle down in a prolonged way by creating a city on the lagoon. The
    construction
    of this city required a monumental effort on the part of its inhabitants. Indeed, it was necessary to
    thousands of small wooden stakes in the mud, this last not being enough
    solid
    to support the houses. In addition, the banks were consolidated and the soil drained. Quickly,
    several small towns and churches were built, such as the Basilica of the Virgin in 639. The city
    quickly became a commercial intermediary between the Eastern Roman Empire (Byzantine) and
    the West
    and developed economically in particular by the means of fishing but also of the work of glass, bronze
    glass, bronze and horn."
    );

    $dvp1 = array(
        "Jusqu’au VIIe siècle, la ville de Venise était formée de plusieurs communautés chacunes sur leurs
    îlots. Petit à petit, les activités commerciales, les populations et les richesses commencèrent à se
    regrouper à Rialto, une île offrant plusieurs avantages.",
        "Until the seventh century, the city of Venice was made up of several communities, each on its own
     islands. Gradually, commercial activities, populations and wealth began to gather on Rialto, an island
     Rialto, an island with many advantages."
    );

    $dvp2 = array(
        "Parmi ces avantages on retrouve le commerce maritime l'accostage des grandes embarcations qui sont
    acilité.",
        "Among these advantages we find the maritime trade the docking of large boats that are
    easy to use."
    );

    $dvp3 = array(
        "L’importance de Rialto n'a fait que croître depuis l’an 810 quand le chef de Venise, le doge Angelo
    Participazio, s'installe sur l'île à la suite de la menace que représentaient les troupes de Pépin
    d’Italie, fils de Charlemagne et roi d’Italie, qui avait franchi les lidi.",
        "The importance of Rialto has only grown since 810 when the leader of Venice, Doge Angelo
    Participazio, settled on the island following the threat posed by the troops of Pepin of Italy, son of Charlemagne
    of Italy, son of Charlemagne and king of Italy, who had crossed the lidi."
    );

    $dvp4 = array(
        "Les doges de Venise devinrent complètement indépendants en 814. Ils furent à la tête d’une
    république oligarchique. On parle de thalassocratie. Il est important de dire que Venise devint une
    des capitales du monde chrétien aux côtés de Rome ou encore Aquilée grâce aux reliques de saint Marc
    qui furent ramenées d’Alexandrie en 828.",
        "The doges of Venice became completely independent in 814. They were at the head of an
     oligarchic republic. We speak of a thalassocracy. It is important to say that Venice became one of the
     of the Christian world alongside Rome or Aquileia thanks to the relics of Saint Mark
     which were brought back from Alexandria in 828."
    );

    $expansion1 = array(
        "Venise gagnant de plus en plus d’habitants et le commerce se faisant de plus en plus important, il
    était nécessaire de s’approprier la lagune.",
        "Venice was gaining more and more inhabitants and trade was becoming more and more important.
    it was necessary to appropriate the lagoon."
    );

    $expansion2 = array(
        "Au bas moyen âge, Venise devient extrêmement riche, grâce au contrôle du commerce avec l’est, elle
    commence à s’étendre en Mer Adriatique et au-delà. Cette phase d’expansion débute en l’an 1000,
    lorsque la flotte guidée par le doge Pietro II Orseolo pour combattre les pirates qui opprimaient de
    leurs incursions les côtes vénitiennes, reçut la soumission des villes côtières d’Istrie et de
    Dalmatie. L’empereur byzantin reconnut ensuite les titres vénitiens sur les duchés d’Istrie et de
    Dalmatie.",
        "In the early Middle Ages, Venice became extremely wealthy, thanks to the control of the trade with the East, it
    began to expand into the Adriatic Sea and beyond. This phase of expansion began in the year 1000,
    when the fleet guided by the doge Pietro II Orseolo to fight the pirates that oppressed with their incursions
    the Venetian coasts with their incursions, received the submission of the coastal cities of Istria and
    Dalmatia. The Byzantine emperor recognized then the Venetian titles on the duchies of Istria and
    Dalmatie."
    );

    $expansion3 = array(
        "L’essor de Venise s’appuya d’abord sur ses relations commerciales avec Constantinople. En 1082,
    les
    Vénitiens reçurent d’importants privilèges commerciaux, en récompense de l’aide navale qu’ils
    apportèrent à l’Empire byzantin contre les Normands. L’expansion prit d’abord pour cadre la mer
    Adriatique. Au Xe siècle, les Vénitiens s’assurèrent le contrôle de la côte dalmate. Ils
    éliminèrent
    notamment les pirates croates qui nuisaient à leur commerce.",
        "The rise of Venice was first based on its commercial relations with Constantinople. In 1082,
    the
    Venetians received important commercial privileges, as a reward for the naval help they brought to the
    the Byzantine Empire against the Normans. The expansion took place first in the
    Adriatic Sea. In the 10th century, the Venetians secured control of the Dalmatian coast. They
    eliminated
    They eliminated the Croatian pirates who were harming their trade."
    );

    $expansionC1 = array(
        "La puissance vénitienne stagnante favorisa l’expansion commerciale de Gênes en Orient.
    Venise ne fournit pas non plus d’abondants efforts pour aider les Byzantins dans les trois premières
    croisades : elle favorisa la prise de Jérusalem lors de la première croisade mais ne participa pas à
    la deuxième croisade, pas plus à la troisième qui procura d’importants avantages commerciaux à ses
    rivales Pise et Gênes.",
        "The stagnant Venetian power favored Genoa's commercial expansion in the East.
    Venice did not provide abundant efforts to help the Byzantines in the first three crusades either.
    crusades: it supported the capture of Jerusalem at the time of the first crusade but did not take part in
    crusade, nor in the third crusade, which brought important commercial advantages to its rivals
    rivals Pisa and Genoa."
    );

    $expansionC2 = array(
        "Comme les trois autres grands ports d’Italie, Gênes, Pise et Amalfi, Venise était une ville-État
    qui
    établit son pouvoir par la proximité maritime, en italien Repubblica Marinara. Elle distança ses
    concurrentes en plusieurs étapes, la première étant la quatrième Croisade. En 1202-1204, les
    Croisés
    l’aidèrent à conquérir plusieurs étapes sur la route de l’Orient (Zara, les îles ioniennes) puis
    se
    lancèrent à l’assaut de Constantinople bien que ce n’était pas à l’origine le but de
    l’expédition.
    Le dépeçage de l’Empire byzantin fonda la grandeur de Venise. Elle reçut plusieurs territoires,
    notamment de nombreuses îles grecques et une partie de la ville de Constantinople. Ces positions
    lui
    assuraient le contrôle commercial de toute la Méditerranée orientale. Jusque là reine de
    l’Adriatique, elle devenait un point de passage obligé entre l’Orient maritime et l’Occident
    continental. Le marchand Marco Polo symbolisa son esprit d’entreprise au XIIIe siècle.",
        "Like the other three great ports of Italy, Genoa, Pisa and Amalfi, Venice was a city-state
    which
    established its power through maritime proximity, in Italian Repubblica Marinara. It outstripped its competitors in several
    competitors in several stages, the first being the Fourth Crusade. In 1202-1204, the
    Crusaders
    crusaders helped it to conquer several stages on the road to the East (Zara, the Ionian islands) and then
    themselves
    Constantinople, although this was not originally the goal of the expedition.
    of the expedition.
    The dismemberment of the Byzantine Empire founded the greatness of Venice. It received several territories,
    including many Greek islands and part of the city of Constantinople. These positions
    to her
    These positions ensured the commercial control of the entire eastern Mediterranean. Until there queen of
    the Adriatic, it became an obligatory point of passage between the maritime East and the continental West.
    West. The merchant Marco Polo symbolized its entrepreneurial spirit in the 13th century."
    );

    $XV1 = array(
        "L’expansion de Venise continuait de progresser et ainsi Venise se trouvait « au coeur du système de
    circulation le plus vaste de l’époque, étendu à la mer entière ».",
        "The expansion of Venice continued to progress and thus Venice was « at the heart of the most extensive
    the most extensive traffic system of the time, extended to the entire sea »."
    );

    $XV2 = array(
        "Au XVe siècle, la République faisait partie des cinq principales puissances en Italie, aux côtés du
        duché de Milan, du royaume de Naples, de la république de Florence, et des États de l’Église. Ces
        différents États s’affrontaient pour la suprématie en Italie. Venise en profita pour étendre son
        territoire sur la Terre Ferme (Bergame, Brescia, Lodi, Frioul), notamment au dépens du duché de
        Milan.",
        "In the 15th century, the Republic was one of the five main powers in Italy, along with the Duchy of Milan, the Kingdom of Naples, the Republic of Florence, and the Church.
        of Milan, the Kingdom of Naples, the Republic of Florence, and the States of the Church. These
        These different states were fighting for supremacy in Italy. Venice took advantage of this to extend its
        territory on the mainland (Bergamo, Brescia, Lodi, Friuli), in particular at the expense of the duchy of
        Milan."
    );

    $XV3 = array(
        "A partir du XVe siècle plusieurs Venise prit part à plusieurs guerres contre différentes
    collations tel que le roi de France Charles VIII en 1494 et la ligue de Cambrai en 1508. Elle conquit aussi de
    nombreux territoires ; En 1499, Venise prit Crémone, Rimini en Romagne et Trieste",
        "From the XVth century several Venice took part in several wars against various
    such as the king of France Charles VIII in 1494 and the league of Cambrai in 1508. It also conquered of
    many territories; In 1499, Venice took Cremona, Rimini in Romagna and Trieste"
    );

    $XV4 = array(
        "Quelques années plus tard, les alliances se renversèrent encore. Les Vénitiens soutinrent cette
    fois le roi de France François Ier qui s’engageait dans une reconquête du Milanais. Ce soutien s’avéra
    décisif dans la victoire franco-vénitienne de Marignan en 1515.",
        "A few years later, the alliances were reversed again. The Venetians supported this time
        king Francis I of France, who was engaged in a reconquest of Milan. This support turned out to be
        decisive in the Franco-Venetian victory of Marignano in 1515."
    );

    $XVI1 = array(
        "A partir du XVIe siècle Venise commence à perdre sa suprématie commerciale et maritime.",
        "From the 16th century onwards Venice began to lose its commercial and maritime supremacy."
    );

    $XVI2 = array(
        "L’année 1565 sème la mort à Venise où la peste fait des ravages. Un malheur n’arrivant jamais seul,
    les Turcs prennent Nicosie et Famagouste. Chypre est bientôt perdue.",
        "The year 1565 brings death to Venice where the plague wreaks havoc. A misfortune never arrives alone,
    the Turks took Nicosia and Famagusta. Cyprus was soon lost."
    );

    $XVI3 = array(
        "Le 7 octobre 1571, les Vénitiens et la coalition européenne affrontent les Turcs. C'est le
    célèbre
    bataille de Lépante. Ce sera la bataille navale la plus sanglante et la plus meurtrière que la
    Méditerranée a jamais connue. Les Turcs, battus, ont perdu 116 navires. Mais, après cette
    défaite,
    ils en reconstruisent pas moins de deux fois plus.",
        "On October 7, 1571, the Venetians and the European coalition confronted the Turks. This is the
    famous
    battle of Lepanto. It will be the bloodiest and most deadly naval battle that the
    Mediterranean has ever known. The Turks, beaten, lost 116 ships. But, after this
    defeat,
    they rebuilt not less than twice as many."
    );

    $XVI4 = array(
        "Cependant, cette bataille de Lépante ne débouche sur aucune conquête territoriale. Et quand bien même les Ottomans consolident leurs positions, raflant à Venise quelques belles possessions comme la Crète ils perdent leur suprématie sur la mer. Désormais, la porte de la Méditerranée est ouverte aux navires de commerce anglais, français et scandinave.",
        "However, this battle of Lepanto did not lead to any territorial conquest. And even though the Ottomans consolidated their positions, taking away from Venice some beautiful possessions like Crete, they lost their supremacy on the sea. From then on, the door to the Mediterranean was open to English, French and Scandinavian trading ships."
    );

    $XVII1 = array(
        "Venise voit un retour de la peste en 1630-1631 avec 46 490 morts, soit le quart de la population.",
        "Venice saw a return of the plague in 1630-1631 with 46,490 deaths, a quarter of the population."
    );

    $XVII2 = array(
        "Le 22 août 1645, les Turcs prennent La Canée (Crète) et en 1650 tous les Vénitiens de Constantinople
    (Istanbul) sont expulsés par le sultan. Après des années de combat en Méditerranée pour consolider
    ses positions, Venise finit par céder la Crète (elle fut vénitienne pendant 450 ans) à l’Empire
    ottoman victorieux en 1668. L’orgueil des Vénitiens est atteint.",
        "On August 22, 1645, the Turks took Chania (Crete) and in 1650 all the Venetians of Constantinople
    (Istanbul) were expelled by the Sultan. After years of fighting in the Mediterranean to consolidate
    its positions, Venice finally gave up Crete (it was Venetian for 450 years) to the victorious
    Ottoman Empire in 1668. The pride of the Venetians is reached."
    );

    $XVII3 = array(
        "La richesse de Venise n’est plus qu’une façade car la ville s’endette pour maintenir son train de
        vie fastueux.",
        "The wealth of Venice is only a facade because the city goes into debt to maintain its lavish lifestyle.
    lavish lifestyle."
    );

    $XVII4 = array(
        "Pourtant, malgré l’adversité, les vicissitudes et les malheurs, Venise insouciante et heureuse reste
    la capitale européenne des plaisirs. Au XVIIIe siècle, Venise ne cesse de rayonner à travers toute
    l’Europe. La cité n’a jamais été aussi belle, aussi joyeuse, on n’y a jamais connu une telle douceur
    de vivre.",
        "However, despite adversity, vicissitudes and misfortunes, carefree and happy Venice remains
        the European capital of pleasure. In the eighteenth century, Venice did not cease to shine throughout
        Europe. The city has never been so beautiful, so joyful, one has never known such a sweetness
        of living."
    );

    $XVIII1 = array(
        "Au XVIII siècle, Venise est une des villes les plus raffinées d'Europe, avec une forte influence sur
    l'art, l'architecture et la littérature.",
        "In the XVIII century, Venice was one of the most refined cities in Europe, with a strong influence on
    art, architecture and literature."
    );

    $XVIII2 = array(
        "Son territoire se compose de la Vénétie, du Frioul, de l'Istrie, la Dalmatie, Kotor, une partie de
    la Lombardie et les îles Ioniennes.",
        "Its territory consists of Veneto, Friuli, Istria, Dalmatia, Kotor, part of Lombardy and the
    Lombardy and the Ionian Islands."
    );

    $XVIII3 = array(
        "Le général Bonaparte conquit l’Italie au cours de la campagne d'Italie. Le Directoire avait ordonné
        de déstabiliser la République de Venise, de la dépouiller sans la renverser et de lui demander la
        capitulation, mais Bonaparte, outrepassant les ordres, s'empara de la ville pour récupérer sa marine
        bien équipée et alimenter les caisses de l'armée d'Italie mal nourrie et mal équipée.",
        "General Bonaparte conquered Italy during the Italian campaign. The Directory had ordered
        to destabilize the Republic of Venice, to strip it without overthrowing it and to ask it to surrender.
        but Bonaparte, overriding the orders, seized the city to recover its well-equipped navy and
        well equipped navy and to feed the coffers of the poorly fed and poorly equipped army of Italy."
    );

    $XVIII4 = array(
        "Le 15 novembre 1796, il pénétra dans l'Arsenal de Venise. Puis le général réclama à la ville un prêt
        d'un million de francs-or par mois pendant six mois, avec la promesse de le rembourser une fois la
        guerre finie, mais essuya un refus",
        "On November 15, 1796, he entered the Arsenal of Venice. Then the general asked the city for a loan
        of one million gold francs per month for six months, with the promise to pay it back once the war was over, but
        war over, but was refused."
    );

    $XVIII5 = array(
        "Il profita alors de l'incident des Pâques véronaises pour déclarer la guerre à la république
        vénitienne le 1er mai 1797, envahir les États de Venise et exiger l'abandon du pouvoir par
        l'aristocratie de Venise, une cinquantaine de grandes familles monopolisant le pouvoir et la plupart
        des richesses dans un système clientéliste.",
        "He then took advantage of the incident of the Veronese Easter to declare the war to the republic
        Venetian republic on May 1, 1797, invade the States of Venice and demand the abandonment of the power by
        aristocracy of Venice, about fifty big families monopolizing the power and most of the wealth in a
        wealth in a clientelist system."
    );

    $XVIII6 = array(
        "Après 1 070 ans d'indépendance, le 12 mai 1797 la ville se rendit à Napoléon Bonaparte. Le doge
        Ludovico Manin fut obligé d'abdiquer, le conseil major fut dissous et le gouvernement provisoire de
        la municipalité de Venise fut proclamé. C'était la fin de l'indépendance, Venise étant jusque-là le
        seul territoire italien à ne jamais avoir été occupé par des puissances étrangères. Napoléon fut
        cependant perçu comme une sorte de libérateur par les fractions pauvre et juive de la population
        vénitienne. Napoléon supprime en effet les barrières du Ghetto ainsi que les restrictions de
        circulation imposées aux Juifs.",
        "After 1070 years of independence, on May 12, 1797 the city surrendered to Napoleon Bonaparte. The doge
        Ludovico Manin was forced to abdicate, the major council was dissolved and the provisional government of
        of the municipality of Venice was proclaimed. It was the end of independence, Venice being until then the only
        only Italian territory that had never been occupied by foreign powers. Napoleon was
        perceived as a kind of liberator by the poor and Jewish fractions of the Venetian population.
        Venetian population. Indeed, Napoleon removed the barriers of the Ghetto as well as the restrictions of movement
        imposed on the Jews."
    );

    $XIX1 = array(
        "En 1815 le congrès de Vienne rattacha l'ensemble du domaine vénitien à l'empire d'Autriche. La
    partie occidentale, Vénétie et Frioul, entra dans le Royaume lombard-vénitien, le reste forma les
    provinces maritimes de l'Autriche.
    La montée du sentiment national pro-italien culmina lors de la mise en place d'une république lors
    des mouvements révolutionnaires des années 1847-1849 conduite par Daniele Manin. Mais la répression
    rétablit la domination autrichienne.",
        "In 1815 the Congress of Vienna attached the entire Venetian domain to the Austrian Empire. The
        the western part, Veneto and Friuli, became part of the Lombard-Venetian Kingdom, the rest formed the
        maritime provinces of Austria.
        The rise of the pro-Italian national feeling culminated in the establishment of a republic during the
        revolutionary movements of 1847-1849 led by Daniele Manin. But the repression
        re-established the Austrian domination."
    );

    $XIX2 = array(
        "Les Habsbourg-Lorraine se maintinrent en Vénétie jusqu'en 1866, lorsqu'à la suite de leur défaite
    contre la Prusse (alliée de l'Italie) à la bataille de Sadowa, ils durent accepter le rattachement
    de Venise au jeune royaume d'Italie. Les Vénitiens votèrent cette annexion. En revanche, l'Autriche
    conserva l'Istrie, la Dalmatie et Cattaro jusqu'en 1918.",
        "The Habsburgs-Lorraine maintained themselves in Venetia until 1866, when, following their defeat
        against Prussia (Italy's ally) at the battle of Sadowa, they had to accept the attachment of
        of Venice to the young kingdom of Italy. The Venetians voted for this annexation. On the other hand, Austria
        kept Istria, Dalmatia and Cattaro until 1918."
    );

    $XIX3 = array(
        "La Vénétie constitua une des régions de plus fortes émigrations, on estime à 4 millions le nombre de
    personnes qui émigrèrent de 1876 à 1915.",
        "Veneto was one of the regions with the highest emigration rates, with an estimated 4 million people emigrating between
    emigrated between 1876 and 1915."
    );

    $XX1 = array(
        "Lors de la Première Guerre mondiale, l'Italie déclare la guerre à l'Autriche-Hongrie en mai 1915
    après bien des hésitations. Le conflit s'est principalement déroulé sur les terres vénitiennes, dans
    un déluge de feu et de fer qui a détruit les récoltes, les animaux, les maisons et les hommes. Le
    territoire a été dévasté, l'agriculture anéantie pour des années.",
        "During the First World War, Italy declared war on Austria-Hungary in May 1915
        after much hesitation. The conflict took place mainly on Venetian soil, in a deluge of fire and iron
        a deluge of fire and iron that destroyed crops, animals, houses and people. The
        territory was devastated, the agriculture annihilated for years."
    );

    $XX2 = array("Le progressif développement d'un tourisme d'élite, une industrialisation de la lagune, qui va
    au-delà des verreries de Murano, explosèrent après 1950.", "The gradual development of an elite tourism, an industrialization of the lagoon, which goes beyond the glass factories of Murano, exploded after 1950.
    beyond the glassworks of Murano, exploded after 1950.");

    $XX3 = array(
        "Dans la seconde moitié du xxe siècle, les Vénitiens prirent conscience des dangers que faisaient
    peser ces évolutions de leur cité. La pollution atmosphérique attaquait les vénérables monuments. La
    pollution aquatique menaçait la faune. Pour beaucoup, la lagune était considérée morte. L'inquiétude
    augmentait par la crainte de la montée des eaux.",
        "In the second half of the twentieth century, the Venetians became aware of the dangers of these developments in their city.
    the dangers of these developments in their city. Atmospheric pollution was attacking the venerable monuments. The
    water pollution threatened the fauna. For many, the lagoon was considered dead. The anxiety
    increased by the fear of the rise of the waters."
    );

    $XX4 = array(
        "En 1966, Venise subit en effet une grande inondation qui alerta les autorités (Il y avait deux
    mètres d'eau sur la place Saint-Marc). En 1975, on ferma les stations qui pompaient l'eau de la
    nappe phréatique afin de ralentir l'affaissement du sol ; certaines maisons s'enfonçaient de 2,5mm 
    par an. Le projet Mose, définitivement proposé en 1989, a pour but de contrer l'envahissement de
    la lagune par les marées exceptionnelles. Mais son gigantisme et son coût effraient certains
    Vénitiens et les défenseurs de l'environnement. Les travaux, démarrés en 2003, continuent en 2019, non sans «
    vagues financières »",
        "In 1966, Venice suffered a great flood that alerted the authorities (there were two meters of water in St. Mark's Square).
        water in St. Mark's Square). In 1975, the stations that pumped water from the water table were closed
        to slow down the subsidence of the ground; some houses were sinking by 2,5mm per year. 
        per year. The Mose project, definitively proposed in 1989, aims to counter the invasion of the lagoon by
        the lagoon by the exceptional tides. But its gigantism and cost frighten some
        Venetians and environmentalists. The work, started in 2003, continues in 2019, not without «
        financial waves »"
    );

    $Inter = array("je suis intéressé !", "I want to know more !");
    $epoques = array("Les grandes époques de Venise", "The great eras of Venice");
    $V_IX_siecle = array("V - IX siècle", "V - IX century");
    $IX_XVI_siecle = array("IX - XVI siècle", "IX - XVI century");
    $XVI_XVIII_siecle = array("XVI - XVIII siècle", "XVI - XVIII century");
    $XVIII_Aujourd_hui = array("XVIII - Aujourd'hui", "XVIII - Today");

    $titre1 = array("Du Vème siècle au IXème siècle", "From the 5th century to the 9th century");
    $titre2 = array("Du IXème au XVIème siècle", "From the 9th to the 16th century");
    $titre3 = array("Du XVIème siècle au XVII siècle", "From the 16th to the 17th century");
    $titre4 = array("Du XVII siècle à nos jours", "From the 17th century to the present day");

    $sTitre1 = array("Création de Venise", "Creation of Venice");
    $sTitre2 = array("La migration vers la lagune", "The migration to the lagoon");
    $sTitre3 = array("Développement de la ville", "Development of the city");
    $sTitre4 = array("Expansion de la ville", "Expansion of the city");
    $sTitre5 = array("Expansion commerciale", "Commercial expansion");
    $sTitre6 = array("XVème siècle", "XVth century");
    $sTitre7 = array("XVIème siècle", "16th century");
    $sTitre8 = array("XVIIème siècle", "XVIIth century");
    $sTitre9 = array("XVIIIème siècle", "XVIIIth century");
    $sTitre10 = array("XIXème siècle", "XIXth century");
    $sTitre11 = array("XX siècle", "XXth century");

    ?>
    <section class="showcase">
        <img src="Images/Gastronomie/Fond2.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <?php
                echo "<h1>$venise[$lang]</h1>";
                echo "<h2>$sousTitre[$lang]</h2>";
                ?>
            </div>
    </section>

    <div class="bg noir">
        <article class="centre">
            <h3><?= "$bienvenue[$lang]" ?></h3>
            <p>
                <?= "$bienvenueTexte[$lang]" ?>
            </p>
        </article>
    </div>

    <div class="conteneur-frise noir">
        <section class="timeline-carousel">
            <h1><?= "$epoques[$lang]" ?></h1>
            <div class="timeline-carousel__item-wrapper" data-js="timeline-carousel">
                <!--Timeline item-->
                <div class="timeline-carousel__item">
                    <div class="timeline-carousel__image">
                        <div class="media-wrapper media-wrapper--overlay image image1">
                        </div>
                    </div>
                    <div class="timeline-carousel__item-inner">
                        <span class="year"><?= "$V_IX_siecle[$lang]" ?></span>
                        <p>
                            <?= "$siecle1[$lang]" ?>
                        </p>
                        <a href="#un" class="read-more"><?= "$Inter[$lang]" ?></a>
                    </div>
                </div>
                <!--/Timeline item-->

                <!--Timeline item-->
                <div class="timeline-carousel__item">
                    <div class="timeline-carousel__image">
                        <div class="media-wrapper media-wrapper--overlay image2 image"></div>
                    </div>
                    <div class="timeline-carousel__item-inner">
                        <span class="year"><?= "$IX_XVI_siecle[$lang]" ?></span>
                        <p>
                            <?= "$siecle2[$lang]" ?>
                        </p>
                        <a href="#deux" class="read-more"><?= "$Inter[$lang]" ?></a>
                    </div>
                </div>
                <!--/Timeline item-->

                <!--Timeline item-->
                <div class="timeline-carousel__item">
                    <div class="timeline-carousel__image">
                        <div class="media-wrapper media-wrapper--overlay image image3">
                        </div>
                    </div>
                    <div class="timeline-carousel__item-inner">
                        <span class="year"><?= "$XVI_XVIII_siecle[$lang]" ?></span>
                        <p>
                            <?= "$siecle3[$lang]" ?>
                        </p>
                        <a href="#trois" class="read-more"><?= "$Inter[$lang]" ?></a>
                    </div>
                </div>
                <!--/Timeline item-->

                <!--Timeline item-->
                <div class="timeline-carousel__item">
                    <div class="timeline-carousel__image">
                        <div class="media-wrapper media-wrapper--overlay image image4">
                        </div>
                    </div>
                    <div class="timeline-carousel__item-inner">
                        <span class="year"><?= "$XVIII_Aujourd_hui[$lang]" ?></span>
                        <p>
                            <?= "$siecle4[$lang]" ?>
                        </p>
                        <a href="#quatre" class="read-more"><?= "$Inter[$lang]" ?></a>
                    </div>
                </div>
                <!--/Timeline item-->
            </div>
        </section>
        <!--Timeline carousel-->

        <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js'></script>
        <script src="./scriptHistoire.js"></script>
    </div>

    <div class="IMGparallax IMG1 IMG-microscopique"></div>

    <div class="bg gris" id="un">
        <article class="centre">
            <h2><?= "$itre1[$lang]" ?></h2>
        </article>
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <h3><?= "$sTitre1[$lang]" ?></h3>
                <p>
                    <?= "$creation1[$lang]" ?>
                </p>
                <p><a onclick="plus('1')">En savoir plus</a></p>
                <div id="1" style="display: none;">
                    <p>
                        <?= "$creation2[$lang]" ?>
                    <p><a onclick="moins('1')">Moins</a></p>
                    </p>
                </div>
            </div>
            <div class="image-et-legende">
                <img src="Images/Architecture/SanDonato.jpg" alt="">
                <p>Masques Vénitiens</p>
            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/Architecture/SanDonato.jpg" alt="">
                <p>Masques Vénitiens</p>
            </div>
            <div class="zone-texte bordure-texte">
                <h3><?= "$sTitre2[$lang]" ?></h3>
                <p>
                    <?= "$migration1[$lang]" ?>
                </p>
                <p>
                    <?= "$migration2[$lang]" ?>
                </p>
                <p>
                    <?= "$migration3[$lang]" ?>
                </p>
                <p><a onclick="plus('2')">En savoir plus</a></p>
                <div id="2" style="display: none;">
                    <p>
                        <?= "$migration4[$lang]" ?>
                    <p><a onclick="moins('2')">Moins</a></p>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <h3><?= "$sTitre3[$lang]" ?></h3>
                <p>
                    <?= "$dvp1[$lang]" ?>
                </p>
                <p>
                    <?= "$dvp2[$lang]" ?>
                </p>
                <p>
                    <?= "$dvp3[$lang]" ?>
                </p>
                <p>
                    <?= "$dvp4[$lang]" ?>
                </p>
            </div>
            <div class="image-et-legende">
                <img src="Images/Architecture/SanDonato.jpg" alt="">
                <p>Masques Vénitiens</p>
            </div>
        </div>
    </div>

    <div class="IMGparallax IMG1 IMG-microscopique"></div>

    <div class="bg gris" id="deux">
        <article class="centre">
            <h2><?= "$titre2[$lang]" ?></h2>
        </article>
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/Architecture/SanDonato.jpg" alt="">
                <p>Masques Vénitiens</p>
            </div>
            <div class="zone-texte bordure-texte">
                <h3><?= "$sTitre4[$lang]" ?></h3>
                <p>
                    <?= "$expansion1[$lang]" ?>
                </p>
                <p>
                    <?= "$expansion2[$lang]" ?>
                </p>
                <p><a onclick="plus('3')">En savoir plus</a></p>
                <div id="3" style="display: none;">
                    <p>
                        <?= "$expansion3[$lang]" ?>
                    </p>
                    <p><a onclick="moins('3')">Moins</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <h3><?= "$sTitre5[$lang]" ?></h3>
                <p>
                    <?= "$expansionC1[$lang]" ?>
                </p>
                <p><a onclick="plus('4')">En savoir plus</a></p>
                <div id="4" style="display: none;">
                    <p>
                        <?= "$expansionC2[$lang]" ?>
                    </p>
                    <p><a onclick="moins('4')">Moins</a></p>
                </div>
            </div>
            <div class="image-et-legende">
                <img src="Images/Architecture/SanDonato.jpg" alt="">
                <p>Masques Vénitiens</p>
            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/Architecture/SanDonato.jpg" alt="">
                <p>Masques Vénitiens</p>
            </div>
            <div class="zone-texte bordure-texte">
                <h3><?= "$sTitre6[$lang]" ?></h3>
                <p>
                    <?= "$XV1[$lang]" ?>
                </p>
                <p>
                    <?= "$XV2[$lang]" ?>
                </p>
                <p><a onclick="plus('5')">En savoir plus</a></p>
                <div id="5" style="display: none;">
                    <p>
                        <?= "$XV3[$lang]" ?>
                    </p>
                    <p>
                        <?= "$XV4[$lang]" ?>
                    </p>
                    <p><a onclick="moins('5')">Moins</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="IMGparallax IMG1 IMG-microscopique"></div>

    <div class="bg gris" id="trois">
        <article class="centre">
            <h2><?= "$titre3[$lang]" ?></h2>
        </article>
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <h3><?= "$sTitre7[$lang]" ?></h3>
                <p>
                    <?= "$XVI1[$lang]" ?>
                </p>
                <p>
                    <?= "$XVI2[$lang]" ?>
                </p>
                <p><a onclick="plus('6')">En savoir plus</a></p>
                <div id="6" style="display: none;">
                    <p>
                        <?= "$XVI3[$lang]" ?>
                    </p>
                    <p>
                        <?= "$XVI4[$lang]" ?>
                    </p>
                    <p><a onclick="moins('6')">Moins</a></p>
                </div>
            </div>
            <div class="image-et-legende">
                <img src="Images/Architecture/SanDonato.jpg" alt="">
                <p>Masques Vénitiens</p>
            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/Architecture/SanDonato.jpg" alt="">
                <p>Masques Vénitiens</p>
            </div>
            <div class="zone-texte bordure-texte">
                <h3><?= "$sTitre8[$lang]" ?></h3>
                <p>
                    <?= "$XVII1[$lang]" ?>
                </p>
                <p>
                    <?= "$XVII2[$lang]" ?>
                </p>
                <p>
                    <?= "$XVII3[$lang]" ?>
                </p>
                <p>
                    <?= "$XVII4[$lang]" ?>
                </p>
            </div>
        </div>
    </div>

    <div class="bg gris" id="quatre">
        <article class="centre">
            <h2><?= "$titre4[$lang]" ?></h2>
        </article>
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <h3><?= "$sTitre9[$lang]" ?></h3>
                <p>
                    <?= "$XVIII1[$lang]" ?>
                </p>
                <p>
                    <?= "$XVIII2[$lang]" ?>
                </p>
                <p>
                    <?= "$XVIII3[$lang]" ?>
                </p>
                <p>
                    <?= "$XVIII4[$lang]" ?>
                </p>
            </div>
            <div class="image-et-legende">
                <img src="Images/Architecture/SanDonato.jpg" alt="">
                <p>Masques Vénitiens</p>
            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/Architecture/SanDonato.jpg" alt="">
                <p>Masques Vénitiens</p>
            </div>
            <div class="zone-texte bordure-texte">
                <p>
                    <?= "$XVIII5[$lang]" ?>
                </p>
                <p>
                    <?= "$XVIII6[$lang]" ?>
                </p>
            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <h3><?= "$sTitre10[$lang]" ?></h3>
                <p>
                    <?= "$XIX1[$lang]" ?>
                </p>
                <p>
                    <?= "$XIX2[$lang]" ?>
                </p>
                <p>
                    <?= "$XIX3[$lang]" ?>
                </p>
            </div>
            <div class="image-et-legende">
                <img src="Images/Architecture/SanDonato.jpg" alt="">
                <p>Masques Vénitiens</p>
            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/Architecture/SanDonato.jpg" alt="">
                <p>Masque venitiens</p>
            </div>
            <div class="zone-texte bordure-texte">
                <h3><?= "$sTitre11[$lang]" ?></h3>
                <p>
                    <?= "$XX1[$lang]" ?>
                </p>
                <p>
                    <?= "$XX2[$lang]" ?>
                </p>
                <p>
                    <?= "$XX3[$lang]" ?>
                </p>
                <p><a onclick="plus('7')">En savoir plus</a></p>
                <div id="7" style="display: none;">
                    <p>
                        <?= "$XX4[$lang]" ?>
                    <p><a onclick="moins('7')">Moins</a></p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>