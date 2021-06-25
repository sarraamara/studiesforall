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
  
<body class="body">
  
    <?php require_once('header.php');?>
    <img src="images/classroom.jpg" class="img-fluid" alt="Responsive image" style="height: 300px;width: 100%">
    
  <div id="main-content" class="container">
    <h2 class="text-center">Nouveautés</h2>
   <?php 
   include "config.php";
         $result = mysqli_query($dbconn,"SELECT date, label FROM news ORDER BY date DESC");
         while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
           echo '<div><img src="images/item.png"><strong>'.date("d/m/Y", strtotime($row[0])).' : </strong>'.$row[1].'</div>' ;
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
