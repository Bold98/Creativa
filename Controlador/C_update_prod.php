<?php
    //include("../Modelo/Conexion_BD.php");
    $conexion_bd = mysqli_connect("localhost", "root", "", "creativa");

    if(isset($_POST['editarBtn'])){
        //Comprobar que llenara los campos
        if(strlen($_POST['prodNombreUpdate']) >= 1 &&
        strlen($_POST['prodPrecioUpdate']) >= 1){
            //Poner los datos de los campos en variables
            $id = $_POST['idProducto'];
            $prodTipo = $_POST['prodTipoSelect'];
            $nombre_producto = $_POST['prodNombreUpdate'];
            $precio = $_POST['prodPrecioUpdate'];
            $stock = $_POST['prodStockUpdate'];
            $descripcion = $_POST['prodDescUpdate'];
            //revisar tamaño de archivo
            $revisar = getimagesize($_FILES["prodImagenFile"]["tmp_name"]);

            if($revisar !== false){
                $image = $_FILES['prodImagenFile']['tmp_name'];
                $prodImagen = addslashes(file_get_contents($image));

                //Actualizar los datos con las variables previamente copiadas de los campos
                $actualizar = "UPDATE producto SET nombre_producto='$nombre_producto', 
                descripcion='$descripcion', tipo_prod='$prodTipo', stock='$stock', precio='$precio', imagen_prod='$prodImagen' WHERE id_producto='$id'";
                $resultado=mysqli_query($conexion_bd, $actualizar);

                if($resultado){
                    echo"<script>
                    window.location='productos.php'; </script>";
                }
                else{
                    echo"<script>alert('No se pudo actualizar los datos');
                    window.location='productos.php'; </script>";
                }
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