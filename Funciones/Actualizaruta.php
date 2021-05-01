<?php
include '../BaseDatos.php';


$ruta=$_POST['nom'];
$idvehi=$_POST['idruta'];


$sql="UPDATE ruta SET NOMBRE='$ruta' WHERE ID_RUTA='$idvehi' ";
echo $E=mysqli_query($con,$sql);


if ("$sql") {
  header("location: ../Administrador/Vendedores.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
