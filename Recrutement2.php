<!--OUDJMAN ET MARCIAUX-->

<?php 
require("Header.html") ;
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
	<p align="center" class="TEXTEZ">Toute vos informations ont ete recueillies <br> Nous vous contacterons sous une dixaine de jours. <br><br> Merci pour votre interet. </p>
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
</html>


<?php 
echo "<br><br>";
require("Footer.html") ;
?>

