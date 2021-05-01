<?php
include '../BaseDatos.php';

$id = $_REQUEST['id'];


$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));



$sql = "UPDATE promociones SET PROMOCIONES='$imagen' WHERE ID_PROMO='$id' ";
 $reslt=mysqli_query($con,$sql);

if ($reslt) {
  header("Location: ../Administrador/Productos.php");
}else {
  echo "No";
}

mysqli_close($con);


 ?>
