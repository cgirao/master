<div class="col l10 m10 s12" >
    <div class="col s12 bodyinf ">
      Exemplo de texto
    </div>


    <?php 

        $selectCategorias = mysqli_query($conn,"SELECT * FROM videoDetails ");

        while ($row = mysqli_fetch_assoc($selectCategorias)) {
            
            $percentagem= number_format((float)(($row["views"] / ($row["views"]+$row["dislikes"]))*100), 2, '.', '');
            
         echo '<div class="col l3 m6 s12 contentVidInfo">
            <div class="border-white">
            <a href="">
                <img src="'.utf8_encode($row["foto1Url"]).'" height="175" width="100%">
            </a>
            <hr>
             <a href="" class="titulo-video">'.substr(utf8_encode($row["titulo"]),0,29).'...</a>
             <br>
             <samp class="vistos-video">'.utf8_encode($row["views"]).' views '.$percentagem.'%</samp>

             </div>
         </div>';
        }

    ?>
      



     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

     <div class="col l3 m6 s12 contentVidInfo">
        <div class="border-white">
        <a href="">
            <img src="img/default.jpg" height="175" width="100%">
        </a>
        <hr>
         <a href="" class="titulo-video">Exemplo de Titulo </a>
         <br>
         <samp class="vistos-video">24 views 0%</samp>

         </div>
      </div> 

      <div class="col s12 center-align" >
          <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
          </ul>
      </div>
  </div>