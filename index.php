<?php
    include "achados.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achados e Perdidos</title>
    <link rel='stylesheet' href="style.css">
</head>
<body>
    <div class='form-achado'>
    <h1>Cadastro de Achado</h1>
    <form action="achados.php" method="post">
        <input name="nome" type="text" placeholder="Digite seu nome" required>
        <input name="data" type="date" placeholder="" required>
        <input name="local" type="text" placeholder="Digite o local" required>
        <input name="descricao" type="text" placeholder="Descreva o objeto" required><br><br>
        <button name="salvar" type="submit">Cadastrar</button>
    </form>
    </div>
</body>
</html>