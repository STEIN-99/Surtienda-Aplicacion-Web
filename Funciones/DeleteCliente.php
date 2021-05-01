<?php

include 'BaseDatos.php';


$idv=$_GET['ID_CLIENTES'];


$sql="DELETE FROM clientes WHERE ID_CLIENTES = $idv ";
echo $E=mysqli_query($con,$sql);

if ($sql) {
header("location: ../Administrador.php");
}else {
  echo "Error";
}


mysqli_close($con);


?>