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


       $sucur="SELECT * FROM ruta_tiendas";
       $result = $con->query($sucur);
       $row = $result->fetch_assoc();
      //  $mos=mysqli_query($con,$sucur);
      // while($varia1=mysqli_fetch_array($mos)){
      ?>



<div class="formr">
  <form action="Actualizarrutatien.php" method="post" >
    <h2 class="formr-titulo">Formulario de registro</h2>
    <div class="contenedor">

      <label>Ruta</label>
      <select name="ruta" >
        <option value="0">Asigne Ruta</option>
        <?php
         $sqal="SELECT * FROM ruta";
         $resulta=mysqli_query($con,$sqal);
          while ($vara=mysqli_fetch_array($resulta)) {  ?>
          <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?></option>
        <?php } ?>
      </select>
      <label>Clientes</label>
      <select name="clien" >
        <option value="0">Asigne Clientes</option>
        <?php
         $sqal="SELECT * FROM clientes";
         $resulta=mysqli_query($con,$sqal);
          while ($vara=mysqli_fetch_array($resulta)) {  ?>
          <option value="<?php echo $vara[0] ?>"> <?php echo $vara[4] ?></option>
        <?php } ?>
      </select>
      <br>
    </div>
 <input type="submit" name="Guardar" value="Guardar">
  </form>
</div>






  </body>
</html>
