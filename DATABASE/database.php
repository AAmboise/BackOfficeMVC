<?php
require_once './models/models.php';
require_once 'UserDataBase.php';
require_once 'actuDataBase.php';
function pdo_connect(){ // se connecte a la bdd  // pdo = Php Data Object
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'backofficemvc';

    try{
        return new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $password);
    } 
    catch(PDOException $exception){
        echo $exception->getMessage();
        die('connexion failed');
    }
}

?>