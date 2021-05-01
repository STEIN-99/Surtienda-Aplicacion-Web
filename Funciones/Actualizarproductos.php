<?php
include '../BaseDatos.php';




$idprodu=$_POST['idprod'];

$producto=$_POST['producto'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$caducidad=$_POST['caducidad'];
$marcas=$_POST['marcas'];
$sucu=$_POST['sucu'];
$descr=$_POST['descr'];

  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));﻿


// $codigopostal=$_POST['codigopostal'];

$sql="UPDATE productos SET ID_SUCURSAL='$sucu', ID_MARCAS='$marcas', NOMBRE='$producto', PRECIO_UNIT='$precio', CADUCIDAD='$caducidad', CANT='$cantidad', IMG='$imagen',DESCRIP='$descr' WHERE ID_PRODUCTOS='$idprodu' ";

echo $E=mysqli_query($con,$sql);

if ("$sql") {
  header("location: ../Administrador/Productos.php");
}else {
  echo "Error";
}

mysqli_close($con);


 ?>
