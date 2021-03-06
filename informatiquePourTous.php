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
                  <a class="dropdown-item" href="comingsoon.php">Première année</a>
                  <a class="dropdown-item" href="comingsoon.php">Deuxième année</a>
                  <a class="dropdown-item" href="comingsoon.php">Troisième année</a>
                </div>
              </div>
               <a href="informatiquePourTous.php" class="nav-item nav-link active">Informatique pour tous</a>
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
    <h2 class="text-left">Informatique pour tous</h2>
    <div>Ici vous trouverez tous les fichiers(Exos,corrections,examens,...)</div>
    <div>Matières:</div>
      <ul>
        <li><a href="javaLastYear.php">Java</a></li>
        <li><a href="pythonLastYear.php">Python</a></li>
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
