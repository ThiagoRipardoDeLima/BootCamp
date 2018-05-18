<?php 
    //ativa buffer que armazena o conteudo principal da pagina
    ob_start();
?>

<canvas id="myChart"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "Alunos Cadastrados",
            backgroundColor: 'rgb(65, 153, 45)',
            borderColor: 'rgb(77, 181, 54)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },

    // Configuration options go here
    options: {
        
    }
});
</script>

<?php
    //content recebe o conteudo do buffer
    $content = ob_get_contents();

    //apos pegar o conteudo, limpo o buffer
    ob_end_clean();

    include("index.php");
?>