<?php
    //Es para que se conecte a la base de datos
    //include ("../Modelo/Conexion_BD.php");
    $conexion_bd = mysqli_connect("localhost", "root", "", "creativa2");

    //if el botón agregarBTN fue presionado
    if(isset($_POST['agregarBtn'])){
        //Comprobar que llenara los campos
        if(strlen($_POST['prodNombreInput']) >= 1 &&
          strlen($_POST['prodPrecioInput']) >= 1){
            $prodTipo = $_POST['prodTipoSelect'];
            $prodNombre = $_POST['prodNombreInput'];
            $prodPrecio = $_POST['prodPrecioInput'];
            $prodDescr = $_POST['prodDescInput'];
            //revisar tamaño de archivo
            $revisar = getimagesize($_FILES["prodImagenFile"]["tmp_name"]);
            if($revisar !== false){
                $image = $_FILES['prodImagenFile']['tmp_name'];
                $prodImagen = addslashes(file_get_contents($image));

                $insertar = "INSERT INTO producto (tipo_prod, nombre_producto, precio, descripcion, imagen_prod)
                            VALUES('$prodTipo','$prodNombre','$prodPrecio','$prodDescr','$prodImagen')";
                $resultado = mysqli_query($conexion_bd, $insertar);
                //Datos subidos a base de datos
                if($resultado){
                    ?>
                    <div id = "div_error" class="alert alert-success" role="alert">
                        El producto fue registrado correctamente.
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
        //Campos vacios
        else{
            ?>
            <div id = "div_error" class="alert alert-danger" role="alert">
                <h4 class="alert-heading">No se llenó la información necesaria.</h4>
                <p>Uno o más campos fueron enviados vacíos y no fue posible completar el registro.</p>
                <hr>
                <p class="mb-0">Complete el formulario e intente de nuevo.</p>
            </div>
           <?php
        }
    }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#div_error").fadeOut(10000);
    });
</script>