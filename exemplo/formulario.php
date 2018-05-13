
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nosso Primeiro Projeto</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            
            .cor1{
                background-color: #ea0b4e;
            }

            .cor2{
                background-color: #0baaea;
            }
            @-moz-document url-prefix() {
                fieldset { display: table-cell; }
            }

            .table > tbody > tr:hover{
                background-color: cyan;
            }

            .center-block {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            #alerta {
                display: 
            }
        
        </style>

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

            <?php include("tabela.php");?>
            
            <!-- TABELA -->

            <!-- FORMULARIO-->
            <div class="row">
                <div class="container">
                    <div class="text-center"><h2>FORMULARIO</h2></div>
                    <form action="banco.php" method="post">
                        <!-- NOME -->
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome">
                        </div>
                        <!-- EMAIL -->
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                        <!-- RGA-->
                        <div class="form-group">
                            <label>RGA</label>
                            <input type="text" name="rga" placeholder="RGA" class="form-control">
                        </div>
                        <!-- IDADE -->
                        <div class="form-group">
                            <label>Idade</label>
                            <input type="number" name="idade" placeholder="Idade" class="form-control">
                        </div>
                        
                        <!-- ENDERECO -->
                        <div class="form-group">
                            <label>Endereço</label>
                            <input type="text" name="endereco" placeholder="Endereco" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                    </form>
                    
                    
                </div>

            </div>
           
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html> 
