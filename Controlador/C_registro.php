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

            //Comprobar que el correo tenga el formato indicado
            if(preg_match('/^([a-zA-Z]|[0-9]|-|_|.)+@([a-zA-Z])+.([a-zA-Z]+).*([a-zA-Z])+$/', $correo)){
                //Comprobar que el correo no esté ya registrado
                $sqlComprobar = "SELECT correo FROM cliente where correo='$correo'";
                $resultado = mysqli_query($conexion_bd,$sqlComprobar);
                if(mysqli_num_rows($resultado) > 0){
                    ?>
                    <div id = "div_error" class="alert alert-danger" role="alert">
                        Este correo ya está registrado. Inténtalo de nuevo.
                    </div>
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
            else{
                ?>
                <div id = "div_error" class="alert alert-danger" role="alert">
                    Formato de correo incorrecto.
                </div>
                <?php
            }
        }
        //Campos vacios
        else{
            ?>
            <div id = "div_error" class="alert alert-danger" role="alert">
                <h4 class="alert-heading">No se llenó la información necesaria.</h4>
                <p>Uno o más campos fueron enviados vacíos y no fue posible completar el registro.</p>
                <hr>
                <p class="mb-0">Complete el formulario e intente de nuevo.</p>
            </div>
           <?php
        }
    }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#div_error").fadeOut(10000);
    });
</script>