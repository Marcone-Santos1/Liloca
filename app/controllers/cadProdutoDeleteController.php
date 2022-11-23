<?php

namespace app\controllers;

use app\Model\Data;

class cadProdutoDeleteController
{

    public function cadProdutoDelete($params)
    {   
        if (!empty($params)) {
            $dataBase = new Data();
            $dataBase->query("DELETE FROM Produtos where idProdutos = '$params->id'");
        }
        header('location: /produtos');
    }
    
}
