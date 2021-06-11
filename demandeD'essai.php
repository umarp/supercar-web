<?php
session_start();
include ("Bdconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Demande D'essaie</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
		
		.dropdowns{
			padding-top: 15px;
		}
	</style>
</head>
<body>
	<!-- Headder-->
<nav class="navbar transparent navbar-expand-md sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="Index.php"><img src="img/logosupercar.png" width="50px" height="50px" alt="Logo"></a>
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

				<li class="nav-item active"><a class="nav-link hover-this" href="demandeD'essai.php">Demande D'essai</a></li>
				<li class="nav-item"><a class="nav-link hover-this" href="evenements.php">Evenements</a></li>
				<li class="nav-item"><a class="nav-link hover-this" href="contactezNous.php">Contactez Nous</a></li>
					<?php
					if (empty($_SESSION)) {
						echo '<script language="javascript">';
						echo ' location.href="login.php"';
						echo '</script>';
					}
					else{
						if($_SESSION["username"]) {
						echo "<p class='loginText'>Bienvenue " .$_SESSION["username"] ."</p>";
						echo "<a href='logout.php' ><button type='button' class='btn btn-primary login'>Deconnecter</button></a>";
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
		$Msg = "Veiller verifier votre Demande";
		echo'<div class="alert alert-danger">'.$Msg.'</div>';
	}
	if(isset($_GET['success'])) {
		
		$Msg = "Votre demande a été reçu";
		echo'<div class="alert alert-success">'.$Msg.'</div>';
	}
?>
</div>



<!-- Form Demande
<?php 
if (empty($_GET["id"])) {
	# code...
}else{

$id_voiture = $_GET["id"];
echo $id_voiture;
if ($id_voiture>0) {


	$sqls = "SELECT Marque, Modele FROM voiture WHERE id_voiture = $id_voiture";
	$results = mysqli_query($conn, $sqls);
	if (mysqli_num_rows($results) > 0) {
	// output data of each row
		$rows = mysqli_fetch_assoc($results);
	}
}
}

 ?>
  -->

<form action="processDemande.php" method="post">
	<div class="contact-form">
		<div class="container">
		<h1 id="contactez-nous">Demande d'essai</h1>
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
					<div class="form-group">
		      			<label for="Date">Date de reservation:</label>
		      			<br>
		  	  			<input type="date" id="Date" name="Date">  
		  			</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<label>Quelle Heure</label>
					<div class="btn-group btn-group-toggle" data-toggle="buttons">
	  					<label class="btn btn-secondary active">
	    					<input type="radio" name="heur" id="option1" value="9:00:00" checked> 9:00:00
	  					</label>
	  					<label class="btn btn-secondary">
	   						<input type="radio" name="heur" id="option2" value="12:00:00"> 12:00:00
	  					</label>
	  					<label class="btn btn-secondary">
	    					<input type="radio" name="heur" id="option3" value="15:00:00" > 15.00 PM
	  					</label>
					</div>
					<div class="dropdowns">

						<select class="custom-select" id="SelectMarque" name="Marque">
						  <option selected ><?php echo $rows[Marque]; ?> Choissez votre Marques...</option>
							<?php

								$sql = "SELECT distinct(Marque) FROM voiture";
								$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
								  		// output data of each row
								 		while($row = mysqli_fetch_assoc($result)) {
											echo" <option value='$row[Marque]'>$row[Marque]</option>";
									  	}
									} else {
								  		echo "Erreur";
									}

									$selected = Marque;
									
							?>
						  

						</select>
  						
					</div>
					<div class="dropdowns">

						<select class="custom-select" id="SelectMarque"  name="Modele">
						  <option selected><?php echo $rows[Modele]; ?>Choissez votre Modele</option>
							<?php
							
								$sql = "SELECT distinct(Modele) FROM voiture ";
								$result = mysqli_query($conn, $sql);


									if (mysqli_num_rows($result) > 0) {
								  		// output data of each row
								 		while($row = mysqli_fetch_assoc($result)) {
											echo" <option value='$row[Modele]'>$row[Modele]</option>";
									  	}
									} else {
								  		echo "Erreur";
									}
							?>
						  

						</select>
  						
					</div>
					

				</div>
				<div class="col-lg-4 col-md-12">
					<div class="form-group">
					<label>Message</label>
					<textarea placeholder="Entrez votre message" class="form-control"rows="10" col="50" name="msg"></textarea>
					</div>
				</div>

			</div>
			<div class="col-md-12">
				<div class="form-group">
					<button class="btn btn-primary btn-block" name="btn-send">Envoyer</button>
				</div>
			</div>
		</div>
	</div>

</form>







<!--- Footer -->


<div id="includedContent"></div>



</body>
</html>