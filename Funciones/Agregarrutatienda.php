<?php
include '../BaseDatos.php';


$Rutav=$_POST['ruta'];
$cliente=$_POST['clien'];


// $codigopostal=$_POST['codigopostal'];

$sql="INSERT INTO ruta_tiendas (ID_RUTA,ID_CLIENTES) VALUES ('$Rutav','$cliente')";
echo $E=mysqli_query($con,$sql);
if ("$sql") {
  header("location: ../Administrador/Vendedores.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
