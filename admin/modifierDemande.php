<?php
	include_once '../Bdconnect.php';
	if(count($_POST)>0) {
	mysqli_query($conn,"UPDATE demande set Dates ='" . $_POST['Dates'] . "', Heur='" . $_POST['Heur'] . "', Marque='" . $_POST['Marque'] . "' ,Modele='" . $_POST['Modele'] . "' ,No_voiture='" . $_POST['No_voiture'] . "' , Statut='" . $_POST['Statut'] . "' WHERE No_Demande='" . $_POST['id'] . "'");
	 header("Location: adminDemande.php");
	
	}
	else{
		$message = "Erreur dans les champs";
	}
	$result = mysqli_query($conn,"SELECT * FROM demande WHERE No_Demande='" . $_GET['id'] . "'");
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
		<title>Mise a jour d'un message</title>
	</head>
	<body>
		<div class="container d-flex justify-content-center align-items-center">
			<div class="col-lg-6 col-md-12" >
				<p style="font-size: 2em;">Mise a jour d'un message</p>
				<form name="frmUser" method="post" action="">
					<div><?php if(isset($message)) { echo $message; } ?></div>
					<div style="padding-bottom:5px;">

					</div>
					<div class="form-group">
						<label for="id">ID Demande d'essai.</label>
						<input id="id" name="id" class="form-control" value="<?php echo $row['No_Demande']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="date">Date</label>
						<input id="date" name="Dates" class="form-control" value="<?php echo $row['Dates']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="heur">Heur</label>
						<input id="heur" name="Heur" class="form-control" value="<?php echo $row['Heur']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="marque">Marque</label>
						<input id="marque" name="Marque" class="form-control" value="<?php echo $row['Marque']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="modele">Modele</label>
						<input id ="modele" name="Modele" class="form-control" value="<?php echo $row['Modele']; ?>" readonly>
					</div>

					<div class="form-group">
						<label for="no_Client">No_Client</label>
						<input id ="no_Client" name="No_Client" class="form-control" value="<?php echo $row['No_Client']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="no_Voiture">No_Voiture</label>
						<input id ="no_Voiture" name="No_voiture" class="form-control" value="<?php echo $row['No_voiture']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="statut">Statut du Demande d'essai (Repondu ou pas)</label>
						<select class="form-control" id="statut" name="Statut">
							<option>En Attente</option>
							<option>En Cours</option>
							<option>Terminez</option>
						</select>
					</div>
					<button type="submit" class="btn btn-success">Soumettre</button>
					
				</form>
				<a href="adminDemande.php"><button class="btn btn-primary">Retour</button></a>
			</div>
		</div>
	</body>
</html>