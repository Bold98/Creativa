<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/4ccc09e7b6.js" crossorigin="anonymous"></script>
    <title>Registro</title>
    <link rel="stylesheet" href="../css/estilo.css">
  </head>
  <body>
      <form class="formulario" action="../Controlador/C_registro.php" method="POST">
        <h1>Registro de usuarios </h1>
        <div class="contenedor">
          <!--Contenedores para introducir los datos de los usuarios-->
          <div class="input-contenedor">
            <i class="bi bi-person-circle icon"></i>
            <input type="text" name="nombre" placeholder="Nombre(s)">
          </div>

          <div class="input-contenedor">
            <i class="bi bi-person-circle icon"></i>
            <input type="text" name="apellido" placeholder="Apellidos">
          </div>

          <div class="input-contenedor">
            <i class="bi bi-envelope-fill icon"></i>
            <input type="text" name="correo" placeholder="Correo Eléctronico">
          </div>

          <div class="input-contenedor">
            <i class="bi bi-lock-fill icon "></i>
            <input type="password" name="contrasena" placeholder="Contraseña">
          </div>

          <div class="input-contenedor">
            <i class="bi bi-telephone-fill icon "></i>
            <input type="text" name="telefono" placeholder="Número de telefono">
          </div>

          <!--Palo esta haciendo el login, cambiar el link del html-->
          <input type= "submit" value="Registrate" class="button" name="registrarBtn">
           <p>¿Ya tienes cuenta? <a class="link" href="Login.html">Iniciar sesión</a></p>
          <?php
          include("../Controlador/C_registro.php");
          ?>
        </div>
      </form>
  
    
    
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>