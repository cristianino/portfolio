<script type="text/javascript">
 
var folder = "<?php echo $folderAbeja ?>";
var numImg = <?php echo $numImg ?>;
var img = "<?php echo $img ?>";


</script>


<script type="text/javascript" src="../../portafolio/assets/js/modernizr.custom.js"></script>

<!-- jquery -->
<script src="../../portafolio/js/jquery.min.js"></script>
<!--Boostrap-->
<script src="js/bootstrap.min.js"></script>
<!--Imagenes-->
<script>
$(document).ready(inicio);
var imgContador= -1;
function inicio(){
	$fi = new FilesystemIterator(__DIR__, FilesystemIterator::SKIP_DOTS);
printf("There were %d Files", iterator_count($fi));
	for(var i =0;i<=numImg;i++){
		imgContador++;
	
	$("#images").each(function(i) {
        $(this).append("<div class='span4 portfolio-item <?php echo $abejaM ?>'><a  target='_blank' href='../../portafolio/img/portfolio/"+folder+"/"+img+"-"+imgContador+".jpg' class='image' data-lightbox='<?php echo $abejaM ?>' data-title='<?php echo $abejaM ?>' > <img class='imgSmall img-responsive img-thumbnail' src='../../portafolio/img/portfolio/"+folder+"/"+img+"-"+imgContador+".jpg' width='491px' height='491px' alt='<?php echo $abejaM ?>'></a></div>");
    });
	}
}
</script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="assets/js/html5shiv.js"></script>
  <script src="assets/js/respond.min.js"></script>
<![endif]-->
  
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-49490010-2', 'auto');
ga('send', 'pageview');

</script>