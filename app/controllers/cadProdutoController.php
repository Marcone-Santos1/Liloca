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
        if (!empty($params)) {
            $dataBase = new Data();
            $dataBase->query("INSERT INTO Produtos (Nome, Quantidade, Valor) VALUES ('$params->nome', '$params->qtd', '$params->preco')");
        }

        header('location: /produtos');
        
    }
    
}
