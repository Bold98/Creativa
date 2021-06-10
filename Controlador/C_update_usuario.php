<?php
$conexion_bd = mysqli_connect("localhost", "root", "", "creativa");
$id = $_SESSION['userId'];
if(isset($_POST['editarBtn'])){
    //Comprobar que llenara los campos
    //if(strlen($_POST['UsuarioNombre']) >= 1 && strlen($_POST['UsuarioApellido']) >= 1){
        //Poner los datos de los campos en variables
        $nombre = $_POST['UsuarioApellido'];
        $apellido = $_POST['UsuarioApellido'];
        $telefono = $_POST['UsuarioPhone'];
        $correo = $_POST['UsuarioMail'];

        //Actualizar los datos con las variables previamente copiadas de los campos
        $actualizar = "UPDATE cliente SET nombre_cliente='$nombre', 
        apellido_cliente='$apellido', no_telefono='$telefono', correo='$correo' WHERE id_cliente='$id'";
        $resultado=mysqli_query($conexion_bd, $actualizar);
        
        if($resultado){
            echo"<script>
            window.location='index.php'; </script>";
        }
    //}
    //Campos vacios
}
?>