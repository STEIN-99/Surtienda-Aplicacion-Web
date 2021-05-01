<?php
include '../BaseDatos.php';

$Coloniav=$_POST['coloniav'];
$municipio=$_POST['municipiov'];
$nombre=$_POST['Nombre'];
$refc=$_POST['RfC'];
$apellidom=$_POST['ApellidoMaterno'];
$apellidop=$_POST['ApellidoPaterno'];
$telefono=$_POST['Telefono'];
$direccion=$_POST['Direccion'];
$fecha=$_POST['nac'];

// $codigopostal=$_POST['codigopostal'];

$sql="INSERT INTO vendedores (ID_COLONIA,ID_MUNICIPIO,RFC,NOMBRE,APELLIDO_PAT,APELLIDO_MAT,TELEFONO,DIRECCION,FECHA_NAC)
VALUES('$Coloniav','$municipio','$refc','$nombre','$apellidop','$apellidom','$telefono','$direccion','$fecha')";
echo $E=mysqli_query($con,$sql);
if ("$sql") {
  echo 2;

}


mysqli_close($con);


 ?>
