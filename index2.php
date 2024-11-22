<?php
    include "perdidos.php";
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
    <div class='form-perdido'>
    <h1>Cadastro de Perdido</h1>
    <form action="perdidos.php" method="post">
        <input name="nome" type="text" placeholder="Digite seu nome" required>
        <input name="data" type="date" placeholder="" required>
        <input name="local" type="text" placeholder="Digite o local" >
        <input name="descricao" type="text" placeholder="Descreva o objeto" required><br><br>
        <button name="salvarp" type="submit">Cadastrar</button>
    </form>
    </div>
</body>
</html>