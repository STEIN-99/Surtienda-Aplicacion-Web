<?php
include '../BaseDatos.php';

$fech=$_POST['idvehi'];

$vende=$_POST['vend'];

$ruta=$_POST['ruta'];

$vehic=$_POST['vehic'];

$fecha=$_POST['fecha'];

$horasa=$_POST['horasal'];

$horalle=$_POST['horalle'];


$sql="UPDATE itinerario SET ID_VENDEDOR='$vende', ID_RUTA='$ruta', ID_MATRICULA='$vehic', HORA_SALI='$horasa', HORA_LLEG='$horalle', FECHA='$fecha' WHERE ID_FECHA='$fech' ";
echo $E=mysqli_query($con,$sql);


if ("$sql") {
  header("location: ../Administrador/Vendedores.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
