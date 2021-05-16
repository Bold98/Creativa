<?php
    //Es para que se conecte a la base de datos
    //include(conexion.php)
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $consulta= "SELECT * FROM cliente WHERE correo='$correo' and contraseña='$contraseña'";

    $filas=mysqli_num_rows($resultado);

    if($filas){
        //Aqui va inicia la sesion si el usuario existe en la BD
    }else {
        //Aqui mandaria el error en caso de no existir
    }
    ?>
