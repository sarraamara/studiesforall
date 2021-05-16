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
if(isset($_POST['Ajouter'])){
  $selectedValue=$_POST['format'];
  $category="javaLastYear";
  $target_dir = "uploads/".$category."/".$selectedValue."/";
   $location = $target_dir . basename($_FILES["fileToUpload"]["name"]);
   $label= htmlspecialchars($_POST['news']);
   if($label=="..." || $label=='' || (trim($label, ' ') == '')){
   echo '<script>alert("Veuillez remplir le champ nouveauté!")</script>';
   }
   else if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $location)){
    $date=date("y-m-d");
    $sql="INSERT INTO news(label,date) VALUES ('".$label."','".$date."')";
    echo $result = mysqli_query($dbconn,$sql);
    $location = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $sql="INSERT INTO lessons(format,category,fileLocation) VALUES 
    ('".$selectedValue."','".$category."','".$location."')";
    echo $result = mysqli_query($dbconn,$sql);
    header('Location: javaLastLoggedIn.php');
   }
   else{
    echo '<script>alert("Veuillez choisir un fichier!")</script>';     
   }
}
if(isset($_POST['Supprimer'])){
 $location=$_POST['Supprimer'];
 $sql="DELETE FROM lessons WHERE fileLocation='".$location."' AND category='javaLastYear'";
  echo $result = mysqli_query($dbconn,$sql);
 header('Location: mathLastLoggedIn.php');
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
                <a href="indexLoggedIn.php" class="nav-item nav-link">Accueil</a>
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
                  <a class="dropdown-item" href="#">Première année</a>
                  <a class="dropdown-item" href="#">Deuxième année</a>
                  <a class="dropdown-item" href="#">Troisième année</a>
                </div>
              </div>
              <div class="dropdown">
                <button class="btn nav-link dropdown-toggle active" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Informatique pour tous
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item active" href="javaLastLoggedIn.php">Java</a>
                  <a class="dropdown-item" href="pythonLastLoggedIn.php">Python</a>
                </div>
              </div>
                <a href="#" class="nav-item nav-link">Conseils</a>
                <a href="#" class="nav-item nav-link">Olympiades</a>
                <a href="#" class="nav-item nav-link">Don</a>
                <a href="#" class="nav-item nav-link">Nous rejoindre</a>
                  
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
     <form method='post' action="" enctype="multipart/form-data">
    <h2 class="text-center">Java</h2>

    <div class="upload-files"> 
     
       <h3 class="text-center">Ajout de fichiers</h3>
       <div><input type="file" name="fileToUpload" id="myFile"></div>
      <div>Indiquer le format:</div>
      
      <input type="radio" id="Cours" name="format" value="Cours"
             checked>
      <label for="Cours">Cours</label>
      <input type="radio" id="Enregistrement des cours(Teams)" name="format" value="Enregistrement des cours(Teams)">
      <label for="Enregistrement des cours(Teams)">Enregistrement des cours(Vidéo)</label>
      <input type="radio" id="Exo" name="format" value="Exo">
      <label for="Exo">Exo</label>
      <input type="radio" id="Corrigé" name="format" value="Corrigé">
      <label for="Corrigé">Corrigé</label>
        <div>Nouveauté: décrivez ce que vous allez rajouter</div>
      <textarea name="news" cols="50" rows="5" style="overflow:auto;">...</textarea>
      <div class="text-right"><button type="submit" name="Ajouter">Ajouter</button></div>
    
    </div>
    </form>
   <p id="demo"></p>
   <ul>
    <li>Cours(.ZIP/.RAR):
      <ul>
        <?php 

         $result = mysqli_query($dbconn,"SELECT fileLocation FROM lessons WHERE format='Cours' AND category='javaLastYear'");
         while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
           echo '<li><form method=\'post\' action=""><a href="'.$row[0].'" download>'.basename($row[0]).'</a><button class="btn" type="submit" name="Supprimer" value="'.$row[0].'"><i class="fa fa-trash"></i></button></form></li>' ;
          }
          ?>
      </ul>
    </li>
    <li>Exos:
      <ul>
        <?php 

         $result = mysqli_query($dbconn,"SELECT fileLocation FROM lessons WHERE format='Exo' AND category='javaLastYear'");
         while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
           echo '<li><form method=\'post\' action=""><a href="'.$row[0].'" download>'.basename($row[0]).'</a><button class="btn" type="submit" name="Supprimer" value="'.$row[0].'"><i class="fa fa-trash"></i></button></form></li>' ;
          }
          ?>
      </ul>
    </li>
    <li>Corrigés:
      <ul>
        <?php 

         $result = mysqli_query($dbconn,"SELECT fileLocation FROM lessons WHERE format='Corrigé' AND category='javaLastYear'");
         while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
           echo '<li><form method=\'post\' action=""><a href="'.$row[0].'" download>'.basename($row[0]).'</a><button class="btn" type="submit" name="Supprimer" value="'.$row[0].'"><i class="fa fa-trash"></i></button></form></li>' ;
          }
          ?>
      </ul>
    </li>
    <li>Enregistrement des cours(Vidéo):
       <ul>
        <?php 

         $result = mysqli_query($dbconn,"SELECT fileLocation FROM lessons WHERE format='Enregistrement des c' AND category='javaLastYear'");
         while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
           echo '<li><form method=\'post\' action=""><a href="'.$row[0].'" download>'.basename($row[0]).'</a><button class="btn" type="submit" name="Supprimer" value="'.$row[0].'"><i class="fa fa-trash"></i></button></form></li>' ;
          }
          ?>
      </ul>
    </li>
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
