<?php
require_once './models/models.php';
require_once './DATABASE/database.php';
function createUSer($pdo){
    if(!isset($_POST['pseudo'])){
        require_once './views/users/view_form_inscription.php';
    }
    else{
        $user = new User($_POST['pseudo'], $_POST['email'], $_POST['password']);
        // echo "user:".$user;
        // var_dump($user);
        // $userDB = new UserDataBase();
        // $userDB->create($pdo, $user);
        UserDataBase::create($pdo, $user);
        require_once './views/users/view_user_create.php';
    }
}
function login(){
    require_once './views/users/view_form_connexion.php';
}

?>