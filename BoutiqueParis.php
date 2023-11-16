<!--OUDJMAN ET MARCIAUX-->

<?php 
require("Header.html") ;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSSBoutiqueVilles.css">
	<link rel="shortcut icon" type="image/png" href="LogoHead.png">
	<title>Patisseries Folie :) / Paris </title>
</head>
<body>
	<header>
		<br>
		<h3>P A R I S </h3>
		<br>
	</header>
	<div>
		<p><a class="LienArriere CouleurBeige" href="Boutiques.php">&#10235; Toutes nos Boutiques </a></p>
	</div>
	<br>
	<div class="CouleurBlancCaseBoutique"> 
		<div class="GoogleMap">
			<b><i>Adresse</i></b> 
			<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.3532906356213!2d2.3533225153514152!3d48.832399510490916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6718dc7926219%3A0xf284b110e1a4057b!2sMairie%20du%2013%C3%A8me%20arrondissement%20de%20Paris!5e0!3m2!1sfr!2sfr!4v1637075466381!5m2!1sfr!2sfr" class="LienMairie">Mairie de Paris 13, 1 Place d'Italie, 75013, Paris </a><br>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.3532906356213!2d2.3533225153514152!3d48.832399510490916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6718dc7926219%3A0xf284b110e1a4057b!2sMairie%20du%2013%C3%A8me%20arrondissement%20de%20Paris!5e0!3m2!1sfr!2sfr!4v1637075466381!5m2!1sfr!2sfr" class="Carte" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<div>
			<table class="TexteHoraire">
					<tr>
						<th class="EspaceTableau" colspan="2"><i>Contact</i></th>
					</tr>
					<tr>
						<th>Telephone</th>
						<td>0611223344</td>
					</tr>
					<tr>
						<th>Mail</th>
						<td>Foudepatisserie@…fr</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr class="EspaceTableau">
						<th colspan="2"><i>Horaires</i></th>
					</tr>
					<tr>
						<th>Lundi</th>
						<td>Fermée</td>
					</tr>
					<tr>
						<th>Mardi</th>
						<td>10:00 - 17:00</td>
					</tr>
					<tr>
						<th>Mercredi</th>
						<td>08:30 - 19:00</td>
					</tr>
					<tr>
						<th>Jeudi</th>
						<td>10:00 - 17:00</td>
					</tr>
					<tr>
						<th>Vendredi</th>
						<td>10:00 - 15:00</td>
					</tr>
					<tr>
						<th>Samedi</th>
						<td>08:30 - 19:00</td>
					</tr>
					<tr>
						<th>Dimanche</th>
						<td>08:30 - 19:00</td>
					</tr>
			</table>
		</div>
	</div>
	<br>
	<br>
	<a class="Collect" href="Reservation.php">
		<div class="Pick CouleurBeige">
			<p><h3>Reservation</h3></p>
		</div>
	</a>
</body>
</html>

<?php 
echo "<br><br>";
require("Footer.html") ;
?>
