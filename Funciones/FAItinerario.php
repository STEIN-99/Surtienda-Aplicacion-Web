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

       $sucur="SELECT * FROM itinerario WHERE ID_FECHA= '$id'";
       $result = $con->query($sucur);
       $row = $result->fetch_assoc();
      //  $mos=mysqli_query($con,$sucur);
      // while($varia1=mysqli_fetch_array($mos)){
      ?>



<div class="formr">
  <form action="ActualizarItinerario.php" method="post" >
    <h2 class="formr-titulo">Formulario de registro</h2>
    <div class="contenedor">

      <input type="text" hidden=""  name="idvehi" value="<?php echo $row['ID_FECHA']; ?>" >

      <label>VENDEDOR</label>
      <select REQUIRED name="vend">
        <option value="0">Id del vendedor: <?php echo $row['ID_VENDEDOR']; ?></option>
        <?php
         $sqal="SELECT * FROM vendedores";
         $resulta=mysqli_query($con,$sqal);
          while ($vara=mysqli_fetch_array($resulta)) {  ?>
          <option value="<?php echo $vara[0] ?>"> <?php echo $vara[4] ?> con Id: <?php echo $vara[0] ?> </option>
        <?php } ?>
      </select>
      <label>RUTA</label>
      <select REQUIRED name="ruta">
        <option value="0">Ruta con Id: <?php echo $row['ID_RUTA']; ?></option>
        <?php
         $sqal="SELECT * FROM ruta";
         $resulta=mysqli_query($con,$sqal);
          while ($vara=mysqli_fetch_array($resulta)) {  ?>
          <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?> con Id: <?php echo $vara[0] ?></option>
        <?php } ?>
      </select>
      <label>Vehiculo</label>
      <select REQUIRED name="vehic">
        <option value="0">Vehiculo con Id: <?php echo $row['ID_MATRICULA']; ?></option>
        <?php
         $sqal="SELECT * FROM vehiculo";
         $resulta=mysqli_query($con,$sqal);
          while ($vara=mysqli_fetch_array($resulta)) {  ?>
          <option value="<?php echo $vara[0] ?>"> <?php echo $vara[2] ?> con Id: <?php echo $vara[0] ?></option>
        <?php } ?>
      </select>
      <br>
      <br>
      <label>HORA DE SALIDA:</label>
      <input type="time" REQUIRED name="horasal" value="<?php echo $row['HORA_SALI']; ?>" class="input-100">
      <br>
      <label>HORA DE LLEGADA:</label>
      <input type="time" REQUIRED name="horalle" value="<?php echo $row['HORA_LLEG']; ?>" class="input-50">
      <label>Fecha</label>
      <input type="date" REQUIRED name="fecha" value="">
      <br>
      <center><input type="submit" name="Guardar" value="Guardar" class="btn-enviar"></center>
      <br>

    </div>

  </form>
</div>






  </body>
</html>
