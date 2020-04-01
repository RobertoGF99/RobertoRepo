

<!--Script que al eliminar una imagen nos mostrará un Cuadro de dialogo para confirmar la eliminacion-->
<script type="text/javascript">
function delete_post(id){
  var ok = confirm("¿seguro que desea eliminar esta foto?");
  if (!ok){
    return false;
  }else{
    location.href="actions/delete.php?page=listado&id=" +id;
  }
}
</script>
<!--Representamos los datos de la base de datos en una tabla-->
  <main class="main-content">
        <h2>listado de fotos</h2>
        <div>
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre autor</th>
              <th>fichero</th>
              <th>Creado</th>
              <th>editar</th>
              <th>eliminar</th>
            </tr>
          </thead>
	        <tbody>
            <?php
            if(!empty($filas)){
		          foreach($filas as $fil){
                echo'
                <tr>
		              <td>'.$fil["id"].'</td>
                  <td>'.$fil["autor"].'</td>
                  <td>'.$fil["nombre"].'</td>
                  <td>'.$fil["created"].'</td>
                  <td><a href="">editar</a></td>
                  <td><a href="#" OnClick="delete_post('.$fil["id"].')" >eliminar</a></td>
                
                </tr>
                ';
              }
              #<td><a href="#" OnClick="delete_post('.$fil["id"].')" >eliminar</a></td>
              #ejecutara el script para eliminar la foto pasando como parametro el id de la imagen
            }else{

              echo"<tr> <td>no hay registros</td>";
            }
            ?>
          </tbody>
        </table>
      </div>


      
        
        

  </main>
