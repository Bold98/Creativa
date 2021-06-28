<?php 
$title = "Inicio";
include_once 'dcHeader.php';
include ("../../Modelo/Conexion_BD.php");
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Perfil de usuario</h4>
                  <p class="card-category">Formulario con informaición del usuario</p>
                </div>
                <div class=" mt-4 card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nombre</label>
                          <input class="form-control" type="text" value="<?php echo $_SESSION['userName'];?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Apellido</label>
                          <input class="form-control" type="text" value="<?php echo $_SESSION['userLastName'];?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-4">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Número de telefono</label>
                          <input class="form-control" type="text" value="<?php echo $_SESSION['userPhone'];?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Correo</label>
                          <input class="form-control" type="text" value="<?php echo $_SESSION['userEmail'];?>" disabled>
                        </div>
                      </div>
                    </div>
                    
                    <div class="clearfix"></div>
                  </form>
                  <a href="indexUpdate.php">
                        <button class="btn btn-primary pull-right">Editar Información</button>
                    </a>
                </div>
              </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
</div>
<?php include_once 'dcFooter.php';?>