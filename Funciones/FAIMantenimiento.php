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

       $sucur="SELECT * FROM mantenimiento WHERE ID_MANT= '$id'";
       $result = $con->query($sucur);
       $row = $result->fetch_assoc();
      //  $mos=mysqli_query($con,$sucur);
      // while($varia1=mysqli_fetch_array($mos)){
      ?>



<div class="formr">
  <form action="ActualizarMantenimiento.php" method="post" >
    <h2 class="formr-titulo">Formulario de registro</h2>
    <div class="contenedor">

      <input type="text" hidden=""  name="idvehi" value="<?php echo $row['ID_MANT']; ?>" >

      <label>Vehiculo</label>
      <select name="matri" >
        <option value="0">Asigne Vehiculo</option>
        <?php
         $sqal="SELECT * FROM Vehiculo";
         $resulta=mysqli_query($con,$sqal);
          while ($vara=mysqli_fetch_array($resulta)) {  ?>
          <option value="<?php echo $vara[0] ?>"> <?php echo $vara[2] ?></option>
        <?php } ?>
      </select>
      <br>
      <label>Manenimiento correctivo</label>
      Si<input type="radio" name="corr" id="corr" value="0">
      No<input type="radio" name="corr" id="corr" value="1">
      <br>
      <label>Fecha </label>
      <input type="date" name="feCH" value="<?php echo $row['FECHA']; ?>">
      <br>
      <label>Sucursal</label>
      <input type="text" name="src" value="<?php echo $row['SUCURSAL']; ?>">
      <br>
      <label>Monto total</label>
      <input type="text" name="mt" value="<?php echo $row['MONTO_TOT']; ?>">
      <br>
      <label>Disponibilidad</label>
      si<input type="radio" name="disp" id="disp" value="0">
      no<input type="radio" name="disp" id="disp" value="1">
      <br>
      <label>Descripcion</label>
      <input type="text" name="descp" value="<?php echo $row['DESCR']; ?>">
      <br>
      <center><input type="submit" name="Guardar" value="Guardar" class="btn-enviar"></center>
      <br>

    </div>

  </form>
</div>






  </body>
</html>
