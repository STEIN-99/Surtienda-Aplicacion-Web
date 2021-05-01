<?php

include '../BaseDatos.php';


$idv=$_REQUEST['ID'];


$sql="DELETE FROM productos  WHERE ID_PRODUCTOS='$idv' ";
echo $E=mysqli_query($con,$sql);

if ("$sql") {
  header("location: ../Administrador/Productos.php");
}else {
  echo "Error";
}

mysqli_close($con);


 ?>
