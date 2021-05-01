<?php

include 'BaseDatos.php';
 ?>

<!DOCTYPE html>
<html
  <head>
    <meta>
    <title>Surtienda</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/catalogo.css">

<script type="text/javascript" src="js/sweetAlert.js"></script>
<script type="text/javascript" src="js/sesion.js"></script>

<link rel="stylesheet" href="css/Sinicio.css">

  </head>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

      <a class="navbar-brand" href="Inicio.php">
        <img src="img/Surtiendamx.jpg" width="200" height="50" alt="">
      </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
  </div>

  <form class="form-inline">
    <div class="btn-group">
    <a id="yyy" href="Login.html" class="btn btn-warning" role="button" aria-pressed="true"><i class="far fa-user"></i> Iniciar sesion</a>


    <a id="yyy" href="Login.html" class="btn btn-warning " role="button">Mis compras <i class="fas fa-cart-plus"></i></a>
   </form>
</nav>



<nav class="navbar navbar-expand-lg navbar-warning bg-warning">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">

    </ul>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a id="yyy" href="Sucursales.php" class="btn btn-warning " role="button"><i class="fas fa-store-alt"></i> Sucursales</a>
      </li>

    </ul>

</nav>


<!-- <div class="container"> -->

     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/01.jpg" class="d-block w-100" alt="auto" width="100" height="300">
      </div>
      <div class="carousel-item" >
        <img src="img/02.jpg" class="d-block w-100" alt="auto" width="100" height="300">
      </div>
      <div class="carousel-item">
        <img src="img/03.jpg" class="d-block w-100" alt="auto" width="100" height="300">
      </div>
      <div class="carousel-item">
        <img src="img/04.jpg" class="d-block w-100" alt="auto" width="100" height="300">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    <!-- </div> -->
<hr>


<!-- Catalogo de productos -->
<div class="wrap">
  <h1>Categorias</h1>
  <div class="store-wrapper">
    <?php
       $prod="SELECT * FROM marcas";
       $most=mysqli_query($con,$prod);
      while($varia1=mysqli_fetch_array($most)){
      ?>
    <div class="category_list">
     <a href="SeleccionProductos.php?ID=<?php echo $varia1[0]?>" class="category_item" ><?php echo $varia1[1]?></a>
    </div>
  <?php } ?>
  </div>

      <h1>Productos</h1>
      <section class="products-list">
        <?php
           $sucur="SELECT * FROM productos";
           $mos=mysqli_query($con,$sucur);
          while($varia1=mysqli_fetch_array($mos)){
          ?>
        <div class="product-item" category="<?php echo $varia1[2]?>">
           <img height="250px" src="data:image/jpg;base64,<?php echo base64_encode($varia1[7]); ?>"/>
           <br>
          <button type="button" class="btn "><?php echo $varia1[3]?>
                      <br>
                    $<?php echo $varia1[4]?></button>
                    <a href="Login.html?ID=<?php echo $varia1[0]?>" class="btn " role="button" aria-pressed="true">Añadir al Carrito <i class="fas fa-cart-plus"></i></a>
        </div>

  <?php } ?>

        </section>
</div>
<!-- Catalogo de productos -->

<div class="card-group">
  <div class="card">



    <div class="card text-white bg-warning">
      <center><h3 class="card-title">Contactanos <i class="fas fa-smile"></i></h3></center>
      <p class="card-text">Aclaracion y dudas
        <br>
      <i class="fas fa-phone"></i>  Telefono: +(52)9931808288 o 3159198
      </p>
      <p class="card-text">Horario de atencion via telefonica
        <br>
      <i class="fas fa-address-book"></i>  Lunes 8:00 am a 7:00 pm y  Domingos de 8:00 a 2:00 pm
      </p>
      <p class="card-text">Escribenos
      <br>
      <i class="far fa-comment-alt-dots"></i> Surtienda@admon.com
      </p>
    </div>
  </div>


  <div class="card">

    <div class="card text-white bg-warning">
      <center><h3 class="card-title"></h3></center>
      <p class="card-text"><i class="fas fa-user-lock"></i> Seguridad garantizada</p>
      <br>
      <p class="card-text"><i class="fas fa-child"></i> Pagos a meses sin intereses</p>
        <br>
      <p class="card-text"><i class="fas fa-people-carry"></i> Envio gratis</p>

      <br>

      <p></p>
    </div>
  </div>


  <div class="card">

    <div class="card text-white bg-warning">
      <center><h3 class="card-title">Redes Sociales</h3></center>
      <p class="card-text"><i class="fab fa-facebook"></i> Surtienda </p>
      <p class="card-text"><i class="fab fa-twitter-square"></i> Surtienda </p>
      <p class="card-text"><i class="fab fa-instagram"></i> Surtienda_mx </p>
      <p class="card-text"><i class="fab fa-youtube"></i> Surtienda </p>
      <p class="card-text"></p>
      <p class="card-text"></p>
    </div>
  </div>
</div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/sesion.js"></script>
    <script type="text/javascript" src="js/sweetAlert.js"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.8.0/js/all.js" ></script>
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

  </body>
</html>
