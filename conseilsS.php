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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <a href="studentIndex.php" class="nav-item nav-link">Accueil</a>
                <div class="dropdown">
                <button class="btn nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Fichiers lycée
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  
                  <a class="dropdown-item" href="studentsecondyear.php">Seconde</a>
                  <a class="dropdown-item" href="studentfirstyear.php">Première</a>
                  <a class="dropdown-item" href="studentlastyear.php">Terminale</a>
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
                  <a class="dropdown-item" href="studentjava.php">Java</a>
                  <a class="dropdown-item" href="studentpython.php">Python</a>
                </div>
              </div>
                  <a href="conseilsS.php" class="nav-item nav-link active">Conseils</a>
                <a href="olympiadesS.php" class="nav-item nav-link">Olympiades</a>
                <a href="donS.php" class="nav-item nav-link">Don</a>
                <a href="joinS.php" class="nav-item nav-link">Nous rejoindre</a>
                  
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
    <h2 class="text-center">Conseils</h2>
    <div>
      <ul>
         <?php 

         $result = mysqli_query($dbconn,"SELECT text FROM advices");
         while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
           echo '<li>'.$row[0].'</li>' ;
          }
          ?>
      </ul>
    </div>
 
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
