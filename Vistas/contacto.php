<?php $title = "Contactanos"; include_once 'header.php'; ?>


<h1>Pedido personalizado</h1>
<div class="form-group">
    <form class="formulario" method="POST" enctype="multipart/form-data">
        <div class="container mb-4">

            <label class="bmd-label-floating" for="prodTipoSelect">Tipo de producto</label><br>
            <select class="mb-3" name="prodTipoSelect"  >
                <option value="1">Playera sublimada chica</option>
                <option value="2">Playera sublimada mediana</option>
                <option value="3">Playera sublimada grande</option>
                <option value="4">Playera sublimada extra grande</option>
                <option value="5">Playera vinil chica</option>
                <option value="6">Playera vinil mediana</option>
                <option value="7">Playera vinil grande</option>
                <option value="8">Playera vinil extra grande</option>
                <option value="9">Cubrebocas</option>
                <option value="10">Mousepad</option>
                <option value="11">Cojines</option>
                <option value="12">Banderines Decorativos</option>
            </select>
            <br>
            <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Cantidad de producto</label>
                 <input type="number" class="form-control" name="cantidadP">
                
            </div>
            <br>
            <label for="exampleInputEmail1" class="form-label">Seleccionar imagen</label>
            <input type="file" class="form-control" id="imgP" name="imgP" multiple>
            <br>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"> Descripción </label>
                <textarea class="form-control" name="descripcionP" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary btn-lg" name="enviarBtn">Enviar UwU</button>
        </div>
        <?php
        include("../Controlador/C_contacto.php");
        ?>
    </form>
</div>
<?php include_once 'footer.php' ?>