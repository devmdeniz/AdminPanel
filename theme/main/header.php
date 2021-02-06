<?php
        include("system/connection.php");
        $mainparagraph = array();
        
        $id = $conn -> query("SELECT * FROM mainphp ORDER BY id DESC LIMIT 1");
        $outputs = $id->fetch_array();
        $maxnumber = $outputs["id"]; 
        $minnumber = 1; 
        while($minnumber <= $maxnumber) {
               
                $sorgu = $conn -> query("SELECT mainparagraph FROM mainphp WHERE id=$minnumber");    
                $output = $sorgu->fetch_array();
                array_push($mainparagraph, $output["mainparagraph"]);
                $minnumber++;
        }
?>
<header>
        <nav>
        <h1 class = "hone"><?php echo $mainparagraph[0];?>[1]</h1>
                <ul>
                    <li><a href="#home"><?php echo $mainparagraph[1];?>[2]</a></li>
                    <li><a href="#contact"><?php echo $mainparagraph[2]?>[3]</a></li>
                    <li>
                    <!-- system/modechanger.php?darkmode=true -->
                    
                    

                    <a href="<?php
                    if($_SESSION["darkmode"] == "true") {
                            echo "system/modechanger.php?darkmode=false";
                    } else {
                            echo "system/modechanger.php?darkmode=true";
                    }

                    ?>">
                    <i
                     class="fa fa-moon-o"
                     aria-hidden="true">
                     </i>
                     </a>
                     </li>
              </ul>    
            </nav>
    </header>
    