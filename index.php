<?php
require_once './controllers/controllers.php';
$pdo = pdo_connect();
session_start();
// ROUTAGE !!
$path = $_SERVER['REQUEST_URI'];
if(!$path){
    if($_SESSION['isConnected']){
        afficherListeActus($pdo);
    }
    else{
        login($pdo);
    }
}
else{
switch ($path)
{
    case '/login':
        login($pdo);
        break;
    case '/register':
            createUSer($pdo);
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
        login();
        break;
    }
}
?>