<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contactez Nous</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SuperCar</title>
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
	

	.contact-form{
		background:rgba(0,0,0,0.6);
		color: white;
		height: ;
	}
	.col-md-4{
		padding:40px 5px;
	}
	#contactez-nous{
		padding: 30px;
	}

</style>
</head>
<body>

<!--nav-->
<nav class="navbar transparent navbar-expand-md sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="Index.php"><img src="img/logosupercar.png" style="width: 50px;height: 50px;"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<i class="fas fa-chevron-circle-down"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link hover-this" href="Index.php">Acceuille</a></li>

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
				<li class="nav-item active"><a class="nav-link hover-this" href="contactezNous.php">Contactez Nous</a></li>
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


<div class="container-fluid" style="padding: 0px;">
<?php
	$Msg = "";
	if(isset($_GET['error']))
	{
		$Msg = "Veiller verifier votre messgae";
		echo'<div class="alert alert-danger">'.$Msg.'</div>';
	}
	if(isset($_GET['success'])) {
		
		$Msg = "Votre message a été reçu";
		echo'<div class="alert alert-success">'.$Msg.'</div>';
	}
?>
</div>
<!--form-->
<form action="processContactez.php" method="post">
	<div class="contact-form">
		<div class="container">
		<h1 id="contactez-nous">Contactez Nous</h1>
		<hr>
		<div class="row">
		<div class="col-lg-4 col-md-12">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="Uname">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="Email">
			</div>
			<div class="form-group">
				<label>Subject</label>
				<input type="text" name="Subject">
			</div>

		</div>
		<div class="col-lg-4 col-md-12">
			<div class="form-group">
				<label>Message</label>
				<textarea placeholder="Entrez votre message" class="form-control"rows="10" cols="35" name="msg"></textarea>
			</div>
		</div>


		<div class="col-lg-4 col-md-12">
			<div class="contact">
				     <i class="fa fa-map-marker" aria-hidden="true"></i>
					 <p> MEF-MCCI Building, Ebène CyberCity  <br> Ebène, Quatre Bornes <br> République de Maurice </p>
			</div>
            <div class="contact">
				     <i class="fa fa-envelope" aria-hidden="true"></i>
					 <p> Info@supercar.com <br> contact@Supercar.com </p>
			</div>
            <div class="contact">
				     <i class="fa fa-mobile" aria-hidden="true"></i>
					 <p> +230 5555555 <br> +230 5555555 </p>
			</div>
		</div>
	</div>
		<div class="col-md-12">
			<div class="form-group">
				<button class="btn btn-primary btn-block" name="btn-send">Send</button>
			</div>
		</div>
	</div>
</div>

</form>
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





