<?php

require_once('../../vendor/autoload.php');
use app\Model\Data;

$id = $_GET['idProdutos'];

$teste = new Data();
$teste->query("select * from Produtos where idProdutos = '$id'");
$result = $teste->result();

foreach ($result as $dados) {
?>

<form action="/updateProduto" method="POST" id="editarProduto">

    <input type="hidden" name="id" value="<?= $id ?>">

    <div class="form-group">
        <label for="nome">Nome do Produto</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto" value="<?= $dados['Nome'] ?>">
    </div>
    <div class="form-group">
        <label for="nome">Quantidade de Produtos</label>
        <input type="number" class="form-control" id="qtd" name="qtd" placeholder="Nome do produto" value="<?= $dados['Quantidade'] ?>">
    </div>
    <div class="form-group">
        <label for="preco">Preço do produto</label>
        <input type="number" class="form-control" id="preco" name="preco" placeholder="Preço" value="<?= $dados['Valor'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
}
?>