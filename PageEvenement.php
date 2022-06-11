<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleEvenement.css">
    <link rel="stylesheet" href="style.css">
    <title> Venise </title>
</head>

<body>

    <?php 
        include ("header.php");

        // Préparation des textes traduits 

        $venise = array("Venise en action,","Venice in action,");
        $sousTitre = array("La ville de la fête","The party city");
        $saviezvous=array("Le saviez-vous ?","Did you know ?");
        $bienvenue = array("Bienvenue sur la page Evenemment&nbsp;!","Welcome to the Events page&nbsp;!");
        $bienvenueTexte = array("Venise est une ville très vivante et propose de nombreux évènements tout au long de l'année","Venice is a very lively city and offers many events throughout the year");
        $enSavoirPlus = array("En savoir plus","Read more");
        $enSavoirMoins = array("Moins","Less");

        $janvierMars = array("Janvier / Mars : Le Carnaval de Venise","January / March: The Venice Carnival");
        $mai = array("Mai : La Vogalonga de Venise","May: The Venice Vogalonga");
        $juinNovembre = array("Juin / Novembre : Biennales internationales d’art de Venise","June / November: Venice International Art Biennials");
        $juillet = array("Juillet : Fête du Rédempteur de Venise","July: Festival of the Redeemer of Venice");
        $aout = array("Août : Festival internationale du film de Venise","August: Venice International Film Festival");
        $septembre = array("Septembre : Régate historique de Venise","September: Historic Venice Regatta");
        $octobre = array("Octobre : Venice marathon","October: Venice marathon");
        $novembre = array("Novembre : Fête de la Madonna della Salute","November: Feast of the Madonna della Salute");

        $janvierMars1 = array("La Tradition du Carnaval à Venise remontant au Moyen Age, 'il Carnevale di Venezia'.
        Dès le Xe siècle, le peuple profitait un maximum des derniers jours précédant les mortifications du
        carême en se divertissant et en savourant les plaisirs et les joies de la vie.","The tradition of Carnival in Venice dates back to the Middle Ages, 'il Carnevale di Venezia'. 
        As early as the 10th century, the people made the most of the last days before the mortifications of Lent by entertaining themselves and enjoying the pleasures and joys of life.
        Lent by entertaining themselves and enjoying the pleasures and joys of life.");
        $janvierMars2 = array("Il commence dix jours avant le mercredi des Cendres et se poursuit jusqu'au mardi gras.
        Connu pour ses costumes et ses masques, il attire des foules considérables.","It begins ten days before Ash Wednesday and continues until Shrove Tuesday.
        Known for its costumes and masks, it attracts huge crowds.");
        $janvierMars3 = array("Le carnaval de Venise transforme la ville en une émeute spectaculaire d’apparat, de couleurs, despectacles musicaux, de feux d’artifice et de bals vénitiens glamour.Si vous voulez profiter au mieux de l’atmosphère exotique de Venise, le carnaval est le moment
        idéal.","The Venice Carnival transforms the city into a spectacular riot of pageantry, colour, musical performances, fireworks and glamorous Venetian balls.
        musical performances, fireworks and glamorous Venetian balls.
        If you want to make the most of the exotic atmosphere of Venice, Carnival is the perfect time to
        the perfect time.");
        $janvierMars4 = array("Le carnaval de Venise, ces mascarades, spectacles, musique, jeux et couleurs.","                    The Venice carnival, its masquerades, shows, music, games and colours.");
        $janvierMarsSaviezVous = array("Les masques vénitiens ont été utilisés pour dissimuler l'identité de personnes impliquées dans des activités manifestement illégales.
        Apparus à Venise, ces masques distinctifs étaient faits de papier mâché et somptueusement décorés de fourrures, de tissus, de bijoux et de plumes.","Venetian masks were used to conceal the identity of people involved in blatantly illegal activities.
        Originating in Venice, these distinctive masks were made of papier-mâché and lavishly decorated with furs, fabrics, jewellery and feathers.");
        $janvierMarsLegende = array("Masques Vénitiens","Venetian masks");

        $mai1 = array("La Vogalonga est une régate comme forme de protestation contre le mouvement ondulatoire qui menacede détruire la ville lagunaire.
        En effet, cet événement fait depuis longtemps partie des grands rendez-vous de Venise, une manifestation qui attire des rameurs du
        monde entier et qui est caractérisée par le respect de l’environnement et de l’écosystème conjointement à la tradition.
        L’histoire de la Vogalonga débute dans les années 1970  lorsqu’un groupe d’amis se rassemble lors
        d’une régate sur mascarete (type d’embarcation vénitienne).
        Et c’est précisément après ce premier rendez-vous qu’est née l’idée d’organiser, chaque année,
        une importante régate non compétitive entièrement dédiée à la vogue à la vénitienne, l’une des
        traditions les plus solides de Venise.","The Vogalonga is a regatta as a form of protest against the wave movement that threatens to destroy the lagoon city.
        to destroy the lagoon city.
        Indeed, this event has long been one of Venice's great appointments, an
        event that attracts rowers from all over the
        from all over the world and is characterised by respect for the environment and the ecosystem
        together with tradition.
        The story of the Vogalonga began in the 1970s when a group of friends got together for a regatta on a mascot.
        a regatta on a mascarete
        (a type of Venetian boat).
        And it was precisely after this first meeting that the idea was born to organise, every year
        an important non-competitive regatta entirely dedicated to the Venetian vogue, one of the most
        one of Venice's strongest traditions.");
        $mai2 = array("Le but de la Vogalonga depuis le début est de sensibiliser la population sur la dangerosité des
        barques à moteur pour le mouvement ondulatoire de la ville,
        ainsi que sur la dégradation qui en découle. Dès le début, il est établi que le départ de la
        Vogalonga aura précisément lieu dans le bassin de Saint-Marc,
        l’un des points névralgiques du trafic vénitien. La Vogalonga traverse ensuite les lieux les
        plus suggestifs de Venise et de sa lagune,
        dont les îles de Murano et de Burano. La longueur totale du parcours de la Vogalonga est
        d’environ 30 km, parcourus uniquement avec des bateaux à rames.
        Les spectateurs peuvent profiter d’un spectacle de bateaux de tout type défilant dans un silence
        religieux à l’intérieur d’une ville sans pollution acoustique,
        tout du moins à cette occasion.","The aim of the Vogalonga since the beginning has been to make the population aware of the danger of motor boats for the undulatory movement of the city.
        motorboats for the undulatory movement of the city,
        and the degradation that results from it. From the beginning, it was established that the start of the
        Vogalonga would take place in the Basin of San Marco,
        one of the nerve centres of Venetian traffic. The Vogalonga then passes through the most
        of Venice and its lagoon,
        including the islands of Murano and Burano. The total length of the Vogalonga route is approximately
        The total length of the Vogalonga is about 30 km, which is only covered by rowing boats.
        Spectators can enjoy a spectacle of boats of all types parading in religious silence inside a
        religious silence in a city without noise pollution,
        at least on this occasion.");
        $maiLegende = array("Vogalonga de Venise","Venice Vogalonga");

    ?>

    <section class="showcase">

        <img src="Images/ImagesEvenement/FondEvenement.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <h1>Venise en action,</h1>
                <h2>La ville de la fête</h2>
    </section>

    <div class="bg gris">
        <article>
            <h3>Bienvenue sur la page Evenemment !</h3>
            <p>Venise est une ville très vivante et propose de nombreux évènements tout au long de l'année</p>
        </article>
    </div>

    <div class="bg-menu noir">

        
    <div class="menu-mois">

        <div class="groupe-de-mois">
            <div class="etiquette"><a href="#JanvierMars">Janvier / Mars</a></div>
            <div class="etiquette"><a href="#Mai">Mai</a></div>
            <div class="etiquette"><a href="#Juin">Juin</a></div>
            <div class="etiquette"><a href="#Juillet">Juillet</a></div>
        </div>

        <div class="groupe-de-mois">
            <div class="etiquette"><a href="#Aout">Aout</a></div>
            <div class="etiquette"><a href="#Septembre">Septembre</a></div>
            <div class="etiquette"><a href="#Octobre">Octobre</a></div>
            <div class="etiquette"><a href="#Novembre">Novembre</a></div>
            <!-- <div style="clear:both"></div> -->
    </div>
        
    </div>
    </div>


    <div class="bg gris" id="JanvierMars">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <h3>Janvier / Mars : Le Carnaval de Venise</h3>
                <p>
                    La Tradition du Carnaval à Venise remontant au Moyen Age, "il Carnevale di Venezia".
                    Dès le Xe siècle, le peuple profitait un maximum des derniers jours précédant les mortifications du
                    carême en se divertissant et en savourant les plaisirs et les joies de la vie.
                </p>
                <p>
                    Il commence dix jours avant le mercredi des Cendres et se poursuit jusqu'au mardi gras.
                    Connu pour ses costumes et ses masques, il attire des foules considérables.
                </p>
                <p>
                    Le carnaval de Venise transforme la ville en une émeute spectaculaire d’apparat, de couleurs, de
                    spectacles musicaux, de feux d’artifice et de bals vénitiens glamour.
                    Si vous voulez profiter au mieux de l’atmosphère exotique de Venise, le carnaval est le moment
                    idéal.
                </p>
                <p>
                    Le carnaval de Venise, ces mascarades, spectacles, musique, jeux et couleurs.
                </p>

                <div class="zone-saviez-vous">
                        <div class="saviez-vous">
                            <div class="titre">
                                <img src="Images/DonnolaManger.png" alt="">
                                <h3>Le saviez-vous ?</h3>
                            </div>
                            <p>
                            Les masques vénitiens ont été utilisés pour dissimuler l'identité de personnes impliquées dans des activités manifestement illégales.
                            Apparus à Venise, ces masques distinctifs étaient faits de papier mâché et somptueusement décorés de fourrures, de tissus, de bijoux et de plumes.
                            </p>
                        </div>
                    </div>
                
            </div>
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/masqueAvecRose.jpg" alt="">
                <p> Masques Vénitiens</p>
            </div>
           </div>
        </div>
    </div>


    <div class="bg gris" id="Mai">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/vogalonga-venise-italie-91404733.jpg" alt="">
                <p>Vogalonga de Venise</p>
            </div>
            <div class="zone-texte bordure-texte">
                <h3>Mai : La Vogalonga de Venise</h3>
                <p>
                    La Vogalonga est une régate comme forme de protestation contre le mouvement ondulatoire qui menace
                    de détruire la ville lagunaire.
                    <br><br>
                    En effet, cet événement fait depuis longtemps partie des grands rendez-vous de Venise, une
                    manifestation qui attire des rameurs du
                    monde entier et qui est caractérisée par le respect de l’environnement et de l’écosystème
                    conjointement à la tradition.
                    <br><br>
                    L’histoire de la Vogalonga débute dans les années 1970  lorsqu’un groupe d’amis se rassemble lors
                    d’une régate sur mascarete
                    (type d’embarcation vénitienne).
                    <br><br>
                    Et c’est précisément après ce premier rendez-vous qu’est née l’idée d’organiser, chaque année,
                    une importante régate non compétitive entièrement dédiée à la vogue à la vénitienne, l’une des
                    traditions les plus solides de Venise.

                    <input type="radio" id="savoirPlus" name="savoirPlusMai">
                    <label for="savoirPlus">En savoir plus</label>
                    <span>
                        Le but de la Vogalonga depuis le début est de sensibiliser la population sur la dangerosité des
                        barques à moteur pour le mouvement ondulatoire de la ville,
                        ainsi que sur la dégradation qui en découle. Dès le début, il est établi que le départ de la
                        Vogalonga aura précisément lieu dans le bassin de Saint-Marc,
                        l’un des points névralgiques du trafic vénitien. La Vogalonga traverse ensuite les lieux les
                        plus suggestifs de Venise et de sa lagune,
                        dont les îles de Murano et de Burano. La longueur totale du parcours de la Vogalonga est
                        d’environ 30 km, parcourus uniquement avec des bateaux à rames.
                        Les spectateurs peuvent profiter d’un spectacle de bateaux de tout type défilant dans un silence
                        religieux à l’intérieur d’une ville sans pollution acoustique,
                        tout du moins à cette occasion.
                        <input type="radio" id="savoirMoins" name="savoirPlusMai">
                        <label for="savoirMoins">Moins</label>
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="bg gris" id="Juin">
        <div class="article image-avant">
            <div class="zone-texte bordure-texte">
                <h3>Juin / Novembre : Biennales internationales d’art de Venise</h3>
                <p>
                    La Biennale d’art de Venise est sans aucun doute l’exposition internationale d’art la plus
                    importante et la plus prestigieuse qui existe au monde. Elle arrive à créer, à chaque manifestation,
                    un esprit créatif extrêmement fort à même d’attirer non seulement des artistes de grand calibre qui
                    interviennent volontiers en se mettant à l’épreuve, mais aussi de nombreux visiteurs provenant du
                    monde entier.
                    <br><br>
                    Il commence dix jours avant le mercredi des Cendres et se poursuit jusqu'au mardi gras. Connu pour
                    ses costumes et ses masques, il attire des foules considérables.
                    <br><br>
                    Le carnaval de Venise transforme la ville en une émeute spectaculaire d’apparat, de couleurs, de
                    spectacles musicaux, de feux d’artifice et de bals vénitiens glamour. Si vous voulez profiter au
                    mieux de l’atmosphère exotique de Venise, le carnaval est le moment idéal.
                    <br><br>
                    Le carnaval de Venise, ces mascarades, spectacles, musique, jeux et couleurs.
                </p>

                <div class="zone-saviez-vous">
                        <div class="saviez-vous">
                            <div class="titre">
                                <img src="Images/DonnolaManger.png" alt="">
                                <h3>Le saviez-vous ?</h3>
                            </div>
                            <p>
                                La Biennale de Venise est l'une  des plus anciennes expositions artistiques en Europe, en effet elle fut crée en 
                                en 1893 et se tint pour la première fois en 1895 en tant que « Exposition Internationale d'Art de la Cité de Venise »
                            </p>
                        </div>
                    </div>
                
            </div>
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/biennal.jpg" alt="">
                <p>Œuvre de Chiharu Shiota</p>
            </div>
        </div>
    </div>



    <div class="bg gris" id="Juillet">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/FeteRedemption.jpg" alt="">
                <p>Feu d’artifice du « Redentore »</p>
            </div>
            <div class="zone-texte bordure-texte">
                <h3>Juillet : Fête du Rédempteur de Venise</h3>
                <p>
                    La Fête du Rédempteur, l’une des manifestations les plus appréciées, se tient le troisième dimanche
                    du mois.
                    En effet, il s’agit d’une fête ancienne très appréciée des Vénitiens et les touristes.
                    <br><br>
                    Durant la Fête du Rédempteur,
                    des passerelles basculantes, véritables modules flottants en bois et en acier,
                    sont installées et 34 barques sont disposées pour soutenir le pont qui relie pendant deux jours le
                    quai des Zattere à l’île de la Giudecca,
                    permettant ainsi aux piétons de rejoindre l’Église du Rédempteur.
                </p>
            </div>
        </div>
    </div>

    <div class="bg gris" id="Aout">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <h3>Août : Festival internationale du film de Venise</h3>
                <p>
                    Le Festival International du Film de Venise est l'un des rendez-vous les plus importants se
                    déroulant chaque année,
                    entre fin août et début septembre.
                    <br><br>
                    Durant cette période, Venise se transforme en un tapis rouge de célébrités nationales et
                    internationales
                    qui accourent du monde entier au festival, transformant ainsi cette magique ville en un lieu
                    caractérisé par la mondanité raffinée et élégante.
                </p>
            </div>
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/MostradeVenise.png" alt="">
                <p>Festival du cinéma de Venise</p>
            </div>
        </div>
    </div>


    <div class="bg gris" id="Septembre">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/regata-Venise.jpg" alt="">
                <p>Regate de Venise</p>
            </div>

            <div class="zone-texte bordure-texte">
                <h3>Septembre : Régate historique de Venise</h3>
                <p>
                    La tradition exige qu’un cortège historique, composé d’embarcations typiques du XVIème siècle qui
                    rappellent les anciennes gloires
                    de l’une des plus puissantes Républiques Maritimes de la Méditerranée, se déroule le long du Grand
                    Canal avant la véritable compétition.
                    <br><br>
                    Vous ne pouvez absolument pas manquer la régate des Gondolini où les champions filent à toute
                    vitesse sur le Grand Canal jusqu’à la ligne
                    d’arrivée à la célèbre « machine », une estrade flottante à fort impact visuel qui est montée devant
                    le palais de Ca’ Foscari.
                </p>

                <div class="zone-saviez-vous">
                        <div class="saviez-vous">
                            <div class="titre">
                                <img src="Images/DonnolaManger.png" alt="">
                                <h3>Le saviez-vous ?</h3>
                            </div>
                            <p>
                            La régate historique de Venise se déroule depuis le Bassin de Saint Marc, emprunte le Grand Canal, passe sous le pont de l’Accademia, 
                            remonte presque jusqu’à la gare, et revient jusqu’au devant de la Ca Foscari.
                            </p>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>

    <div class="bg gris" id="Octobre">
        <div class="article image-apres">
            <div class="zone-texte bordure-texte">
                <h3>Octobre : Venice marathon</h3>
                <p>
                    Le Venice Marathon se tient chaque année, en règle générale le quatrième dimanche d’octobre,
                    et il s’agit d’une manifestation que les sportifs amateurs et professionnels ne peuvent pas manquer.
                    <br><br>
                    La caractéristique la plus importante du Venice Marathon est son parcours de 42,195 km qui se
                    déroule à travers les lieux très charmants
                    de la province.
                    <br><br>
                    Le marathon complet est mondialement reconnu par l’IAAF (Association internationale des fédérations
                    d’athlétisme)
                    et certifié « Label de bronze ».
                </p>
            </div>
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/Venise-marathon.png" alt="">
                <p>Marathon de Venise</p>
            </div>
        </div>
    </div>


    <div class="bg gris" id="Novembre">
        <div class="article image-avant">
            <div class="image-et-legende">
                <img src="Images/ImagesEvenement/FeteMadonnaDeSalute.png" alt="">
                <p>La Fête de la Salute à Venise</p>
            </div>

            <div class="zone-texte bordure-texte">
                <h3>Novembre : Fête de la Madonna della Salute</h3>
                <p>
                    La Fête de la Salute, événement caractérisé par une profonde spiritualité et par la participation
                    des Vénitiens,
                    se déroule chaque année le 21 novembre à Venise.
                    <br><br>
                    Cette fête remonte à la terrible épidémie de peste des années 1630-1631
                    et au vœu fait par le Doge à l’époque pour obtenir l’intercession de la Vierge pour la grâce.
                </p>
            </div>
        </div>
    </div>

    <?php 
        include ("footer.php");
    ?>

</body>

</html>