<?php
include "../ficheros/config.php";
include "../ficheros/mysql.php";

$page=$_GET['page'];



$conexion= connect($config['database']);

if ($page == 'listado'){
    $sql="DELETE from imagenes where id=" . $_GET["id"];
}else{
    $sql="DELETE from users where id=" . $_GET["id"];
}

$return =execute($conexion,$sql);
cerrarbd($conexion);
header ("location:../home.php?page=" . $page);

?>