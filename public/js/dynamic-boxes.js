$(function () {

  // note plugins setup
  $.noty.defaults.theme = 'bootstrapTheme';
  $.noty.defaults.timeout = 5000;
  $.noty.defaults.progressBar = true;

  var $mensagemElement = "<div class='row message-item' style='border-bottom: 1px solid #f5f5f5; margin-top: 15px;'>" +
    "                    <div class='col-sm-8'>" +
    "                        <div class='form-group'>" +
    "                            <label>Mensagem</label>" +
    "                            <input required name='mensagemTxt[]' type='text' class='form-control mensagemTxt'>" +
    "                            <input required name='mensagemId[]' type='hidden' class='form-control mensagemId'>" +
    "                        </div>" +
    "                    </div>" +
    "                    <div class='col-sm-2'>" +
    "                        <div class='form-group'>" +
    "                            <label>Ordem</label>" +
    "                            <select required name='mensagemOrdem[]' class='form-control'>" +
    "                                <option value='antes'>Antes</option>" +
    "                                <option value='depois'>Depois</option>" +
    "                            </select>" +
    "                        </div>" +
    "                    </div>" +
    "                    <div class='col-sm-1'>" +
    "                        <div class='form-group'>" +
    "                            <label>Pontos</label>" +
    "                            <select required name='mensagemPontos[]' class='form-control'>" +
    "                                <option value='1'>1</option>" +
    "                                <option value='2'>2</option>" +
    "                                <option value='3'>3</option>" +
    "                                <option value='4'>4</option>" +
    "                                <option value='5'>5</option>" +
    "                                <option value='6'>6</option>" +
    "                                <option value='7'>7</option>" +
    "                                <option value='8'>8</option>" +
    "                                <option value='9'>9</option>" +
    "                                <option value='10'>10</option>" +
    "                                <option value='11'>11</option>" +
    "                                <option value='12'>12</option>" +
    "                                <option value='13'>13</option>" +
    "                            </select>" +
    "                        </div>" +
    "                    </div>" +
    "                    <div class='col-sm-1'>" +
    "                        <div class='form-group'>" +
    "                            <span class='btn btn-danger message-delete' style=\"margin-top: 1.7em;\">" +
    "                                <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>" +
    "                            </span>" +
    "                        </div>" +
    "                    </div>" +
    "                </div>";

  var $messageNothingItem = "<div class='row message-item' id='message-nothing-item' style='border-bottom: 1px solid #f5f5f5; margin-top: 15px;'>" +
    "                           <div class='col-sm-12 bg-warning message-nothing-text'>" +
    "                               Nenhuma mensagem adicionada à esta fase" +
    "                           </div>" +
    "                        </div>";

  function onMessageError(text, type) {
    noty({
      text: String(text),
      type: String(type)
    });
  };

  function onMessageDeleteClick() {

    if ($('.message-item').length !== 0) {
      $(this).parents('.message-item').hide('slow', function () {
        $(this).remove();
      });
    }

    if ($('.message-item').length === 1) {
      $('#message-list').fadeIn('slow', function () {
        $(this).append($messageNothingItem);
      });
    }

  };

  function onMessageAdd() {

    // removing message warning text in the add one message item
    if ($('#message-nothing-item').length === 1) {
      $('#message-nothing-item').hide('slow', function () {
        $(this).remove();
      });
    }

    $('#message-list').append($mensagemElement);

    onActiveselectTwo();

    $('.message-delete').click(onMessageDeleteClick);

    $('.mensagemTxt').keydown(onAutoComplete);

  };

  function onAutoComplete() {
    $(".mensagemTxt").autocomplete({
      source: function (request, response) {
        $.getJSON("http://sparv.app/api/mensagems/?search=" + request.term, function (data) {
          response($.map(data.data, function (value, key) {
            return {
              label: value.mensagemTxt,
              value: value.mensagemTxt,
              messagem_id: value.id
            };
          }));
        });
      },
      select: function (event, ui) {
        $(this).next(".mensagemId").val(ui.item.messagem_id);
      },
      minLength: 2,
      delay: 100
    });
  };

  function onGetCard(number) {
    $.getJSON("http://sparv.app/api/cartas/" + number, function (data) {

      var card = data.data.nome;

      if ($(".card-thumb").length > 0) {
        $('.card-thumb').remove();
      }

      $(".card_image")
        .append("<img src='http://sparv.app/images/cartas/" + card + ".png' class='card-thumb' style='max-height: 200px; border: 1px solid #3C8DBC;'/>");

      $("#carta_id").val(number.toString());
    });
  }

  $('.message-add').click(onMessageAdd);

  $(".random_card").click(function () {
    var cardNumber = Math.floor(Math.random() * (897 - 1) + 1);
    onGetCard(cardNumber);
  });

  $('#carta_id')
    .change(function () {
      var number = $(this).val();
      onGetCard(number);
    })
    .keydown(function (e) {
      // Allow: backspace, delete, tab, escape, enter and .
      if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
        // Allow: Ctrl/cmd+A
        (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
        // Allow: Ctrl/cmd+C
        (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
        // Allow: Ctrl/cmd+X
        (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
      }
      // Ensure that it is a number and stop the keypress
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
      }
    });


});
