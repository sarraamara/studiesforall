<?php

if(isset($_POST['Envoyer'])){
    $to_email = 'studiesforall6@gmail.com'; 
    $subject = 'Contactez nous';
    $body = $_POST['message'];
    $name= $_POST['name'];
    $headers = 'From:'.$name. "\r\n" .
    'Reply-To: '.$_POST['email']. "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    if (mail($to_email, $subject, $body, $headers)) {
        echo '<script>alert("Merci!")</script>';
    } else {
        echo "Email sending failed...";
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
                <a href="join.php" class="nav-item nav-link active">Nous rejoindre</a>>
                
            </div>
            <div class="navbar-nav    ml-auto">
                <a href="loginpage.php" class="nav-item nav-link">Connexion</a>
            </div>
        </div>
    </nav> 
  </header>

  <div id="main-content" class="container">
    <h2>Pour nous rejoindre, veuillez nous contacter.</h2>
    <form method='post' action="">
      <div><label>Nom et prénom :</label></div>
      <div><input name="name" type="text"/></div>
      <div><label>Email:</label></div>
      <div><input name="email" type="text" /></div>
      <div><label>Message:</label></div>
      <div><textarea name="message" cols="70" rows="8" style="overflow:auto;"></textarea></div>
      <div><button type="submit" name="Envoyer">Envoyer Mail</button></div>
     </form>
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
