<?php
include '../BaseDatos.php';





$producto=$_POST['producto'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$caducidad=$_POST['caducidad'];
$marcas=$_POST['marcas'];
$sucu=$_POST['sucu'];
$ni=$_POST['ni'];
$img=addslashes(file_get_contents($_FILES['img']['tmp_name']));


$descr=$_POST['descr'];

// $codigopostal=$_POST['codigopostal'];

$sql="INSERT INTO productos (ID_SUCURSAL,ID_MARCAS,NOMBRE,PRECIO_UNIT,CADUCIDAD,CANT,IMG,DESCRIP) VALUES('$sucu','$marcas','$producto','$precio','$caducidad','$cantidad','$img','$descr')";
echo $E=mysqli_query($con,$sql);

if ("$sql") {
  header("location: ../Administrador/Productos.php");
}else {
  echo "Error";
}
mysqli_close($con);


 ?>
