<?php

include 'BaseDatos.php';


$idv=$_GET['ID_VENDEDOR'];


$sql="DELETE FROM vendedores  WHERE ID_VENDEDOR = $idv ";
echo $E=mysqli_query($con,$sql);

if ($sql) {
header("location: ../Administrador.php");
}else {
  echo "Error";
}


mysqli_close($con);


?>