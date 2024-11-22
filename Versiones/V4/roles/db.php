<?php

$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "sichf";

// Conexión sin especificar el puerto (se usará el puerto por defecto 3306)
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Resto de tu código aquí...

?>
