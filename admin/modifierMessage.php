	<!DOCTYPE html>
	<html>
	<head>
	<title>Modifier</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	</head>
	<body>
	<form action="admin.php" method="post">
	<?php

	$id = $_GET ['id'];

	$conn = mysqli_connect("localhost","root","","supercar");
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT id, Nom, Email, Sujet, Message  FROM contacternous WHERE id=$id";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result) 

	?>
					<?php
	      				if(isset($_POST['nw_update'])){
       						 echo("You clicked nw_update!");
							
			

						mysqli_close($conn);
					}

						   
   					 	else {
    					echo" dhur";
    					}
					?>

	<div class="container">
		<h1 id="contactez-nous">Contactez Nous</h1>
		<hr>
		<form action="<?php echo $_SERVER(PHP_SELF); ?>" method="POST"    >
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="Uname" placeholder="<?php echo $row["Nom"];?>"></input>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="Email" placeholder="<?php echo $row["Email"];?>"></input>
					</div>
					<div class="form-group">
						<label>Sujet</label>
						<input type="text" name="Sujet" placeholder="<?php echo $row["Sujet"];?>"></input>
					</div>

				</div>
				<div class="col-lg-4 col-md-12">
					<div class="form-group">
						<label>Message</label>
						<textarea class="form-control"rows="10" cols="35" name="msg" placeholder="<?php echo $row["Message"];?>"></textarea>
					</div>
				</div>
				<div class="col-md-12 col-lg-4">
					<div class="form-group">
				<button class="btn btn-primary btn-block" name="btn-send">Send</button>
					<input type="button" id="nw_update" value="NW_Update"/>

			</div>		
				</div>
				
			</div>


	</div>
	</form>


	</body>
	</html>




