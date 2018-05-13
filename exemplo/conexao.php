<?php 
    $host = "localhost";

    $banco = "bootcamp";

    $usuario = "root";

    $senha = "123456";

    $conexao = mysqli_connect($host,$usuario,$senha);

    mysqli_select_db($conexao,$banco);

    if (!$conexao){
        die();
    }

?>