<?php 
$title = "Productos";
include_once 'dHeader.php';
include '../../Modelo/Conexion_BD.php'; 
$query = "SELECT * FROM producto";
$result = $conexion_bd->query($query);
while ($row = $result->fetch_assoc()){
    ?>
    <div class="card" style="width: 18rem;">
        <img src="data:image/jpg;base, <?php echo base64_encode($row['imagen_prod']); ?>" class="card-img-top img-thumbnail" alt="...">
        <div class="card-body img-thumbnail">
            <h5 class="card-title"><?php echo $row['nombre_producto'] ?></h5>
            <p class="card-text"><?php echo $row['descripcion'] ?></p>
            <a href="#" class="btn btn-primary">$<?php echo $row['precio'] ?></a>
        </div>
    </div>
<?php } ?>
<?php include_once 'dFooter.php'?>