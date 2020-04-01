
<?php
include "ficheros/config.php";
include "ficheros/mysql.php";

$conexion=connect($config['database']);

$sql="SELECT * from `users` order by nombre asc";
$filas=executedata($sql,$conexion);

cerrarbd($conexion);


?>