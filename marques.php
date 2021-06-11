<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Marques</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="Index.css" rel="stylesheet">

	<script> 
    $(function(){
      $("#includedContent").load("Footer.php"); 
    });
    </script> 
	<style type="text/css">

.col-3 {
	border-radius: 2px;
	border-width: 4px;
	border-color: darkred;

}


	</style>


</head>
<body>

	<!-- Navigation -->

	<nav class="navbar transparent navbar-expand-md sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="Index.php"><img src="img/logosupercar.png" width="40" height="40" alt="Logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<i class="fas fa-chevron-circle-down"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link hover-this" href="Index.php">Acceuille</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Voiture
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item hover-this" href="Gallery/mercedes.php">Mercedes</a>
							<a class="dropdown-item" href="Gallery/audi.php">Audi</a>
							<a class="dropdown-item" href="Gallery/jaguar.php">Jaguar</a>
							<a class="dropdown-item" href="Gallery/astonMartin.php">Aston Martin</a>
						</div>
					</li>

					<li class="nav-item"><a class="nav-link hover-this" href="demandeD'essai.php">Demande D'essai</a></li>
					<li class="nav-item"><a class="nav-link hover-this" href="evenements.php">Evenements</a></li>
					<li class="nav-item"><a class="nav-link hover-this" href="contactezNous.php">Contactez Nous</a></li>
					<?php
					if (empty($_SESSION)) {
						 echo "<li><a href='register.php'><button type='button' class='btn btn-info login'>Inscrivez vous</button></a></li>";
					}
					else{
						if($_SESSION["username"]) {
				
						echo "<p class='loginText'>Bienvenue " .$_SESSION["username"] ."</p>";
				
						 echo "<a href='logout.php'><button type='button' class='btn btn-primary login'>Deconnecter</button></a>";
				
				
						}else echo "<li><a href='register.php'><button type='button' class='btn btn-primary login'>Inscrivez vous</button></a></li>";
					}
				?>
				</ul>
			</div>
		</div>
	</nav>





	<div class="container-fluid">
		<div class="row text-center padding">

	
			<div class="col-3">
				<a href="Gallery/astonMartin.php">	
					<img src="img/astonmartinlogo1.png">
				</a>

			</div>
			<div class="col-3">
				<a href="Gallery/audi.php">	
					<img src="img/audilogo1.png">
				</a>
			</div>
			<div class="col-3">
				<a href="Gallery/jaguar.php">	
					<img src="img/jaguarlogo1.png">
				</a>
			</div>
			<div class="col-3">
				<a href="Gallery/mercedes.php">	
					<img src="img/mercedeslogo1.png">
				</a>	
			</div>
			
		</div>
	</div>



	<!--- Se Connecte -->
	<div class="container-fluid">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Suivez-nous sur les réseaux sociaux</h2>
			</div>
			<div class="col-12 social padding">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus-g"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>

	
<!--- Footer -->

<div id="includedContent"></div>






</body>
</html>



