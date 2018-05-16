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