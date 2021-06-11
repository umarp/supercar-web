<?php
	include_once '../Bdconnect.php';
	if(count($_POST)>0) {
	mysqli_query($conn,"UPDATE contacternous set  Nom='" . $_POST['Nom'] . "', Email='" . $_POST['Email'] . "', Sujet='" . $_POST['Sujet'] . "' ,Message='" . $_POST['Message'] . "' , Statut='" . $_POST['Statut'] . "' WHERE id='" . $_POST['id'] . "'");
	 header("Location: adminContacter.php");
	
	}
	else{
		$message = "Erreur dans les champs";
	}
	$result = mysqli_query($conn,"SELECT * FROM contacternous WHERE id='" . $_GET['id'] . "'");
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
						<label for="id">ID du message.</label>
						<input id="id" name="id" class="form-control" value="<?php echo $row['id']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="nom">Nom</label>
						<input id="nom" name="Nom" class="form-control" value="<?php echo $row['Nom']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="email">Adress Email</label>
						<input type="email" id="email" name="Email" class="form-control" value="<?php echo $row['Email']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="sujet">Sujet</label>
						<input id="sujet" name="Sujet" class="form-control" value="<?php echo $row['Sujet']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<input id ="message" name="Message" class="form-control" value="<?php echo $row['Message']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="statut">Statut du message (Repondu ou pas)</label>
						<select class="form-control" id="statut" name="Statut">
							<option>En Attente</option>
							<option>En Cours</option>
							<option>Repondu</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Soumettre</button>
					
				</form>
				
			</div>
			<a href="adminContacter.php"><button class="btn btn-primary">Retour</button></a>
		</div>
	</body>
</html>