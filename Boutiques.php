<!--OUDJMAN ET MARCIAUX-->

<?php 
require("Header.html") ;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSSBoutiques.css">
	<link rel="shortcut icon" type="image/png" href="Photo/LogoHead.png">
	<title>Patisseries Folie :) / Boutiques </title>
</head>
<body>
	<header>
		<h3 class="Boutiques">L E S &nbsp; B O U T I Q U E S &nbsp;  D ' U N &nbsp;    U N I V E R S &nbsp;   G O U R M A N D </h3>
	</header>
	<div>
		<p class="Invitation"><b>Où voulez vous nous rejoindre ..!?</b></p>
	</div>
	<br>
	<div class="VisuBoutiques">
		<table><tr>
			<td><figure class="Boutique">
			<a class="Lien" href="BoutiqueParis.php">
				<img class="ImageBoutique bordure" src="Photo/ImageBoutique1.png">
				<p class="Villes">paris</p>
				<p class="Texte-Boutique bordure"><b>Patisseries Folies</b></p>
			</a>
		</figure></td>
		<td><figure class="Boutique">
			<a class="Lien" href="BoutiqueDeauville.php">
				<img class="ImageBoutique bordure" src="Photo/ImageBoutique2.png">
				<p class="Villes">deauville</p>
				<p class="Texte-Boutique bordure"><b>Patisseries Folies</b></p>
			</a>
		</figure></td>
		<td><figure class="Boutique">
			<a class="Lien" href="BoutiqueCannes.php">
				<img class="ImageBoutique bordure" src="Photo/ImageBoutique3.png">
				<p class="Villes">Cannes</p>
				<p class="Texte-Boutique bordure"><b>Patisseries Folies </b></p>
			</a>
		</figure></td>
		<td><figure class="Boutique">
			<a class="Lien" href="BoutiqueBordeaux.php">
				<img class="ImageBoutique bordure" src="Photo/ImageBoutique4.png">
				<p class="Villes">Bordeaux</p>
				<p class="Texte-Boutique bordure"><b>Patisseries Folies </b></p>
			</a>
		</figure></td>
		</tr></table>	
</body>
</html>

<?php 
echo "<br><br>";
require("Footer.html") ;
?>