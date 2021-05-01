<?php
include '../BaseDatos.php';


$sucursal=$_POST['sucursal'];
$direccions=$_POST['direccions'];


$sql="INSERT INTO sucursales (NOMBRE, DIRECCION) VALUES ('$sucursal','$direccions')";

echo $E=mysqli_query($con,$sql);


if ("$sql") {
  header("location: ../Administrador/Sucursal.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
