<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="adminCss.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
      <title>Admin</title>
   </head>
   <body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" style="width:200px;text-align:center;" href="#">Admin Evenements</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="admin.php"> Acceuil</a>
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
      <li class="nav-item active">
        <a class="nav-link" href="adminEvenements.php" >Evenements<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="adminClient.php" >Client</a>
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
                  
      
                  
                      echo "<a href='adminLogout.php' ><button type='button' class='btn btn-primary login'>Deconnecter " .$_SESSION["NomUtilisateur"] ."</button></a>";
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
      <p class="titre">Voir et modifier les Evenements</p>
      <a href="adminAjouterEvenements.php"><button type='button' class='btn btn-primary' style="margin-bottom: 10px">Ajouter un Evenement</button></a>
      
    </div>
</div>
 <div class="container-fluid">
            <div class="table-responsive">
               <table class="table table-hover table-dark">
                  <thead>
                     <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom de l'evenements</th>
                        <th scope="col">Texte</th>
                        <th scope="col">Lien</th>
                        <th scope="col">Image</th>
                        <th scope="col">MODIFIER</th>
                        <th scope="col">SUPPIMER</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        include ("../Bdconnect.php");
                        
                        
                        $sql = "SELECT No_Evenement, Nom_Evenement, Texte, Lien FROM evenement";
                        $result = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {
                            
                            echo "<tr><td>" ,$row["No_Evenement"], "</td>";
                            echo "<td>"  ,$row["Nom_Evenement"], "</td>";
                            echo "<td>"  ,$row["Texte"], "</td>";
                            echo "<td>"  ,$row["Lien"], "</td>";
                            echo "<td>" ," <img class='image' src=../",$row["Lien"]," style='width:100px;height:100px;' >", "</td>";
                            echo "<td><a href='modifierEvenements.php?id=$row[No_Evenement]'><button type='button' class='btn btn-primary'>Modifier</button></a></td>";
                            echo "<td><a href='deleteEvenements.php?id=$row[No_Evenement]' onClick='return confirm(\"Etre vous Sure?\")'><button type='button' class='btn btn-primary'>Suprimer</button></a></td></tr>";  
                            }
                        } else {
                          echo "0 results";
                        }
                        
                        ?>
                  </tbody>
               </table>
            </div>
         </div>
 
   </body>
</html>