<?php
  include('../Bdconnect.php');
  
  $Nom = '';
  $Texte = '';
  $Image = '';


  $Nom = $_POST['Nom'];
  $Texte = $_POST['Texte'];
  $Image = $_POST['Image'];



  
  $inserer = "INSERT INTO evenement ( `Nom_evenement`, `Texte`, `Lien`) VALUES ( '$Nom', '$Texte', '$Image')";
  
  $inserer = mysqli_query($conn, $inserer);

  
  echo '<script language="javascript">';
  echo ' location.href="adminEvenements.php"';
  echo '</script>';
  mysqli_close($conn);

  
  ?>
  