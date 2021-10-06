<?php
require_once './app/materias.php';
// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if (!empty($_GET['action'])){
    $action = $_GET['action'];
}
else {
    $action = 'listar';
}

$params = explode('/', $action);

// TABLA DE RUTEO
// listar -> lista todas las tareas
// insertar -> inserta una tarea (recibe el POST)

switch ($params[0]) {
    case 'listar':
        // listar todas las tareas de la DB
        showMaterias();
        break;
    case 'materias':
        addMaterias();
        break;
     case 'mostrar':
        showCarrera($params[1]);
        break;
    case 'borrar':
        deleteMaterias($params[1]);
        break;   
    case 'buscador':
        busMaterias();
            break; 
    default:
        echo '404 - Página no encontrada';
        break;
}