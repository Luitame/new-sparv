$(function () {

    var $mensagemElement =
        "<div class='row mensagem-box'>" +
        "<div class='col-sm-8'>" +
        "<input name='mensagemId[]' type='hidden'>" +
        "<div class='form-group'>" +
        "<label>Mensagem</label>" +
        "<input name='mensagemTxt[]' type='text' class='form-control'>" +
        "</div>" +
        "</div>" +
        "<div class='col-sm-2'>" +
        "<div class='form-group'>" +
        "<label>Ordem</label>" +
        "<select name='mensagemOrdem[]' class='form-control'>" +
        "<option value='antes'>Antes</option>" +
        "<option value='depois'>Depois</option>" +
        "</select>" +
        "</div>" +
        "</div>" +
        "<div class='col-sm-1'>" +
        "<div class='form-group'>" +
        "<label>Pontos</label>" +
        "<select name='pontos' class='form-control'><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option></select>" +
        "</div>" +
        "</div>" +
        "<div class='col-sm-1'>" +
        "<div class='form-group'>" +
        "<label></label>" +
        "<span class='btn btn-danger mensagem-del'>Remover</span>" +
        "</div>" +
        "</div>" +
        "<hr>" +
        "</div>";

    $.noty.defaults.theme = 'bootstrapTheme';
    $.noty.defaults.timeout = 5000;
    $.noty.defaults.progressBar = true;

    function messageError() {
        noty({
            text: 'NOTY - a jquery notification library!',
            type: 'error',
        });
    };

    function onMessageDeleteClick() {
        alert('Excluir');
        $('.mensagem-del').first('.mensagem-box').css('background', 'red');
    }

    function messageAdd() {
        $('#mensagem-wrapper').append($mensagemElement);
        $('.mensagem-del').click(onMessageDeleteClick);
    };

    messageAdd();

    $('.mensagem-add').click(function () {
        messageAdd();
    });

});