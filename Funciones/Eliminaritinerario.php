<?php

include '../BaseDatos.php';


$idv=$_REQUEST['ID'];


$sql="DELETE FROM itinerario  WHERE ID_FECHA='$idv' ";
echo $E=mysqli_query($con,$sql);

if ("$sql") {
header("location: ../Administrador/Vendedores.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
