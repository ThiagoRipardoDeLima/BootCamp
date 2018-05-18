<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nosso Primeiro Projeto</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <link rel="stylesheet" href="resources/css/app.css"/>

    </head>
    <body>
        <div class="container-fluid">
            <!-- TOPO -->
            <div class="row">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button"   
                                    class="navbar-toggle collapsed" 
                                    data-toggle="collapse" 
                                    data-target="#navbar" aria-expanded="false">
                                <span class="sr-only">Navegação</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Primeiro Projeto</a>
                        </div>

                        <div class="collapse navbar-collapse " id="navbar">
                            <form class="navbar-form navbar-right">
                                <div class="form-group">
                                    <input type="text" placeholder="Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Senha" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success">Entrar</button>    
                            </form>
                        </div>    

                    </div>
                </nav>
            </div>
            <!-- TOPO -->
           
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 teste">
                    <div class="menu">
                        <div class="item">
                            <span class="glyphicon glyphicon-home"></span>
                            <a onclick = "mudaPagina(this)" data-type="home">Home</a>
                        </div>
                        <div class="item">
                            <span class="glyphicon glyphicon-user"></span>
                            <a onclick = "mudaPagina(this)" data-type="alunos">Alunos</a>
                        </div>
                        <div class="item">
                            <span class="glyphicon glyphicon-education"></span>
                            <a onclick = "mudaPagina(this)" data-type="cursos">Cursos</a>
                        </div>
                        <div class="item">
                            <span class="glyphicon glyphicon-log-out"></span>
                            <a onclick = "mudaPagina(this)" data-type="sair">Sair</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 fadeIn" >
                    <?php echo $content; ?>
                </div>
            </div>
                     
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            function mudaPagina(pagina){
                var page = pagina.getAttribute("data-type");
                page += ".php";
                console.log(page);
                $.ajax({
                    type: 'GET',
                    url: page,

                    success: function(response) {
                        window.location.href = page;
                    },
                });
            }
        </script>
</html> 