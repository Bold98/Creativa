<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/4ccc09e7b6.js" crossorigin="anonymous"></script>
</head>
<body>
    <form class="formulario" method="POST">
        <h1>Inicio de sesión</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="bi bi-envelope-fill icon"></i>
                <input type="text" name="correo" placeholder="Correo Eléctronico">
            </div>
            <div class="input-contenedor">
                <i class="bi bi-lock-fill icon "></i>
                <input type="password" name="contraseña" placeholder="Contraseña">
            </div>

            <input type= "submit" value="Iniciar Sesión" class="button" name="ingresarBtn">
            <p>¿No tienes cuenta? <a class="link" href="v_registro.php">Registrarte</a></p>
            <?php
            include("../Controlador/C_login.php");
            ?>
        </div>
    </form>
</body>
</html>