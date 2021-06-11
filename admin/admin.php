<?php 
// Check if the user is already logged in, if yes then redirect him to welcome page
session_start();



                   include ("../Bdconnect.php");

                     $sql1 = "SELECT * FROM demande WHERE Statut='En Cours' ";
                     $sql2 = "SELECT * FROM contacternous WHERE Statut ='En Attente' ";
                     $sql3 = "SELECT * FROM voiture";
                     $sql4 = "SELECT * FROM evenement";   
                     $sql5 = "SELECT * FROM client";   
                     $sql6 = "SELECT * FROM administrateur";   
                      if ($result1=mysqli_query($conn,$sql1))
                        {
                        $rowcount1=mysqli_num_rows($result1);
                      }
                      else{
                      }
                      if ($result2=mysqli_query($conn,$sql2))
                      {
                        $rowcount2=mysqli_num_rows($result2);
                      }else{
                      }
                      if ($result3=mysqli_query($conn,$sql3))
                      {
                        $rowcount3=mysqli_num_rows($result3);
                      }else{
                      
                      }
                      if ($result4=mysqli_query($conn,$sql4))
                      {
                        $rowcount4=mysqli_num_rows($result4); 
                      }else{
                          
                      }
                      if ($result5=mysqli_query($conn,$sql5))
                      {
                        $rowcount5=mysqli_num_rows($result5); 
                      }else{
                          
                      }
                      if ($result6=mysqli_query($conn,$sql6))
                      {
                        $rowcount6=mysqli_num_rows($result6); 
                      }else{
                          
                      }
 ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
      <title>Admin</title>
      <link rel="stylesheet" type="text/css" href="adminCss.css">
   </head>
   <body>
  <style type="text/css">

  </style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" style="width:200px;text-align:center;" href="#">Tableau de bord</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php"> Acceuil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminDemande.php">Demande</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminContacter.php">Contacter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminVoiture.php">Voiture</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminEvenements.php">Evenements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminClient.php">Client</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminAdministrateur.php">Administrateur</a>
      </li>
     
        <li class="nav-item "  style="float:right;">

              <?php 
                     if (empty($_SESSION)) {
                       echo '<script language="javascript">';
                       echo ' location.href="adminLogin.php"';
                       echo '</script>';
                    }
                    else{
                      if($_SESSION["NomUtilisateur"]) {
                  
      
                  
                      echo "<a href='adminLogout.php' ><button type='button' class='btn btn-primary login'>Déconnecter " .$_SESSION["NomUtilisateur"] ."</button></a>";
                      }else
                      {

                      }
                    }
                ?>     
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
    <div class="container">
      <p class="a">Bienvenue dans Supercar Admin</p>
      <br>
      <p class="titre">Les pages admin vouz permet de modifier, d'ajouter et supprimer des données.  </p>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="box col-md-6 col-sm-12">
          <a href="adminContacter.php"><p>Contactez Nous</p></a>
          <p>Le nombre de message non repondu : <?php echo "$rowcount2"; ?></p>
        </div>
        <div class="box col-md-6 col-sm-12">
          <a href="adminDemande.php"><p>Demande D'essai</p></a>
          <p>Le nombre de demande d'essai en cour est de : <?php echo "$rowcount1"; ?></p>
        </div>
      </div>
      <div class="row">
        <div class="box col-md-6 col-sm-12">
            <a href="adminVoiture.php"><p>Voiture</p></a>
            <p>Le nombre de voiture est de : <?php echo "$rowcount3"; ?></p>
        </div>
        <div class="box col-md-6 col-sm-12">
            <a href="adminEvenements.php"><p>Événements</p></a>
            <p>Le nombre d'événements  de : <?php echo "$rowcount4"; ?></p>
        </div>

      </div>
      <div class="row">
        <div class="box col-md-6 col-sm-12">
            <a href="adminClient.php"><p>Client</p></a>
            <p>Le nombre de client est de : <?php echo "$rowcount5"; ?></p>

        </div>
        <div class="box col-md-6 col-sm-12">
            <a href="adminAdministrateur.php"><p>Administrateur</p></a>
            <p>Le nombre d'administrateur present est de : <?php echo "$rowcount6"; ?></p>

        </div>
        

      </div>
      
    </div>




</div>
   

 
   </body>
</html>