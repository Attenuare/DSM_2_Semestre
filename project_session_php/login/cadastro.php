<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvando CPF e Nome</title>
</head>
<body>
    <form action="saving_information.php" method="post">
        <label for="name">Digite o Nome:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="cpf">Digite o CPF:</label>
        <input type="text" id="cpf" name="cpf"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

