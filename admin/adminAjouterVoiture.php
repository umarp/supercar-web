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
		<title>Ajouter Voiture</title>
	</head>
	<body>
<div class="container d-flex justify-content-center align-items-center">
			<div class="col-lg-6 col-md-12" >
				<p style="font-size: 2em;">Ajouter une voiture</p>
				<form name="add" method="post" action="ajouterVoiture.php">
					
					<div class="form-group">
						<label for="Marque">Marque</label>
						<input id="Marque" name="Marque" class="form-control" >
					</div>
					<div class="form-group">
						<label for="Modele">Modélé</label>
						<input id="Modele" name="Modele" class="form-control" >
					</div>
					<div class="form-group">
						<label for="Pays">Pays</label>
						<input id="Pays" name="Pays" class="form-control" >
					</div>
					<div class="form-group">
						<label for="Interval">Intervale De Service</label>
						<input id ="Interval" name="Interval" class="form-control" >
					</div>
                    <div class="form-group">
						<label for="Couleur">Couleur</label>
						<input id ="Couleur" name="Couleur" class="form-control" >
					</div>
                    <div class="form-group">
						<label for="Garentie">Garentie</label>
						<input id ="Garentie" name="Garentie" class="form-control" >
					</div>
                    <div class="form-group">
						<label for="Transmission">Transmission</label>
						<input id ="Transmission" name="Transmission" class="form-control" >
					</div>
                    <div class="form-group">
						<label for="Moteur">Moteur</label>
						<input id ="Moteur" name="Moteur" class="form-control" >
					</div>
                    <div class="form-group">
						<label for="Prix">Prix</label>
						<input id ="Prix" name="Prix" class="form-control" >
					</div>
                    <div class="form-group">
						<label for="Images1">Image 1</label>
						<input id ="Images1" name="Images1" class="form-control" >
					</div>
                    <div class="form-group">
						<label for="Images2">Image 2</label>
						<input id ="Images2" name="Images2" class="form-control" >
					</div>
                    <div class="form-group">
						<label for="Images3">Image 3</label>
						<input id ="Images3" name="Images3" class="form-control" >
					</div>
                    <div class="form-group">
						<label for="Images4">Image 4</label>
						<input id ="Images4" name="Images4" class="form-control" >
					</div>
                    <div class="form-group">
						<label for="Images5">Image 5</label>
						<input id ="Images5" name="Images5" class="form-control" >
					</div>
                    <div class="form-group">
						<label for="Images6">Image 6</label>
						<input id ="Images6" name="Images6" class="form-control" >
					</div>

			
					<button type="submit" class="btn btn-primary">Soumettre</button>
					<a href="adminVoiture.php"><button class="btn btn-primary">Retour</button></a>
				</form>
			</div>
		</div>

        </body>
</html>