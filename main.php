<html>
   <!--Head Part-->
   
   <?php
    session_start();
    include("theme/main/mainphphead.php");
   ?>
   <!--Head Part-->
   
   <!--Header-->
   <?php include("theme/main/header.php")?>
   <!--Header
assets/logo.png
-->
   <section id = 'home'>
    <img src="<?php if($_SESSION["darkmode"] == "true") {
       echo "assets/logo.png";
    } else {
          echo "assets/logo2.png";
       }
    ?>" alt="DevMDeniz Logo"/>
    <div class="name">
    <h2 class = "linkwhite"><?php echo $mainparagraph[3];?>[4]</h2>
      <p class = "linkwhite"><?php echo $mainparagraph[4];?>[5]</p>
      </div>
   <a href="#projects"><?php echo $mainparagraph[5]?>[6]</a>
   </section>
</html>