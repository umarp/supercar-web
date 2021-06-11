<?php
	include_once '../Bdconnect.php';
	if(count($_POST)>0) {
	mysqli_query($conn,"UPDATE administrateur set  NomUtilisateur='" . $_POST['NomUtilisateur'] . "', MotDePasse='" . $_POST['MDP'] . "', Nom='" . $_POST['Nom'] . "', Prenom='" . $_POST['Prenom'] . "' , Email='" . $_POST['Email'] . "', NumeroTelephone='" . $_POST['Tel'] . "'WHERE id='" . $_POST['id'] . "'");
	 header("Location: adminAdministrateur.php");
	
	}
	else{
		$message = "Erreur dans les champs";
	}
	$result = mysqli_query($conn,"SELECT * FROM administrateur WHERE id='" . $_GET['id'] . "'");
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
		<title>Mise a jour d'un Administrateur</title>
	</head>
	<body>
		<div class="container d-flex justify-content-center align-items-center">
			<div class="col-lg-6 col-md-12" >
				<p style="font-size: 2em;">Mise a jour d'un Administrateur</p>
				<form name="frmUser" method="post" action="">
					<div><?php if(isset($message)) { echo $message; } ?></div>
					<div style="padding-bottom:5px;">

					</div>
					<div class="form-group">
						<label for="id">Id Administrateur.</label>
						<input id="id" name="id" class="form-control" value="<?php echo $row['id']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="Nom">Nom</label>
						<input id="Nom" name="Nom" class="form-control" value="<?php echo $row['Nom']; ?>">
					</div>
					<div class="form-group">
						<label for="Prenom">Prenom</label>
						<input id="Prenom" name="Prenom" class="form-control" value="<?php echo $row['Prenom']; ?>">
					</div>
					<div class="form-group">
						<label for="Tel">Numero Telephone</label>
						<input id="Tel" name="Tel" class="form-control" value="<?php echo $row['NumeroTelephone']; ?>">
					</div>
					<div class="form-group">
						<label for="NomUtilisateur">Nom Utilisateur</label>
						<input id="NomUtilisateur" name="NomUtilisateur" class="form-control" value="<?php echo $row['NomUtilisateur']; ?>">
					</div>
					<div class="form-group">
						<label for="Email">Email</label>
						<input id="Email" name="Email" type="Email" class="form-control" value="<?php echo $row['Email']; ?>">
					</div>
					<div class="form-group">
						<label for="MDP">Mot De Passe</label>
						<input id="MDP" name="MDP" type="password" class="form-control" value="<?php echo $row['MotDePasse']; ?>">
					</div>
				
					<button type="submit" class="btn btn-primary">Soumettre</button>
					
				</form>
				<a href="adminAdministrateur.php"><button class="btn btn-primary">Retour</button></a>
			</div>
		</div>
	</body>
</html>