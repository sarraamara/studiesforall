<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($dbconn,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($dbconn,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select * from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($dbconn,$sql_query);
        $count= mysqli_num_rows($result);
        if($count > 0){
            $_SESSION['uname'] = $uname;
            if($uname=='admin'){
            header('Location: indexLoggedIn.php');  
            }
            else if($uname=='student'){
              header('Location: studentIndex.php');
            }
            
        }else{
            echo '<script>alert("Nom d\'utilisateur et/ou mot de passe sont incorrectes")</script>';
        }

    }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>studiesforall</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/loginPageStyle.css">

  </head>
<body>
  <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a href="#" class="navbar-brand">studiesforall</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link">Accueil</a>
                <div class="dropdown">
                <button class="btn nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Fichiers lycée
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  
                  <a class="dropdown-item" href="secondyearFiles.php">Seconde</a>
                  <a class="dropdown-item" href="firstyearFiles.php">Première</a>
                  <a class="dropdown-item" href="lastyearFiles.php">Terminale</a>
                </div>
              </div>
              <div class="dropdown">
                <button class="btn nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Fichiers collège
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="comingsoon.php">Première année</a>
                  <a class="dropdown-item" href="comingsoon.php">Deuxième année</a>
                  <a class="dropdown-item" href="comingsoon.php">Troisième année</a>
                </div>
              </div>
               <div class="dropdown">
                <button class="btn nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Informatique pour tous
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="javaLastYear.php">Java</a>
                  <a class="dropdown-item" href="pythonLastYear.php">Python</a>
                </div>
              </div>
                <a href="conseils.php" class="nav-item nav-link">Conseils</a>
                <a href="olympiades.php" class="nav-item nav-link">Olympiades</a>
                <a href="don.php" class="nav-item nav-link">Don</a>
                <a href="join.php" class="nav-item nav-link">Nous rejoindre</a>
                
            </div>
            <div class="navbar-nav ml-auto">
                <a href="loginpage.html" class="nav-item nav-link active">Connexion</a>
            </div>
        </div>
    </nav> 
  </header>
  <div class="containerLog">
    <form method="post" action="">
      <div class="login">
            <div class="row">
                <h2>Connexion</h2>
                <div class="col-md-12">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="email" name="txt_uname" placeholder="Username">
                    <br>
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="txt_pwd" placeholder="Password">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="submit" id="register" name="but_submit" value="Se connecter" class="btn btn-outline-success btn-form">
                        </div>
                    </div>
                </div>
    </form>
     
</div>

  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/ajax-utils.js"></script>
  <script src="js/script.js"></script>
</body>
</html>

