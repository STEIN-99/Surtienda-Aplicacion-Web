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



    <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-vehiculo-tab" data-toggle="tab" href="#nav-vehiculo" role="tab" aria-controls="nav-vehiculo" aria-selected="true">Datos del Vehiculo</a>
            <a class="nav-item nav-link" id="nav-Mantenimiento-tab" data-toggle="tab" href="#nav-Mantenimiento" role="tab" aria-controls="nav-Mantenimiento" aria-selected="false">Mantenimiento</a>

          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
<!-- DATOS DEL VEHICULO --><div class="tab-pane fade show active" id="nav-vehiculo" role="tabpanel" aria-labelledby="nav-vehiculo-tab">

        <div id="TVehiculos"></div>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Vehiculos">
            Registrar Vehiculos
        </button>
        <div class="modal fade" id="Vehiculos" tabindex="-1" role="dialog" aria-labelledby="VehiculosTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="VehiculosTitle">Registro</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form class="" action="../Funciones/AgregarVehiculo.php" method="post">

    <label>Matricula</label>
    <input type="text" REQUIRED name="matri" value="">
    <br>
    <label>Modelo</label>
    <input type="text" REQUIRED name="Modelo" value="">
    <br>
    <label>Motor</label>
    <input type="text" REQUIRED name="motor" value="">
    <br>
    <label>Capacidad d Carga</label>
    <input type="text" REQUIRED name="cdc" value="">
    <br>
    <label>Vendedor</label>
    <select name="vendedores" >
      <option value="0">Asigne Vendedor</option>
      <?php
       $sqal="SELECT * FROM vendedores";
       $resulta=mysqli_query($con,$sqal);
        while ($vara=mysqli_fetch_array($resulta)) {  ?>
        <option value="<?php echo $vara[0] ?>"> <?php echo $vara[4] ?></option>
      <?php } ?>
    </select>
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
<!-- DATOS DEL VEHICULO --></div>

<!-- MODIFICARDATOS DEL VEHICULO -->
<!-- MODIFICARDATOS DEL VEHICULO -->



<!-- DATOS DEL MANTENIMIENTO -->  <div class="tab-pane fade" id="nav-Mantenimiento" role="tabpanel" aria-labelledby="nav-Mantenimiento-tab">

<div id="TMantenimiento">

</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong">
Registro de Mantenimiento
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Registro</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">

    <form class="" action="../Funciones/AgregarMantenimiento.php" method="post">
      <label>Vehiculo</label>
      <select name="matri" >
        <option value="0">Asigne Vehiculo</option>
        <?php
         $sqal="SELECT * FROM Vehiculo";
         $resulta=mysqli_query($con,$sqal);
          while ($vara=mysqli_fetch_array($resulta)) {  ?>
          <option value="<?php echo $vara[0] ?>"> <?php echo $vara[2] ?></option>
        <?php } ?>
      </select>
      <br>
      <label>Manenimiento correctivo</label>
      Si<input type="radio" name="corr" id="corr" value="0">
      No<input type="radio" name="corr" id="corr" value="1">
      <br>
      <label>Fecha </label>
      <input type="date" name="feCH" value="">
      <br>
      <label>Sucursal</label>
      <input type="text" name="src" value="">
      <br>
      <label>Monto total</label>
      <input type="text" name="mt" value="">
      <br>
      <label>Disponibilidad</label>
      si<input type="radio" name="disp" id="disp" value="0">
      no<input type="radio" name="disp" id="disp" value="1">
      <br>
      <label>Descripcion</label>
      <input type="text" name="descp" value="">
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




<!-- DATOS DEL MANTENIMIENTO --></div>
        </div>





    <!-- FiNALIZA EL CONTENEDOR -->  </div>



    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/validar.js"> </script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../alertify/alertify.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.0/js/all.js" ></script>
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#TVehiculos').load('../Tablas/Vehiculos.php');
$('#TMantenimiento').load('../Tablas/Mantenimiento.php');


  });
</script>
