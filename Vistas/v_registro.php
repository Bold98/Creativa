<?php include_once 'header.php' ?>
    <div class="row">
      <form class="formulario" method="POST">
        <h1>Registro de usuarios </h1>
        <div class="container">
          <!--Contenedores para introducir los datos de los usuarios-->
          <div class="input-contenedor">
            <i class="bi bi-person-circle icon"></i>
            <input class="" type="text" name="nombre" placeholder="Nombre(s)">
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
           <p>¿Ya tienes cuenta? <a class="link" href="v_login.php">Iniciar sesión</a></p>
          <?php
          include("../Controlador/C_registro.php");
          ?>
        </div>
      </form>
    </div>
      
  
    
    
    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <?php include_once 'footer.php' ?>