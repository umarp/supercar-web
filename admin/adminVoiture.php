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
  <a class="navbar-brand" style="width:200px;text-align:center;" href="#">Admin Voiture</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="admin.php"> Acceuil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminDemande.php">Demande</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminContacter.php">Contacter</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="adminVoiture.php">Voiture<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminEvenements.php" >Evenements</a>
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
      <p class="titre">Voir et modifier les Voiture</p>
      <a href="adminAjouterVoiture.php"><button type='button' class='btn btn-primary' style="margin-bottom: 10px">Ajouter un voiture</button></a>

      
    </div>
</div>
 <div class="container-fluid">
            <div class="table-responsive">
               <table class="table table-hover table-dark" style="width: 100%;;">
                  <thead>
                     <tr>
                     	<th scope="col">MODIFIER</th>
                        <th scope="col">SUPPIMER</th>
                        <th scope="col">No_Voiture</th>
                        <th scope="col">Pays D'origine</th>
                        <th scope="col">Interval de service</th>
                        <th scope="col">Couleur</th>
                        <th scope="col">Garantie</th>
                        <th scope="col">Marque</th>
                        <th scope="col">Modele</th>
                        <th scope="col">Transmission</th>
                        <th scope="col">Moteur</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Image1</th>
                        <th scope="col">Image2</th>
                        <th scope="col">Image3</th>
                        <th scope="col">Image4</th>
                        <th scope="col">Image5</th>
                        <th scope="col">Image5</th>
                        <th scope="col">Image6</th>


                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        include ("../Bdconnect.php");
                        
                        
                        $sql = "SELECT * FROM voiture";
                        $result = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {

                          	echo "<tr><td><a href='modifierVoiture.php?id=$row[id_voiture]'><button type='button' class='btn btn-primary'>Modifier</button></a></td>";
                            echo "<td><a href='deleteVoiture.php?id=$row[id_voiture]' onClick='return confirm(\"Etre vous Sure?\")'><button type='button' class='btn btn-primary'>Suprimer</button></a></td>";  
                            echo "<td>" ,$row["id_voiture"], "</td>";
                            echo "<td>" ,$row["Pays_Dorigine"], "</td>";
                            echo "<td>"  ,$row["Interval_de_service"], "</td>";
                            echo "<td>"  ,$row["Couleur_Disponible"], "</td>";
                            echo "<td>"  ,$row["Garantie"], "</td>";
                            echo "<td>"  ,$row["Marque"], "</td>";
                            echo "<td>"  ,$row["Modele"], "</td>";
                            echo "<td>"  ,$row["Transmission"], "</td>";
                            echo "<td>"  ,$row["Moteur"], "</td>";
                            echo "<td>"  ,$row["Prix"], "</td>";
                            echo "<td>"  ,$row["image1"], "</td>";
                            echo "<td>"  ,$row["image2"], "</td>";
                            echo "<td>"  ,$row["image3"], "</td>";
                            echo "<td>"  ,$row["image4"], "</td>";
                            echo "<td>"  ,$row["image5"], "</td>";
                            echo "<td>"  ,$row["image6"], "</td></tr>";



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