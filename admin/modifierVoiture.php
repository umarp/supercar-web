<?php
	include_once '../Bdconnect.php';
	if(count($_POST)>0) {
	mysqli_query($conn,"UPDATE voiture set  Pays_Dorigine='" . $_POST['Pays_Dorigine'] . "', Interval_de_service='" . $_POST['Pays_Dorigine'] . "', Couleur_Disponible='" . $_POST['Couleur_Disponible'] . "' ,Garantie='" . $_POST['Garantie'] . "' , Marque='" . $_POST['Marque'] . "',Modele='" . $_POST['Modele'] . "' ,Transmission='" . $_POST['Transmission'] . "' ,Moteur='" . $_POST['Moteur'] . "' ,Prix='" . $_POST['Prix'] . "' ,image1='" . $_POST['image1'] . "' ,image2='" . $_POST['image2'] . "',image3='" . $_POST['image3'] . "' ,image4='" . $_POST['image4'] . "' ,image5='" . $_POST['image5'] . "' ,image6='" . $_POST['image6'] . "'   WHERE id_voiture='" . $_POST['id_voiture'] . "'");
	
	header("location:adminVoiture.php");
	}
	else{
		$message = "Erreur dans les champs";
	}
	$result = mysqli_query($conn,"SELECT * FROM voiture WHERE id_voiture ='" . $_GET['id'] . "'");
	$row= mysqli_fetch_array($result);
	?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
		<link href="Index.css" rel="stylesheet">
		<script src="index.js"></script>
		<title>Mise a jour d'un voiture</title>
	</head>
	<body>
		<div class="container d-flex justify-content-center align-items-center">
			<div class="col-lg-6 col-md-12" >
				<p style="font-size: 2em;">Mise a jour d'un voiture</p>
				<form name="frmUser" method="post" action="">
					<div><?php if(isset($message)) { echo $message; } ?></div>
					<div style="padding-bottom:5px;">

					</div>
					<div class="form-group">
						<label for="id">ID du voiture.</label>
						<input id="id" name="id_voiture" class="form-control" value="<?php echo $row['id_voiture']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="PaysDorigine">Pays D'origine</label>
						<input id="PaysDorigine" name="Pays_Dorigine" class="form-control" value="<?php echo $row['Pays_Dorigine']; ?>">
					</div>
					<div class="form-group">
						<label for="interval_de_service">Interval de service</label>
						<input id="interval_de_service" name="Interval_de_service" class="form-control" value="<?php echo $row['Interval_de_service']; ?>">
					</div>
					<div class="form-group">
						<label for="couleur_Disponible">Couleur Disponible</label>
						<input id="couleur_Disponible" name="Couleur_Disponible" class="form-control" value="<?php echo $row['Couleur_Disponible']; ?>">
					</div>
					<div class="form-group">
						<label for="garantie">Garantie</label>
						<input id ="garantie" name="Garantie" class="form-control" value="<?php echo $row['Garantie']; ?>">
					</div>
										<div class="form-group">
						<label for="marque">Marque</label>
						<input id ="marque" name="Marque" class="form-control" value="<?php echo $row['Marque']; ?>">
					</div>
										<div class="form-group">
						<label for="modele">Modele</label>
						<input id ="modele" name="Modele" class="form-control" value="<?php echo $row['Modele']; ?>">
					</div>
										<div class="form-group">
						<label for="transmission">Transmission</label>
						<input id ="transmission" name="Transmission" class="form-control" value="<?php echo $row['Transmission']; ?>">
					</div>
										<div class="form-group">
						<label for="moteur">Moteur</label>
						<input id ="moteur" name="Moteur" class="form-control" value="<?php echo $row['Moteur']; ?>">
					</div>
										<div class="form-group">
						<label for="prix">Prix</label>
						<input id ="prix" name="Prix" class="form-control" value="<?php echo $row['Prix']; ?>">
					</div>
										<div class="form-group">
						<label for="Image1">image1</label>
						<input id ="Image1" name="image1" class="form-control" value="<?php echo $row['image1']; ?>">
					</div>
										<div class="form-group">
						<label for="image2">image2</label>
						<input id ="image2" name="image2" class="form-control" value="<?php echo $row['image2']; ?>">
					</div>
															<div class="form-group">
						<label for="image3">image3</label>
						<input id ="image3" name="image3" class="form-control" value="<?php echo $row['image3']; ?>">
					</div>
															<div class="form-group">
						<label for="image4">image4</label>
						<input id ="image4" name="image4" class="form-control" value="<?php echo $row['image4']; ?>">
					</div>
															<div class="form-group">
						<label for="image5">image5</label>
						<input id ="image5" name="image5" class="form-control" value="<?php echo $row['image5']; ?>">
					</div>
															<div class="form-group">
						<label for="image6">image6</label>
						<input id ="image6" name="image6" class="form-control" value="<?php echo $row['image6']; ?>">
					</div>

					<button type="submit" class="btn btn-primary">Soumettre</button>
					
				</form>
				<a href="adminVoiture.php"><button class="btn btn-primary">Retour</button></a>
			</div>
		</div>
	</body>
</html>