<?php

include 'BaseDatos.php'; 


$consulta="SELECT c.id_clientes, u.correo_elec, u.contrasena, c.nombre, c.apellido_mat, c.apellido_pat, c.direccion, c.telefono, c.nom_local
FROM clientes AS c, usuarios AS u
WHERE c.id_usua=u.id_usua";


$resultado=mysqli_query($con,$consulta);
$row=mysqli_fetch_array($resultado);

echo(json_encode($row));
?>
