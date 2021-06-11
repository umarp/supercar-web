<?php
	include_once '../Bdconnect.php';
	if(count($_POST)>0) {
	mysqli_query($conn,"UPDATE evenement set Nom_evenement ='" . $_POST['Nom_evenement'] . "', Texte='" . $_POST['Texte'] . "', Lien='" . $_POST['Lien'] . "' WHERE No_Evenement='" . $_POST['No_Evenement'] . "'");
	 header("Location: adminEvenements.php");
	
	}
	else{
		$message = "Erreur dans les champs";
	}
	$result = mysqli_query($conn,"SELECT * FROM evenement WHERE No_Evenement='" . $_GET['id'] . "'");
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
		<title>Mise a jour d'un Evenements</title>
	</head>
	<body>
		<div class="container d-flex justify-content-center align-items-center">
			<div class="col-lg-6 col-md-12" >
				<p style="font-size: 2em;">Mise a jour d'un Evenements</p>
				<form name="frmUser" method="post" action="">
					<div><?php if(isset($message)) { echo $message; } ?></div>
					<div style="padding-bottom:5px;">

					</div>
					<div class="form-group">
						<label for="id">Numero Evenements.</label>
						<input id="id" name="No_Evenement" class="form-control" value="<?php echo $row['No_Evenement']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="nom_evenements">Nom</label>
						<input id="nom_evenements" name="Nom_evenement" class="form-control" value="<?php echo $row['Nom_evenement']; ?>">
					</div>
					<div class="form-group">
						<label for="texte">Prenom</label>
						<input id="texte" name="Texte" class="form-control" value="<?php echo $row['Texte']; ?>">
					</div>
					<div class="form-group">
						<label for="lien">Numero Telephone</label>
						<input id="lien" name="Lien" class="form-control" value="<?php echo $row['Lien']; ?>">
					</div>
				
					<button type="submit" class="btn btn-primary">Soumettre</button>
					
				</form>
				<a href="adminEvenements.php"><button class="btn btn-primary">Retour</button></a>
			</div>
		</div>
	</body>
</html>