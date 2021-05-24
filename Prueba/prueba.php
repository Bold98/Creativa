<?php
include("conexion.php");
$producto = "SELECT * FROM producto";

    $Host = 'localhost';
    $Username = 'root';
    $Password = '';
    $dbName = 'creativa';
    $bd = new mysqli($Host, $Username, $Password, $dbName);
?>
<html>
    <body>
        <div>
            <table>
                <thead>
                    <th scope="col">Id</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    <?php
                    $resultado = mysqli_query($con, $producto);
                    while($row=mysqli_fetch_assoc($resultado)){?>
                        <?php $id = $row["id_producto"];?>
                        <tr>
                            <th scope="row"><?php echo $row["id_producto"]?></th>
                            <td><?php echo $row["tipo_prod"]?></td>
                            <td><?php echo $row["nombre_producto"]?></td>
                            <td><?php echo $row["descripcion"]?></td>
                            <td><?php echo $row["precio"]?></td>
                            <td><?php echo $row["stock"]?></td>
                            <td>
                                <?php
                                    if($result = $bd->query("SELECT id_producto FROM producto")){
                                        $row_cnt = $result->num_rows;
                                        while($id <= $row_cnt){
                                            echo "<img src='vista.php?id=".$id."'/>";
                                            $id+=3;
                                        }
                                    }
                                ?>
                            </td>
                            <td>
                                <a href="productoEditar.php?id=<?php echo $row["id_producto"];?>">
                                    <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                                </a>
                                <a href="../../Controlador/C_delete_prod.php?id=<?php echo $row["id_producto"];?>">
                                    <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </a>
                            </td>
                        </tr>
                    <?php } mysqli_free_result($resultado);?>
                </tbody>
            </table>
        </div>
    </body>
</html>