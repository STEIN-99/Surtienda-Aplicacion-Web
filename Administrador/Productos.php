<?php
session_start();
include '../BaseDatos.php';
 ?>
 <?php
  if (!$_SESSION) {
  header("Location:  Login.html");
  }

   ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Surtienda</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/catalogo.css">
    <link rel="stylesheet" href="../css/tablas.css">
    <link rel="stylesheet" href="../css/SAdministrador.css">
    <script type="text/javascript" src="../js/sweetAlert.js"></script>
    <script type="text/javascript" src="../js/sesion.js"></script>
    <link rel="stylesheet" href="../css/Sinicio.css">
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <a class="navbar-brand" href="../Administrador.php">
          <img src="../img/Surtiendamx.jpg" width="200" height="50" alt="">
        </a>

    <form class="form-inline">
      <div class="btn-group">

      <button id="brn" type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "".$_SESSION['usua']; ?></button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#"></a>
        <a class="dropdown-item" href="#"></a>
        <a class="dropdown-item" href="#"></a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="../cerrar.php">cerrar sesion</a>
      </div>
    </div>

     </form>
     <a href="../Inicio.php" class="btn btn-warning" role="button" aria-pressed="true">Vista de Usuaros</a>
    </nav>



    <header>
      <div class="contenedor">
        <div class="wrapper">

          <nav>
            <a href="Vendedores.php"><i class="far fa-user"></i> Vendedores</a>
            <a href="Clientes.php"><i class="far fa-user"></i> Clientes</a>
            <a href="Productos.php"><i class="fas fa-dolly"></i> Productos</a>
            <a href="Vehiculo.php"><i class="fas fa-truck"></i> Vehiculos</a>
            <a href="Sucursal.php"><i class="fas fa-store-alt"></i> Sucursales</a>
          </nav>

        </div>

      </div>
</header>


<br>
<center><h1>Productos</h1></center>
<br>
<div id="TProductos"></div>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#producto">
        Registrar Nuevo Producto
      </button>

      <div class="modal fade" id="producto" tabindex="-1" role="dialog" aria-labelledby="productoTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="producto">Registro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <form class="" action="../Funciones/Agregarproductos.php" method="post" enctype="multipart/form-data" >
                <label>Nombre</label>
                <input type="text" REQUIRED name="producto" value="" required>
                <br>
                <label>Precio</label>
                <input type="text" REQUIRED name="precio" value="" required>
                <br>
                <label>Descripcion</label>
                <input type="text" REQUIRED name="descr" value="" required>
                <br>
                <label>Cantidad</label>
                <input type="text" REQUIRED name="cantidad" value="" required>
                <br>
                <label>Fecha de Caducidad</label>
                <input type="date" REQUIRED name="caducidad" value="" required>
                <br>
                <label>Marca</label>
                <select name="marcas" >
                  <option value="0">Asigne Marca</option>
                  <?php
                   $sqal="SELECT * FROM Marcas";
                   $resulta=mysqli_query($con,$sqal);
                    while ($vara=mysqli_fetch_array($resulta)) {  ?>
                    <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?></option>
                  <?php } ?>
                </select>
                <br>
                <label>Sucursal</label>
                <select name="sucu" >
                  <option value="0">Asigne Sucursal</option>
                  <?php
                   $sqal="SELECT * FROM sucursales";
                   $resulta=mysqli_query($con,$sqal);
                    while ($vara=mysqli_fetch_array($resulta)) {  ?>
                    <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?></option>
                  <?php } ?>
                </select>
                <br>
                <label>Imagen</label>
                <input type="file" REQUIRED name="img" value="img">
                <br>
                <input type="submit" name="Guardar" value="Guardar">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>



      <br>


      </div>
    </div>
  </div>
</div>



    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/validar.js"> </script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../alertify/alertify.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.0/js/all.js" ></script>
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#TProductos').load('../Tablas/Productos.php');
    $('#TPromociones').load('../Tablas/Promociones.php');

  });
</script>
