$(function () {

  var opcoes = [
    'Esquerda',
    'Direita',
    'Ambos'
  ];

  $('.criterio').autocomplete({
    source: opcoes
  });

});
