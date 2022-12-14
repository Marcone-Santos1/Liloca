<?php

require_once('../../vendor/autoload.php');

use app\Model\Data;

$teste = new Data();
$teste->query("select * from Produtos");
$result = $teste->result();
?>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nome do Produto</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Valor</th>
            <th scope="col">Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($result as $dados) {
        ?>
            <tr class="text-center">
                <td><?= $dados['Nome'] ?></td>
                <td><?= $dados['Quantidade'] ?></td>
                <td><?= $dados['Valor'] ?></td>
                <td>
                    <button class="btn btn-danger" onclick="fcnExcluir(<?= $dados['idProdutos'] ?>)"><i class="fa fa-trash"></i></button>
                    <button class="btn btn-primary" onclick="fcnEditar(<?= $dados['idProdutos'] ?>)"><i class="fa fa-pencil-square-o"></i></button>
                </td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>