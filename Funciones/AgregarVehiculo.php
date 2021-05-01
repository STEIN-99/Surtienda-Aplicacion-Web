<?php
include '../BaseDatos.php';


$matri=$_POST['matri'];
$Modelo=$_POST['Modelo'];
$motor=$_POST['motor'];
$cdc=$_POST['cdc'];
$vendedores=$_POST['vendedores'];



// $codigopostal=$_POST['codigopostal'];

$sql="INSERT INTO vehiculo (ID_VENDEDOR, MODELO, MOTOR, MATRICULA, CAPAC) VALUES ('$vendedores','$Modelo','$motor','$matri','$cdc' )";

echo $E=mysqli_query($con,$sql);


if ("$sql") {
  header("location: ../Administrador/Vehiculo.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
