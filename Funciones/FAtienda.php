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

       $sucur="SELECT * FROM sucursales WHERE ID_SUCURSAL= '$id'";
       $result = $con->query($sucur);
       $row = $result->fetch_assoc();
      //  $mos=mysqli_query($con,$sucur);
      // while($varia1=mysqli_fetch_array($mos)){
      ?>



<div class="formr">
  <form action="Actualizartienda.php" method="post" >
    <h2 class="formr-titulo">Formulario de registro</h2>
    <div class="contenedor">

      <input type="text" hidden=""  name="idtien" value="<?php echo $row['ID_SUCURSAL']; ?>" >

      <label>NOMBRE:</label>
      <input type="text" name="nom" value="<?php echo $row['NOMBRE']; ?>" class="input-50" required>
      <br>
      <label>DIRECCION:</label>
      <input type="text" name="direcc" value="<?php echo $row['DIRECCION']; ?>" class="input-50" required>

      <center><input type="submit" name="Guardar" value="Guardar" class="btn-enviar"></center>
      <br>

    </div>

  </form>
</div>






  </body>
</html>
