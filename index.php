<?php
require_once("php/connection.php")
?>

<!doctype html>
<html>
<head>
    <title>Master website</title>
    <meta charset="utf-8">
 
    
    <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/main.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
    
</head>
<body>
   <?php require("php/navbar.php") ?>
  
    
    <div style=" clear: both;"></div>
    
    <div class="container-fluid">
        <div class="row main">


           <?php require("php/categorias.php") ?>

            <div id="videosList">
                <?php require("php/videosList.php") ?> 
            </div>

        </div>
    </div>
    
     <?php require("php/footer.php") ?>
    
    <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
    
    <script>
    
      $(document).ready(function() {
        $('select').material_select();
           $(".button-collapse").sideNav();
          $(".dropdown-button").dropdown();
      });
        
    </script>
    
</body>
    
</html>
