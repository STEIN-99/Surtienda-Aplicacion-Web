<?php
include '../BaseDatos.php';

$vendedorev=$_POST['vendedorev'];
$Rutav=$_POST['Rutav'];
$vehiculov=$_POST['vehiculov'];
$fecha=$_POST['fecha'];
$sali=$_POST['sali'];
$lleg=$_POST['lleg'];

// $codigopostal=$_POST['codigopostal'];

$sql="INSERT INTO itinerario (ID_VENDEDOR,ID_RUTA,ID_MATRICULA,HORA_SALI,HORA_LLEG,FECHA) VALUES ('$vendedorev','$Rutav','$vehiculov','$sali','$lleg','$fecha')";
echo $E=mysqli_query($con,$sql);
if ("$sql") {
  header("location: ../Administrador/Vendedores.php");
}else {
  echo "Error";
}


mysqli_close($con);


 ?>
