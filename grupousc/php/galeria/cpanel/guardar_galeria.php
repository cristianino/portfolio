<?php
$cnx = mysqli_connect( 'localhost', 'root', '', 'dv_video' );
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$consulta=<<<SQL
INSERT INTO
	GALERIAS
SET
	TITULO='$titulo',
	DESCRIPCION='$descripcion',
	FECHA_ALTA = NOW()
	
SQL;
mysqli_query($cnx, $consulta);
header("Location: index.php");
?>