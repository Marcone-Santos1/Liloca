var fcnListar = (function () {
    $.ajax({
        url: "/resources/listar.php",
        type: 'get',
        dataType: 'html'
    })
        .done(function (msg) {
            $("#root").html(msg);
        })
});

$(function () {
    fcnListar();
});

function fcnEditar(id) {

    $.get("./resources/editar.php?idProdutos=" + id, function (data) {


        bootbox.dialog(
            {
                title: "Editar",
                message: data,
                size: 'large',
            }

        );

    });

}
function fcnExcluir(id) {

    $.get("./resources/ativar.php?idProdutos=" + id, function (data) {


        bootbox.dialog(
            {
                title: "Deletar",
                message: data,
                size: 'large',
            }

        );

    });

}