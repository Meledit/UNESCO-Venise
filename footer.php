<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="styleFooter.css">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/eye-mask.png">
</head>
  <!-- Site footer -->
  <?php
    $aPropos = array("A Propos","About");
    $presentation = array("Nous sommes heureux de vous présenter ce site autour de Venise et sa lagune. Il s’agit d’un projet étudiant en partenariat avec 
    le forum Unesco. Nous sommes un groupe d’étudiants en première année de BUT informatique à l’IUT Marne la vallée de Champs sur Marne.","We are pleased 
    to present this site about Venice and its lagoon. It is a student project in partnership with the Unesco forum. We are a group of students in the first 
    year of our computer science degree at the IUT Marne la vallée in Champs sur Marne.");
    $partenaires = array("Nos partenaires","Our partners");
    $plusInfo = array("Plus d'informations","More information");
    $quiSommesNous = array("Qui sommes nous ?","Who are we?");
    $mentionsLegales = array("Mentions légales","Legal information");
    $credits = array("Crédits","Credits");
  ?>
  <div class="site-footer" style="height:60px;"></div>
  <div class="IMGFooter IMG-microscopique"><div class="overlayFooter"></div></div>
  <footer class="site-footer">
    <div class="containerBoot">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <?php 
            echo "<h6>$aPropos[$lang]</h6>";
            echo "<p class=\"text-justify\">$presentation[$lang]</p>";
          ?>
          
        </div>

        <div class="col-xs-6 col-md-3">
          <?= "<h6>$partenaires[$lang]</h6>" ?>
          <ul class="footer-links">
            <li><a href="https://www.unesco.org/fr">Unesco</a></li>
            <li><a href="https://www.univ-gustave-eiffel.fr/">UGE</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <?="<h6>$plusInfo[$lang]</h6>"?>
          <ul class="footer-links">
            <?php
              echo "<li><a href=\"PageQuiSommesNous.php\">$quiSommesNous[$lang]</a></li>";
              echo "<li><a href=\"Mentions.php\">$mentionsLegales[$lang]</a></li>";
              echo "<li><a href=\"Credits.php\">$credits[$lang]</a></li>";
            
            
            ?>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="containerBoot">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="https://www.facebook.com/profile.php?id=100075325530865"><i class="fa fa-facebook"><img class="img-footer" src="Images/facebook.png"></i></a></li>
            <li><a class="twitter" href="https://twitter.com/VeniseDemasquee?s=20&t=SDNtG42mdJ1FZtjYTw_ixQ"><i class="fa fa-twitter"><img class="img-footer" src="Images/logoTwitter.png"></i></a></li>
            <li><a class="dribbble" href="https://www.instagram.com/unescovenise/"><i class="fa fa-dribbble"><img class="img-footer" src="Images/logoInsta.png"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
</footer>
</html>