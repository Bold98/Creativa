<?php 
$title = "Productos";
include_once 'dHeader.php';?>
   <!-- Aqui se agrega un producto a la BD, falta de agregar el php que hace la insercion --> 
   <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 id="AgregarTitle" class="card-title">Agregar producto</h4>
                    <p class="card-category">Formulario</p>
                </div>
                <div class=" card-body">
                    <form class="formularioProducto" method="POST">
                        <div class="form-group">
                            <label class="bmd-label-floating" for="prodTipoSelect">Tipo de producto</label>
                            <select class="form-control" name="prodTipoSelect"  >
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
                        </div>
                        <div class=" form-group">
                            <label class="bmd-label-floating" for="prodNombreInput">Nombre del producto</label>
                            <input class="form-control" type="text" name="prodNombreInput"><br>
                        </div>
                        <div class=" form-group">
                            <label class=" bmd-label-floating" for="prodPrecioInput">Precio</label>
                            <input class="form-control" type="text" name="prodPrecioInput"><br>
                        </div>
                        <div class="form-group">
                            <label class="bmd-label-floating" for="prodDescInput">Descripcion</label>
                            <textarea class="form-control" name="prodDescInput" rows="3"></textarea>
                        </div>
                        
                        <label for="prodDescInput">Seleccionar imagen</label>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                            </div>
                            <div class=" table-responsive fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <span class="btn btn-raised btn-round btn-default btn-file">
                                    <input class="fileinput-new" type="file" name="prodImagenFile" />
                                </span>
                                <a href="#AgregarTitle" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="bi bi-x-lg"></i> </a>
                            </div>
                        </div>
                        
                            <!--<br>
                            <a>Nombre del producto</a>
                            <input type="text" name="nombre_producto"><br>
                            <a>descripcion del producto</a>
                            <input type="text" name="descripcion"><br>
                            <a>Imagen del producto</a>
                            <input type="file" name="imagen_prod"><br>
                            <a>Precio</a>
                            <input type="text" name="precio"><br>
                            <br>-->
                        <input type="submit" value="Agregar" class="btn btn-primary pull-right" name="agregarBtn">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
   </div>
<?php include_once 'dFooter.php'?>