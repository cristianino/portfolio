$(document).foundation()
//Segun el nuevo estandar de javascript function(){} es igual a ()=>{}
//el indicativo de un atributo para jquery es []
$("[data-toggle-dia]").click(function (ev) {
  //Segun el nuevo estandar de javascript data-toggle-dia es igual a toggleDia
  const panel = $(this).data('toggleDia');
  $('#lineup-tabs').foundation('selectTab', panel);
});

//Cerrar el canvas una ves se active un ancla
const $offCanvas = $('#offCanvas');
$offCanvas.find('li').click(function(event) {
  $offCanvas.foundation('close');
});
