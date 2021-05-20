      <!--User navbar-->
      <nav class="navbar navbar-dark navbar-expand-lg bg-dark" >
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
              <!--<img src="img/logo-icon.png" alt="" width="30"  class="d-inline-block align-text-top">-->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" style="justify-content: flex-end;" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['userName'])){ ?>
              <li class="nav-item">
                <div class = "row ml-auto">
                  <div class="col-md-5">
                  <a class="nav-link active" aria-current="page"><?php echo $_SESSION['userName']?></a>
                  </div>
                  <div class="col-md-5">
                  <a class="nav-link active" aria-current="page"><?php echo $_SESSION['userLastName']?></a>
                  </div>
                </div>
              </li>
            <?php }?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" >Acciones:</a>
              </li>
              <?php if(!isset($_SESSION['userName'])){ ?>
              <li class="nav-item">
                <a class="nav-link" href="v_login.php">Acceder</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="v_registro.php">Registro</a>
              </li>
              <?php }?>
              <?php 
              if(isset($_SESSION["userName"])) 
              { 
                $verifyAdmin = $_SESSION["userEmail"];
              } 
              if(isset($_SESSION['userName']) && $verifyAdmin=="creativa.detallesp@gmail.com"){ ?>
              <li class="nav-item">
                <a class="nav-link" href="#">Panel de control</a>
              </li>
              <?php }?>
              <?php if(isset($_SESSION['userName'])){ ?>
              <li class="nav-item">
                <a class="nav-link" href="../Controlador/C_logout.php">Salir</a>
              </li>
              <?php }?>
            </ul>
          </div>
        </div>
      </nav>