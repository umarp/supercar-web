<!DOCTYPE html>
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password =$nom = $prenom = $numero = $email= "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST["email"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $numero = $_POST["numero"];

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM client WHERE NomUtilisateur = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";

            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO client (Nom,Prenom,NumeroTelephone,Email,NomUtilisateur,MotDePasse) VALUES (?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssisss", $nom, $prenom, $numero, $email, $username, $password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_nom = $nom;
            $param_prenom = $prenom;
            $param_numero =$numero;
            $param_email= $email;
            echo $param_username
            ,$param_password 
            ,$param_nom 
            ,$param_prenom 
            ,$param_numero 
            ,$param_email;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");

            } else{
                echo "Something went wrong. Please try again latersds.";

            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Login</title>
    <style type="text/css">
        .box{
            margin-top: 2rem;
            margin-bottom: 4%;
            padding: 30px;
            border-right: 6px solid darkred;
            border-top: 6px solid darkred;
            border-left: 6px solid;
            border-left-color: rgba(0,0,0,0.5);
            border-bottom: 6px solid;
            border-bottom-color: rgba(0,0,0,0.5);
            background-color: rgba(255,255,255,0.8);
        }
        body{
            background-image: url(img/login-back.jpeg) ;
             background-size: contain, cover;
            background-position: center;
            background-repeat: no-repeat; 
            background-size: cover;
            font-weight: bold;
            height: 100%;
        }
        p{
            text-align: center;
            font-size: 1.6rem;
        }
    </style>
</head>
<body>

<!-- Login Section -->
<div class="container-fluid">
    <p>
        Bienvenue a Supercar
    </p>

<div class="container-fluid" style="padding: 40px;">
<?php
  $Msg = "";
  if(isset($_GET['error']))
  {
    $Msg = "Veiller entre des bon donneés";
    echo'<div class="alert alert-danger">'.$Msg.'</div>';
  }
  if(isset($_GET['success'])) {
    
    $Msg = "noice";
    echo'<div class="alert alert-success">'.$Msg.'</div>';
  }
?>
</div>
</div>

    <!--Register Section-->
    
        <div class=" container box " >
            <p class="col-12"> Enregistre Vous</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="row">
                    <div class=" col-lg-6 col-md-6 col-sm-12 form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Nom Utilisateur</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>    

                    <div class=" col-lg-6 col-md-6 col-sm-12 form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class=" col-lg-6 col-md-6 col-sm-12 form-group">
                        <label>Nom</label>
                        <input type="text" name="nom" class="form-control" value="<?php echo $nom; ?>">
                    </div> 
                    <div class=" col-lg-6 col-md-6 col-sm-12 form-group">
                        <label>Prenom</label>
                        <input type="text" name="prenom" class="form-control" value="<?php echo $prenom; ?>">
                    </div>     
                </div>
                <div class="row">
                    <div class=" col-lg-6 col-md-6 col-sm-12 form-group">
                        <label>Numero de telephone</label>
                        <input type="number" name="numero" class="form-control" value="<?php echo $numero; ?>">
                    </div>    
                </div>
                <div class="row">
                    <div class=" col-lg-6 col-md-6 col-sm-12 form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label>Mot De Passe</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <div class="col-md-6 col-sm-12 form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                        <label>Confirmer Mot De Passe</label>
                        <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                        <span class="help-block"><?php echo $confirm_password_err; ?></span>
                    </div>
                </div>  
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Soumettre">
                    <input type="reset" class="btn btn-default" value="Effacer">
                </div>
                <p>Avez vous un compte? <a href="login.php">Connecter Vous!</a>.</p>
            </form>

        </div>

  </div>
</body>
</html>

