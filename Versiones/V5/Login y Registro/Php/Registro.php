<?php
    include 'coneccion.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña']; 
    $contraseña = hash('sha512', $contraseña);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contraseña) 
              VALUES ('$nombre_completo', '$correo', '$usuario', '$contraseña')";
    
    $verficar_correo= mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo'");
    if (mysqli_num_rows($verficar_correo)> 0)
    {
      echo '
        <script>
          alert("Este correo ya está registrado, intenta con otro diferente");
          window.location = "index.php"; 
        </script>';

        exit();
    }

    $verficar_usuario= mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'");
    if (mysqli_num_rows($verficar_usuario)> 0)
    {
      echo '
        <script>
          alert("Este usuario  ya está registrado, intenta con otro usuario diferente");
          window.location = "index.php"; 
        </script>';

        exit();
    }
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
?>
