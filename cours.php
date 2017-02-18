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
	echo "3e instruction";


		?>
	</body>

</html>