<?php include "./cabecalho.php"; ?>

    <h1>Nossos Produtos</h1>




    <form action="./produtos.php" method="post">
    <div class="fomr-group col-4 offset-4">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control">
    </div>
    <div class="fomr-group col-4 offset-4">
        <label>Valor</label>
        <input type="text" name="valor" class="form-control">
    </div>
    <div class="fomr-group col-4 offset-4">
        <label>QTD_Estoque</label>
        <input type="value" name="qtd_estoque" class="form-control">
    </div>
    <button class="btn btn-dark offset-4">Enviar Dados</button>
    </form>

    <table class="table">
        <tr>
            <td><?php echo $_POST["descricao"]?></td>
            <td><?php echo $_POST["valor"]?></td>
            <td><?php echo $_POST["qtd_estoque"]?></td>
        </tr>
    </table>


<?php include "./rodape.php"; ?>