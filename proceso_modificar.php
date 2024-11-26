<?php
include 'php/conexion.php';

$id = $_REQUEST['id'];
$descripcion=$_POST['descripcion'];
$precio = $_POST['precio'];
$stock=$_POST['stock'];

$sql = "UPDATE almacen SET descripcion='$descripcion', precio='$precio', stock='$stock' WHERE id='$id' ";
$resultado =  mysqli_query($cnx,$sql);

if($resultado){
	header("location:reporte.php");
}else{
	echo "Imagen No Insertada";
}

?>