<?php
$title ="back-office Connexion";
$css = '<link rel="stylesheet" href="styleConnexion.css">';
ob_start();
?>


<h2>connexion</h2>
<form method="post">
    <input type="text" name="email" id="email" placeholder="Votre Email">
    <input type="password" name="password" id="password" placeholder="Votre mot de passe">
    <button>se connecter</button>
</form>
<a href="register">Creer un compte</a>

<?php
$content = ob_get_clean();
require_once './views/base.php';
?>