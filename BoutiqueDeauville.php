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
	<title>Patisseries Folie :) / Cannes </title>
</head>
<body>
	<header>
		<br>
		<h3>D E A U V I L L E </h3>
		<br>
	</header>
	<div>
		<p><a class="LienArriere CouleurBeige" href="Boutiques.php">&#10235; Toutes nos Boutiques </a></p>
	</div>
	<br>
	<div class="CouleurBlancCaseBoutique">
		<div class="GoogleMap">
		<b><i>Adresse</i></b> 
		<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2598.6236188140215!2d0.0724306510734505!3d49.35927197923829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e1d4ad1b6bd273%3A0x16a9a2f05d418337!2sMairie%20de%20Deauville!5e0!3m2!1sfr!2sfr!4v1651341319318!5m2!1sfr!2sfr" width="600" height="450" class="LienMairie">Mairie de Cannes, 20 Rue Robert Fossorier, 14800 Deauville</a><br>

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2598.6236188140215!2d0.0724306510734505!3d49.35927197923829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e1d4ad1b6bd273%3A0x16a9a2f05d418337!2sMairie%20de%20Deauville!5e0!3m2!1sfr!2sfr!4v1651341319318!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" class="Carte" allowfullscreen="" loading="lazy"></iframe>

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
					<td>10:00 - 19:00</td>
				</tr>					
				<tr>
					<th>Mercredi</th>
					<td>08:30 - 19:00</td>
				</tr>
				<tr>
					<th>Jeudi</th>
					<td>10:00 - 19:00</td>
				</tr>
				<tr>
					<th>Vendredi</th>
					<td>Fermée</td>
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