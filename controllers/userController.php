<?php
require_once './models/models.php';
require_once './database/database.php';


    function createUser($pdo){
        if (!isset($_POST['pseudo'])){
            require_once './views/users/view_form_inscription.php';
        }
        else{
            $user = new User($_POST['pseudo'],$_POST['email'],$_POST['password'],0);
            UserDataBase::create($pdo,$user);
            require_once './views/users/view_user_create.php';
        }
    }
    
    function login($pdo){
        if ((!isset($_POST['email'])||(!isset($_POST['password'])))){
            require_once './views/users/view_form_connexion.php';
        }
        else{
            $isConnected = UserDataBase::checkLogin($pdo,$_POST['email'],$_POST['password']);
            if ($isConnected){
                $_SESSION['isConnected']=true;
                require_once './views/actus/view_afficher_list_actus.php';
                header('location:list-actu');
            }
            else{
                require_once './views/users/view_form_connexion.php';
            }

        }
    }
?>