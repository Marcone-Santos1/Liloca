<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                <li><a href="produtos">Produtos</a></li>
                <li><a href="contact">Contato</a></li>
                <li><a href="login">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <?= $this->section('content') ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.3/bootbox.min.js" integrity="sha512-U3Q2T60uOxOgtAmm9VEtC3SKGt9ucRbvZ+U3ac/wtvNC+K21Id2dNHzRUC7Z4Rs6dzqgXKr+pCRxx5CyOsnUzg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.3/bootbox.js" integrity="sha512-OMYI9iOelB12PWdWHfU6XouDuUvszFZEywO4W9KFJGP3aj/nP5UECd5ctMqRm+/9Qk3oOFqhbXVi6cJAqlAUuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <script src="https://cdn.jsdelivr.net/gh/Marcone-Santos1/Liloca@master/app/views/script/index.js"></script> -->

    <script>
        var fcnListar = (function() {
            $.ajax({
                    url: "https://cdn.jsdelivr.net/gh/Marcone-Santos1/Liloca@master/app/views/listar.php",
                    type: 'get',
                    dataType: 'html'
                })
                .done(function(msg) {
                    $("#root").html(msg);
                    console.log(msg)
                })
        });

        $(function() {
            fcnListar();
        });
    </script>

</body>

</html>