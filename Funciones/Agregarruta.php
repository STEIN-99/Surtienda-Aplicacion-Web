<?php
include '../BaseDatos.php';


$Rutav=$_POST['ruta'];


// $codigopostal=$_POST['codigopostal'];

$sql="INSERT INTO ruta (RUTAS) VALUES ('$Rutav')";
echo $E=mysqli_query($con,$sql);
if ("$sql") {
  header("location: ../Administrador/Vendedores.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
