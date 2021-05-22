<?php 
$title = "Productos";
include_once 'dHeader.php';?>
   <!-- Aqui se agrega un producto a la BD, falta de agregar el php que hace la insercion --> 
    <form class="formularioProducto" method="POST">
        <h1>Agregar productos</h1>
        <label for="tipo_prod">Tipo de productos</label>
        <select name="tipo_prod">
            <option value="tshirt_s_c">Playera sublimada chica</option>
            <option value="tshirt_s_m">Playera sublimada mediana</option>
            <option value="tshirt_s_g">Playera sublimada grande</option>
            <option value="tshirt_s_xg">Playera sublimada extra grande</option>
            <option value="tshirt_v_c">Playera vinil chica</option>
            <option value="tshirt_v_m">Playera vinil mediana</option>
            <option value="tshirt_v_g">Playera vinil grande</option>
            <option value="tshirt_v_xg">Playera vinil extra grande</option>
            <option value="c_bocas">Cubrebocas</option>
            <option value="mp_01">Mousepad</option>
            <option value="pillow">Cojines</option>
            <option value="flaggie">Banderines Decorativos</option>
        </select>
        <br>
        <a>Nombre del producto</a>
        <input type="text" name="nombre_producto"><br>
        <a>descripcion del producto</a>
        <input type="text" name="descripcion"><br>
        <a>Imagen del producto</a>
        <input type="file" name="imagen_prod"><br>
        <a>Precio</a>
        <input type="text" name="precio"><br>
        <br>
        <input type="submit" value="Agregar" class="button" name="agregarBtn">
    </form>
<?php include_once 'dFooter.php'?>