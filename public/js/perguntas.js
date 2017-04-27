$(function () {

  var $perguntaList = $('#pergunta-list');
  var $peguntaElement = $('#pergunta-element').html();
  var $perguntaNothingItemTemplate = $("#pergunta-nothing-item-element").html();

  $('.pergunta-add').click(function () {
    if ($('#pergunta-nothing-item').length === 1) {
      $('#pergunta-nothing-item').hide('slow', function () {
        $(this).remove();
      });
    }
    $perguntaList.append(Mustache.render($peguntaElement));
  });

  $($perguntaList).on('click', '.pergunta-delete', function () {

    if ($(".pergunta-item").length !== 0) {
      $(this).parents('.pergunta-item').hide('slow', function () {
        $(this).remove();
      });
    }

    if ($(".pergunta-item").length === 1) {
      $perguntaList.fadeIn('slow', function () {
        $(this).append(Mustache.render($perguntaNothingItemTemplate));
      });
    }

  });

  $($perguntaList).on('keydown', '.perguntaTxt', function () {
    $(this).autocomplete({
      source: function (request, response) {
        $.getJSON("http://sparv.app/api/perguntas/?search=" + request.term, function (data) {
          response($.map(data.data, function (value, key) {
            return {
              label: value.perguntaTxt,
              value: value.perguntaTxt,
              pergunta_id: value.id
            };
          }));
        });
      },
      select: function (event, ui) {
        $(this).next(".perguntaId").val(ui.item.pergunta_id);
      },
      minLength: 2,
      delay: 100
    });
  });

});
