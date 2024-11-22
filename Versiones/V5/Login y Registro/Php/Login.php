<?php 
include 'Coneccion.php'; // Asegúrate de que el nombre del archivo sea correcto

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// Consulta para validar el inicio de sesión
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE 
correo='$correo' AND contraseña='$contraseña'");

if (mysqli_num_rows($validar_login) > 0) {
    // El usuario existe, redirigir a la página principal
    header("Location: index.php");
    exit; // Asegúrate de salir después de redirigir
} else {
    // El usuario no existe, mostrar mensaje de error
    echo '
    <script>
        alert("El usuario no existe, por favor verifique los datos.");
        window.location = "index.php"; 
    </script>';

    exit;
}

// Cerrar la conexión (opcional)
mysqli_close($conexion);
?>
