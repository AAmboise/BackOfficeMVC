<?php
$title="Back-office Connexion";
$css= ' <link rel="stylesheet" href="styleConnexion.css">';
ob_start();
?>

<h2>inscription</h2>
<form method="post">
    <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo">
    <input type="text" name="email" id="email" placeholder="Votre email">
    <input type="text" name="password" id="password" placeholder="Votre password">
    <button>s'inscrire</button>
</form>

<?php
$content= ob_get_clean();
require_once './views/base.php';
?>