<?php 
$title = "Login";
include_once 'header.php'; ?>
    <div class="">
        <form class="formulario" method="POST">
            <h1>Inicio de sesión</h1>
            <div class=" container">
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
    </div>
    
    <?php include_once 'footer.php' ?>