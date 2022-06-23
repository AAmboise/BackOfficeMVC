<?php
require_once './models/models.php';
require_once './database/database.php';
require_once './database/ActuDataBase.php';

function creerActu($data){
}

function afficherListeActus($pdo){
    $actus = ActuDataBase::listAll($pdo);
    require_once './views/actus/view_afficher_list_actus.php';
}
function afficherUneActu($numeroActu){

}
?>