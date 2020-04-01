<?php
#procesamos los datos de logueo

include "../ficheros/config.php";
include "../ficheros/mysql.php";


$email=$_POST['email'];
$password=md5($_POST['password']);

$conexion=connect($config['database']);

$sql="SELECT `id`, `nombre`, `email`, `password`, `enabled`, `created` 
FROM `users` WHERE `email`='".$email."' AND `password`='".$password."'";


#ejecutamos la funcion que busca y crea una sesion de usuario
executequery($sql,$conexion);


cerrarbd($conexion);

