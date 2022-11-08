<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <?php
    require_once('css/style.php')
    ?>

</head>

<body>
    <header class="header">
        <h1>
            <a href="/" class="title">
                Confeitario Liloca
            </a>
        </h1>
        <nav>
            <ul class="menu">
                <li><a href="sobre">Sobre Nós</a></li>
                <li><a href="bolos">Bolos</a></li>
                <li><a href="contact">Contato</a></li>
                <li><a href="login">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <?= $this->section('content') ?>
    </div>


</body>

</html>