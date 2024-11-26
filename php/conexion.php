<?php
$host = "mysql-container";  // Nombre del servicio definido en docker-compose.yml
$user = "root";             // Usuario de MySQL
$password = "rootpassword"; // Contraseña definida en el docker-compose.yml
$dbname = "inventario";     // Base de datos definida en el dump SQL

// Crear conexión
$cnx = mysqli_connect($host, $user, $password, $dbname);

// Verificar conexión
if (!$cnx) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
