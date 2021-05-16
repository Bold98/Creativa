<?php
    //Es para que se conecte a la base de datos
    //include(conexion.php)

    $nombres = $_POST("nombre");
    $apellidos = $_POST("apellido");
    $correo = $_POST("correo");
    $telefono= $_POST("telefono"); 
    $contraseña= $_POST("contraseña");
    if (isset($_POST["registrarBtn"])){

        //Aqui se pone un INSERT en la BD
        $sqlInsertar= "";

        //Conn es la variable que se utiliza para conectar la base de datos
        if (mysqli_query($conn,$sqlInsertar)){
            //Aqui va el mensaje cuando se conecte a la BD
        }else{
            //Aqui va el mensaje si pasa un error al conectar con la BD
        }
    }
?>