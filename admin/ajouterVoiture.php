<?php
  include('../Bdconnect.php');
  
  
  $Pays= '';
  $Interval = '';
  $Couleur = '';
  $Garentie = '';
  $Marque = '';
  $Modele = '';
  $Transmission = '';
  $Moteur = '';
  $Prix = '';
  $image1 = '';
  $image2 = '';
  $image3 = '';
  $image4 = '';
  $image5 = '';
  $image6 = '';

  $Pays= $_POST['Pays'];
  $Interval = $_POST['Interval'];
  $Couleur = $_POST['Couleur'];
  $Garentie = $_POST['Garentie'];
  $Marque = $_POST['Marque'];
  $Modele = $_POST['Modele'];
  $Transmission = $_POST['Transmission'];
  $Moteur = $_POST['Moteur'];
  $Prix = $_POST['Prix'];
  $image1 = $_POST['Images1'];
  $image2 = $_POST['Images2'];
  $image3 = $_POST['Images3'];
  $image4 = $_POST['Images4'];
  $image5 = $_POST['Images5'];
  $image6 = $_POST['Images6'];


  
  $inserer = "INSERT into voiture ( Pays_Dorigine, Interval_de_service, Couleur_Disponible, Garantie, Marque, Modele, Transmission, Moteur, Prix, image1, image2, image3, image4, image5, image6)
              VALUES ('$Pays', '$Interval', '$Couleur', '$Garentie', '$Marque', '$Modele', '$Transmission', $Moteur' ,$Prix, '$image1', '$image2', '$image4', '$image5', '$image6')";
  
  $inserer = mysqli_query($conn, $inserer);

  
  echo '<script language="javascript">';
  echo ' location.href="adminVoiture.php"';
  echo '</script>';
  mysqli_close($conn);

  
  ?>
  