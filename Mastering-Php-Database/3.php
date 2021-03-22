<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


<?php

        
//Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"
 
        $a = 100;
        $b = 20;

        if ($a > $b) {
            echo "I love greenchip :p<br>";
        } else {
            echo "i love manchester unatid <br>";
        }

        
//Étape 2: Créez un forloop qui affiche 10 nombres
 
        for ($i = 0; $i <= 10; $i++) {
            echo "$i <br>";
        }




        
//Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas 
 
        for ($i = 0; $i <=1; $i++) {
            switch ($i) {
                case 0:
                    echo "i equals 0<br>";
                    break;
                case 1:
                    echo "i equals 1<br>";
                    break;
                case 2:
                    echo "i equals 2<br>";
                    break;
            }
        }


        ?>





</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>