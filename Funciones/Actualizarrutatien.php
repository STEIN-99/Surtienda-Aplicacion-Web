<?php
include '../BaseDatos.php';

$ruta=$_POST['ruta'];

$clien=$_POST['clien'];


$sql="UPDATE ruta_tiendas SET ID_RUTA='$ruta', ID_CLIENTE='$clien'";
echo $E=mysqli_query($con,$sql);


if ("$sql") {
  header("location: ../Administrador/Vendedores.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
