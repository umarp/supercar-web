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
		<title>Ajouter Administrateur</title>
	</head>
	<body>
<div class="container d-flex justify-content-center align-items-center">
			<div class="col-lg-6 col-md-12" >
				<p style="font-size: 2em;">Ajouter une Administrateur</p>
				<form name="add" method="post" action="ajouterAdministrateur.php">
					
					<div class="form-group">
						<label for="NomUtilisateur">NomUtilisateur</label>
						<input id="NomUtilisateur" name="NomUtilisateur" class="form-control" >
					</div>
					<div class="form-group">
						<label for="Mdp">Mot De Passe</label>
						<input id="Mdp" name="Mdp" type="password" class="form-control" >
					</div>
					<div class="form-group">
						<label for="Nom">Nom</label>
						<input id="Nom" name="Nom" class="form-control" >
					</div>
					<div class="form-group">
						<label for="Prenom">Prenom</label>
						<input id ="Prenom" name="Prenom" class="form-control" >
					</div>
                    <div class="form-group">
						<label for="Email">Email</label>
						<input id ="Email" name="Email" type="Email" class="form-control" >
					</div>
                    <div class="form-group">
						<label for="Tel">Numero de Telephone</label>
						<input id ="Tel" name="Tel" class="form-control" >
					</div>
			
					<button type="submit" class="btn btn-primary">Soumettre</button>
					
				</form>
                <a href="adminAdministrateur.php"><button class="btn btn-primary">Retour</button></a>
			</div>
		</div>

        </body>
</html>