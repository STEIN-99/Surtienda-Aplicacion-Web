<?php
include '../BaseDatos.php';

$imagen = addslashes(file_get_contents($_FILES['promocion']['tmp_name']));

$sql="INSERT INTO promociones (PROMOCIONES) VALUES ('$imagen')";
echo $E=mysqli_query($con,$sql);

if ("$sql") {
  header("location: ../Administrador/Productos.php");
}else {
  echo "Error";
}
mysqli_close($con);


 ?>
