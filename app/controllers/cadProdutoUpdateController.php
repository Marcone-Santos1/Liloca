<?php

namespace app\controllers;

use app\Model\Data;

class cadProdutoUpdateController
{

    public function cadProdutoUpdate($params)
    {   
        if (!empty($params)) {
            $dataBase = new Data();
            $dataBase->query("UPDATE Produtos set Nome = '$params->nome', Quantidade = '$params->qtd', Valor = '$params->preco' where idProdutos = '$params->id'");
        }
        header('location: /produtos');
        
    }
    
}
