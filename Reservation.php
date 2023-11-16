<!--OUDJMAN ET MARCIAUX-->

<?php 
require("Header.html") ;
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSSReservation.css">
	<link rel="shortcut icon" type="image/png" href="LogoHead.png">
	<title>Patisseries Folies :) Click&Collect</title>
</head>
<body>
	
	<header>
		<br>
		<h3 class="MiseEnPage">R E S E R V A T I O N &nbsp;</h3>
		<br>
	</header>

	
	<div class="Slider PhotoDroite">
		<div class="Slides">
				<div class="Slide"><a href="Carte_int_P1.php"><img class="Photo" src="Photo/Patisseries/P1.png"></a><br><center><i><b>Fruits rouges volcaniques</b></i></center></div>
				<div class="Slide"><a href="Carte_int_P2.php"><img class="Photo" src="Photo/Patisseries/P2.png"></a><br><center><i><b>Neige et myrtilles</b></i></center></div>
				<div class="Slide"><a href="Carte_int_P3.php"><img class="Photo" src="Photo/Patisseries/P3.png"></a><br><center><i><b>Noisette croquante</b></i></center></div>
				<div class="Slide"><a href="Carte_int_P4.php"><img class="Photo" src="Photo/Patisseries/P4.png"></a><br><center><i><b>Pomme défendue</b></i></center></div>
				<div class="Slide"><a href="Carte_int_P5.php"><img class="Photo" src="Photo/Patisseries/P5.png"></a><br><center><i><b>Royal chocolat</b></i></center></div>
				<div class="Slide"><a href="Carte_int_P6.php"><img class="Photo" src="Photo/Patisseries/P6.png"></a><br><center><i><b>Fondant aux framboises</b></i></center></div>
				<div class="Slide"><a href="Carte_int_P7.php"><img class="Photo" src="Photo/Patisseries/P7.png"></a><br><center><i><b>Tartelette gourmande aux framboises</b></i></center></div>
				<div class="Slide"><a href="Carte_int_P8.php"><img class="Photo" src="Photo/Patisseries/P8.png"></a><br><center><i><b>Tartelette gourmande aux myrtilles</b></i></center></div>
				<div class="Slide"><a href="Carte_int_P9.php"><img class="Photo" src="Photo/Patisseries/P9.png"></a><br><center><i><b>Le Discret</b></i></center></div>
				<div class="Slide"><a href="Carte_int_PA1.php"><img class="Photo" src="Photo/Patisseries/PA1.png"></a><br><center><i><b>Le Figuier</b></i></center></div>
				<div class="Slide"><a href="Carte_int_PA2.php"><img class="Photo" src="Photo/Patisseries/PA2.png"></a><br><center><i><b>Pomme d'amour</b></i></center></div>
				<div class="Slide"><a href="Carte_int_PA3.php"><img class="Photo" src="Photo/Patisseries/PA3.png"></a><br><center><i><b>Tartelette gourmande au 🍋</b></i></center></div>
		</div>
	</div>
	<br>
	<div>
		<p class="TextePresentation TailleSSTitre"><i><u>THE BRADERY</u> </i></p>
		<p class="TextePresentation">Le concept <u>sans RDV</u> venir en 1 heure avant la fermeture selon les boutique et beneficiez de 20% de remise sur votre commande.<br>On vous attend.</p>
	</div>

		<div style="background-color: #e9bc96 ; text-align: center;">
		<form action="Reservation2.php" method="post"> 
				
				<br>
			<p>Les champs marqués d'une * sont obligatoires.</p>
				<br>
				 <!-- " required="" " FORCE A L'OBLIGATION MAIS ON VA AUSSI VERIFIER DANS LE PHP -->
			<input type="text" name="lastname" placeholder="Nom *" required="" style="width: 25%;"> 
			<input type="text" name="firstname" placeholder="Prenom *" required="" style="width: 25%;">
				<br><br>

			<input type="tel" name="phone" placeholder="Telephone" pattern="0[0-9]{9}" required='' style="width: 25%;"> 
			<input type="email" name="mail" placeholder="E-Mail *" required="" style="width: 25%;">
			<!-- LE " TYPE " EST TRES IMPORTANT ICI POUR AVOIR LA BON SCHEMA , " PATTERN " AIDE POUR ETRE PLUS PRECIS -->
				<br><br>
			<input type="text" name="dateD" placeholder="Date de Livraison Souhaitée *" onfocus="(this.type='date')" onblur="(this.type='text')" required="" style="width: 51%;">
				<br>
				<p>Vos choix * </p>
				<br>

				<input type="number" name="Quantité" placeholder="Nombre de patisseries differentes voulues" required="" style="width: 25%;" id="Quantité">
				<input type="submit" value="Valider" onclick="Clique()"><br><br>


				<select name="CHOIX2**" >
						<option>Liste de nos Patisseries</option> <!-- VERIFIEZ QUE UN CHOIX EST NON NULL -->
						<option>Fruits rouges volcaniques</option>
						<option>Neige et myrtilles</option>
						<option>Noisette croquante</option>
						<option>Pomme défendue</option>
						<option>Royal chocolat</option>
						<option>Fondant aux framboises</option>
						<option>Tartelette gourmande aux framboises</option>
						<option>Tartelette gourmande aux myrtilles</option>
						<option>Le Discret</option>
						<option>Le figuier</option>
						<option>Pomme d'amour</option>
						<option>Tartelette gourmande au citron</option>
						<option>Le fruit princie</option>
						<option>La forêt noire revisitée</option>
						<option>Le citron citronné</option>
						<option>Mystère sucré</option>
				</select>
				<input type="number" name="Quantité1" placeholder="Quantité"><br>

				<script type="text/javascript">
					function Clique() {
						var a = document.getElementById('Quantité') ;
						var i = 0 ;
						while (i<a) {
							var Input = "<select name='CHOIX' ><option>Liste de nos Patisseries</option><option>Fruits rouges volcaniques</option><option>Neige et myrtilles</option><option>Noisette croquante</option><option>Pomme défendue</option><option>Royal chocolat</option><option>Fondant aux framboises</option><option>Tartelette gourmande aux framboises</option><option>Tartelette gourmande aux myrtilles</option><option>Le Discret</option><option>Le figuier</option><option>Pomme d'amour</option><option>Tartelette gourmande au citron</option><option>Le fruit princie</option><option>La forêt noire revisitée</option><option>Le citron citronné</option><option>Mystère sucré</option></select>  <input type='number' name='Quantité' placeholder='Quantité' id='Quantité'><br>" ;
							echo Input ;
							i++ ;
						} ;
					} ;
				</script> 

				<br><br>
			<p>Souhaitez-vous ajouter un message ?</p>
			<textarea placeholder="Votre message" rows="5" cols="30" name="Message" style="width: 51%;"></textarea>
				<br><br>
			<input type="checkbox" name="Securité" id="Securité" required=""><label for="Securité" >En remplissant ce formulaire, vous consentez à ce que Patisserie Folies, en sa qualité de responsable <br>de traitement, collecte vos données personnelles afin de pouvoir traiter votre demande. Pour faire <br>valoir votre droit d’accès ou d’effacement de vos données, consultez notre politique de confidentialité. * </label> 
				<br><br>

			<button type="submit">Envoyer Ma Commande </button>
			<!-- TYPE " SUBMIT " RENVOIE DIRECTEMENT AU PHP INDIQUE DANS ACTION -->
				<br><br>
				
		</form>
	</div>
</body>
</html>

<?php 
echo "<br><br>";
require("Footer.html") ;
?>