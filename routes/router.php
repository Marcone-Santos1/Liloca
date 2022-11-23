<?php

function load(string $controller, string $action)
{

    try {

        $controllerNamespace = "app\\controllers\\{$controller}";

        if (!class_exists($controllerNamespace)) {
            throw new Exception("O controller {$controller} não existe...");
        }

        $controllerIstance = new $controllerNamespace();

        if (!method_exists($controllerIstance, $action)) {
            throw new Exception("O método {$action} não existe...");
        }

        $controllerIstance->$action((object)$_REQUEST);

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$router = [
    'GET' => [
        '/' => fn() => load("HomeController", "index"),
        '/contact' => fn() => load("ContactController", "index"),
        '/sobre' => fn() => load("SobreController", "sobre"),
        '/bolos' => fn() => load("BoloController", "bolos"),
        '/login' => fn() => load('LoginController', 'login'),
        '/cadProduto' => fn() => load('cadProdutoController', 'cadProduto'),
        '/produtos' => fn() => load('produtosController', 'produtos')
    ],
    'POST' => [
        '/contact' => fn() => load("ContactController", "store"),
        '/login' => fn() => load('LoginController', 'signin'),
        '/login' => fn() => load('LoginController', 'signup'),
        '/cadProduto' => fn() => load('cadProdutoController', 'cadProdutoPost'),
        '/updateProduto' => fn() => load('cadProdutoUpdateController', 'cadProdutoUpdate'),
        '/deleteProduto' => fn() => load('cadProdutoDeleteController', 'cadProdutoDelete')        
    ]
];