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

<!DOCTYPE html>
<html>
<head>
    <title>Aula de PHP</title>
</head>
<body>
<?php if ( $_POST ): ?>

    

    <ul>
        <li>Meu nome é: <?php echo $nome  ?></li>
        <li>Meu email é: <?php echo $email ?></li>
        <li>Meu rga é: <?php echo $rga ?></li>
        <li>Minha idade é: <?php echo $idade ?></li>
        <li>Meu endereço é: <?php echo $endereco ?></li>
    </ul>
<?php else: ?>
    <h1>Não tem nada!</h1>
<?php endif; ?>
</body>
</html>