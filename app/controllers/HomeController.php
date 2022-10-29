<?php

namespace app\controllers;

class HomeController
{
    public function index($params)
    {
        var_dump($params->nome);
        return Controller::view("home");
    }
}
