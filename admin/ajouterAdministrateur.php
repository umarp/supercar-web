<?php
  include('../Bdconnect.php');
  
  $NomUtilisateur = '';
  $MotDePasse = '';
  $Nom = '';
  $Prenom = '';
  $Email = '';
  $Tel = '';


  $NomUtilisateur = $_POST['NomUtilisateur'];
  $MotDePasse = $_POST['Mdp'];
  $Nom = $_POST['Nom'];
  $Prenom = $_POST['Prenom'];
  $Email = $_POST['Email'];
  $Tel = $_POST['Tel'];



  
  $inserer = "INSERT INTO  administrateur(`NomUtilisateur`, `MotDePasse`, `Nom`, `Prenom`, `Email`, `NumeroTelephone`) 
  VALUES ('$NomUtilisateur', '$MotDePasse', '$Nom', ' $Prenom', '$Email', '$Tel')";
  
  $inserer = mysqli_query($conn, $inserer);

  
  echo '<script language="javascript">';
  echo ' location.href="adminAdministrateur.php"';
  echo '</script>';
  mysqli_close($conn);

  
  ?>
  