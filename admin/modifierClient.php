<?php
	include_once '../Bdconnect.php';
	if(count($_POST)>0) {
	mysqli_query($conn,"UPDATE client set NomUtilisateur ='" . $_POST['NomUtilisateur'] . "',Nom ='" . $_POST['Nom'] . "', Prenom='" . $_POST['Prenom'] . "', NumeroTelephone='" . $_POST['NumeroTelephone'] . "' ,Email='" . $_POST['Email'] . "' ,MotDePasse='" . $_POST['MotDePasse'] . "'  WHERE No_Client='" . $_POST['id'] . "'");
	 header("Location: adminClient.php");
	
	}
	else{
		$message = "Erreur dans les champs";
	}
	$result = mysqli_query($conn,"SELECT * FROM client WHERE No_Client='" . $_GET['id'] . "'");
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
		<title>Mise a jour d'un Client</title>
	</head>
	<body>
		<div class="container d-flex justify-content-center align-items-center">
			<div class="col-lg-6 col-md-12" >
				<p style="font-size: 2em;">Mise a jour d'un Client</p>
				<form name="frmUser" method="post" action="">
					<div><?php if(isset($message)) { echo $message; } ?></div>
					<div style="padding-bottom:5px;">

					</div>
					<div class="form-group">
						<label for="id">ID Client.</label>
						<input id="id" name="id" class="form-control" value="<?php echo $row['No_Client']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="NomUtilisateur">Nom Utilisateur</label>
						<input id="NomUtilisateur" name="NomUtilisateur" class="form-control" value="<?php echo $row['NomUtilisateur']; ?>">
					</div>
					<div class="form-group">
						<label for="Nom">Nom</label>
						<input id="Nom" name="Nom" class="form-control" pattern="[A-Za-z]{2,15}" value="<?php echo $row['Nom']; ?>">
					</div>
					<div class="form-group">
						<label for="Prenom">Prenom</label>
						<input id="Prenom" name="Prenom" class="form-control" value="<?php echo $row['Prenom']; ?>">
					</div>
					<div class="form-group">
						<label for="NumeroTelephone">Numero Telephone</label>
						<input id="NumeroTelephone" name="NumeroTelephone" class="form-control" value="<?php echo $row['NumeroTelephone']; ?>">
					</div>
					<div class="form-group">
						<label for="Email">Email</label>
						<input id ="Email" name="Email" class="form-control" value="<?php echo $row['Email']; ?>">
					</div>

					<div class="form-group">
						<label for="MotDePasse">Mot De Passe</label>
						<input id ="MotDePasse" name="MotDePasse" class="form-control" value="<?php echo $row['MotDePasse']; ?>">
					</div>
				
					<button type="submit" class="btn btn-primary">Soumettre</button>
					
				</form>
				<a href="adminClient.php"><button class="btn btn-primary">Retour</button></a>
			</div>
		</div>
	</body>
</html>