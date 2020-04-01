<?php
include "includes/menu.php";

#en menu.php hemos asignado a cada enlace una variable con un valor.
#en una variable guardamos el valor que representa la pagina a la que vamos a acceder
$page=$_GET["page"];
switch ($page){
    case 'listado';
    include "./actions/listado.act.php";
    include "./includes/listado.php";
    break;

    case 'autores';
    include "./actions/listado_autor.act.php";
    include "./includes/listado_autores.php";
    break;

    case 'new';
    include "./includes/new-foto.php";
    break;
}

?>