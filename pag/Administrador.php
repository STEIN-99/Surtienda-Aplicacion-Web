<?php
session_start();
include '../funciones/BaseDatos.php';
?>

<?php
  if (!$_SESSION) {
  header("Location: ../Index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Solo para iconos -->
   
        <!-- //Solo para iconos -->
    <link rel="stylesheet" href="../css/Inicio.css">
    <link rel="stylesheet" href="../css/tabla.css">
    <link rel="stylesheet" href="../css/modal.css">
  <!--  <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
    <title>Administracion Surtienda</title>
</head>
<body>



<!-- Menu de navegacion -->
<header>
<nav>
    <div class="logo" >
    <a href="Administrador.php">
    <img src="../img/Logo/Surtiendamx.jpg" width="200" height="50" alt="">
    </a>
    </div>

    <ul class="navbar">
                <li><button onclick="mostrarProductos()">Productos</button></li>
                <li><button onclick="mostrarVendedores()">Vendedores</button></li>
                <li><button onclick="mostrarClientes()">Clientes</button></li>
                <li><button onclick="mostrarSucursales()">Sucursales</button></li>
            </ul>
            
    <div class="navbarh">
        <div class="linea1"></div>
        <div class="linea2"></div>
        <div class="linea3"></div>
    </div>
</nav>


<!-- Detalle amarillo -->
<nav class="nav2">
    <ul class="navbar">
                <li><a class="activo" href="../funciones/cerrar.php">Cerrar sesion</a></li>
    </ul>
</nav>


<!-- Inicia Tabla -->
<div id="Tablas"></div>


</div>
<!-- Finaliza inicia Tabla -->



<script src="../admin-js/DeleteTables.js"></script>
<script src="../admin-js/mostrarTablas.js"></script>

<script src="../js/modal.js"></script>
<script src="../js/inicio.js"></script>


</body>
</html>