<?php
    //include("../Modelo/Conexion_BD.php");
    $conexion_bd = mysqli_connect("localhost", "root", "", "creativa");

    if(isset($_POST['editarBtn'])){

        //Poner los datos de los campos en variables
        $id = $_POST['idProducto'];
        $prodTipo = $_POST['prodTipoSelect'];
        $nombre_producto = $_POST['prodNombreUpdate'];
        $precio = $_POST['prodPrecioUpdate'];
        $stock = $_POST['prodStockUpdate'];
        $descripcion = $_POST['prodDescUpdate'];
        

        //Actualizar los datos con las variables previamente copiadas de los campos
        $actualizar = "UPDATE producto SET nombre_producto='$nombre_producto', 
        descripcion='$descripcion', tipo_prod='$prodTipo', stock='$stock', precio='$precio' WHERE id_producto='$id'";
        
        $resultado=mysqli_query($conexion_bd, $actualizar);

        if($resultado){
            echo"<script>
            window.location='productos.php'; </script>";
        }else{
            echo"<script>alert('No se pudo actualizar los datos');
            window.location='productos.php'; </script>";
        }
    }
    
?>