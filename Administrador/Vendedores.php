<?php
session_start();
include '../BaseDatos.php';
 ?>
 <?php
  if (!$_SESSION) {
  header("Location:  ../Inicio.html");
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
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Datos del Vendedor</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Itinerario</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Rutas</a>
                  </div>
                </nav>



        <!-- INICIAL EL CONTENEDOR --> <div class="tab-content" id="nav-tabContent">
      <!-- CONTENEDOR DAROS DE VENDEDOR  --> <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <div id="Vendedores"></div>
                            <!-- FOMULARIO DE REGISTRO -->
                              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#vendedores">Registrar Vendedor</button>
                              <div class="modal fade" id="vendedores" tabindex="-1" role="dialog" aria-labelledby="vendedoresTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                          <h5 class="modal-title" id="vendedoresTitle">Registro</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form class="" action="" method="post">
                            <label>Nombre</label>
                            <input type="text" REQUIRED id="Nombre" value="">
                            <br>
                            <label>Apellido Paterno</label>
                            <input type="text" REQUIRED id="ApellidoPaterno" value="">
                            <br>
                            <label>Apellido Materno</label>
                            <input type="text" REQUIRED id="ApellidoMaterno" value="">
                            <br>
                            <label>Fecha de Nacimiento</label>
                            <input type="date" REQUIRED id="nac" value="">
                            <br>
                            <label>RfC</label>
                            <input type="text"REQUIRED id="RfC" value="">
                            <br>
                            <label>Telefono</label>
                            <input type="text"REQUIRED id="Telefono" value="">
                            <br>
                            <label>Direccion</label>
                            <input type="text"REQUIRED id="Direccion" value="">
                            <br>
                            <label>Colonia</label>
                            <select id="coloniav" >
                              <option value="0">Asigne colonia</option>



                              <?php
                               $sqal="SELECT * FROM colonia";
                               $resulta=mysqli_query($con,$sqal);
                                while ($vara=mysqli_fetch_array($resulta)) {  ?>
                                <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?></option>
                              <?php } ?>
                            </select>
                            <br>



                            <label>Municipio</label>

                            <select id="municipiov" >

                            <option value="0">Asigne municipio</option>

                            <?php

                             $sqal="SELECT * FROM municipio";
                             $resulta=mysqli_query($con,$sqal);
                              while ($vara=mysqli_fetch_array($resulta)) {  ?>
                              <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?></option>

                            <?php } ?>

                          </select>



                          <br>
                        <button type="button" onClick="enviarDatos();">Guardar</button>
                  </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                        </div>
                      </div>
                  <!-- FINALIZA FORMULARIO DE REGISTRO -->
      <!-- CONTENEDOR DAROS DE VENDEDOR  -->  </div>
      <!-- REGISTRO DE ITINERARIO --><div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div id="Titinerario"></div>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Itinerario">Registrar Itinerario</button>
    <!-- Modal -->
    <div class="modal fade" id="Itinerario" tabindex="-1" role="dialog" aria-labelledby="ItinerarioTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="ItinerarioTitle">Registro</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
    <form class="" action="../Funciones/Agregaritine.php" method="post">
      <label>Vendedor</label>
      <select name="vendedorev" >
      <option value="0">Asigne Vendedor</option>
      <?php
       $sqal="SELECT * FROM vendedores";
       $resulta=mysqli_query($con,$sqal);
        while ($vara=mysqli_fetch_array($resulta)) {  ?>
        <option value="<?php echo $vara[0] ?>"> <?php echo $vara[4] ?></option>
      <?php } ?>
    </select>
    <br>
    <label>Ruta</label>
    <select name="Rutav" >
    <option value="0">Asigne Ruta</option>
    <?php
     $sqal="SELECT * FROM ruta";
     $resulta=mysqli_query($con,$sqal);
      while ($vara=mysqli_fetch_array($resulta)) {  ?>
      <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?></option>
    <?php } ?>
    </select>
    <br>
    <label>MVehiculo</label>
    <select name="vehiculov" >
    <option value="0">Asigne vehiculo</option>
    <?php
     $sqal="SELECT * FROM vehiculo";
     $resulta=mysqli_query($con,$sqal);
      while ($vara=mysqli_fetch_array($resulta)) {  ?>
      <option value="<?php echo $vara[0] ?>"> <?php echo $vara[2] ?></option>
    <?php } ?>
    </select>
      <br>
      <label>Fecha</label>
      <input type="date" name="fecha" value="">
      <br>
      <label >Hora de Salida</label>
      <input type="time" name="sali" value="">
      <br>
      <label>Hora de LLegada</label>
      <input type="time" name="lleg" value="">
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

    <!-- REGISTRO DE ITINERARIO --></div>



    <!-- REGISTRO DE RUTAS --><div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

    <div id="TRuta"></div>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#rutas">Registro de Rutas</button>
    <div class="modal fade" id="rutas" tabindex="-1" role="dialog" aria-labelledby="rutasTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rutasTitle">Registro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
    <form class="" action="../Funciones/Agregarruta.php" method="post">
      <label>Nombre</label>
      <input type="text" name="ruta" value="">
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


    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#rutatienda">Aginaciones</button>
    <!-- REGISTRO DE RUTAS --></div>



    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="rutatienda" tabindex="-1" role="dialog" aria-labelledby="rutatiendaTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rutatiendaTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">


              <form class="" action="../Funciones/Agregarrutatienda.php" method="post">

                <label>Ruta</label>
                <select name="ruta" >
                  <option value="0">Asigne Ruta</option>
                  <?php
                   $sqal="SELECT * FROM ruta";
                   $resulta=mysqli_query($con,$sqal);
                    while ($vara=mysqli_fetch_array($resulta)) {  ?>
                    <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?></option>
                  <?php } ?>
                </select>
                <label>Clientes</label>
                <select name="clien" >
                  <option value="0">Asigne Clientes</option>
                  <?php
                   $sqal="SELECT * FROM clientes";
                   $resulta=mysqli_query($con,$sqal);
                    while ($vara=mysqli_fetch_array($resulta)) {  ?>
                    <option value="<?php echo $vara[0] ?>"> <?php echo $vara[4] ?></option>
                  <?php } ?>
                </select>

<input type="submit" name="Guardar" value="Guardar">

              </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>












    <!-- FiNALIZA EL CONTENEDOR -->  </div>



    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../Funciones/AgregarVendedorajax.js"></script>
    <script src="../js/validar.js"> </script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../alertify/alertify.js"></script>
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
