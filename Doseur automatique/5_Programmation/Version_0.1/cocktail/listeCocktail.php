<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="listeCocktail.css">
	<link rel="icon" href="../img/icon.png">
	<title>Liste Cocktail</title>
</head>
<body>
	<?php
		try 
		{
			// On se connecte à SQL
	 		$bdd = new PDO('mysql:host=localhost;dbname=cocktail_party;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		} 
		catch (Exception $e) 
		{
			// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur: '.$e->getMessage());	
		}	
		$bdd->query('SELECT * FROM liste')
	?>
</body>
</html>