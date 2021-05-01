<?php
session_start();
include 'BaseDatos.php';
 ?>
 <?php

 if (!$_SESSION) {
 header("Location:  Login.html");
 }

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
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

      <a class="navbar-brand" href="Inicio1.php">
        <img src="img/Surtiendamx.jpg" width="200" height="50" alt="">
      </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
  </div>

  <form class="form-inline">

   </form>
</nav>


<!-- Catalogo de productos -->
<div class="wrap">

      <h1>Detalle del Producto</h1>
      <section class="products-list">

				<?php
					include 'conexion.php';
					$re=("SELECT * FROM productos WHERE ID_PRODUCTOS=".$_GET['ID_PRODUCTOS']);
					$mos=mysqli_query($con,$re);
					while ($f=mysqli_fetch_array($mos)) {
					?>

						<center>
							<img height="250px" src="data:image/jpg;base64,<?php echo base64_encode($f[7]); ?>"/><br>
							<span><?php echo $f['NOMBRE'];?></span><br>
							<span>Precio: <?php echo $f['PRECIO_UNIT'];?></span><br>
							<a href="./carritodecompras.php?ID_PRODUCTOS=<?php  echo $f['ID_PRODUCTOS'];?>">Añadir al carrito de compras</a>
						</center>

				<?php
					}
				?>

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
