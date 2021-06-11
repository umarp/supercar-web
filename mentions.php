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


<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-12">
			<h2 align="center">Où avons-nous obtenu les images?</h2>
			<br>
			<br><p style="font-size:1.5em;">
			Les images sont fournies par <a href="https://unsplash.com/" class="btn btn-primary">unsplash.com</a><br>Voir sa licence <a href="https://unsplash.com/license" class="btn btn-primary">License</a>
            <br>
            <br>
            et
            <br>
            <br>
            Les images des voitures sont fournies par <a href="https://www.mad4wheels.com/" class="btn btn-primary">mad4wheels.com</a>
            </p>
			<br>

		</div>

		
	</div>
</div>

<!--- Footer -->

<div id="includedContent"></div>

