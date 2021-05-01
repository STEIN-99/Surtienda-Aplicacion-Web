<?php
include '../BaseDatos.php';


$idtien=$_POST['idtien'];
$nom=$_POST['nom'];
$direcc=$_POST['direcc'];


$sql=" UPDATE sucursales SET NOMBRE='$nom', DIRECCION='$direcc' WHERE ID_SUCURSAL='$idtien' ";
echo $E=mysqli_query($con,$sql);


if ("$sql") {
  header("location: ../Administrador/Sucursal.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
