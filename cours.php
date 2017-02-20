<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Ma page web il est <?php echo date('h:i:s') ?></title>
	</head>
	<body>
		<h1>Ma page web</h1>
		<p>aujourd'hui nous somme le <?php echo date('d/m/Y h:i:s'); ?></p>
		<?php 
echo "Ceci est du <strong>texte</strong> \"uniquement\" en PHP " ;

	//commentaire sur une ligne
	/*commentaire
	sur plusieurs
	ligne
	*/
	echo "1ere instruction ";
	echo "2e instruction <br />";
	echo "3e instruction<br /><br />";
		?>

		<?php 
		//type int
		$age_du_visiteur=17 ;
		//type float
		$poid = 45.5 ;
		//type booleen
		$je_suis_un_zero = false ;
		$je_suis_bon = true ;
		//variable vide avec NULL
		$pas_de_valeur = NULL ;

		echo 'Le visiteur à ' . $age_du_visiteur . ' ans' ;

		$nombre = 10 ;
		$resultat = ($nombre + 5) * $nombre ;

		echo 'résultat du calcul est ' . $resultat . '';

		?>
	</body>

</html>