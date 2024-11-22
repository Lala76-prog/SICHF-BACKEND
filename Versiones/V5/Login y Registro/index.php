<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <form action="Php/index.php" class="formulario__login"> 
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico" required>
                    <input type="password" placeholder="Contraseña" required>
                    <button>Entrar</button>
                </form>
                <form action="Php/Registro.php" method="POST" class="formulario__register">
                  <h2>Regístrarse</h2>
                  <input type="text" name="nombre_completo" placeholder="Nombre_completo" required>
                  <input type="email" name="correo" placeholder="correo" required>
                  <input type="text" name="usuario" placeholder="Usuario" required>
                  <input type="password" name="contraseña" placeholder="contraseña" required>
                  <button type="submit">Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>