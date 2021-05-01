<?php
include '../BaseDatos.php';


$matri=$_POST['matri'];
$corr=$_POST['corr'];
$feCH=$_POST['feCH'];
$src=$_POST['src'];
$mt=$_POST['mt'];
$disp=$_POST['disp'];
$descp=$_POST['descp'];



// $codigopostal=$_POST['codigopostal'];

$sql="INSERT INTO mantenimiento (ID_MATRICULA, MANT, FECHA, SUCURSAL, MONTO_TOT, DISPO, DESCRIP) VALUES ('$matri','$corr','$feCH','$src','$mt','$disp','$descp')";
echo $E=mysqli_query($con,$sql);
if ("$sql") {
  header("location: ../Administrador/Vehiculo.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
