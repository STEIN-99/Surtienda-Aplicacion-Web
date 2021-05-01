<?php
include 'BaseDatos.php';



$idv=$_REQUEST['ID'];



 ?>
<!DOCTYPE html>
<html
  <head>
    <meta>
    <title>Surtienda</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="css/catalogo.css">

<script type="text/javascript" src="js/sweetAlert.js"></script>
<script type="text/javascript" src="js/sesion.js"></script>

<link rel="stylesheet" href="css/Sinicio.css">

  </head>



<nav class="navbar navbar-expand-lg navbar-warning bg-warning">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="navbar-brand" href="Inicio1.php">
          <img src="img/Surtiendamx.jpg" width="200" height="50" alt="">
        </a>
      </li>
    </ul>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
      <a id="yyy" href="Sucursales.php" class="btn btn-warning " role="button"><i class="fas fa-store-alt"></i> Sucursales</a>
      </li>
    </ul>

</nav>




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

<hr>



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
           $sucur="SELECT * FROM productos WHERE ID_MARCAS='$idv' ";
           $mos=mysqli_query($con,$sucur);
          while($varia1=mysqli_fetch_array($mos)){
          ?>
        <div class="product-item" category="<?php echo $varia1[2]?>">
           <img height="250px" src="data:image/jpg;base64,<?php echo base64_encode($varia1[7]); ?>"/>
           <br>
          <button type="button" class="btn "><?php echo $varia1[3]?>
                      <br>
                    $<?php echo $varia1[4]?></button>
                    <a href="detalles.php?ID_PRODUCTOS=<?php echo $varia1[0]?>" class="btn " role="button" aria-pressed="true">Añadir al Carrito <i class="fas fa-cart-plus"></i></a>
        </div>

  <?php } ?>

        </section>
</div>
<!-- Catalogo de productos -->















    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/sesion.js"></script>
    <script type="text/javascript" src="js/sweetAlert.js"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.8.0/js/all.js" ></script>
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

  </body>
</html>
