<?php 
$title = "Inicio";
include_once 'dcHeader.php';
include ("../../Modelo/Conexion_BD.php");
$idUsuario = $_SESSION['userId'];
//$pedido = "SELECT * from pedido_temporada as pt, pedido_personalizado as pp WHERE pp.id_cliente='$idUsuario' and pt.id_cliente='$idUsuario'";
$pedido = "SELECT * from pedido_temporada WHERE id_cliente='$idUsuario'";
?>
<div class="container">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Historial de Pedidos</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <th scope="col">Id Pedido</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
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
                            </tr>
                    <?php } mysqli_free_result($resultado);?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include_once 'dcFooter.php'?>