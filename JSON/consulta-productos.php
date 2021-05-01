<?php 
require('conexion.php');
$con = Conectar();


$SQL = 'SELECT p.id_pro, m.marca, p.nombre, p.descrip, p.img, p.precio
FROM  producto AS p, marcas AS m 
WHERE  p.id_marcas=m.id_marcas';

$stmt = $con->prepare($SQL);
$result = $stmt->execute();
$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
echo(json_encode($rows));
?>