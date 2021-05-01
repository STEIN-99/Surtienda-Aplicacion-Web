<?php

include 'BaseDatos.php'; //conexion con la base de datos

session_start();

//El usuario y contraseña que se enviaron por el formulario, checa tus variables
$username=$_POST['usuario'];
$password=$_POST['contraseña'];

// La consulta donde se valida los datos

$consulta="select * from usuarios ";
$consulta.= "where  CORREO_ELEC='$username' and CONTRASENA='$password'";


$resultado=mysqli_query($con,$consulta);
$row=mysqli_fetch_array($resultado);

// Como yo tengo Cliente y Administrador realizo un arreglo donde verifico el tipo de ususario si es 0
//Lo enviara al  administrador si es 1 es cliente

if ($row[1]==$username && $row[2]=$password && $row[3] == 0 ) {

$_SESSION['usua']=$username;
header("Location:  Administrador.php");

}elseif ($row[1]==$username && $row[2]=$password && $row[3] == 1) {

$_SESSION['usua']=$username;
header("Location:  Inicio1.php");

//Si el usuario no se encuentra se envia un error.

}elseif (!$row[2]==$username && !$row[3]==$password){
  header("Location:  error.html");
}
  mysqli_close($con);
 ?>
