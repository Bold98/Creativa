<?php
    //Es para que se conecte a la base de datos
    include("../Modelo/Conexion_BD.php");

    //if el botón ingresarBtn fue presionado
    if(isset($_POST['ingresarBtn'])){
        //Comprobar que llenara los campos
        if(strlen($_POST['correo']) >= 1 && strlen($_POST['contraseña'])){
            $correo = $_POST['correo'];
            $contraseña = $_POST['contraseña'];

            //Consulta para encontrar cuenta con contraseña
            $consulta = "SELECT * FROM cliente WHERE correo='$correo' and contraseña='$contraseña'";
            $filas = mysqli_query($conexion_bd,$consulta);
            //if el número de filas encontradas es mayor a 0 (sí existe)
            if(mysqli_num_rows($filas) > 0){
                if($correo=="creativa.detallesp@gmail.com"){
                    ?>
                    <!--De momento la cuenta de administración envía a la página de registro.
                    ya que aún no contamos con interfaz. Esto fue sólo una prubea.
                    Planeo cambiar la forma en que funciona-->
                    <script>
                        window.location = "../Vistas/v_registro.php";
                    </script>;
                    <?php
                }
                else{
                    ?>
                    <script>
                        window.location = "../index.php";
                    </script>;
                    <?php
                }
            }
            //si no se reconoce el correo y la contraseña
            else{
                ?>
                <script>
                    alert("Correo o contraseña incorrecta.");
                    window.location = "../Vistas/v_login.php";
                </script>;
                <?php
            }
        }
        //No llenó uno o varios campos
        else{
            ?>
            <script>
                alert("No llenó la información necesaria. Compruebe los campos.");
                window.location = "../Vistas/v_login.php";
            </script>;
            <?php
        }
    }
?>