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
              <div class="col l12 m12 s12" >
                <div class="col s12 bodyinf ">
                  Exemplo de texto
                </div>
                
                <div class="col l9 m9 s12">
                  <div class="video-container">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/IC-bSbXZBcU" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="col l3 m3 hide-on-small-only border-white" style="height:520px;">
                
                </div>
                 
                <div class="col s12 border-white" style="height:500px;margin-top:1%">
                    <div class="col s12 border-white" style="height:100px;margin-top:1%">
                    </div>
                    
                    
                </div>
              
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
