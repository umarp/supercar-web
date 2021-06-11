<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: Index.php");
    exit;
}

// Include config file
require_once "Bdconnect.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT No_Client, NomUtilisateur, MotDePasse FROM client WHERE NomUtilisateur = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $password);
                    if(mysqli_stmt_fetch($stmt)){
                     
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: Index.php");
                  
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    echo $username;
    echo $password;
    // Close connection
    mysqli_close($conn);
}
?>
 



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Login</title>
    <style type="text/css">
        .box{
            margin-top: 3rem;
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
            width: 100%;
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
</div>

    <!--Connectez vous-->
    
        <div class=" container box " >
            <p class="col-12"> Connecter Vous</p>
             
            
        
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="row">
            <div class=" col-md-6 col-sm-12 form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Nom D'utilisateur</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>  

            <div class=" col-md-6 col-sm-12 form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Mot De Passe</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            </div>
        
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
                <a href="Index.php"><button class="btn btn-primary">Retour</button><?php if (empty($_SESSION)) {
                    # code...
                } else{
                session(end); 
                }



                ?></a> 
            </div>
            <p>Vous n'avez pas de compte? <a href="register.php">Cree un compte.</a></p>
            <p><a href="Index.php">Retour a l'acceuille</a></p>
        </form>

        

  </div>
</body>
</html>

