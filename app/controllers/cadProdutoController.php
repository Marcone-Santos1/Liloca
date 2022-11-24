<?php

namespace app\controllers;

use app\Model\Data;

class cadProdutoController
{
    public function cadProduto()
    {
        return Controller::view("cadProduto");
    }

    public function cadProdutoPost($params)
    {

        if (!empty($params->nome && !empty($params->qtd) && !empty($params->preco))) {
            $dataBase = new Data();
            $dataBase->query("INSERT INTO Produtos (Nome, Quantidade, Valor) VALUES ('$params->nome', '$params->qtd', '$params->preco')");
        } else {
            ?>
            <script>
                alert('Por favor, preencha todos os campos');
                window.setTimeout(function() {
                    window.location = 'produtos';
                }, 0);
            </script>
            <?php
        }
    }
}
