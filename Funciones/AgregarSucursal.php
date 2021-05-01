<?php
include 'BaseDatos.php';


$nombres=$_GET['nombres'];
$sucursal=$_GET['sucursal'];


$sql="INSERT INTO sucursales (NOMBRE, DIRECCION) VALUES ('$nombres','$sucursal')";

echo $E=mysqli_query($con,$sql);


if ("$sql") {
  echo "Error";
}else {
  echo "Error";
}



mysqli_close($con);


 ?>
<script>
