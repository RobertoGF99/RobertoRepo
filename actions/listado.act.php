<?php

include "ficheros/config.php";
include "ficheros/mysql.php";

$conexion=connect($config['database']);


$sql="SELECT a.*,b.nombre as autor from imagenes as a inner join users as b On a.autor_id=b.id order by a.id desc";
$filas=executedata($sql,$conexion);

cerrarbd($conexion);


?>