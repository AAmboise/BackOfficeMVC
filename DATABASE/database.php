<?php
require_once './models/models.php';
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
function create($pUser){
    $pdo = pdo_connect();
    $sql = "INSERT INTO user (`pseudo`, `email`, `password`, `isAdmin`) VALUES ('".strip_tags($pUser->pseudo)."',
                                                                                '".strip_tags($pUser->email)."',
                                                                                '".strip_tags($pUser->password)."',
                                                                                false)";
    $pdo->exec($sql);
    echo "sql:".$sql;

}
?>