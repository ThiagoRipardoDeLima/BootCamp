<?php
    //Ativa buffer que armazena o conteudo da pagina
    ob_start();
?>

<?php 
    include("conexao.php");
?>

<?php
    $tabela = "aluno";
    $sql = "SELECT * FROM $tabela";
    $resultado = mysqli_query($conexao,$sql);

    echo mysqli_error($conexao);
    
    mysqli_close();
?>


<!-- <div class="row"> -->
<!--     <div class="container"> -->
        <div class="text-center"><h2>Lista de Alunos</h2></div>
        <div class="table-responsive">
            <table class="table table-hover table-condensed table-striped">
                <thead>
                    <tr>
                        <th>RGA</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Idade</th>
                        <th>Endereco</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($resultado)): ?>
                    <tr>
                        <td><?php echo $row['rga'] ?></td>
                        <td><?php echo $row['nome'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['idade'] ?></td>
                        <td><?php echo $row['endereco'] ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

<!-- </div> -->

<?php
    //Recebe o conteudo do buffer
    $content = ob_get_contents();

    //limpa o buffer
    ob_end_clean();

    include("index.php");
?>