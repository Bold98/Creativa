<?php
    include("../Modelo/Conexion_BD.php");

    if(isset($_POST['btn_cambiar'])){

        $id = $_POST['id'];
        $activo = $_POST['activo'];

        //Actualizar los datos
        /*La condición cumple la función de cambiar el campo activo a 1 cuando 
        es 0 y biceversa*/
        if($activo==0){
            $actualizar = "UPDATE producto SET activo=1 WHERE id_producto='$id'";
        }elseif($activo==1){
            $actualizar = "UPDATE producto SET activo=0 WHERE id_producto='$id'";
        }
        
        
        $resultado=mysqli_query($conexion_bd, $actualizar);

        //Alertas de JS que te regresan a la página de edición
        if($resultado){
            echo"<script>alert('Se han actualizado los cambios correctamente, actualice la pagina para ver los cambios');
            window.location='edicion.php'; </script>";
        }else{
            echo"<script>alert('No se pudo actualizar los datos');
            window.location='edicion.php'; </script>";
        }
    }
    
?>