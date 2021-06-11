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
		<title>Ajouter Evenement</title>
	</head>
	<body>
<div class="container d-flex justify-content-center align-items-center">
			<div class="col-lg-6 col-md-12" >
				<p style="font-size: 2em;">Ajouter un Evenements</p>
				<form name="add" method="post" action="ajouterEvenements.php">
					
					<div class="form-group">
						<label for="Nom">Nom</label>
						<input id="Nom" name="Nom" class="form-control" >
					</div>
					<div class="form-group">
						<label for="Texte">Texte</label>
						<input id="Texte" name="Texte" class="form-control" >
					</div>
					<div class="form-group">
						<label for="Image">Image</label>
						<input id="Image" name="Image" class="form-control" >
					</div>
			
					<button type="submit" class="btn btn-primary">Soumettre</button>
					<a href="adminEvenements.php"><button class="btn btn-primary">Retour</button></a>
				</form>
			</div>
		</div>

        </body>
</html>