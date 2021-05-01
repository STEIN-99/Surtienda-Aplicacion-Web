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

$sql="UPDATE mantenimiento SET ID_MATRICULA='$matri', MANT='$corr', FECHA='$feCH', SUCURSAL='$src', MONTO_TOT='$mt', DISPO='$disp', DESCRIP='$descp' WHERE ID_MANTENIMIENTO='idvehi' ";
echo $E=mysqli_query($con,$sql);
if ("$sql") {
  header("location: ../Administrador/Vehiculo.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
