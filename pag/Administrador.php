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
    <img src="../img/Logo/Surtiendamx.jpg" width="200" height="50" alt="" >
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

<!-- Inicia Modal Productos -->
<form id="Reproductos" name="Reproductos">
<div id="modal-Aproductos" class="modal-con">
    <div class="modal">
        <h1>Registrar Productos</h1>
        <label>Marca</label>
                <select name="marcas" id="marcas" >
                <option value="0">Asigne Marca</option>
                <?php
                   $sqal="SELECT * FROM Marcas";
                    $resulta=mysqli_query($con,$sqal);
                    while ($vara=mysqli_fetch_array($resulta)) {  ?>
                    <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?></option>
                <?php } ?>
                </select>
        <br>
        <label>Nombre</label>
        <input type="text" REQUIRED name="prodcuto" id="prodcuto" value="">
        <br>
        <label>Descripcion</label>
        <input type="text" REQUIRED name="descrip" id="descrip" value="">
        <br>
        <label>Precio</label>
        <input type="text" REQUIRED name="precio" id="precio" value="">
        <br>
        <label>Imagen</label>
        <input type="file" REQUIRED name="img" id="img" value="">
        <br>
        <input onclick="registrarProductos();" type="button" value="Guardar">
        <span onclick="cerrarProductos();"  id="cerrar" class="cerrar">X</span>
    </div>
</div>
</form>
<!-- Finaliza Modal Productos -->

<!-- Inicia Modal Vendedores -->
<form id="RVendedor" name="RVendedor">
<div id="modal-Vendedores" class="modal-con">
    <div class="modal">
        <h1>Registrar Vendedores</h1>
        <br>
        <label>RFC</label>
        <input type="text" REQUIRED name="prodcuto" id="prodcuto" value="">
        <br>
        <label>Nombre</label>
        <input type="text" REQUIRED name="descrip" id="descrip" value="">
        <br>
        <label>Apellido paterno</label>
        <input type="text" REQUIRED name="precio" id="precio" value="">
        <br>
        <label>Apellido materno</label>
        <input type="text" REQUIRED name="precio" id="precio" value="">
        <br>
        <label>Telefono</label>
        <input type="text" REQUIRED name="precio" id="precio" value="">
        <br>
        <label>Direccion</label>
        <input type="text" REQUIRED name="precio" id="precio" value="">
        <br>
        <label>Fecha de nacimiento</label>
        <input type="date" REQUIRED name="caducidad" value="" required>
        <br>
        <input onclick="registrarSucursal();" type="button" value="Guardar">
        <span onclick="cerrarVendedores();"  id="cerrar" class="cerrar">X</span>
    </div>
</div>
</form>
<!-- Finaliza Modal Vendedores -->

<!-- Inicia Modal Clientes -->
<form id="RClientes" name="RClientes">
<div id="modal-Clientes" class="modal-con">
    <div class="modal">
        <h1>Registrar Clientes</h1>
        <br>
        <label>Usuario</label>
        <input type="text" REQUIRED name="prodcuto" id="prodcuto" value="">
        <br>
        <label>Contraseña</label>
        <input type="text" REQUIRED name="prodcuto" id="prodcuto" value="">
        <br>
        <label>Nombre</label>
        <input type="text" REQUIRED name="descrip" id="descrip" value="">
        <br>
        <label>Apellido paterno</label>
        <input type="text" REQUIRED name="precio" id="precio" value="">
        <br>
        <label>Apellido materno</label>
        <input type="text" REQUIRED name="precio" id="precio" value="">
        <br>
        <label>Telefono</label>
        <input type="text" REQUIRED name="precio" id="precio" value="">
        <br>
        <label>Direccion</label>
        <input type="text" REQUIRED name="precio" id="precio" value="">
        <br>
        <label>Nombre de local</label>
        <input type="text" REQUIRED name="precio" id="precio" value="">
        <br>
        <input onclick="registrarSucursal();" type="button" value="Guardar">
        <span onclick="cerrarClientes();"  id="cerrar" class="cerrar">X</span>
    </div>
</div>
</form>
<!-- Finaliza Modal Clientes -->

<!-- Inicia Modal Sucursales -->
<form id="Rsucursal" class="Rsucursal" name="Rsucursal">
<div id="modal-Sucursal" class="modal-con">
    <div class="modal">
        <h1>Registrar Sucursales</h1>
        <br>
        <label>Nombre</label>
        <input type="text" REQUIRED name="nombresucursal" id="nombresucursal" value="">
        <br>
        <label>Direccion</label>
        <input type="text" REQUIRED name="direccionSucursal" id="direccionSucursal" value="">
        <br>
        <input onclick="registrarSucursal();" type="button" value="Guardar">
        <span onclick=" cerrarSucursal();"  id="cerrar" class="cerrar">X</span>
    </div>
</div>
</form>
<!-- Finaliza Modal Sucursales -->



<!-- Inicia Tabla -->
<div id="Tablas" class="tablas"></div>
<script src="../JSON/Tabla-ajax.js"></script>
<script src="../admin-js/InsertProductos.js"></script>
<script src="../admin-js/InsertSucursal.js"></script>
<script src="../admin-js/DeleteTables.js"></script>
<script src="../admin-js/mostrarTablas.js"></script>
<script src="../admin-js/mostrarmodal.js"></script>
<script src="../js/inicio.js"></script>
</body>
</html>