<!DOCTYPE html>
<head>

</head>

<body>
    <!-- <?php print_r($GLOBALS) ?> -->
    <!-- <?php print_r($_SERVER) ?> -->


    <h1>
        <?php 
        
            echo "Ola Mundo</br>";
            
            $primeiro = 25;
            $segundo = 75;

            if ($primeiro == $segundo){ 
                echo "As variáveis possuem valores iguais";
            }else{
                echo "As variáveis possuem valores diferentes";
            }

            $carteira = (int) 25.2;
            echo "</br>" ;
            echo $carteira;
            $carteira = 25.2;
            echo "</br>" ;
            echo $carteira;

            $a = .75;
            if (is_float($a)){
                echo "</br> A variável <strong>a</strong> é ponto flutuante: ".$a;
            }else{
                echo "</br> A variável <strong>a</strong> não é ponto flutuante";
                $a = (float) $a;
                if(is_float($a)){
                    echo "</br> Agora sim a variável <strong>a</strong> é ponto flutuante: ".$a;
                }
            }?>
    </h1>

    <?php for( $i = 1; $i <= 6; $i ++): ?>
            <h<?php echo $i ?>> "Titulo" </h<?php echo $i?>>
    <?php endfor; ?>

    <?php 
        $vetor = [
            0       => '1',
            'dois'  => '2'
        ];

        foreach( $vetor as $chave => $valor ){
            echo "chave: ". $chave . ' valor: '. $valor . " <br />";
        }
    ?>

    



    <?php  include "codigo.php"; ?>
</body>