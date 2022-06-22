<?php
require_once './models/models.php';
require_once './DATABASE/database.php';
function createUSer(){
    if(!isset($_POST['pseudo'])){
        require_once './views/users/view_form_inscription.php';
    }
    else{
        $user = new User($_POST['pseudo'], $_POST['email'], $_POST['password']);
        echo "user:".$user;
        var_dump($user);
        create($user);
    }
}
function login(){
    require_once './views/users/view_form_connexion.php';
}

?>