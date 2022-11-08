<?php

namespace app\controllers;

class ContactController
{
    public function index()
    {
        Controller::view('contact');
    }

    public function store($params)
    {
        Controller::view('store');
    }

}
