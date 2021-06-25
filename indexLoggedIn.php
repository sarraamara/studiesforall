<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
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
                <a href="indexLoggedIn.php" class="nav-item nav-link active">Accueil</a>
                <div class="dropdown">
                <button class="btn nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Fichiers lycée
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  
                  <a class="dropdown-item" href="secondyearFilesLoggedIn.php">Seconde</a>
                  <a class="dropdown-item" href="firstyearFilesLoggedIn.php">Première</a>
                  <a class="dropdown-item" href="lastyearFilesLoggedIn.php">Terminale</a>
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
                  <a class="dropdown-item" href="javaLastLoggedIn.php">Java</a>
                  <a class="dropdown-item" href="pythonLastLoggedIn.php">Python</a>
                </div>
              </div>
                 <a href="conseilsL.php" class="nav-item nav-link">Conseils</a>
                <a href="olympiadesL.php" class="nav-item nav-link">Olympiades</a>
                <a href="donL.php" class="nav-item nav-link">Don</a>
                <a href="joinL.php" class="nav-item nav-link">Nous rejoindre</a>
            </div>
            <div class="navbar-nav ml-auto">
              <form method='post' action="">
              <input type="submit" value="Logout" name="but_logout">
                       </form>
               
            </div>
        </div>
    </nav> 
  </header>

  <div id="main-content" class="container">

    <h2 class="text-left">Nouveautés</h2>
     <?php 
         $result = mysqli_query($dbconn,"SELECT date, label FROM news ORDER BY date DESC");
         while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
           echo '<div>'.date("d/m/Y", strtotime($row[0])).' : '.$row[1].'</div>' ;
          }
          ?>
  </div>

  <footer class="panel-footer">
    <div class="container">
    
    </div>
  </footer>

  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/ajax-utils.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
