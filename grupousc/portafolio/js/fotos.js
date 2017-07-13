$(document).ready(inicio);
var imgContador= -1;
function inicio(){
	for(var i =0;i<=numImg;i++){
		imgContador++;
	
	$("#images").each(function(i) {
        $(this).append("<div class='span4 portfolio-item <?php echo $abejaM ?>'><a  target='_blank' href='../../portafolio/img/portfolio/"+folder+"/"+img+"-"+imgContador+".jpg' class='image' data-lightbox='<?php echo $abejaM ?>' data-title='<?php echo $abejaM ?>' > <img class='imgSmall' src='../../portafolio/img/portfolio/"+folder+"/"+img+"-"+imgContador+".jpg' width='491px' height='491px' alt='<?php echo $abejaM ?>'></a></div>");
    });
	}
}
