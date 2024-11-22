<?php
    include "functions.php";

    conectarDB("localhost","root","","cadastro");

    $nomes = consultarSQL("SELECT * FROM objeto_perdido");
    $datas = consultarSQL("SELECT * FROM objeto_perdido");
    $locals = consultarSQL("SELECT * FROM objeto_perdido");
    $descricaos = consultarSQL("SELECT * FROM objeto_perdido");
    $nome;
    $data;
    $local;
    $descricao;

    if(isset($_POST['salvarp'])){
        $nome = $_POST['nome'];
        $data = $_POST['data'];
        $local = $_POST['local'];
        $descricao = $_POST['descricao'];
        $sql = "INSERT INTO objeto_perdido(nome, data, local, descricao) VALUES('$nome', '$data', '$local', '$descricao')";
        executarSQL($sql);
        header("Location:index2.php");
    }

    if(isset($_GET['id'])){
        global $lembrete;
        $id = $_GET['id'];
        $sql = "SELECT * FROM lembrete WHERE id='$id'";
        $lembrete = consultarSQL($sql);
    }
    if(isset($_POST['atualizar'])){
        $id = $_POST['id'];
        $lembrete = $_POST['lembrete'];
        $sql = "UPDATE lembrete 
                SET lembrete='$lembrete'
                WHERE id='$id'";
        executarSQL($sql);
        header("Location:index.php");        
    }
    if(isset($_GET['confirmaexcluir'])){
        $id = $_GET['confirmaexcluir'];
        $sql = "SELECT * FROM lembrete WHERE id='$id'";
        $lembrete = consultarSQL($sql);
        include "confirma-excluir.php";
    }
    if(isset($_GET['idexcluir'])){
        $id = $_GET['idexcluir'];
        $sql = "DELETE FROM lembrete WHERE id='$id'";
        executarSQL($sql);
        header("Location:index.php");
    }


?>