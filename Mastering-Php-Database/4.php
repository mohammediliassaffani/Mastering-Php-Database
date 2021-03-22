<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php


//Étape 1: Définir une fonction et qui renvoie un calcul de 2 nombres

function add()
{
	$num1 = 10;
	$num2 = 24;
	$num3 = $num1 + $num2;
	echo $num3;
}
add();


//Étape 2: Créez une fonction qui transmet des paramètres et appelez-la à l'aide de valeurs de paramètres

function added($N, $M)
{
	$num3 = $N + $M;
	echo $num3;
}
added(20, 50);



?>



</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>