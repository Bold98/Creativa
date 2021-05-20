<?php
    include("../Controlador/C_admin_consulta.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Administación</title>
        <meta name="viewport" content="witdth=device-width,
        user-scaleble-no, initial-scale-1.0, maximum-scale=1.0,
        minimun-scale=1.0">
        //<link rel="stylesheet" href="../css/estilos_tablas.css">
    </head>

    <body>
    
        <div class ="container-table">
            <div class="table__title">Datos de los clientes</div>
            <div class="table__header">ID</div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Apellidos</div>
            <div class="table__header">Correo</div>
            <div class="table__header">Contraseña</div>
            <div class="table__header">Teléfono</div>
            <div class="table__header">rol</div>

            <?php $resultado = mysqli_query($conexion_bd, $cliente);

                while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["id_cliente"];?></div>
            <div class="table__item"><?php echo $row["nombre_cliente"];?></div>
            <div class="table__item"><?php echo $row["apellido_cliente"];?></div>
            <div class="table__item"><?php echo $row["correo"];?></div>
            <div class="table__item"><?php echo $row["contraseña"];?></div>
            <div class="table__item"><?php echo $row["no_telefono"];?></div>
            <div class="table__item"><?php echo $row["rol"];?></div>

            <?php } mysqli_free_result($resultado);?>
        </div>
    </body>
</html>