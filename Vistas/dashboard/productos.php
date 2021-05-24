<?php 
$title = "Productos";
include_once 'dHeader.php';
include ("../../Modelo/Conexion_BD.php");
$producto = "SELECT * FROM producto";

    $Host = 'localhost';
    $Username = 'root';
    $Password = '';
    $dbName = 'creativa';
    $bd = new mysqli($Host, $Username, $Password, $dbName);
    ?>
    <div>
        <a href="productoAgregar.php"><button type="button" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Nuevo producto</button></a>
        
    </div>
    <div class=" card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Productos</h4>
            <p class="card-category">Formulario</p>
        </div>
        <div class="row mt-2">
            <div class=" col-md-1">
            </div>
            <div class=" col-md-10">
                <table class="table table-bordered">
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
                    $resultado = mysqli_query($conexion_bd, $producto);
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
                                        if($id <= $row_cnt){
                                            echo "<img src='../../Controlador/C_vista_foto_prod.php?id=".$id."'/>";
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
            <div class=" col-md-1">
            </div>
        </div>
        
    </div>
    
<?php include_once 'dFooter.php'?>