<?php

 include ("../Bdconnect.php");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{

$id = $_GET ['id'];
$result = mysqli_query ($conn, "DELETE FROM client WHERE No_Client=$id");
header ("Location:adminClient.php");
}

?>