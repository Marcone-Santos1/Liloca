<?php

namespace app\controllers;

use app\Model\Data;

class produtosController
{
    public function produtos()
    {   
        return Controller::view("produtos");
    }
}