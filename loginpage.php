<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = pg_escape_string($dbconn,$_POST['txt_uname']);
    $password = pg_escape_string($dbconn,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select * from users where username='".$uname."' and password='".$password."'";
        $result = pg_query($dbconn,$sql_query);
        $count= pg_num_rows($result);
        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: indexLoggedIn.php');
        }else{
            echo "Invalid username and password";
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
                  <a class="dropdown-item" href="#">Première année</a>
                  <a class="dropdown-item" href="#">Deuxième année</a>
                  <a class="dropdown-item" href="#">Troisième année</a>
                </div>
              </div>
                <a href="#" class="nav-item nav-link">Conseils</a>
                <a href="#" class="nav-item nav-link">Olympiades</a>
                <a href="#" class="nav-item nav-link">Don</a>
                <a href="#" class="nav-item nav-link">Nous rejoindre</a>
                
            </div>
            <div class="navbar-nav ml-auto">
                <a href="loginpage.html" class="nav-item nav-link active">Connexion</a>
            </div>
        </div>
    </nav> 
  </header>
  <div class="containerLog">
    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
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

