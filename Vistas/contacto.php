<?php $title = "Contactanos"; include_once 'header.php'; ?>


<h1>Pedido personalizado</h1>
<div class="form-group">
    <form>
        <div class="container mb-4">

            <label class="bmd-label-floating" for="prodTipoSelect">Tipo de producto</label><br>
            <select class="mb-3" name="prodTipoSelect"  >
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
            <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Cantidad de producto</label>
                 <input type="number" class="form-control" id="cantidadP">
                
            </div>
            <br>
            <label for="exampleInputEmail1" class="form-label">Seleccionar imagen</label>
            <input type="file" class="form-control" id="imgP">
            <br>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"> Descripción </label>
                <textarea class="form-control" id="descripcionP" rows="3"></textarea>
            </div>
            <button type="button" class="btn btn-secondary btn-lg">Enviar UwU</button>
        </div>
        
        
        
    </form>
</div>
<?php include_once 'footer.php' ?>