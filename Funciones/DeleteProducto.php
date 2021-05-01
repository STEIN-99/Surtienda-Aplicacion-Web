<?php

include 'BaseDatos.php';


$idv=$_GET['ID_PRO'];


$sql="DELETE FROM producto  WHERE ID_PRO = $idv ";
echo $E=mysqli_query($con,$sql);

if ($sql) {
header("location: ../Administrador.php");
}else {
  echo "Error";
}


mysqli_close($con);


?>