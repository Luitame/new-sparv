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

  function onGetCard(number) {
    $.getJSON("http://sparv.app/api/cartas/" + number, function (data) {
      var card = data.data.nome;
      if ($(".card-thumb").length > 0) {
        $('.card-thumb').fadeOut('slow', function () {
          $(this).remove();
        });
      }
      setTimeout(function () {
        $(".card_image").append("<img src='http://sparv.app/images/cartas/" + card + ".png' class='card-thumb' style='max-height: 200px; border: 1px solid #3C8DBC;'/>");
      }, 500);
      $("#carta_id").val(number.toString());
    });
  };

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
