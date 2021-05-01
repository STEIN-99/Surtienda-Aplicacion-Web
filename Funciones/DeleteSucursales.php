<?php

include 'BaseDatos.php';


$idv=$_GET['ID_SUCURSAL'];


$sql="DELETE FROM sucursales  WHERE ID_SUCURSAL = $idv ";
echo $E=mysqli_query($con,$sql);

if ($sql) {
header("location: ../Administrador.php");
}else {
  echo "Error";
}


mysqli_close($con);


?>