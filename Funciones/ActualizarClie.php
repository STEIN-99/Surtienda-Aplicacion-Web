<?php
include '../BaseDatos.php';

 ?>

<?php

  $id=$_REQUEST['ID'];


$sucur="SELECT * FROM clientes WHERE ID_CLIENTES= '$id'";
$result = $con->query($sucur);
$row = $result->fetch_assoc();




 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
<link rel="stylesheet" href="../css/sfomu.css">

  </head>
  <body>

<div class="formr">
  <form action="AgregarCliente.php" method="post" >
    <h2 class="formr-titulo">Formulario de registro</h2>
    <div class="contenedor">
      <form class="" action="../Funciones/AgregarCliente.php" method="post">






        <label >Nombre</label>
        <input type="text" name="cliente" value="<?php echo $row['NOMBRE']; ?>">
        <br>
        <label >Apellido Paterno</label>
        <input type="text" name="paterno" value="<?php echo $row['APELLIDO_PAT']; ?>">
        <br>
        <label >Apellido Materno</label>
        <input type="text" name="materno" value="<?php echo $row['APELLIDO_MAT']; ?>">
        <br>
        <label >Nombre del Local</label>
        <input type="text" name="nlocal" value="<?php echo $row['NOM_LOCAL']; ?>">
        <br>
        <label >Nombre de usuario</label>
        <input type="text" name="usua" value="<?php echo $row['ID_USUARIOS']; ?>">
        <br>
        <label>Telefono</label>
        <input type="text" name="tel" value="<?php echo $row['TELEFONO']; ?>">
        <br>
        <label>Direccion</label>
        <input type="text" name="direcc" value="<?php echo $row['DIRECCION']; ?>">
        <br>
        <label>Colonia</label>
        <select name="coloniac" >
          <option value="0">Asigne colonia</option>
          <?php
           $sqal="SELECT * FROM colonia";
           $resulta=mysqli_query($con,$sqal);
            while ($vara=mysqli_fetch_array($resulta)) {  ?>
            <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?></option>
          <?php } ?>
        </select>
        <br>
        <label>Municipio</label>
        <select name="municipioc" >
        <option value="0">Asigne municipio</option>
        <?php
         $sqal="SELECT * FROM municipio";
         $resulta=mysqli_query($con,$sqal);
          while ($vara=mysqli_fetch_array($resulta)) {  ?>
          <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?></option>
        <?php } ?>
      </select>
      <br>
      <input type="submit" name="Guardar" value="Guardar">
      </form>
    </div>
  </form>
</div>

  </body>
</html>
