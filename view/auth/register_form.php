<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$title = "S'inscrire à TumbFlow";
ob_start();


?>

<h1>Inscription</h1>
<p>Rejoignez la communauté TumbFlow !</p>

<form action="/register" method="POST">
    <div class="form-group">
        <label for="username">Nom d'utilisateur: </label>
        <input type="text" id="username" name="username" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password">Mot de passe: </label>
        <input type="password" id="password" name="password" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password-confirm">Confirmer le mot de passe: </label>
        <input type="password" id="password_confirm" name="password_confirm" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>

<?php
$content = ob_get_contents();
ob_end_clean();
require './index.php';

?>
</body>
</html>
