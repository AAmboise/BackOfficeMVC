<?php
require_once './controllers/controllers.php';
// ROUTAGE !!
$path = $_SERVER['REQUEST_URI'];

switch ($path)
{
    case '/login':
        login();
        break;
    case '/register':
            createUSer();
        break;
    case '/create-actu':
            # code...
        break;
    case '/list-actu':
            # code...
        break;
    case '/afficher-actu':
            # code...
        break;
    default:
            # code...
        break;
    }
?>