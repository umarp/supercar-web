<?php

 include ("../Bdconnect.php");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{

$id = $_GET ['id'];
$result = mysqli_query ($conn, "DELETE FROM administrateur WHERE id=$id");
header ("Location:adminAdministrateur.php");
}

?>