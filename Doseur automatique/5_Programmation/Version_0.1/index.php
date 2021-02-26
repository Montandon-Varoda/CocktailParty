<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="icon" href="img/icon.png">
	<title>Cocktail Party</title>
</head>
<body>
	<header>
		<h1>Cocktail Party</h1>
		<h2>Bienvenue sur le site des cocktails à GOGO !!!</h2>
	</header>
	<section>
		<!--Cocktail-->
		<div id="cocktail">
			<img id="circleButton" class="imgCocktail" src="img/cocktail.png">
			<div id="boutonCocktail">
				<a href="cocktail/listeCocktail.php">
					<img id="listeImg" src="img/liste.png">
					<p id="textListe">Liste Cocktail</p>
				</a>
				<a href="cocktail/topCocktail.php">
					<img id="topImg" src="img/top.png">
					<p id="textTop">Top Cocktail</p>
				</a>
			</div>
		</div>
		<!--Jeux-->
		<div id="jeux">
			<img id="circleButton" class="imgJeux" src="img/jeux.png">
			<div id="boutonJeux">
				<a href="jeux/roullette.php">
					<img id="roulletteImg" src="img/roullette.png">
					<p id="textRoullette">Roullette</p>
				</a>
				<a href="jeux/random.php">
					<img id="randomImg" src="img/random.png">
					<p id="textRandom">Random</p>
				</a>
			</div>
		</div>
		<!--Votre Cocktail-->
		<div id="creation">
			<a href="creation/creation.php">
				<img id="circleButton" class="creationImg" src="img/creation.png">
				<p id="textCreation">New Cocktail</p>
			</a>
		</div>
		<!--Présentation-->
		<div id="presentation">
			<a href="presentation/presentation.php">
				<img id="circleButton" class="presentationImg" src="img/presentation.png">
				<p id="textPresentation">Présentatiopn</p>
			</a>
		</div>
	</section>
</body>
</html>