<?php 
$title = "Inicio";
include_once 'dcHeader.php';?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar perfil</h4>
                    <p class="card-category">Formulario con informaición del usuario</p>
                </div>
                <div class=" mt-4 card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nombre</label>
                          <input class="form-control" type="text" name="UsuarioNombre" value="<?php echo $_SESSION['userName'];?>" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Apellido</label>
                          <input class="form-control" type="text" name="UsuarioApellido" value="<?php echo $_SESSION['userLastName'];?>" >
                        </div>
                      </div>
                    </div>
                    <div class="row mt-4">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Número de telefono</label>
                          <input class="form-control" type="text" name="UsuarioPhone" value="<?php echo $_SESSION['userPhone'];?>" >
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Correo</label>
                          <input class="form-control" type="text" name="UsuarioMail" value="<?php echo $_SESSION['userEmail'];?>" >
                        </div>
                      </div>
                    </div>
                        <input type="submit" value="Editar" class="btn btn-primary pull-right" name="editarBtn">
                        <?php
                            include("../../Controlador/C_update_usuario.php");
                        ?>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
</div>
<?php include_once 'dcFooter.php';?>