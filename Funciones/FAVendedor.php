<?php
include '../BaseDatos.php';
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
<link rel="stylesheet" href="../css/sfomu.css">



  </head>
  <body>

    <?php

    $id=$_REQUEST['ID'];

       $sucur="SELECT * FROM vendedores WHERE ID_VENDEDOR= '$id'";
       $result = $con->query($sucur);
       $row = $result->fetch_assoc();
      //  $mos=mysqli_query($con,$sucur);
      // while($varia1=mysqli_fetch_array($mos)){
      ?>



<div class="formr">
  <form action="ActualizarVendedor.php" method="post" >
    <h2 class="formr-titulo">Formulario de registro</h2>
    <div class="contenedor">

      <input type="text" hidden="" id="idvehi" name="idvehi" value="<?php echo $row['ID_VENDEDOR']; ?>">

      <label>COLONIA</label>
      <select name="colon" >
        <option value="0">Asigne Colonia</option>
        <?php
         $sqal="SELECT * FROM colonia";
         $resulta=mysqli_query($con,$sqal);
          while ($vara=mysqli_fetch_array($resulta)) {  ?>
          <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?></option>
        <?php } ?>
      </select>
      <label>MUNICIPIO</label>
      <select name="muni" >
        <option value="0">Asigne municipio</option>
        <?php
         $sqal="SELECT * FROM municipio";
         $resulta=mysqli_query($con,$sqal);
          while ($vara=mysqli_fetch_array($resulta)) {  ?>
          <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?></option>
        <?php } ?>
      </select>
      <br>
      <br>
      <label>RFC:</label>
      <input type="text" name="rfc" value="<?php echo $row['RFC']; ?>" class="input-100" required>
      <label>NOMBRE:</label>
      <input type="text" name="nombre" value="<?php echo $row['NOMBRE']; ?>" class="input-50" required>
      <label>APELLIDO PATERNO:</label>
      <input type="text" name="app" value="<?php echo $row['APELLIDO_PAT']; ?>" class="input-50" required>
      <br>
      <label>APELLIDO MATERNO:</label>
      <input type="text" name="apm" value="<?php echo $row['APELLIDO_MAT']; ?>" class="input-50" required>
      <br>
      <label>TELEFONO:</label>
      <input type="text" name="tel" value="<?php echo $row['TELEFONO']; ?>" class="input-100" required>
      <label>DIRECCION:</label>
      <input type="text" name="direc" value="<?php echo $row['DIRECCION']; ?>" class="input-100" required>
      <label>FECHA DE NACIMINETO:</label>
      <input type="date" name="fen" value="<?php echo $row['FECHA_NAC']; ?>" class="input-50" required>
      <br>
      <center><input type="submit" name="Guardar" value="Guardar" class="btn-enviar"></center>
      <br>

    </div>

  </form>
</div>






  </body>
</html>
