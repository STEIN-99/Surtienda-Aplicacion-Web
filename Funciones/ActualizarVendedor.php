<?php
include '../BaseDatos.php';




$producto=$_POST['idvehi'];
$colonia=$_POST['colon'];
$municipio=$_POST['muni'];
$rfc=$_POST['rfc'];
$nombre=$_POST['nombre'];
$app=$_POST['app'];
$apm=$_POST['apm'];
$telef=$_POST['tel'];
$dire=$_POST['direc'];
$FE=$_POST['fen'];

// $codigopostal=$_POST['codigopostal'];

$sql="UPDATE vendedores SET ID_COLONIA='$colonia',ID_MUNICIPIO='$municipio',RFC='$rfc',NOMBRE='$nombre',APELLIDO_PAT='$app',APELLIDO_MAT='$apm',TELEFONO='$telef',DIRECCION='$dire',FECHA_NAC='$FE' WHERE ID_VENDEDOR='$producto' ";
echo $E=mysqli_query($con,$sql);

if ("$sql") {
header("location: ../Administrador/Vendedores.php");
}else {
  echo "Error";
}

mysqli_close($con);


 ?>
