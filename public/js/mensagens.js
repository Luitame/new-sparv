$(function () {

  var $messageList = $('#message-list');
  var $mensagemElement = $('#message-element').html();
  var $messageNothingItemTemplate = $("#message-nothing-item-element").html();

  $('.message-add').click(function () {
    if ($('#message-nothing-item').length === 1) {
      $('#message-nothing-item').hide('slow', function () {
        $(this).remove();
      });
    }
    $messageList.append(Mustache.render($mensagemElement));
  });

  $($messageList).on('click', '.message-delete', function () {

    if ($(".message-item").length !== 0) {
      $(this).parents('.message-item').hide('slow', function () {
        $(this).remove();
      });
    }

    if ($(".message-item").length === 1) {
      $messageList.fadeIn('slow', function () {
        $(this).append(Mustache.render($messageNothingItemTemplate));
      });
    }

  });

  $($messageList).on('keydown', '.mensagemTxt', function () {
    $(this).autocomplete({
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
  });

  $('#datatable-message-list').DataTable({
    "ajax": "http://sparv.app/api/mensagems",
    "columns": [
      {"data": "id"},
      {"data": "mensagemTxt"}
    ],
    "language": {
      "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
  });

});
