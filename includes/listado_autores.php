<!--Script que al eliminar un usuario nos mostrará un Cuadro de dialogo para confirmar la eliminacion-->
<script type="text/javascript">
function delete_post(id){
  var ok = confirm("¿seguro que desea eliminar este usuario?");
  if (!ok){
    return false;
  }else{
    location.href="actions/delete.php?page=autores&id=" +id;
  }
}
</script>
<main class="main-content">
<h2>Listado de autores</h2>
<div>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Nombre autor</th>
            <th>email</th>
            <th>Activo</th>
            <th>Creado</th>
            <th>editar</th>
            <th>eliminar</th>
        </tr>
        </thead>
	    <tbody>
              <?php
              if(!empty($filas)){
		        foreach($filas as $fil){
              #comprobamos si es un usuario enabled o no
                    if($fil["enabled"]=="1"){
                        $enabled="<p>Habilitado</p>";
                    }else{
                        $enabled="<p>No Habilitado</p>";
                    }
                    
                    

                echo '
                <tr>
		            <td>'.$fil["id"].'</td>
                    <td>'.$fil["nombre"].'</td>
                    <td>'.$fil["email"].'</td>
                    <td>'.$enabled.'</td>
                    <td>'.$fil["created"].'</td>
                    <td><a href="">editar</a></td>
                    <td><a href="#" OnClick="delete_post('.$fil["id"].')" >eliminar</a></td>
                    </tr>

                ';
              }
            }else{
                echo"<tr> <td>no hay registros</td>";

            }
            ?>
          </tbody>
        </table>
      </div>
</main>