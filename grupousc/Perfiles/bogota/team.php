<!DOCTYPE html>
<html lang="es">
<head>
<?php
//Elergir el nombre del Folder seleccionado
function nombreFolder ($valor1){
	$aAbeja= array("", "AndresQ", "AndresRuiz", "AngelCastillo", "baquero", "Danilo", "David", "Deivid", "DiegoFernandoMoreno", "EdwinPinilla", "EdwinSierra", "Fabian", "GonzaloMarquez", "ivan", "jahir", "javier", "JhonHernandez", "JhonRodriguez", "Jose", "JosephAdame", "Julian", "JulianMarin", "LeandroOrtiz", "LuisTovar", "MailioniCortes", "NelsonRendon", "oswaldo");
	$abeja=$aAbeja[$valor1];
	return $abeja;
}
//Elergir el nombre del seleccionado
function nombre($valor){
	switch($valor){
    case "AndresQ":
		$abejaM="Andres Quiñones";
    break;
    case "AndresRuiz":
		$abejaM="Andres Ruiz";
    break;
    case "baquero":
		$abejaM="Kamilo & Pablo Baquero";
    break;
    case "Danilo":
		$abejaM="Danilo Chalarca";
    break;
    case "AngelCastillo":
		$abejaM="Angel Castillo";
    break;
    case "David":
		$abejaM="David Gomez";
    break;
    case "Deivid":
		$abejaM="Deivid Ochoa";
    break;
    case "DiegoFernandoMoreno":
		$abejaM="Diego Fernando Moreno";
    break;
    case "EdwinPinilla":
		$abejaM="Edwin Pinilla";
    break;
    case "EdwinSierra":
		$abejaM="Edwin Sierra";
    break;
	case "Fabian":
		$abejaM="Fabian Rodriguez";
    break;
    case "GonzaloMarquez":
		$abejaM="Gonzalo Marquez";
    break;
    case "ivan":
		$abejaM="Ivan Pinilla";
    break;
    case "jahir":
		$abejaM="Jahir Garzón";
    break;
    case "javier":
		$abejaM="Javier Aguirre";
    break;
    case "JhonHernandez":
		$abejaM="Jhon Hernandez";
    break;
    case "JhonRodriguez":
		$abejaM="Jhon Rodriguez";
    break;
    case "Jose":
		$abejaM="Jose Torres";
    break;
    case "JosephAdame":
		$abejaM="Joseph Adame";
    break;
	//Repetida, igual que Julian Marin
    case "Julian":
		$abejaM="Julian Marin";
    break;
    case "JulianMarin":
		$abejaM="Julian Marin";
    break;
    case "LeandroOrtiz":
		$abejaM="Leandro Ortiz";
    break;
    case "LuisTovar":
		$abejaM="Luis Tovar";
    break;
    case "MailioniCortes":
		$abejaM="Mailioni Cortes";
    break;
    case "NelsonRendon":
		$abejaM="Nelson Rendon";
    break;
    case "oswaldo":
		$abejaM="Oswaldo";
    break;
    default:
		$abejaM="Error404";
}
return $abejaM;
}
function numImg($valor){
	switch($valor){
    case "AndresQ":
		$abejaM=23;
    break;
    case "AndresRuiz":
		$abejaM=16;
    break;
	case "AngelCastillo":
		$abejaM=13;
    break;
    case "baquero":
		$abejaM=10;
    break;
    case "Danilo":
		$abejaM=29;
    break;
    case "David":
		$abejaM=19;
    break;
    case "Deivid":
		$abejaM=15;
    break;
    case "DiegoFernandoMoreno":
		$abejaM=9;
    break;
    case "EdwinPinilla":
		$abejaM=10;
    break;
    case "EdwinSierra":
		$abejaM=11;
    break;
	case "Fabian":
		$abejaM=26;
    break;
    case "GonzaloMarquez":
		$abejaM=5;
    break;
    case "ivan":
		$abejaM=11;
    break;
    case "jahir":
		$abejaM=15;
    break;
    case "javier":
		$abejaM=7;
    break;
    case "JhonHernandez":
		$abejaM=4;
    break;
    case "JhonRodriguez":
		$abejaM=15;
    break;
    case "Jose":
		$abejaM=20;
    break;
    case "JosephAdame":
		$abejaM=7;
    break;
	//Repetida, igual que Julian Marin
    case "Julian":
		$abejaM=7;
    break;
    case "JulianMarin":
		$abejaM=7;
    break;
    case "LeandroOrtiz":
		$abejaM=26;
    break;
    case "LuisTovar":
		$abejaM=8;
    break;
    case "MailioniCortes":
		$abejaM=21;
    break;
    case "NelsonRendon":
		$abejaM=20;
    break;
    case "oswaldo":
		$abejaM=24;
    break;
    default:
		$abejaM="Error404";
}
return $abejaM;
}
function img($valor){
	switch($valor){
    case "AndresQ":
		$abejaM="andres";
    break;
    case "AndresRuiz":
		$abejaM="andres";
    break;
    case "AngelCastillo":
		$abejaM="angel";
    break;
   case "baquero":
		$abejaM="baquero";
    break;
    case "Danilo":
		$abejaM="danilo";
    break;
    case "AngelCastillo":
		$abejaM="angel";
    break;
    case "David":
		$abejaM="david";
    break;
    case "Deivid":
		$abejaM="deivid";
    break;
    case "DiegoFernandoMoreno":
		$abejaM="diego";
    break;
    case "EdwinPinilla":
		$abejaM="edwin";
    break;
    case "EdwinSierra":
		$abejaM="edwin";
    break;
	case "Fabian":
		$abejaM="Fabian";
    break;
    case "GonzaloMarquez":
		$abejaM="gonzalo";
    break;
    case "ivan":
		$abejaM="ivan";
    break;
    case "jahir":
		$abejaM="jahir";
    break;
    case "javier":
		$abejaM="javier";
    break;
    case "JhonHernandez":
		$abejaM="jhon";
    break;
    case "JhonRodriguez":
		$abejaM="jhon";
    break;
    case "Jose":
		$abejaM="Jose";
    break;
    case "JosephAdame":
		$abejaM="joseph";
    break;
	//Repetida, igual que Julian Marin
    case "Julian":
		$abejaM="julian";
    break;
    case "JulianMarin":
		$abejaM="julian";
    break;
    case "LeandroOrtiz":
		$abejaM="leandro";
    break;
    case "LuisTovar":
		$abejaM="luis";
    break;
    case "MailioniCortes":
		$abejaM="mailioni";
    break;
    case "NelsonRendon":
		$abejaM="nelson";
    break;
    case "oswaldo":
		$abejaM="oswaldo";
    break;
    default:
		$abejaM="Error404";
}
return $abejaM;
}
//Elergir 
$valorAbeja= $_GET["abeja"];
//Nombre de la carpeta de la abeja
$folderAbeja=nombreFolder ($valorAbeja);
//Nombre de la abeja (Aparecerá en el titulo y en los metadatos)
$abejaM=nombre($folderAbeja);
//Nombre de la subcarpeta de perfil
$subFolderAbeja="perfil";
//Nombre de la imagen de Header
$portada="Portada.png";
//Número de imagenes
$numImg=numImg($folderAbeja);
//Nombre báse de la imagen
$img=img($folderAbeja);
//Valores respectivos del metadato "robots"
$metaRobotsValor1="Index";
$metaRobotsValor2="Follow";
//Valores del meta description 
$metaDescription ="Unique Style Cars - USC, $abejaM, es un mienmbro del club de taxis y carros particulares modificados que con mas de tres años de fundado participa en la mayoría de eventos de car audio y tuning que se realizan en Bogotá y algunas ciudades del país logrando buenas posiciones en dichos certámenes. El objetivo de este grupo es incentivar a quienes con su talento y creatividad logran que sus taxis y carros particulares sean autos para exhibir y participar en eventos, además de prestar un servicio a la comunidad.";
?>
<!--Metadatos con Title-->
<?php include("includes/metadatos.php"); ?>
<!--Etiquetas tipo link y estilos hubicados en la parte superior-->
<?php include("includes/topStyle.php"); ?>
<!--Script hubicados en la parte superior-->
<?php include("includes/topScript.php"); ?>
</head>

<body class="body-container"  data-spy="scroll" data-offset="0" data-target="#navbar-main">


	
<!-- header -->
<?php include("includes/header.php"); ?>
<!-- end header -->



				
<!-- page content -->
<section class="page portfolio-page-wrapper" id="bg">

	<div class="container">
    	<?php include("includes/menu.php"); ?>
		
			
	 	<!--<?php echo $abejaM ?>-->

		<!-- portoflio  -->
            <div class="portfolio-page" id="images">
				
			
				
				
				


             </div>
         <!-- end portfolio wrapper -->


                <!-- end row -->
                <br>
                <br><br>
                <div id="menuBottom">
					<?php include("includes/menu.php"); ?>
                </div>
      </div>
<!-- end container -->


</section>
<!-- end page content -->
<!-- footer -->
<?php include("includes/footer.php"); ?>
<!--Fin Footer-->
<!--Scripts inferiores-->
<?php include("includes/buttomScript.php"); ?>
<!--Fin Scripts-->



</body>
</html>