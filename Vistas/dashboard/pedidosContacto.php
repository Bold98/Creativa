<?php 
$title = "Pedidos Personalizados";
include_once 'dheader.php';
include ("../../Modelo/Conexion_BD.php");
$pedido = "SELECT * FROM pedido_personalizado";
?>

<div class="container">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Pedidos personalizados</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <th scope="col">Id Pedido</th>
                    <th scope="col">id Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Id Cliente</th>
                </thead>
                <tbody>
                    <?php
                        $resultado = mysqli_query($conexion_bd, $pedido);
                        while($row=mysqli_fetch_assoc($resultado)){?>
                            <?php $id = $row["id_pedido_P"];?>
                            <tr>
                                <th scope="row"><?php echo $row["id_pedido_P"]?></th>
                                <td><?php echo $row["id_producto"]?></td>
                                <td><?php echo $row["cantidad"]?></td>
                                <td><?php echo $row["descripcion"]?></td>
                                <?php
                                    if($result = $conexion_bd->query("SELECT id_pedido_P FROM pedido_personalizado")){
                                        $row_cnt = $result->num_rows;
                                        if($id <= $row_cnt){
                                            echo "<img style='max-width: 50%; height: auto;' class='img-thumbnail' src='../../Controlador/C_vista_foto_pedido.php?id=".$id."'/>";
                                        }
                                    }
                                ?>
                                <td><?php echo $row["id_cliente"]?></td>
                            </tr>
                        <?php } mysqli_free_result($resultado);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include_once 'dfooter.php' ?>