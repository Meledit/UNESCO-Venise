<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/styleQuiSommesNous.css">
    <title>Venise Démasquée</title>
</head>

<body>
    <?php
        $venise = array("Venise démasquée","Unmasking Venice");
        $veniseSousTitre = array("Une équipe avant tout","A team first");
        
        $titreQuiSommeNous=array("Qui sommes nous&nbsp;?","Who are we&nbsp;?");
        $texteIntro=array("Nous sommes cinq étudiants en BUT Informatique, dans le cadre d'un projet scolaire en partenariat avec l'Unesco,
        nous avons choisi de présenter le patrimoine de culturel de Venise et sa lagune. Il s'agit d'une de nos premières expériences dans le développement web et le Design Thinking.
        Vous pouvez en apprendre plus sur nous ci-dessous.","We are five students in a computer science degree course, as part of a school project in partnership with Unesco,
        we chose to present the cultural heritage of Venice and its lagoon. This is one of our first experiences in web development and design thinking.
        You can learn more about us below.");
        $voirPortfolio = array("Voir le Portfolio","See the Portfolio");
        $texteNidal = array("\"Je suis extrêmement intéressé par ce projet, étant moi-même passionné par Venise et sa culture,
        trouvant ce pays très beau, instruire les personnes sur son histoire et sa culture m’enchante. De plus, pouvoir
        travailler avec l’Unesco est une chance incroyable qui me bénéficiera dans le futur.\"","\"I am extremely interested in this project, being 
        myself passionate about Venice and its culture,
        finding this country very beautiful, educating people about its history and culture enchants me.
        Moreover, being able to work with UNESCO is an incredible opportunity that will benefit me in the
        future.\"");
        $texteKyrian = array("\"En tant qu'étudiant en informatique, j'ai participé à ce projet en collaboration avec l'organisation
        UNESCO afin de concevoir ce site. J'ai réalisé les pages séjours et la page Venise en danger de la partie histoire.
        Ce projet m'a permis d'apprendre le fonctionnement d'un site web et comment collecter et organiser des informations
        ainsi que la manière de les mettre en forme. En outre, il m'a permis de développer ma capacité à
        travailler en équipe et à comprendre les intentions du client.\"","\"As a student in computer science, I took part in this project in collaboration with the UNESCO
        organisation in order to design this site. I realized the pages stays and the page Venice in danger of the history part. This project helped me to learn how a website functions and how to collect and organise information
        as well as how to format them. In addition, it allowed me to develop my ability to work in a team and
        understand the client's intentions.\"");
        $texteValentin = array("\"Participer à un tel projet est très enrichissant, en effet, travailler avec une organisation comme
        l’UNESCO est une vraie chance. De plus, travailler sur un patrimoine comme Venise est très intéressant et il y a beaucoup de choses à
        apprendre sur ce patrimoine.\"","\"Participating in such a project is very rewarding, indeed, working with an organisation like UNESCO is a real opportunity.
        UNESCO is a real opportunity. Moreover, working on a heritage like Venice is very interesting and there is a lot to learn about it.
        to learn about this heritage.\"");
        $texteAless = array("\"Réalisé à ce projet m'a permis d’enrichir mes connaissances historiques et culturelles sur Venise,
        de plus j’ai pu utiliser et affiner mes compétences web, d’exprimer ma créativité à travers ce site en travaillant au sein d’une équipe ce qui était une réelle
        expérience pour moi.\"","\"Doing this project allowed me to enrich my historical and cultural knowledge of Venice,
        I was also able to use and refine my web skills, to express my creativity through this site by working within a team which was a real
        experience for me.\"");
        $texteLucas = array("\"Je suis étudiant en première année de BUT Informatique, durant ce projet je me suis principalement
        occupé des pages liées à la gastronomie et aux oeuvres, ainsi
        que de la partie gestion de la langue. Ce qui m’a beaucoup attiré dans ce projet, c’est l’idée de
        participer à la diffusion de la culture. Avoir l’occasion de
        travailler avec une organisation comme l’Unesco, est une expérience très intéressante, d’autant plus sur
        un site culturel aussi intéressant que Venise.\"","\"I'm a student in my first year of BUT Informatique, during this project I was mainly in
        charge of the pages related to gastronomy and artworks, as well as
        and the language management part. What attracted me to this project was the idea of contributing to the
        diffusion of culture. Having the opportunity to
        to work with an organization like Unesco is a very interesting experience, especially in a cultural site
        as interesting as Venice.\"");
    ?>
    <section class="showcase">
        <img src="Images/Gastronomie/Fond2.jpg" alt="" class="imgBg">
        <div class="overlay"></div>

        <div class="container">
            <div class="text">
                <?php
                    echo "<h1>$venise[$lang]</h1>";
                    echo "<h2>$veniseSousTitre[$lang]</h2>";
                ?>
            </div>
    </section>

    <div class="bg noir">
        <article class="centre">
            <?php
                echo "<h3>$titreQuiSommeNous[$lang]</h3>";
                echo "<p>$texteIntro[$lang]</p>";
            ?>
        </article>
    </div>

    <div class="IMGparallax IMG1 IMG-microscopique"></div>

    <div class="bg gris">
        <div class="zone-personne">
            <h3>Idrissi Nidal</h3>
            <img src="Images/NidalIdrissi.JPG" alt="Idrissi Nidal">
            <?php "<p class=\"bordure-texte\">$texteNidal[$lang]</p>" ?>
            
            <div class="zone-widget">
                <a href="https://github.com/Meledit" target="_blank">
                    <div class="logo-widget github"><img src="Images/github.png"></div>
                </a>
                <div class="voir">
                    <div class="widget">
                        <?= "<a href=\"https://etudiant.u-pem.fr/~nidal.idrissi/portfolio/\" target=\"_blank\">$voirPortfolio[$lang]</a>"?>
                    </div>
                </div>
                <a href="https://www.linkedin.com/in/nidal-idrissi-4486b522a/" target="_blank">
                    <div class="logo-widget linkedin"><img src="Images/linkedin.png"></div>
                </a>

            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="zone-personne">
            <h3>Poulain Kyrian</h3>
            <img src="Images/KyrianPoulain.jpg" alt="Kyrian Poulain">
            <?= "<p class=\"bordure-texte\">$texteKyrian[$lang]</p>" ?>
            
            <div class="zone-widget">
                <div class="voir">
                    <div class="widget">
                        <?="<a href=\"\" target=\"_blank\">$voirPortfolio[$lang]</a>" ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="zone-personne">
            <h3>Motuel Valentin</h3>
            <img src="Images/ValentinMotuel.jpg" alt="Valentin Motuel">
            <?= "<p class=\"bordure-texte\">$texteValentin[$lang]</p>"?>
            <div class="zone-widget">
                <a href="https://github.com/Newvall" target="_blank">
                    <div class="logo-widget github"><img src="Images/github.png"></div>
                </a>
                <div class="voir">
                    <div class="widget">
                        <?= "<a href=\"https://perso-etudiant.u-pem.fr/~valentin.motuel/Portfolio-BUT/index.html\" target=\"_blank\">$voirPortfolio[$lang]</a>"?>
                    </div>
                </div>
                <a href="https://www.linkedin.com/in/valentin-motuel/" target="_blank">
                    <div class="logo-widget linkedin"><img src="Images/linkedin.png"></div>
                </a>

            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="zone-personne">
            <h3>Villa Alessandro</h3>
            <img src="Images/AlessandroVilla.JPG" alt="Alessandro Villa">
            <?= "<p class=\"bordure-texte\">$texteAless[$lang]</p>" ?>
            <div class="zone-widget">
                <a href="https://www.linkedin.com/in/alessandro-villa-94a9a0229/" target="_blank">
                    <div class="logo-widget linkedin"><img src="Images/linkedin.png"></div>
                </a>

            </div>
        </div>
    </div>

    <div class="bg gris">
        <div class="zone-personne">
            <h3>Leveque Lucas</h3>
            <img src="Images/LucasLeveque.JPG" alt="Lucas Leveque">
             <?= "<p class=\"bordure-texte\">$texteLucas[$lang]</p>" ?>
            <div class="zone-widget">
                <a href="https://github.com/Liixray" target="_blank">
                    <div class="logo-widget github"><img src="Images/github.png"></div>
                </a>
                <div class="voir">
                    <?= "<div class=\"widget\"><a href=\"https://perso-etudiant.u-pem.fr/~lucas.leveque/Portfolio/\" target=\"_blank\">$texteLucas[$lang]</a></div>" ?>
                </div>
                <a href="https://www.linkedin.com/in/lucas-leveque-a1ba27228/" target="_blank">
                    <div class="logo-widget linkedin"><img src="Images/linkedin.png"></div>
                </a>

            </div>
        </div>
    </div>
</body>

</html>