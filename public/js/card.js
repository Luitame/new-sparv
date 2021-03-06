$(function () {

  domainUrl = location.protocol + "//" + location.hostname;

  function onGetCard(number) {
    $.getJSON(domainUrl + "/api/cartas/" + number, function (data) {
      var card = data.data.nome;
      if ($(".card-thumb").length > 0) {
        $('.card-thumb').fadeOut('slow', function () {
          $(this).remove();
        });
      }
      setTimeout(function () {
        $(".card_image").append("<img src='" + domainUrl + "/images/cartas/" + card + ".png' class='card-thumb' style='max-height: 200px; border: 1px solid #3C8DBC;'/>");
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
