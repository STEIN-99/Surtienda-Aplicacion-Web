<?php 
require('conexion.php');
$con = Conectar();


$SQL = 'SELECT id_pro, nombre, descrip, img, precio  FROM producto';

$stmt = $con->prepare($SQL);
$result = $stmt->execute();
$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
echo(json_encode($rows));
?>