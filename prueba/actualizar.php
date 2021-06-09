<?php
    include("../Modelo/Conexion_BD.php");
    //Obtener el id de la fila por medio del url y seleccionar esa fila de la tabla
    $id = $_GET["id"];
    $producto = "SELECT * FROM producto WHERE id_producto = '$id'";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Actualizar</title>
        <meta name="viewport" content="witdth=device-width,
        user-scaleble-no, initial-scale-1.0, maximum-scale=1.0,
        minimun-scale=1.0">
        <link rel="stylesheet" href="estilos_tablas.css">
    </head>

    <body>
        <form action="procesar_actualizar.php" method="post">
            <div class ="container-table">
                <div class="table__title">Productos</div>
                <div class="table__header">Nombre de producto</div>
                <div class="table__header">Descripción</div>
                <div class="table__header">Stock</div>
                <div class="table__header">Precio</div>
                <div class="table__header">Operación</div>
            

                <?php $resultado = mysqli_query($conexion_bd, $producto);

                    while($row=mysqli_fetch_assoc($resultado)) { ?>
                <!--Este primer input oculto es para enviar el id-->
                <!--Se especifican nombres para referenciarlos en el archivo de procesamiento -->
                <input type="hidden" class="table_item" value="<?php echo $row["id_producto"];?>" name="id">
                <input type="text" class="table_input" value="<?php echo $row["nombre_producto"];?>" name="nombre_producto">
                <input type="text" class="table_input" value="<?php echo $row["descripcion"];?>" name="descripcion">
                <input type="text" class="table_input" value="<?php echo $row["stock"];?>" name="stock">
                <input type="text" class="table_input" value="<?php echo $row["precio"];?>" name="precio">

                <?php } mysqli_free_result($resultado);?>
                <!--Este boton acciona el archivo de proceso-->        
                <input type="submit" value="Actualizar" class="container_submit_actualizar" name="btn_actualizar">
                
            </div>
        </form>
    </body>
</html>


