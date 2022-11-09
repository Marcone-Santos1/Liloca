<?= $this->section('master') ?>

<style>
    body {
        padding: 100px;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .retorno-not-found {
        align-items: center;
        text-align: center;
        font-weight: 600;
        font-size: 26px;
        background-color: 100px;
    }

    span {
        font-size: 50px;
        font-weight: bolder;
    }
    
</style>
<div class="container">
    <span>404 | Not Found</span>    
    <p class="retorno-not-found">
        Para voltar à página inicial
        <a href="/">clique aqui...</a>
    </p>
</div>