<?php
$conexion_bd = mysqli_connect("localhost", "root", "", "creativa");
$id = $_SESSION['userId'];
if(isset($_POST['editarBtn'])){
    $nombre = $_POST['UsuarioNombre'];
    $apellido = $_POST['UsuarioApellido'];
    $telefono = $_POST['UsuarioPhone'];
    $correo = $_POST['UsuarioMail'];

    //Actualizar los datos con las variables previamente copiadas de los campos
    $actualizar = "UPDATE cliente SET nombre_cliente='$nombre', 
    apellido_cliente='$apellido', no_telefono='$telefono', 
    correo='$correo' WHERE id_cliente='$id'";
    $resultado=mysqli_query($conexion_bd, $actualizar);
    
    if($resultado){
        $_SESSION['userName'] = $nombre;
        $_SESSION['userLastName'] =  $apellido;
        $_SESSION['userEmail'] =  $correo;
        $_SESSION['userPhone'] =  $telefono;
        echo"<script>
        
        window.location='index.php'; </script>";
    }else{
        echo"<script>alert('No se pudo actualizar los datos');
        window.location='productos.php'; </script>";
    }
}
?>