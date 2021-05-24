<?php 
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
  $color_code = array('#f0c29c','#e89bae','#9ce2e1');
  $random_color = $color_code[array_rand($color_code)];
  $title = "Inicio";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <title>Creativa - <?php echo $title;?></title>
    <link rel="stylesheet" href="css/estilosIndex.css">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body style="background-color: <?php echo $random_color;?>">
    <header>
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
                <a class="nav-link" href="Vistas/v_login.php">Acceder</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Vistas/v_registro.php">Registro</a>
              </li>
              <?php }?>
              <?php 
              if(isset($_SESSION["userName"])) 
              { 
                $verifyAdmin = $_SESSION["userEmail"];
              } 
              if(isset($_SESSION['userName']) && $verifyAdmin=="creativa.detallesp@gmail.com"){ ?>
              <li class="nav-item">
                <a class="nav-link" href="Vistas/dashboard/index.php">Panel de control</a>
              </li>
              <?php }?>
              <?php if(isset($_SESSION['userName'])){ ?>
              <li class="nav-item">
                <a class="nav-link" href="Controlador/C_logout.php">Salir</a>
              </li>
              <?php }?>
            </ul>
          </div>
        </div>
      </nav>
      <!--Banner-->
      <div style="background: url(img/banner/1.png)" class="jumbotron bg-cover text-white ">
        <div class="container py-5 text-center">
          <img src="img/logo2.png" alt="logo" style="width: 50%;" class="headBanner">
        </div>
      </div>
      <!--Navbar-->
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2 mb-2">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="img/logo-icon.png" alt="" width="30"  class="d-inline-block align-text-top">
              Creativa
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"  id="navbarSupportedContent2">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Quienes somos</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Productos
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="Vistas/productos.php">Todos los productos</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="Vistas/tazas.php">Producto #1</a></li>
                    <li><a class="dropdown-item" href="#">Producto #2</a></li>
                    <li><a class="dropdown-item" href="#">Producto #3</a></li>
                    <li><a class="dropdown-item" href="#">Producto #4</a></li>
                    <li><a class="dropdown-item" href="#">Producto #5</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contactanos</a>
                </li>
              </ul>
              <form class="d-flex">
                <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-cart"></i></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <div id="carouselExampleControls" class="carousel slide container shadow" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/carrusel/img1.png" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/carrusel/img2.png" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/carrusel/img3.png" class="d-block w-100 img-fluid" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer class="container"> 
      <footer class="text-center text-white" style="background-color: #ff8297;">
        <!-- Grid container -->
        <div class="container pt-4">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://www.facebook.com/Creativa-102791245122700"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="bi bi-facebook"></i></i
            ></a>
      
            <!-- Twitter -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="bi bi-twitter"></i></i
            ></a>
      
            <!-- Instagram -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://www.instagram.com/creativahmo/"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="bi bi-instagram"></i></i
            ></a>
            
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: #ff5b76;">
          © 2020 Copyright:
          <a class="text-dark"></a>Creativa</a>
        </div>
        <!-- Copyright -->
        
      </footer>
    </footer>
    
      
    
    
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>