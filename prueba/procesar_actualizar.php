<?php
    include("../Modelo/Conexion_BD.php");

    if(isset($_POST['btn_actualizar'])){

        //Poner los datos de los campos en variables
        $id = $_POST['id'];
        $nombre_producto = $_POST['nombre_producto'];
        $descripcion = $_POST['descripcion'];
        $stock = $_POST['stock'];
        $precio = $_POST['precio'];

        //Actualizar los datos con las variables previamente copiadas de los campos
        $actualizar = "UPDATE producto SET nombre_producto='$nombre_producto', 
        descripcion='$descripcion', stock='$stock', precio='$precio' WHERE id_producto='$id'";
        
        $resultado=mysqli_query($conexion_bd, $actualizar);

        if($resultado){
            echo"<script>alert('Se han actualizado los cambios correctamente, actualice la pagina para ver los cambios');
            window.location='edicion.php'; </script>";
        }else{
            echo"<script>alert('No se pudo actualizar los datos');
            window.location='edicion.php'; </script>";
        }
    }
    
?>