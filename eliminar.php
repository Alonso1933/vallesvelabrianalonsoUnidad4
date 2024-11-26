<?php
include 'php/conexion.php';
$id = $_REQUEST['id'];

$query = "DELETE FROM almacen WHERE id='$id' ";
$resultado = $cnx->query($query);
if($resultado){
	header("location:reporte.php");
}else{
	echo "Imagen No eliminada";
}
?>