<?php

#formulario subir foto

include "ficheros/config.php";
include "ficheros/mysql.php";


$conexion=connect($config['database']);
$sql="SELECT `id`,`nombre` FROM `users` ORDER BY nombre ASC" ;
$filas=executedata($sql,$conexion);

?>

<form class="form-horizontal" action="actions/new-foto.act.php" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Subir Foto</legend>

<!-- Select Basic -->

<div class="form-group">
  <label class="col-md-4 control-label" for="autor_id">Autor</label>
  <div class="col-md-4">
    <select id="autor_id" name="autor_id" class="form-control" size="1">
        <?php
        #mostramos los autores posibles de las fotos a subir
        #solo pueden ser usuarios registrados
        foreach($filas as  $fil){
            echo "<option value= ".$fil["id"].">".$fil["nombre"]."</option>";
        }


        ?>
    </select>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Titulo Imagen</label>  
  <div class="col-md-6">
  <input id="nombre" name="nombre" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>


<!-- File Button --> 

<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <input id="fichero" name="fichero" class="input-file" type="file">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="comentario">Descripcion</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="enviar" name="enviar" class="btn btn-success">Enviar</button>
  </div>
</div>

</fieldset>
</form>
