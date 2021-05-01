<?php

include '../funciones/BaseDatos.php'; 


$consulta="SELECT id_sucursal, nombre, direccion  FROM sucursales";


$resultado=mysqli_query($con,$consulta);
$row=mysqli_fetch_array($resultado);

echo(json_encode($row));
?>
