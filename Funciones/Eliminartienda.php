<?php

include '../BaseDatos.php';


$idv=$_REQUEST['ID'];


$sql="DELETE FROM sucursales  WHERE ID_SUCURSAL='$idv' ";
echo $E=mysqli_query($con,$sql);

if ("$sql") {
  header("location: ../Administrador/Sucursal.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
