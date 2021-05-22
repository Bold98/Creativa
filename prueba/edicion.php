<?php
    include("../Modelo/Conexion_BD.php");
    $producto = "SELECT * FROM producto";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Administación</title>
        <meta name="viewport" content="witdth=device-width,
        user-scaleble-no, initial-scale-1.0, maximum-scale=1.0,
        minimun-scale=1.0">
        //<link rel="stylesheet" href="estilos_tablas_edicion.css">
    </head>

    <body>
    
        <div class ="container-table">
            <div class="table__title">Productos</div>
            <div class="table__header">Nombre de producto</div>
            <div class="table__header">Descripción</div>
            <div class="table__header">Stock</div>
            <div class="table__header">Precio</div>
            <div class="table__header">Operación</div>
        

            <?php $resultado = mysqli_query($conexion_bd, $producto);

                while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["nombre_producto"];?></div>
            <div class="table__item"><?php echo $row["descripcion"];?></div>
            <div class="table__item"><?php echo $row["stock"];?></div>
            <div class="table__item"><?php echo $row["precio"];?></div>
            <div class="table__item">
                <a href="actualizar.php?id=<?php echo $row["id_producto"];?>" class="table__item__link">Editar | </a>
                <a href="eliminar.php" class="table__item__link">Eliminar</a>
            </div>
           
            <?php } mysqli_free_result($resultado);?>
        </div>
    </body>
</html>


