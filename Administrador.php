<?php
session_start();
include 'BaseDatos.php';
 ?>
 <?php
  if (!$_SESSION) {
  header("Location: Inicio.html");
  }

   ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Surtienda</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/catalogo.css">
    <link rel="stylesheet" href="css/tablas.css">
    <link rel="stylesheet" href="css/SAdministrador.css">
    <script type="text/javascript" src="js/sweetAlert.js"></script>
    <script type="text/javascript" src="js/sesion.js"></script>
    <link rel="stylesheet" href="css/Sinicio.css">
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <a class="navbar-brand" href="Administrador.php">
          <img src="img/Surtiendamx.jpg" width="200" height="50" alt="">
        </a>

    <form class="form-inline">
      <div class="btn-group">

      <button id="brn" type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "".$_SESSION['usua']; ?></button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#"></a>
        <a class="dropdown-item" href="#"></a>
        <a class="dropdown-item" href="#"></a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="cerrar.php">cerrar sesion</a>
      </div>
    </div>

     </form>
     <a href="Inicio.php" class="btn btn-warning" role="button" aria-pressed="true">Vista de Usuarios</a>
    </nav>



    <header>
      <div class="contenedor">
        <div class="wrapper">

          <nav>
            <a href="Administrador/Vendedores.php"><i class="far fa-user"></i> Vendedores</a>
            <a href="Administrador/Clientes.php"><i class="far fa-user"></i> Clientes</a>
            <a href="Administrador/Productos.php"><i class="fas fa-dolly"></i> Productos</a>
            <a href="Administrador/Vehiculo.php"><i class="fas fa-truck"></i> Vehiculos</a>
            <a href="Administrador/Sucursal.php"><i class="fas fa-store-alt"></i> Sucursales</a>
          </nav>

        </div>

      </div>
    </header>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/validar.js"> </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="alertify/alertify.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.0/js/all.js" ></script>
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#Vendedores').load('../Tablas/Vendedores.php');
    $('#Titinerario').load('../Tablas/itinerario.php');
      $('#TRuta').load('../Tablas/Ruta.php');


  });
</script>
