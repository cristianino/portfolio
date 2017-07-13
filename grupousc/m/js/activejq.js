$(document).ready(inicio);

var contador = 1;
function inicio(){
	$(".btMenu").click(onMenu);
	
}
function onMenu(){
	if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	
	
}