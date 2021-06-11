<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SuperCar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="Index.css" rel="stylesheet">
	<script src="Index.js"></script>
	    <script> 
    $(function(){
      $("#includedContent").load("Footer.php"); 
    });
    </script> 

<style type="text/css">

</style>

</head>
<body>

<!-- Navigation -->

<nav class="navbar transparent navbar-expand-md sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="Index.php"><img src="img/logosupercar.png" width="50px" height="50px" alt="Logo"></a>
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
						 echo "<li><a href='register.php'><button type='button' class='btn btn-primary login'>Inscrivez vous</button></a></li>";
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










<!--- Image Slider (Carousel)-->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
		<li data-target="#slides" data-slide-to="3"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/Mercedes/Mercedes Logo.jfif">
				<div class="carousel-caption">
				<h1 class="display-2">Mercedes</h1>
				<h3>Voiture De Lux</h3>
				<a href="marques.php"><button type="button" class="btn btn-primary btn-lg">Nos Modeles</button></a>
				<a href="Demande D'essai.php"><button type="button" class="btn btn-primary btn-lg">Faire un essay</button></a>
				</div>
		</div>
	<div class="carousel-item">
		<img src="img/Mercedes/Mercedes benze coupe.jfif">
	</div>
	<div class="carousel-item">
			<img src="img/Mercedes/Mercedes Vite.jfif">
	</div>
	<div class="carousel-item">
			<img src="img/Mercedes/Mercedes 4x4.jfif">
	</div>

		
	</div>
</div>







<!--- Jumbotron(En dessue du carousel: on peut metre des evenements) -->
<div class="container-fluid">
	<div class="row jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead pln">
				Nous avons des promotions sur nos voiture.
			</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href="Marques.php"><button type="button" class="btn btn-outline-secondary btn-lg">Marques de voitures</button></a>
		</div>
	</div>
</div>





<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Qui Sommes Nous?</h1>
		</div>
		<hr>
		<div class="col-12"><p class="lead">Nous sommes des experts dans le domaine des voiture.</p>
			<p>Ont peux repondre a tous vos question concernant les voitures.</p>

		</div>
		<div class="col-12">
			<p>Que pouvez vous faire sur notre site?</p>
		
	</div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-code"></i>
			<h3>Recherche Votre Voiture</h3>
			<h4>Nous avons une collection de 5 marques de voitures avec 6 modeles de chaques</h4>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-code"></i>
			<h3>Faire une demande d'essaie!</h3>
			<h4>Pour faire une denamde d'essaie il faut simplement choisire le modele de voiture et la date ou vouz voules testez la voiture. </h4>
		</div>
		<div class="col-sm-12 col-md-4">
			<i class="fas fa-code"></i>
			<h3>Pourquoi Nous ?</h3>
			<h4>On peut repondre a tous vos question concernat les voitures ou le demande d'essai.</h4>
			<a href="Demande D'essai.php"><button>Demande d'essai</button></a>
		</div>
 
		</div>
	</div>
	<hr class="my-4">
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2 align="center">Jaguar</h2>
			<p>Le modele compact de Jaguar a porté de main, venez goutter au plaisirs ultime de la conduite<br>
			Avec une sportivité extravagante<br>
			La Jaguar CX75 offre le plus haut degré de sportivité et d'élégance de toute la gamme Jaguar, et la Jaguar Compact Gran Coupé est la plus exotique et la plus fascinante de toutes.<br>
			pour une expérience de conduite exceptionnelle agrémentée d'une touche d'élégance. Deux versions passionnantes sont disponibles.
			</p>
			<br>
			<a href="" class="btn btn-primary">Plus D'information</a>

		</div>
		<div class="col-lg-6">
			<img src="img/Mercedes/Mercedes Interieur.jfif" class="img-fluid">
		</div>
		
	</div>
</div>

<!--- Fixed background -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">
			
		</div>
	</div>
</figure>

<!--- Logo Section -->
<button class="logobtn" data-toggle="collapse" data-target="#logo">Clickez pour voir nos marques</button>
<div id="logo" class="collapse">
	<div class="container-fluid padding">
		<div class="row text-center">

			<div class="col-sm-4 col-md-3 col-xl-4">
				<img class="logo1" src="img/jeeplogo1.png">
			</div>
			<div class="col-sm-4 col-md-3 col-xl-4">
				<img class="logo1" src="img/mercedeslogo1.png">
			</div>
			<div class="col-sm-4 col-md-3 col-xl-4">
				<img class="logo1" src="img/jaguarlogo1.png">
			</div>
			<div class="col-sm-4 col-md-3 col-xl-6">
				<img class="logo1" src="img/audilogo1.png">
			</div>
			<div class="col-sm-4 col-md-3 col-xl-6">
				<img class="logo1" src="img/astonmartinlogo1.png">
			</div>

		</div>
	</div>
</div>
  
<!--- Les marques? -->
<div class="container-fluid">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">
				Nos Service
				
			</h1>
		</div>
		<hr>
	</div>
</div>

<!--- Cards 
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/assurance.jpg">
				<div class="card-body">
					<h4 class="card-title">Evènements</h4>
					<p>Assurez votre voiture avec notre partenaire d'assurance</p>
					<a href="" class="btn btn-outline-secondary">Assurance</a>
				</div>
				
			</div>
			
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/reparation.jpg">
				<div class="card-body">
					<h4 class="card-title">Autorisation CopyRight</h4>
					<p>assurance oui</p>
					<a href="" class="btn btn-outline-secondary">Voir Repration</a>
				</div>
				
			</div>
			
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/">
				<div class="card-body">
					<h4 class="card-title">Nos Termes</h4>
					<p>assur</p>
					<a href="" class="btn btn-outline-secondary">Voir assurance</a>
				</div>
				
			</div>
			
		</div>
	</div>
</div>
-->
<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d233.9562226103946!2d57.48922144424626!3d-20.246407393877682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smu!4v1580455676246!5m2!1sen!2smu" width="100%" height="450" frameborder="0" style="border:5px dotted;" allowfullscreen=""></iframe>
			<a href="" class="btn btn-primary">Plus D'information</a>

		</div>
		<div class="col-lg-6">
			<img src="img/Mercedes/Mercedes Interieur.jfif" class="img-fluid">
		</div>
		
	</div>
	<hr class="my-4">
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



