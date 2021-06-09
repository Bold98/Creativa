<?php
    //Metodo para buscar en la tabla de pedidos personalizados. Aun no esta probado 
    if (isset($_GET['enviar'])){
        $busqueda = $_GET['busqueda'];

        $consulta = $con->query("SELECT * FROM pedido_personalizado WHERE id_pedido_P OR id_producto OR cantidad OR
        imagen OR descripcion OR id_cliente LIKE '%$busqueda'");
        
        while($row = $consulta->fetch_array()){
            echo $row["id_pedido_P OR id_producto OR cantidad OR
            imagen OR descripcion OR id_cliente "]; 
        }
    }

?>
