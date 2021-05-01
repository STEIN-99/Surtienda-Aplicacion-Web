<?php

include '../BaseDatos.php';


$idv=$_REQUEST['ID'];


$sql="DELETE FROM clientes  WHERE ID_CLIENTES = $idv ";
echo $E=mysqli_query($con,$sql);

if ($sql) {
header("location: ../Administrador/Clientes.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
