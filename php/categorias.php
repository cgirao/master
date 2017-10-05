


 <div class="col l2 m2 categorias hide-on-small-only">
                <div class="border-white">
                    <div style="background-color:#2C2D2F;">
                     <span class="h2cat">Categorias</span>
                          <hr>
                    </div>
                  
                    <ul>
                       <!-- <li class="catmarg"><a href="videoDetail.php" class="categoria">Exemplo 1</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo 2</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>                       
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li>
                        <li class="catmarg"><a href="" class="categoria">Exemplo aaaaa</a></li> -->
                        
<?php 

$selectCategorias = mysqli_query($conn,"SELECT * FROM categorias where IsActive = true order by descricao ");

while ($row = mysqli_fetch_assoc($selectCategorias)) {
 echo '<li class="catmarg"><a href="'.utf8_encode($row["url"]).'" class="categoria">'.utf8_encode($row["descricao"]).'</a></li>';
}

?>
                        
                    </ul>
                </div>
            </div>