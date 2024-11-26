<?php
session_start();
$cnx = mysqli_connect("localhost","root","","inventario") or die("Error De Conexion");
//CONEXION REMOTA
//$cnx =mysqli_connect("localhost","id14037275_rafael","4qqghSGsykaf]_Cc","id14037275_mercado") or die("La BD No Existe");


$usuario=$_POST['usuario'];
$password=$_POST['password'];

$sql = "INSERT into admin
(usuario, password) values ('$usuario','$password')";
echo mysqli_query($cnx,$sql);

?>