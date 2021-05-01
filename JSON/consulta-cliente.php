<?php 
require('conexion.php');
$con = Conectar();


$SQL = 'SELECT c.id_clientes, u.correo_elec, u.contrasena, c.nombre, c.apellido_mat, c.apellido_pat, c.direccion, c.telefono, c.nom_local
FROM clientes AS c, usuarios AS u
WHERE c.id_usua=u.id_usua';

$stmt = $con->prepare($SQL);
$result = $stmt->execute();
$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
echo(json_encode($rows));
?>