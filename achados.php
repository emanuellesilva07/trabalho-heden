<?php
    include "functions.php";

    conectarDB("localhost","root","","cadastro");

    $nomes = consultarSQL("SELECT * FROM objetos_achados");
    $nome;
    $data;
    $datas = consultarSQL("SELECT * FROM objetos_achados");
    $local;
    $locals = consultarSQL("SELECT * FROM objetos_achados");
    $descricao;
    $descricaos = consultarSQL("SELECT * FROM objetos_achados");


    if(isset($_POST['salvar'])){
        $nome = $_POST['nome'];
        $data = $_POST['data'];
        $local = $_POST['local'];
        $descricao = $_POST['descricao'];
        $sql = "INSERT INTO objetos_achados(nome, data, local, descricao) VALUES('$nome', '$data', '$local', '$descricao')";
        executarSQL($sql);
        header("Location:index.php");
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