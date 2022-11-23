<?php

namespace app\controllers;

use app\Model\Data;

class produtosController
{
    public function produtos()
    {   
        $teste = new Data();
        $teste->query("select * from Produtos");
        $result = $teste->result();

        return Controller::view("produtos");
    }
}