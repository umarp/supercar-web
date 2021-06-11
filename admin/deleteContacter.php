<?php

 include ("../Bdconnect.php");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{

$id = $_GET ['id'];
$result = mysqli_query ($conn, "DELETE FROM contacternous WHERE id=$id");
header ("Location:adminContacter.php");
}

?>