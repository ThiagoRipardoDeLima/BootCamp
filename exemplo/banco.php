<?php
    include("conexao.php");
?>

<?php 
    
    $nome     = $_POST['nome'];       
    $email    = $_POST['email'];      
    $rga      = $_POST['rga'];        
    $idade    = $_POST['idade'];      
    $endereco = $_POST['endereco'];   
    $tabela   = "aluno";
    
    $sql = "INSERT INTO $tabela VALUES('$nome','$rga','$email',$idade,'$endereco')";
    $resultado = mysqli_query($conexao,$sql);

    echo mysqli_error($conexao);
    
    mysqli_close();

    header('Location: formulario.php');
?>