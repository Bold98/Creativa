<?php
    //Es para que se conecte a la base de datos
    include("../Modelo/Conexion_BD.php");

    if($conexion_bd){
        echo "todo correcto";
    }

    

    /*$nombres = $_POST("nombre");
    $apellidos = $_POST("apellido");
    $correo = $_POST("correo");
    $contraseña = $_POST("contraseña");
    $telefono= $_POST('telefono'); */

    if (isset($_POST['registrarBtn'])){
        if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['contrasena']) >= 1 && strlen($_POST['telefono']) >= 1){
            $nombres = trim($_POST["nombre"]);
            $apellidos = trim($_POST["apellido"]);
            $correo = trim($_POST["correo"]);
            $contraseña = trim($_POST["contrasena"]);
            $telefono= trim($_POST["telefono"]);

            //Aqui se pone un INSERT en la BD
            $sqlInsertar = "INSERT INTO cliente(
                nombre_cliente,
                apellido_cliente,
                correo,
                contraseña,
                no_telefono
            )
            VALUES(
                '$nombres',
                '$apellidos',
                '$correo',
                '$contraseña',
                '$telefono'
            )";

            $resultado = mysqli_query($conexion_bd,$sqlInsertar);
            if($resultado){
                ?>
                <h3>todo fino</h3>
                <?php
            }
        }
        else{
            ?>
           <h3>Completa los campos</h3>
           <?php
        }
        //Aqui se pone un INSERT en la BD
        /*$sqlInsertar = "INSERT INTO clientes(
                                        nombre_cliente,
                                        apellido_cliente,
                                        correo,
                                        contraseña,
                                        no_telefono
                                    )
                                    VALUES(
                                        '$nombres',
                                        '$apellidos',
                                        '$correo',
                                        '$contraseña',
                                        '$telefono'
                                    )";*/

        //Conn es la variable que se utiliza para conectar la base de datos
        /*if (mysqli_query($establecer_conexion,$sqlInsertar)){
            echo "funcionó";
        }else{
            //Aqui va el mensaje si pasa un error al conectar con la BD
        }*/
    }
?>