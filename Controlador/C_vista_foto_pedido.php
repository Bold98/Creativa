<?php
if(!empty($_GET['id']))
{
    //Credenciales de conexion
    $Host = 'localhost';
    $Username = 'root';
    $Password = '';
    $dbName = 'creativa';
    
    //Crear conexion mysql
    $conexion_db = new mysqli($Host, $Username, $Password, $dbName);
    
    //revisar conexion
    if($conexion_db->connect_error)
        die("Connection failed: " . $conexion_db->connect_error);
    
    //Extraer imagen de la BD mediante GET
    $result = $conexion_db->query("SELECT imagen FROM pedido_personalizado WHERE id_pedido_P = {$_GET['id']}");
    
    if($result->num_rows > 0)
    {
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['imagen_prod']; 
    }
    else
        echo 'Imagen no existe...';
}
?>