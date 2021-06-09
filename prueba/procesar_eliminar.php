<?php
    include ("../Modelo/Conexion_BD.php");

    //Simplemente elimina la fila donde coincida el id
    $id = $_GET['id'];
    $eliminar = "DELETE FROM producto WHERE id_producto = '$id'";

    $resultadoEliminar = mysqli_query($conexion_bd, $eliminar);

    //Alertas de JS que te regresan a la página de edición
    if($resultadoEliminar){
        header("Location: edicion.php");
    }else{
        echo"<script>alert('No se pudo eliminar');
        window.location='edicion.php'; </script>";
    }
?>