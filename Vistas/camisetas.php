<?php 
$title = "Camisetas";
include_once 'header.php';
?>
<link rel="stylesheet" href="../css/cards.css">
<script type="text/javascript" src="../js/cards.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/xzoom.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/bbbootstrap/libraries/main/xzoom.css" media="all" />
<div class="container"> 
    <div class="row mb-5 mt-4">
    <div class="col-md-7 mt-4 ">
            <h1 class=" CreativaFont1">Nombre del producto</h1>
            <br>
            <p class="CreativaFont2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a consectetur mauris, quis blandit elit. Donec euismod libero sed est bibendum, vitae feugiat augue fringilla. Aliquam ut pharetra ante. Etiam at egestas tortor, sit amet maximus tellus. Vestibulum imperdiet sollicitudin lectus id fringilla. Mauris tempor blandit metus a venenatis. </p>
            <div class="frame">
                <h6>Añade el producto a tu carrito o contactanos para un producto personalizado</h6>
                <a href="#"><button class=" m-2 custom-btn btn-5"><i class="bi bi-cart"></i> Comprar</button></a>
                <a href="contacto.php"><button class=" m-2 custom-btn btn-5"><i class="bi bi-person-lines-fill"></i></i> Contacto</button></a>
            </div>
        </div>
        <div class="col-md-5">
            <div class="container d-flex">
                <section id="default" class="padding-top0">
                    <div class="large-5 column">
                        <div class="xzoom-container"> 
                            <img class="xzoom" id="xzoom-default" src="../img/productos/Camiseta.png" xoriginal="../img/productos/CamisetaOriginal.png" />
                            <div class="xzoom-thumbs" style="text-align: center;"> 
                                <a href="../img/productos/CamisetaOriginal.png"> 
                                    <img class="xzoom-gallery" width="80" src="../img/productos/CamisetaMini.png" xpreview="../img/productos/Camiseta.png">
                                </a> 
                                <!--<a href="https://i.imgur.com/oNaczTl.jpg"> 
                                    <img class="xzoom-gallery" width="80" src="https://i.imgur.com/r03r46u.jpg"> 
                                </a> 
                                <a href="https://i.imgur.com/853Jrff.jpg">
                                    <img class="xzoom-gallery" width="80" src="https://i.imgur.com/BpfNBDk.jpg">
                                </a> 
                                <a href="https://i.imgur.com/Q7xvBFf.jpg">
                                    <img class="xzoom-gallery" width="80" src="https://i.imgur.com/3SuUpUH.jpg">
                                </a>-->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        
    </div>
</div>
<?php include_once 'footer.php' ?>