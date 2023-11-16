<!--OUDJMAN ET MARCIAUX-->

<?php 
require("Header.html") ;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSSRecrutement.css">
	<link rel="shortcut icon" type="image/png" href="Photo/LogoHead.png">
	<title>Patisseries Folie :) / Recrutement </title>
</head>
<body>
	<header>
		<br>
		<h3 class="Chefs">R E C R U T E M E N T</h3>
		<p style="text-align: center; font-size: 120%;">Vous êtes conseiller(e) de vente, commis de pâtisserie ou boulangerie, chef de partie ou chef de rang ? <br> Vous vous retrouvez dans nos valeurs et souhaitez rejoindre la Team Patisserie Folies ? </p>
		<br>
	</header>
	<br>
	<section>
		<div>
			<div class="TailleTexteOuvertureChefs">
				<img class="Centre" src="Photo/PhotoChefs.jpg">
			<br>
			<br>
				<p class="TexteOuvertureChefs">Les plus grands chefs pâtissiers sont réunis dans un lieu unique <br> <br>Les boutiques Pâtisserie Folies.</p><br>
				<p class="PetitTexteOuvertureChefs">Pâtisseries individuelles, grands gâteaux, macarons, chocolats, cakes, biscuits et autres gourmandises sont sélectionnés par nos équipes et renouvelés au rythme des saisons, en collaboration avec les chefs.
				Si certains d’entre eux jouissent déjà d’une renommée internationale, d’autres sont de nouveaux talents que nous repérons pour vous, au fil de nos rencontres et dégustations.</p>
			</div>
		</div>
			<br><br>

		<div class="quizz">
			<form action="RecrutementPHP.php" method="post"> <!-- ICI ON RECUPERERA LES DONNÉES GRACE A "NAME" ET PARFOIS A "VALEUR" PAR LA METHODE POST -->
				
				<br>
			<p>Les champs marqués d'une * sont obligatoires.</p>
				<br>
				 <!-- " required="" " FORCE A L'OBLIGATION MAIS ON VA AUSSI VERIFIER DANS LE PHP -->
			<input type="text" name="lastname" placeholder="Nom *" class="Formulaire1 TailleFormulaire50" required=""> 
			<input type="text" name="firstname" placeholder="Prenom *" class="Formulaire1 TailleFormulaire50" required="">
				<br><br>

			<input type="tel" name="phone" placeholder="Telephone *" pattern="0[0-9]{9}" class="Formulaire1 TailleFormulaire50" required=''> 
			<input type="email" name="mail" placeholder="E-Mail *" class="Formulaire1 TailleFormulaire50" required="">
			<!-- LE " TYPE " EST TRES IMPORTANT ICI POUR AVOIR LA BON SCHEMA , " PATTERN " AIDE POUR ETRE PLUS PRECIS -->
				<br><br>
			<input type="text" name="dateD" class="Formulaire1 TailleFormulaire50" placeholder="Date de Debut Souhaitée *" onfocus="(this.type='date')" onblur="(this.type='text')" required="" style="margin: auto;">
				<br><br>
			<input type="text" name="langue" placeholder="Langues Parlées (avec niveau)" class="Formulaire1 TailleFormulaire100">
				<br><br>

			<label for="CV" class="File1">Curriculum Vitae * (pdf) : </label>
			<input type="file" name="CV" id="CV" accept="application/pdf" class="Formulaire1 TailleFormulaire75" required="" ><br><br>
			<label for="Motivation" class="File1">Lettre de Motivation (pdf) : </label>
			<input type="file" name="Motivation" id="Motivation" accept="application/pdf" class="Formulaire1 TailleFormulaire75">

				<br><br>
			<p>Contrat recherché *</p>
				<br>
			<div required="">
				<input type="radio" name="TypeContrat" id="CDI" value="CDI"><label for="CDI">CDI</label>
				<input type="radio" name="TypeContrat" id="CDD" value="CDD"><label for="CDD">CDD</label>
				<input type="radio" name="TypeContrat" id="Stage" value="Stage"><label for="Stage">Stage</label>
				<input type="radio" name="TypeContrat" id="A" value="Alternance"><label for="A">Alternance</label>
			</div>
			<br>
			<input type="text" name="Poste" placeholder="Poste * " class="Formulaire1 TailleFormulaire100" required="">
				<br><br>
			<div class="radio" >
				<input type="radio" name="TempsContrat" value="Temps Plein" id="ContratPlein"><label for="ContratPlein"> Temps Plein </label>
				<input type="radio" name="TempsContrat" value="Temps Partiel" id="ContratPartiel"><label for="ContratPartiel"> Temps Partiel </label>
			</div>

				<br><br>
			<p>Vos disponibilités (plusieurs réponses possibles)</p>
				<br>
			<div class="checkbox">
				<input type="checkbox" name="Semaine" id="S" value="Semaine"><label for="S">Semaine</label>
				<input type="checkbox" name="WeekEnd" id="W" value="Week-end"><label for="W">Week End</label>
				<input type="checkbox" name="Matin" id="M" value="Matin"><label for="M">Matin</label>
				<input type="checkbox" name="Journée" id="J" value="Journée"><label for="J">Journée</label>
			</div>

				<br><br>
			<p>Souhaitez-vous ajouter un message ?</p>
				<br>
			<textarea placeholder="Votre message" rows="5" cols="30" name="Message" class="TailleFormulaire100"></textarea>
				<br><br>
			<input type="checkbox" name="Securité" id="Securité" required=""><label for="Securité" >En remplissant ce formulaire, vous consentez à ce que Patisserie Folies, en sa qualité de responsable <br>de traitement, collecte vos données personnelles afin de pouvoir traiter votre demande. Pour faire <br>valoir votre droit d’accès ou d’effacement de vos données, consultez notre politique de confidentialité. * </label> 
				<br><br>

			<button type="submit">Envoyer Ma Candidature</button>
			<!-- TYPE " SUBMIT " RENVOIE DIRECTEMENT AU PHP INDIQUE DANS ACTION -->
				<br><br>
				
		</form>	
	</div>
	</section>	
</body>
</html>

<?php 
echo "<br><br>";
require("Footer.html") ;
?>