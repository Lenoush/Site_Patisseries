<!--OUDJMAN ET MARCIAUX-->

<?php 
require("Header.html") ;
?>

<?php
		
	function verif() { #FONCTION QUI VA DEFINIR LE MESSAGE DE FIN 

		$prenom = $_GET['PRENOM**'] ;
		$choix1 = $_GET['CHOIX1**'] ;
		$choix2 = $_GET['CHOIX2**'] ;

		if ($choix1 == "Liste de nos Patisseries") { #SI IL N'Y AUCUN CHOIX ALORS ON REVOIE : 
			return "Oupss <b>".$prenom." </b> vous n'avez pas effectué de réservation...🍒🍋";
		}
		else {
			if ($choix2 == "Liste de nos Patisseries") { #SI IL N'Y A QUE 1 SEUL CHOIX
				echo "<b>" . $prenom. " </b> votre exquis petit <b>" . $choix1 . " </b> a bien été pris en compte, nous vous remercions de votre confiance et avons hâte de vous rencontrer dans nos boutiques ! 🍒🍋";
			}
			else { #SI IL Y A DEUX LES DEUX CHOIX / ON ECHO LES PRENOM ET CHOIX EN GRAS 
				echo "<b>" . $prenom." </b> votre exquis petit <b>" . $choix1 . " </b> ainsi que le fantastique <b>" . $choix2 . " </b> ont bien été pris en compte, nous vous remercions de votre confiance et avons hâte de vous rencontrer dans nos boutiques ! 🍒🍋";
			}
		}
	} ;	
		?>

<!DOCTYPE html>

<html>
<style>
	.TEXTEZ {
		box-shadow: 1px 6px 17px grey;
		margin-right: 30%;
		margin-left: 30%;
		padding-top: 10px;
		padding-bottom: 10px;
		background-color: #fcdab9 ;
	}

	.TEXT{
		color: black;
		font-family: arial;
		font-size: 17px;
	}

</style>

<body style="margin-top: 12%;">

	<p align="center" class="TEXTEZ"> 
		<?php //MESSAGE DE CONFIRMATION DE LA RESERVATION //on utilise la fct verif pour éviter les incoherences
			echo verif()
		?>
	</p>
	<br>
	<section>
		<form class="TEXTEZ">
			<table align="center" width="100%">
				<tr>
					<td align="center" style="border: 2px solid black;"><a href="Accueil.php" style="text-decoration: none;" class="TEXT">Retour à l'accueil</a></td>
				</tr>
			</table>
		</form>
	</section>
</body>

<?php
	#RECUPERATION DE TOUTES LES DONNÉES
	$nom = $_GET['NOM**'] ;
	$prenom = $_GET['PRENOM**'] ;
	$mail = $_GET['MAIL**'] ;
	$date = $_GET['venue'] ;
	$choix1 = $_GET['CHOIX1**'] ;
	$choix2 = $_GET['CHOIX2**'] ;
	$qte1 = $_GET['QTE1**'] ;
	$qte2 = $_GET['QTE2**'] ;

	$id=mysqli_connect("localhost","root","","reservation"); #CONNECTION AU SERVEUR 

	$req=mysqli_query($id,"insert into reservation_table (Nom, Prenom, Mail, Choix1, Qte1, Choix2, Qte2) values('$nom','$prenom','$mail','$choix1','$qte1', '$choix2', '$qte2')"); #REQUETE QUI MARCHE 

?>

<?php 
echo "<br><br>";
require("Footer.html") ;
?>