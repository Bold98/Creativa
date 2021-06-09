<?php
include("C_login.php");
$conexion_bd = mysqli_connect("localhost", "root", "", "creativa");
if(!isset($_SESSION)) { 
    session_start();
}

if(isset($_POST['enviarBtn'])){
    if(strlen($_POST['cantidadP']) >= 1 && strlen($_POST['descripcionP']) >= 1){
        $prodTipo = $_POST['prodTipoSelect'];
        $prodCantidad = $_POST['cantidadP'];
        $prodDescr = $_POST['descripcionP'];
        
        $revisar = getimagesize($_FILES["imgP"]["tmp_name"]);
        if($revisar !== false){
            $image = $_FILES['imgP']['tmp_name'];
            $prodImagen = addslashes(file_get_contents($image));

            
            $idCliente = $_SESSION['userId'];
            $insertar = "INSERT INTO pedido_personalizado (id_producto, cantidad, imagen, descripcion, id_cliente)
                            VALUES('$prodTipo','$prodCantidad','$prodImagen','$prodDescr','$idCliente')";
            $resultado = mysqli_query($conexion_bd, $insertar);

            if($resultado){
                ?>
                <div id = "div_error" class="alert alert-success" role="alert">
                    Su pedido fue enviado de manera exitosa.
                </div>
                <?php
            }
            else{
                ?>
                <div id = "div_error" class="alert alert-danger" role="alert">
                    Ocurrió un error.
                </div>
                <?php
            }
        }
    }
}
?>