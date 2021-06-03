<?php
    //Es para que se conecte a la base de datos
    include("../Modelo/Conexion_BD.php");
     if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    //if el botón ingresarBtn fue presionado
    if(isset($_POST['ingresarBtn'])){
        //Comprobar que llenara los campos
        if(strlen($_POST['correo']) >= 1 && strlen($_POST['contraseña'])){
            $correo = $_POST['correo'];
            $contraseña = $_POST['contraseña'];

            //Comprobando que sea el formato correcto de correo
            if(preg_match('/^([a-zA-Z]|[0-9]|-|_|.)+@([a-zA-Z])+.([a-zA-Z]+).*([a-zA-Z])+$/', $correo)){
                //Consulta para encontrar cuenta con contraseña
                $consulta = "SELECT * FROM cliente WHERE correo='$correo' and contraseña='$contraseña'";
                $filas = mysqli_query($conexion_bd,$consulta);
                $mostrar = mysqli_fetch_array($filas);
                //if el número de filas encontradas es mayor a 0 (sí existe)
                if(mysqli_num_rows($filas) > 0){
                    if($correo=="creativa.detallesp@gmail.com"){
                        
                        $_SESSION['userId'] = $mostrar['id_cliente'];
                        $_SESSION['userName'] = $mostrar['nombre_cliente'];
                        $_SESSION['userLastName'] =  $mostrar['apellido_cliente'];
                        $_SESSION['userEmail'] =  $mostrar['correo'];
                        $_SESSION['userPhone'] =  $mostrar['no_telefono'];
                        $_SESSION['userRole'] =  $mostrar['rol'];
                        ?>
                        <!--De momento la cuenta de administración envía a la página de registro.
                        ya que aún no contamos con interfaz. Esto fue sólo una prubea.
                        Planeo cambiar la forma en que funciona-->
                        <script>
                            window.location = "../index.php";
                        </script>
                        <?php
                    }
                    else{
                        $_SESSION['userId'] = $mostrar['id_cliente'];
                        $_SESSION['userName'] = $mostrar['nombre_cliente'];
                        $_SESSION['userLastName'] =  $mostrar['apellido_cliente'];
                        $_SESSION['userEmail'] =  $mostrar['correo'];
                        $_SESSION['userPhone'] =  $mostrar['no_telefono'];
                        $_SESSION['userRole'] =  $mostrar['rol'];
                        ?>
                        <script>
                            window.location = "../index.php";
                        </script>
                        <?php
                    }
                }
                //si no se reconoce el correo y la contraseña
                else{
                    ?>
                    <div id = "div_error" class="alert alert-danger" role="alert">
                        Correo o contraseña incorrecta.
                    </div>
                    <?php
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
        //No llenó uno o varios campos
        else{
            ?>
            <div id = "div_error" class="alert alert-danger" role="alert">
                <h4 class="alert-heading">No se llenó la información necesaria.</h4>
                <p>Uno o más campos fueron enviados vacíos y no se pudo ingresar al sitio.</p>
                <hr>
                <p class="mb-0">Complete el formulario e intente de nuevo.</p>
            </div>
            <!--<script>
                alert("No llenó la información necesaria. Compruebe los campos.");
                window.location = "../Vistas/v_login.php";
            </script>;-->
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