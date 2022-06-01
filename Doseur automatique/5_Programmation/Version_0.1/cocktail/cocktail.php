<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../index.css">
	<link rel="icon" href="../img/icon.png">
	<title>Cocktail Party</title>
</head>
<body>
	<header>
		<h1>Cocktail Party</h1>
		<h2>Liste des cocktails</h2>
		<!--Bouton retour-->
		<a href="../index.php">
		    <button id="back" class="backbutton">
		    	<img class="backimg" src="../img/back.png" height="40">
		        <p class="backText">Retour</p>
		   	</button>
		</a>	 
	</header>
	<section>
		<?php
			echo "<p>Boisson:".$_GET['boisson']."</p>";
		?>
	</section>
</body>
</html>