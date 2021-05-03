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
                  
                  <a class="dropdown-item" href="secondyearFilesLoggedIn.php">Seconde</a>
                  <a class="dropdown-item" href="firstyearFilesLoggedIn.php">Première</a>
                  <a class="dropdown-item active" href="lastyearFilesLoggedIn.php">Terminale</a>
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
                 <a href="loginpage.php" class="nav-item nav-link">Connexion</a>
            </div>
        </div>
    </nav> 
  </header>

  <div id="main-content" class="container">
    <h2 class="text-left">Mathématiques</h2>
    </div>
   <ul>
    <li>Cours(.ZIP/.RAR)</li>
    <li>Exos:</li>
    <li>Corrigés:</li>
    <div><strong>Il faut se connecter pour avoir accés aux corrigés</strong></div></li>
    <li>Enregistrement des cours(Vidéo):</li>
    <strong>Il faut se connecter pour avoir accés aux vidéos</strong>
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
