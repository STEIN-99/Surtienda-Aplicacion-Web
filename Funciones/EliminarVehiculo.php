<?php

include '../BaseDatos.php';


$idv=$_REQUEST['ID'];


$sql="DELETE FROM vehiculo  WHERE ID_MATRICULA='$idv' ";
echo $E=mysqli_query($con,$sql);

if ("$sql") {
  header("location: ../Administrador/Vehiculo.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
