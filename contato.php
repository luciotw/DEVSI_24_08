<?php include "./cabecalho.php"; ?>

<?php 
    if (!empty($_POST) && isset($_POST)) {
        if ( empty($_POST["email"])) {
            ?>
                <div class="alert alert-danger">
                    O Campo email deve ser preenchido 
                </div>
            <?php
        }elseif ( empty($_POST["nome"])) {
            ?>
                <div class="alert alert-danger">
                    O Campo nome deve ser preenchido 
                </div>
            <?php
        }else {
            ?>
            <div class="alert alert-success">
                    Sua Reclmação foi enviada com sucesso
            </div>
        <?php
        }
    }else {
        //echo "Não veio informação do Post";
    }

?>

<h1>Nosso contato</h1>

<form action="./contato.php" method="post">
    <div class="fomr-group col-4 offset-4">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="fomr-group col-4 offset-4">
        <label>Email</label>
        <input type="email" require name="email" class="form-control">
    </div>
    <textarea class="form-control" name="obs" id="" cols="30" rows="10"></textarea>
    <button class="btn btn-dark offset-4">Enviar Dados</button>
</form>

<?php include "./rodape.php"; ?>