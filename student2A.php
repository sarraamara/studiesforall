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
    
        
 <?php require_once('header.php');?>
  <div id="main-content" class="container">
    
    <h2 class="text-center">Anglais</h2>
   <ul>
    <li>Cours(.ZIP/.RAR):
      <ul>
        <?php 

         $result = mysqli_query($dbconn,"SELECT fileLocation FROM lessons WHERE format='Cours' AND category='engSYear'");
         while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
           echo '<li><a href="'.$row[0].'" download>'.basename($row[0]).'</a></li>' ;
          }
          ?>
      </ul>
    </li>
    <li>Exos:
      <ul>
        <?php 

         $result = mysqli_query($dbconn,"SELECT fileLocation FROM lessons WHERE format='Exo' AND category='engSYear'");
         while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            echo '<li><a href="'.$row[0].'" download>'.basename($row[0]).'</a></li>' ;
          }
          ?>
      </ul>
    </li>
    <li>Corrigés:
      <ul>
        <?php 

         $result = mysqli_query($dbconn,"SELECT fileLocation FROM lessons WHERE format='Corrigé' AND category='engSYear'");
         while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            echo '<li><a href="'.$row[0].'" download>'.basename($row[0]).'</a></li>' ;
          }
          ?>
      </ul>
    </li>
    <li>Enregistrement des cours(Vidéo):
       <ul>
        <?php 

         $result = mysqli_query($dbconn,"SELECT fileLocation FROM lessons WHERE format='Enregistrement des c' AND category='engSYear'");
         while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            echo '<li><a href="'.$row[0].'" download>'.basename($row[0]).'</a></li>' ;
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
