<!--OUDJMAN ET MARCIAUX-->

<?php #affiche le Meme header sur toute les pages et evite un copie/collé => TOP ! 
require("Header.html") ;
echo "<br><br><br>";
?>

<?php 
#Connection a la base de données. 
$idcon = @mysqli_connect($host = 'localhost', $user= 'Lena', $mdp = 'Lena', $bdd='TestPatiserie') ;

#Verification que c'est OK (pour moi)  
#if ( $idcon->connect_errno ) { exit ("Impossible de se connecter à la base de données " . $idcon->connect_error ) ; }
#else { echo "Connecté à la base '$bdd' sur LE serveur '$host'. <br>"; } ;


#Informations collectées : 
$Nom = $_POST['lastname'] ; 
$Prenom = $_POST['firstname'] ; 
$Tel = $_POST['phone'] ; 
$Mail = $_POST['mail'] ;
$DateD = $_POST['dateD'] ;  
$Langue = $_POST['langue'] ;
$CV = $_POST['CV'] ;
$Motivation = $_POST['Motivation'] ;
$Poste = $_POST['Poste'] ;
$TempsContrat = $_POST['TempsContrat'] ; 
$TypeContrat = $_POST['TypeContrat'] ; 
$Disponibilite = $_POST['Semaine'] . " " . $_POST['WeekEnd'] . " " . $_POST['Matin'] . " " . $_POST['Journée']; 
$Message = $_POST['Message'] ;
$Securite = $_POST['Securité'] ;


#Variable en plus : 
$Valider = "<a href='Recrutement2.php' class='BOB TEXT'>Valider</a>" ; #Si le formulaire et bien remplis alors le bouton affichera 'Valider' sinon 'NON DIPO'
$DateT = date("Y-m-d") ; # Date d'aujourdhui 


#Verification des champs obligatoires avec le HTML. Mais quand Meme . 
if ( ($Nom == "") || ($Prenom == "") || ($Mail == "") || ($DateD == "") || ($CV == "") || ($Poste == "") || ($Securite == "") || ($Tel =='')) {
	$ChampError = "L'un des champs obligatoires n'est pas remplie. <br> Veuillez revenir à la page 'RECRUTEMENT'pour recommencer " ; #NORMAELEMENT OK 
} 
elseif ($DateD <= $DateT) { #Verification que la date soit posterieur à la date de today 
	$DateError = "<b>La date que vous avez rentrée comme Date de Debut souhaitée est anterieur à celle d'aujourdhui.</b>  <br> Veuillez revenir à la page 'RECRUTEMENT' pour recommencer. ";
} ; #CELA NOUS CREER DEUX VARIABLES D'ERREUR 

#SI C'EST VARIABLE EXISTE ET NE SONT PAS NULL ALORS :
if (($DateError) || ($ChampError)) {
	$Error = $DateError . " " . $ChampError ; #Il y a une erreur
	$Information = '<b>TEMPORAIRE </b>' ; # ON PRECISE QUE LES INFO RENTRÉES SONT TEMPORAIRES DANS LE SENS OU IL Y A UNE ERREUR DONC LE FORMULAIRE EST A REAIRE
	$Valider = "NON DISPO" ; #A L'INVERSE DE CE QU'ON A DIT A LA LIGNE 33, ICI IL Y A UNE ERREUR DONC LE BOUTON N'AFFICHERA 'VALIDER' . 
};


#Verification que la personne n'est pas deja dans la base de donées en fonction de son mail, sinon on la rajoute. 
$SelectA = "SELECT Numero FROM Postulant where Mail = '$Mail' " ; #ON SUPPOSE QUE LE MAIL D'UNE PERSONNE EST UNIQUE 
$ResultatA = $idcon->query($SelectA) ;

if ($ResultatA->num_rows > 0){ #SI IL Y A UN RESULTAT ALORS LE MAIL EXISTE 
	$Bonjour = '<h3> Ravi de vous revoir, merci de postuler chez nous ! </h3>'; #LE MAIL EXISTE DONC ELLE S'EST DEJA CONNECTÉ, D'OU LE ' RAVI DE VOUS REVOIR'
} 
else {#SI IL N'Y A PAS DE RESULTAT ALORS LE MAIL N'EXISTE PAS
	$Bonjour = '<h3> Bienvenue et merci de postuler chez nous ! </h3>' ; #LE MAIL N'EXISTE PAS DONC PREMIERE FOIS POUR LE POSTULANT 
	$RequeteA = "INSERT INTO Postulant (Nom, Prenom, Telephone, Mail, Langues) VALUES ('$Nom', '$Prenom' , '$Tel' , '$Mail', '$Langue') " ; #ON CREER SONT ENREGISTREMENT AVEC SES INFOS
	$ResultatB = $idcon->query($RequeteA) ;
} ;


?>

<!DOCTYPE html>
<html>
<style>
	form {
		box-shadow: 1px 6px 17px grey;
		margin-right: 30%;
		margin-left: 30%;
		padding-top: 10px;
		padding-bottom: 10px;
		background-color: #fcdab9 ;
	}
	tr{
		text-align: center;
	}
	.BOB{
		background-color:#fcdab9  ;
		border: 0px;
	}
	.TEXT{
		color: black;
		font-family: arial;
		font-size: 17px;
		cursor: pointer;
		text-decoration: none;
	}
</style>
<body>
	<form style="margin-top: 8%;">
		<table align="center" >
			<tr>
				<td colspan="2"><?php echo($Bonjour )?></td> <!-- Affiche le 'Bonjour' adequat -->
			</tr>
			<tr>
				<td colspan="2"><?php echo($Error )?></td> <!-- Affiche l'erreur si il y a erreur -->
			</tr>
			<tr>
				<td colspan="2">…</td>
			</tr>
			<tr>
				<td colspan="2"><?php echo("Voici vos informations " . $Information )?></td> <!-- Affiche si les info sont temporaires ou non en fonction des erreurs-->
			</tr>
			<tr>
				<td colspan="2">…</td>
			</tr>
			<tr>
				<td align="right">Nom :</td>
				<td><?php echo($Nom)?></td>
			</tr>
			<tr>
				<td align="right">Prenom : </td>
				<td><?php echo($Prenom)?></td>
			</tr>
			<tr>
				<td align="right">Telephone : </td>
				<td><?php echo($Tel)?></td>
			</tr>
			<tr>
				<td align="right">E-mail : </td>
				<td><?php echo($Mail)?></td>
			</tr>
			<tr>
				<td align="right">Date Debut : </td>
				<td><?php echo($DateD)?></td>
			</tr>
			<tr>
				<td align="right">Langues : </td>
				<td><?php echo($Langue)?></td>
			</tr>
			<tr>
				<td align="right">Curriculum Vitae (Nom) : </td>
				<td><?php echo ($CV)?></td>
			</tr>
			<tr>
				<td align="right">Lettre de Motivation (Nom) : </td>
				<td><?php echo($Motivation)?></td>
			</tr>
			<tr>
				<td align="right">Poste : </td>
				<td><?php echo($Poste)?></td>
			</tr>
			<tr>
				<td align="right">Type de Contrat : </td>
				<td><?php echo($TypeContrat)?></td>
			</tr>
			<tr>
				<td align="right">Temps du Contrat: </td>
				<td><?php echo($TempsContrat)?></td>
			</tr>
			<tr>
				<td align="right">Disponibilté : </td>
				<td><?php echo($Disponibilite)?></td>
			</tr>
			<tr>
				<td align="right">Votre message : </td>
				<td><?php echo($Message)?></td>
			</tr>
		</table>
	</form>
	<br>
	<section>
		<form>
			<table align="center" width="100%">
				<tr>
					<td align="center" style="border: 2px solid black;" width="50%"><a href="Recrutement.php" style="text-decoration: none;" class="TEXT">Retour</a></td> <!-- Bouton Retour -->
					<td style="border: 2px solid black;">
						<?php #AFFICHE LE BOUTON VALIDER EN FONCTION DE SI IL Y A DES ERREURS .
							echo($Valider) ;

							if ($Valider != "NON DISPO") { #SI IL N'Y A PAS D'ERREUR, ALORS LES INFORMATION DE LA CANDIDATURE SONT TRANSMIS A LA BD 
								$SelectZ = "SELECT Numero FROM Postulant where Mail = '$Mail' " ; #RECUPERATION DU 'NUMERO POSTULANT' EN FONCTION DE SON MAIL
								$ResultatZ = $idcon->query($SelectZ) ;
								while($row = $ResultatZ->fetch_assoc()) {
									$NUM = $row["Numero"] ; } ; #RECUPERATION DU 'NUMERO POSTULANT' EN FONCTION DE SON MAIL CAR C'EST UNE CLE ETRANGERE DE LA TABLE CANDIDATURE. 

								$RequeteZ= "INSERT INTO Candidature(NumeroPostulant, DateDebut, Poste, TempsContrat, TypeContrat, Disponibilité, Message) VALUES ('$NUM','$DateD','$Poste','$TempsContrat','$TypeContrat','$Disponibilite','$Message') " ;
								#REQUETE D'INSERTION QUI MARCHE (MEME AVEC LES VARIABLES NULL SI ELLES PEUVENT L'ETRE) . 
								$ResultatY = $idcon->query($RequeteZ) ;
							} ;
						?>
						</td>
				</tr>
			</table>
		</form>
	</section>
</body>
</html>


<?php 
$bool = $idcon->close() ; #DECONNECTION OBLIGATOIRE 

echo "<br><br>";
require("Footer.html") ; #GRAVE PRATIQUE !! = REQUIRE CAR OBLIGATION SINON INCLUDE 
?>





