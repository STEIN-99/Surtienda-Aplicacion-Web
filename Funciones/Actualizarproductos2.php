<?php
include '../BaseDatos.php';

$id = $_REQUEST['id'];

$sucursal = $_POST['vende'];
$marca = $_POST['marca'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$caducidad = $_POST['caducidad'];
$cantidad = $_POST['cantidad'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$descripcion = $_POST['descripcion'];


$sql = "UPDATE productos SET ID_SUCURSAL='$sucursal', ID_MARCAS='$marca', NOMBRE='$nombre', PRECIO_UNIT='$precio', CADUCIDAD='$caducidad', CANT='$cantidad', IMG='$imagen', DESCRIP='$descripcion'  WHERE ID_PRODUCTOS='$id' ";
 $reslt=mysqli_query($con,$sql);

if ($reslt) {
  header("Location: ../Administrador/Productos.php");
}else {
  echo "No";
}

mysqli_close($con);


 ?>
