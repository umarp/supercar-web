<?php
session_start();
include ("Bdconnect.php");
?>
<?php 

include ("Bdconnect.php");

	$UserName = $_POST['Uname'];
	$Email = $_POST['Email'];
	$Subject = $_POST['Subject'];
	$date = $_POST['Date'];
	$heur = $_POST['heur'];
	$marque = $_POST['Marque'];
	$model = $_POST['Modele'];
	$Msg = $_POST['msg']; 
	$Statut = "En Attente";
	$id_client = $_SESSION["id"];



	$sql = "INSERT INTO demande ( Dates, Heur, Marque, Modele, Statut, No_Client, No_voiture) VALUES ('$date', '$heur', '$marque', '$model','$Statut', '$id_client', (SELECT id_voiture FROM voiture WHERE Modele= '$model' AND Marque='$marque'))";


	
if (mysqli_query($conn, $sql)) {
  
  header("location:demandeD'essai.php?success");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 header("location:demandeD'essai.php?error");
}
mysqli_close($conn);
?>