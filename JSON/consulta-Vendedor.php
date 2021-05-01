<?php 
require('conexion.php');
$con = Conectar();


$SQL = 'SELECT id_vendedor, rfc, nombre, apellido_pat, apellido_mat, telefono, direccion, fecha_nac  FROM vendedores';

$stmt = $con->prepare($SQL);
$result = $stmt->execute();
$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
echo(json_encode($rows));
?>