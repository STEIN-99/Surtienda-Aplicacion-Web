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
    <link rel="stylesheet" href="css/catalogo.css">
    <link rel="stylesheet" href="css/Ayuda.css">
    <link rel="stylesheet" href="css/Inicio.css">

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

<script src="js/validarcontactanos.js"></script>
<script src="js/ContenidoInicio.js"></script>
<script src="js/ayuda.js"></script>
<script src="js/inicio.js"></script>


  </body>
</html>
