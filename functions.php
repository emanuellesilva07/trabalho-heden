<?php
    $con;
    //Conexão banco de dados
    function conectarDB($servidor,$usuario,$senha,$banco){
        global $con;
        $con = new mysqli($servidor,$usuario,$senha,$banco);
        if(mysqli_connect_errno()){
            echo "Erro na conexão: ";
            echo mysqli_connect_error();
            echo "<br>";
        }
    }
    //INSERT, UPDATE, DELETE
    function executarSQL($sql){
        global $con;
        $resultado = $con->query($sql);
        return $resultado;
    }
    //SELECT
    function consultarSQL($sql){
        global $con;
        $resultado = $con->query($sql);
        $linhas = array();
        while($dados = $resultado->fetch_array()){
            $linhas[] = $dados;
        }
        return $linhas;
    }
?>