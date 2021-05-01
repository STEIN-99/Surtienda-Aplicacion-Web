<?php
include 'BaseDatos.php';

$marca=$_GET['marca'];
$producto=$_GET['producto'];
$de=$_GET['de'];
$pre=$_GET['pre'];
$imag=$_GET['imag'];


$sql="INSERT INTO producto (ID_MARCAS,NOMBRE,DESCRIP,IMG,PRECIO) 
VALUES('$marca','$producto','$de','$imag','$pre')";

echo $E=mysqli_query($con,$sql);

if ("$sql") {
  echo "sda";
}else {
  echo "Error";
}
mysqli_close($con);


 ?>
