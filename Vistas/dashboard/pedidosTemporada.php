<?php 
$title = "Pedidos";
include_once 'dheader.php';
include ("../../Modelo/Conexion_BD.php");
$pedido = "SELECT * FROM pedido_temporada";
?>

<div class="container">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Pedidos</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <th scope="col">Id Pedido</th>
                    <th scope="col">id Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Id Cliente</th>
                </thead>
                <tbody>
                    <?php
                        $resultado = mysqli_query($conexion_bd, $pedido);
                        while($row=mysqli_fetch_assoc($resultado)){?>
                            <?php $id = $row["id_pedido_T"];?>
                            <tr>
                                <th scope="row"><?php echo $row["id_pedido_T"]?></th>
                                <td><?php echo $row["id_producto"]?></td>
                                <td><?php echo $row["cantidad"]?></td>
                                <td><?php echo $row["id_cliente"]?></td>
                            </tr>
                        <?php } mysqli_free_result($resultado);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include_once 'dfooter.php' ?>