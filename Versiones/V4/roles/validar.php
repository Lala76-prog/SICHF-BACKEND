<?php
include('db.php');

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

// Corregir el nombre de la columna contraseña
$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña' AND estado='activo'";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) { // Verificar si la consulta fue exitosa
    $filas = mysqli_fetch_array($resultado);

    if ($filas && isset($filas['id_cargo'])) {
        if ($filas['id_cargo'] == 1) { // Administrador
            header("location:admin.php");
        } elseif ($filas['id_cargo'] == 2) { // Cliente
            header("location:cliente.php");
        } else {
            include("index.html");
            ?>
            <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
            <?php
        }
    } else {
        include("index.html");
        ?>
        <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
        <?php
    }

    mysqli_free_result($resultado);
} else {
    // Manejar el error en caso de fallo en la consulta
    echo "Error en la consulta: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
