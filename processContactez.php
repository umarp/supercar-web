<?php 

include ("Bdconnect.php");



	$UserName = $_POST['Uname'];
	$Email = $_POST['Email'];
	$Subject = $_POST['Subject'];
	$Msg = $_POST['msg'];
	$Statut = "En Attente";



if (empty($UserName) || empty($Email) || empty($Subject) || empty($Msg)) 
	{

		header('location:contactezNous.php?error');

	}
else
	{
	$sql = "INSERT INTO contacternous ( Nom, Email, Sujet, Message,Statut) VALUES ('$UserName', '$Email', '$Subject', '$Msg', '$Statut')";
	mysqli_query($conn, $sql);
	header("location:contactezNous.php?success");

	}






mysqli_close($conn);



/*

if(isset($_POST['btn-send']))
{

if (empty($UserName) || empty($Email) || empty($Subject) || empty($Msg)) 
	{
		header('location:Contactez Nous.php?error');
	}
	else
	{
		$to = "jamesapollo50@gmail.com";

		if(mail($to,$Subject,$Msg,$Email))
		{
			header("location:Contactez Nous.php?success");
		}
	}

}

else
{
	header("location:Contactez Nous.php");
}

*/

?>
