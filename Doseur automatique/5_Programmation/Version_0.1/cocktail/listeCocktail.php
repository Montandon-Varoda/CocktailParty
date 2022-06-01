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
	<nav>
		<form method="post" action="listeCocktail.php">
			<input type="submit" name="bouton" value="Soft">
			<input type="submit" name="bouton" value="Alcool">
			<input type="submit" name="bouton" value="Alcool Fort">
			<input type="submit" name="bouton" value="Ma Liste">
		</form>
	</nav>
	<section>
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
			if(isset($_POST['bouton']))
			{
				if($_POST['bouton']=='Ma Liste')
				{
					header('Location: ');
				}
				echo"<h3>".$_POST['bouton']."</h3>";
			}
			else
			{
				echo"<h3>Soft</h3>";
				$_POST['bouton'] = 'Soft';
			}
			echo"<p><table><tr><th></th><th>Nom</th><th>Descritpion</th><th>Taux</th><th>Prix</th></tr>";
				$req = $bdd->prepare('SELECT * FROM liste WHERE type = :bouton');
				$req->execute(array('bouton' => $_POST['bouton']));
				while ($donnee = $req->fetch()) 
				{
					echo "<tr><td id='photo'><img src='photo/".$donnee['photo']."'></td><td><a href='cocktail.php?boisson=".$donnee['id']."'>".$donnee['nom']."</a></td><td>".$donnee['description']."</td><td>".$donnee['taux']."%</td><td>".$donnee['prix']."</td></tr>";
				}
				$req->closeCursor(); 
			echo"</table></p>";
		?>
	</section>
</body>
</html>

	