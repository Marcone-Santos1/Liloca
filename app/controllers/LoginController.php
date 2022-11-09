<?php

namespace app\controllers;

class LoginController
{
    public function login($params)
    {
        return Controller::view("login");
    }
}
