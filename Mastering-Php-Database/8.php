<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	/*  
	Étape 1 - Créer une variable avec du texte comme valeur
	*/
	$v='text';
	/*
	Étape 2 - Utilisez la fonction crypt() pour le crypter
*/


echo crypt('mohammed iliass affani','st')."<br>";

/*

	Étape 3 - Attribuez le résultat de cryptage à une variable
*/

$h=crypt('mohammed iliass affani','st');


/*
	Étape 4 - Échoyez de la variable 
	*/
	echo $h;
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>