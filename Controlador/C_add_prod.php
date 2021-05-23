<?php
    //Es para que se conecte a la base de datos
    include ("../Modelo/Conexion_BD.php");
    //$conexion_bd = mysqli_connect("localhost", "root", "", "creativa");

    //if el botón agregarBTN fue presionado
    if(isset($_POST['agregarBTN'])){
        //Comprobar que llenara los campos
        if(strlen($_POST['prodNombreInput']) >= 1 &&
          strlen($_POST['prodPrecioInput']) >= 1){
            $prodTipo = $_POST['prodTipoSelect'];
            $prodNombre = $_POST['prodNombreInput'];
            $prodPrecio = $_POST['prodPrecioInput'];
            $prodDescr = $_POST['prodDescInput'];
            //revisar tamaño de archivo
            $revisar = getimagesize($_FILES["prodImagenFile"]["tempName"]);
            if($revisar !== false){
                $image = $_FILES['prodImagenFile']['tempName'];
                $prodImagen = addslashes(file_get_contents($image));

                $insertar = "INSERT INTO producto (tipo_prod, nombre_producto, precio, descripcion, imagen_prod)
                            VALUES('$prodTipo','$prodNombre','$prodPrecio','$prodDescr','$prodImagen')";
                $resultado = mysqli_query($conexion_bd, $insertar);
                //Datos subidos a base de datos
                if($resultado){
                    ?>
                    <script>
                        alert("El registro se realizó con éxito.");
                        window.location = "../Vistas/dashboard/productoAgregar.php";
                    </script>;
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