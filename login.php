<?php
session_start();
require "functions/loginFunc.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    validateLogin($_POST['user'], $_POST['password']);
    if (isset($_SESSION['logado'])) {
        $_SESSION['username'] = $_POST['user'];
        header('Location: index.php');
        exit;
    } else {
        echo $_SESSION['message'] ?? '';
    }
}
unset($_SESSION['message']);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerador de orçamentos - login</title>
</head>
<body>
<h1>Login do administrador</h1>
<form action="" method="post">
    <label for="user">Usuário:
        <input type="text" name="user" id="user" placeholder="Digite o seu usuário">
    </label>
    <br>
    <label for="password">Senha: </label>
    <input type="password" name="password" id="password" placeholder="Digite a sua senha">
    <br>
    <input type="submit" value="Entrar">
</form>
</body>
</html>
