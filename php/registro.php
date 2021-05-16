<?php
    //Es para que se conecte a la base de datos
    include("../Modelo/Conexion_BD.php");

    if($conexion_bd){
        echo "todo correcto";
    }

    //if si se presiona el botón "registrarBtn"
    if (isset($_POST['registrarBtn'])){
        //if que comprueba que los campos no estén vacíos para proseguir
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
                <script>
                    alert("El registro se realizo con éxito");
                    window.location = "../Vistas/v_registro.php";
                </script>;
                <?php
            }
        }
        else{
            ?>
           <script>
                alert("Falto llenar alguno de los campos, intente de nuevo");
                window.location = "../Vistas/v_registro.php";
            </script>;
           <?php
        }
    }
?>