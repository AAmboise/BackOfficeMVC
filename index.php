<?php
require_once './controllers/controllers.php';
// ROUTAGE !!
if(!isset($_REQUEST['command'])){
    login();
}
else{
    switch ($_REQUEST['command']) {
        case 'login':
            
        break;
        case 'register':
            createUSer();
        break;
        case 'create-actu':
            # code...
        break;
        case 'list-actu':
            # code...
        break;
        case 'afficher-actu':
            # code...
        break;
        default:
            # code...
        break;
    }
}
?>