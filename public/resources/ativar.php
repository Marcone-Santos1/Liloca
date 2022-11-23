<?php
    $id = $_GET['idProdutos']
?>

<div class="form-group">
    <p>Tem certeza que deseja excluir esse produto?</p>
    <form action="/deleteProduto" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>