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
        <!-- <div class="container">
            <H2>Content</H2>
            <div class="row">
                <div class="col-xs-4 cor2">.col-xs-6</div>
                <div class="col-xs-4 cor2">.col-xs-6</div>
            </div>
        </div> -->

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

            <!-- TABELA -->
           
            <div class="row">
                <div class="col-sm-2 col-md-2 teste">
                    <div class="menu">
                        <div class="item">
                            <span class="glyphicon glyphicon-home"></span>
                            Home
                        </div>
                        <div class="item">
                            <span class="glyphicon glyphicon-user"></span>
                            Alunos
                        </div>
                        <div class="item">
                            <span class="glyphicon glyphicon-education"></span>
                            Cursos
                        </div>
                        <div class="item">
                            <span class="glyphicon glyphicon-log-out"></span>
                            Sair
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-10">
                    <?php include("tabela.php");?>    
                </div>
            </div>
            
            
            <!-- TABELA -->
            
                       
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html> 