<?php

 include ("../Bdconnect.php");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{

$id = $_GET ['id'];
$result = mysqli_query ($conn, "DELETE FROM voiture WHERE id_voiture=$id");
header ("Location:adminVoiture.php");
}

?>