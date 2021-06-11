<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aston Martin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="../Index.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="Index.js"></script>

	<style type="text/css">
		
		#des{
			display: inline-block;
			text-align: center;
		}
			#nom{
			font-size: 2.5em;
			color: darkred;
			text-align: center;
		}
		#image{
			
			width: 60%;
			display:block;
			margin:0px auto;
			min-width: 200px;
		}

	</style>

</head>
<body>
	<?php  
	include ("../Bdconnect.php");
?>
<nav class="navbar transparent navbar-expand-md sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="../Index.html"><img src="../img/logosupercar.png" width="50px" height="50px" alt="Logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<i class="fas fa-chevron-circle-down"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a class="nav-link hover-this" href="../Index.php">Acceuille</a></li>

				<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          			Voiture
        			</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          			<a class="dropdown-item " href="mercedes.php">Mercedes</a>
          			<a class="dropdown-item" href="audi.php">Audi</a>
          			<a class="dropdown-item" href="jaguar.php">Jaguar</a>
          			<a class="dropdown-item hover-this" href="astonMartin.php">Aston Martin</a>
        			</div>
        		</li>

				<li class="nav-item"><a class="nav-link hover-this" href="../demande D'essai.php">Demande D'essai</a></li>
				<li class="nav-item"><a class="nav-link hover-this" href="../evenements.php">Evenements</a></li>
				<li class="nav-item"><a class="nav-link hover-this" href="../contactezNous.php">Contactez Nous</a></li>
				<?php
					if (empty($_SESSION)) {
						 echo "<li><a href='../register.php'><button type='button' class='btn btn-info login'>Inscrivez vous</button></a></li>";
					}
					else{
						if($_SESSION["username"]) {
				
						echo "<p class='loginText'>Bienvenue " .$_SESSION["username"] ."</p>";
				
						 echo "<a href='../logout.php'><button type='button' class='btn btn-primary login'>Deconnecter</button></a>";
				
				
						}else echo "<li><a href='../register.php'><button type='button' class='btn btn-primary login'>Inscrivez vous</button></a></li>";
					}
				?>


		</ul>
		</div>
	</div>
</nav>




	<div>
		<center><h2>Bienvenu dans la page voiture de Aston Martin</h2></center>
		<hr/>
		<br/>
	</div>
	
		<div class="container-fluid voitureMargin">
	

           	<?php
                include ("../Bdconnect.php");
                $count =1; 
                $sql = "SELECT * FROM voiture WHERE Marque= 'Aston Martin'";
                $result = mysqli_query($conn, $sql);
                        
                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
							$count++;
 							echo "<p class='col-md-12' id='nom'>" ,$row["Modele"], "</p>";
 							 	echo "

								<div id='$count' class='carousel slide' data-ride='carousel'>
								  <ol class='carousel-indicators'>
								    <li data-target='#$count' data-slide-to='0' class='active'></li>
								    <li data-target='#$count' data-slide-to='1'></li>
								    <li data-target='#$count' data-slide-to='2'></li>
								    <li data-target='#$count' data-slide-to='3'></li>
								    <li data-target='#$count' data-slide-to='4'></li>
								    <li data-target='#$count' data-slide-to='5'></li>   
								  </ol>

							  <div class='carousel-inner'>
						    		<div class='carousel-item active'>
						      		<img src=",$row["image1"]," class='d-block w-80' alt='...'>
						    		</div>
						    		<div class='carousel-item'>
						      		<img src=",$row["image2"]," class='d-block w-80' alt='...'>
						    		</div>
						    		<div class='carousel-item'>
						     		 <img src=",$row["image3"]," class='d-block w-80' alt='...'>
						    		</div>
						    		<div class='carousel-item'>
						      		<img src=",$row["image4"]," class='d-block w-80' alt='...'>
						    		</div>
						    		<div class='carousel-item'>
						      		<img src=",$row["image5"]," class='d-block w-80' alt='...'>
						    		</div>
						    		<div class='carousel-item'>
						     		<img src=",$row["image6"]," class='d-block w-80' alt='...'>
						    		</div>
						  		</div>
							  <a class='carousel-control-prev' href='#$count' role='button' data-slide='prev'>
							    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
							    <span class='sr-only'>Previous</span>
							  </a>
							  <a class='carousel-control-next' href='#$count' role='button' data-slide='next'>
							    <span class='carousel-control-next-icon' aria-hidden='true'></span>
							    <span class='sr-only'>Next</span>
							  </a>
							</div>


		               
							

							";

                           echo " <table class='table table-hover table-dark' >
					                  <thead>
					                     <tr>
					                        <th scope='col'>Pays D'origine</th>
					                        <th scope='col'>Interval de Service</th>
					                        <th scope='col'>Couleur Disponible</th>
					                        <th scope='col'>Garantie</th>
					                        <th scope='col'>Transmission</th>
					                        <th scope='col'>Moteur</th>
					                        <th scope='col'>Prix</th>
					                     </tr>
					                  </thead>
					                  <tbody>";

 
                            echo "<tr><td>" ,$row["Pays_Dorigine"], "</td>";
                            echo "<td>"  ,$row["Interval_de_service"], "</td>";
                            echo "<td>"  ,$row["Couleur_Disponible"], "</td>";
                            echo "<td>"  ,$row["Garantie"], "</td>";
                            echo "<td>"  ,$row["Transmission"], "</td>";
                            echo "<td>"  ,$row["Moteur"], "</td>";
                            echo "<td>"  ,$row["Prix"], "</td></tbody></table>";
                            echo "<a href='../demandeD&apos;essai.php?id=$row[id_voiture]'><button type='button' class='btn btn-primary'>Faire une Demande dessai</button></a><hr>";
                            }
                        } else {
                          echo "0 results";
                        }
						mysqli_close($conn);
                        ?>
                  




</div>

<!--- Footer -->


<div id="includedContent"></div>

</body>
</html>