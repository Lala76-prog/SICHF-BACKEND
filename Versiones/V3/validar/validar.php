<?php

include('db.php');

$USUARIO = $_POST['usuario'];
$PASSWORD = $_POST['password'];

// Ajustar la consulta para usar la tabla 'validacion'
$consulta = "SELECT * FROM validacion WHERE usuario = '$USUARIO' AND contraseña = '$PASSWORD'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
    header("location:home.html");
} else {
    include("index.html");
    echo "<h1>ERROR DE AUTENTIFICACION</h1>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>
