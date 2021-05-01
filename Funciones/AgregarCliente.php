<?php
include '../BaseDatos.php';


$cliente=$_POST['cliente'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$nlocal=$_POST['nlocal'];
$usua=$_POST['usua'];
$contra=$_POST['contra'];
$tel=$_POST['tel'];
$direcc=$_POST['direcc'];
$coloniac=$_POST['coloniac'];
$municipioc=$_POST['municipioc'];


// $codigopostal=$_POST['codigopostal'];
$sqq="INSERT INTO usuarios VALUES (null,'$usua','$contra',1)";
echo $a=mysqli_query($con,$sqq);
$sql="INSERT INTO clientes  VALUES (null, '$municipioc','$coloniac',LAST_INSERT_ID(),'$cliente','$paterno','$materno','$direcc','$tel','$nlocal')";
echo $E=mysqli_query($con,$sql);

  header("location: ../Inicio.php");


mysqli_close($con);


 ?>
