<?php
include '../BaseDatos.php';


$vehic=$_POST['idvehi'];
$producto=$_POST['producto'];
$precioc=$_POST['precio'];
$Descripcion=$_POST['Descripcion'];
$cantidad=$_POST['cantidad'];
$vende=$_POST['vende'];

$sql=" UPDATE vehiculo SET ID_VENDEDOR='$vende', MODELO='$precioc', MOTOR='$Descripcion', MATRICULA='$producto',CAPAC='$cantidad' WHERE ID_MATRICULA='$vehic' ";

echo $E=mysqli_query($con,$sql);

header("location: ../Administrador/Vehiculo.php");

mysqli_close($con);


 ?>
