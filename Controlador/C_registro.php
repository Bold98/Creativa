<?php
    //Es para que se conecte a la base de datos
    include("../Modelo/Conexion_BD.php");


    //if el botón registrarBtn fue presionado
    if (isset($_POST['registrarBtn'])){
       
        //Comprobar que llenara los campos
        if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['contrasena']) >= 1 && strlen($_POST['telefono']) >= 1){
            $nombres = trim($_POST["nombre"]);
            $apellidos = trim($_POST["apellido"]);
            $correo = trim($_POST["correo"]);
            $contraseña = trim($_POST["contrasena"]);
            $telefono= trim($_POST["telefono"]);

            //Comprobar que el correo no esté ya registrado
            $sqlComprobar = "SELECT correo FROM cliente where correo='$correo'";
            $resultado = mysqli_query($conexion_bd,$sqlComprobar);
            if(mysqli_num_rows($resultado) > 0){
                ?>
                <script>
                    alert("Este correo ya está registrado. Inténtalo de nuevo.");
                    window.location = "../Vistas/v_registro.php";
                </script>
                <?php
            }
            else{
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

                //Datos subidos a base de datos
                if($resultado){
                    ?>
                    <script>
                        alert("El registro se realizó con éxito.");
                        window.location = "../index.html";
                    </script>;
                    <?php
                }
            }
            
        }
        //Campos vacios
        else{
            ?>
           <script>
                alert("No llenó la información necesaria. Compruebe los campos.");
                window.location = "../Vistas/v_registro.php";
            </script>;
           <?php
        }
    }
?>