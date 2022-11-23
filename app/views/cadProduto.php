<?php

$this->layout('master') ?>

<div class="formCadastroProduto">

    <h2 class="title">Cadastro de Produtos</h2>
        <form action="/cadProduto" method="post">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto">
            </div>
            <div class="form-group">
                <label for="nome">Quantidade de Produtos</label>
                <input type="number" class="form-control" id="qtd" name="qtd" placeholder="Nome do produto">
            </div>
            <div class="form-group">
                <label for="preco">Preço do produto</label>
                <input type="number" class="form-control" id="preco" name="preco" placeholder="Preço">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
</div>