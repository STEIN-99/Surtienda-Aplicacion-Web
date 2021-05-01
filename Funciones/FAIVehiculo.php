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

       $sucur="SELECT * FROM  vehiculo WHERE ID_MATRICULA = '$id'";
       $result = $con->query($sucur);
       $row = $result->fetch_assoc();
      //  $mos=mysqli_query($con,$sucur);
      // while($varia1=mysqli_fetch_array($mos)){
      ?>



<div class="formr">
  <form action="Actualizarvehiculo.php" method="post" >
    <h2 class="formr-titulo">Formulario de registro</h2>
    <div class="contenedor">

      <form class="" action="Actualizarvehiculo.php" method="post" enctype="multipart/form-data" >

        <input type="text" hidden="" name="idvehi" value="<?php echo $row['ID_MATRICULA']; ?>">

      <label>Martricula</label>
      <input type="text" name="producto" value="<?php echo $row['MATRICULA']; ?>" required>
      <br>
      <label>Modelo del vehiculo</label>
      <input type="text" name="precio" value="<?php echo $row['MODELO']; ?>" required>
      <br>
      <label>Motor</label>
      <input type="text" name="Descripcion" value="<?php echo $row['MOTOR']; ?>" required>
      <br>
      <label>Capacidad de carga</label>
      <input type="text" name="cantidad" value="<?php echo $row['CAPAC']; ?>" required>
      <br>



      <label>Vendedor</label>
      <select name="vende" >
        <option value="<?php echo $row['ID_VENDEDOR']; ?>">Vendedor Id: <?php echo $row['ID_VENDEDOR']; ?></option>
        <?php
         $sqal="SELECT * FROM vendedores";
         $resulta=mysqli_query($con,$sqal);
          while ($vara=mysqli_fetch_array($resulta)) {  ?>
            <option value="<?php echo $vara[0] ?>"> <?php echo $vara[4] ?> con Id: <?php echo $vara[0] ?></option>
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
