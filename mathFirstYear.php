 <?php
include "config.php";
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
                <a href="indexLoggedIn.php" class="nav-item nav-link">Accueil</a>
                <div class="dropdown">
                <button class="btn nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Fichiers lycée
                </button>
                <div class="dropdown-menu active" aria-labelledby="dropdownMenuButton">
                  
                  <a class="dropdown-item" href="secondyearFiles.php">Seconde</a>
                  <a class="dropdown-item active" href="firstyearFiles.php">Première</a>
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
                 <a href="loginpage.php" class="nav-item nav-link">Connexion</a>
            </div>
        </div>
    </nav> 
  </header>

  <div id="main-content" class="container">
    <h2 class="text-center">Mathématiques</h2>
    </div>
   <ul>
    <li>Cours(.ZIP/.RAR):
      <ul>
        <?php 

         $result = mysqli_query($dbconn,"SELECT fileLocation FROM lessons WHERE format='Cours' AND category='MathFYear'");
         while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
           echo '<li><a href="'.$row[0].'" download>'.basename($row[0]).'</a></li>' ;
          }
          ?>
      </ul>
    </li>
    <li>Exos:
      <ul>
        <?php 

         $result = mysqli_query($dbconn,"SELECT fileLocation FROM lessons WHERE format='Exo' AND category='MathFYear'");
         while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
           echo '<li><a href="'.$row[0].'" download>'.basename($row[0]).'</a></li>' ;
          }
          ?>
      </ul>
    </li>
    <li>Corrigés:</li>
    <div><strong>Il faut se connecter pour avoir accès aux corrigés</strong></div></li>
    <li>Enregistrement des cours(Vidéo):</li>
    <strong>Il faut se connecter pour avoir accès aux vidéos</strong>
    </div>
  </ul>

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
