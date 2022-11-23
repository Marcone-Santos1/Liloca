var fcnListar = (function () {
    $.ajax({
        url: "./views/listar.php",
        type: 'get',
        dataType: 'html'
    })
        .done(function (msg) {
            $("#tblista").html(msg);
        })
});

$(function () {
    fcnListar();
});
