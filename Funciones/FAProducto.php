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

       $sucur="SELECT * FROM productos WHERE ID_PRODUCTOS= '$id'";
       $result = $con->query($sucur);
       $row = $result->fetch_assoc();
      //  $mos=mysqli_query($con,$sucur);
      // while($varia1=mysqli_fetch_array($mos)){
      ?>



<div class="formr">
  <form action="Actualizarproductos2.php?id=<?php echo $row['ID_PRODUCTOS']; ?>" method="post" enctype="multipart/form-data" >
    <h2 class="formr-titulo">Formulario de registro</h2>
    <div class="contenedor">



            <label>Sucursales</label>
            <select name="vende" >
              <option value="<?php echo $row['ID_SUCURSAL']; ?>">Sucursal Id: <?php echo $row['ID_SUCURSAL']; ?></option>
              <?php
               $sqal="SELECT * FROM sucursales";
               $resulta=mysqli_query($con,$sqal);
                while ($vara=mysqli_fetch_array($resulta)) {  ?>
                  <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?> con Id: <?php echo $vara[0] ?></option>
              <?php } ?>
            </select>
            <br>
            <label>Marcas</label>
            <select name="marca" >
              <option value="<?php echo $row['ID_MARCAS']; ?>">Marca Id: <?php echo $row['ID_MARCAS']; ?></option>
              <?php
               $sqal="SELECT * FROM marcas";
               $resulta=mysqli_query($con,$sqal);
                while ($vara=mysqli_fetch_array($resulta)) {  ?>
                  <option value="<?php echo $vara[0] ?>"> <?php echo $vara[1] ?> con Id: <?php echo $vara[0] ?></option>
              <?php } ?>
            </select>
            <br>
            <label>Nombre:</label>
            <input type="text" REQUIRED name="nombre" value="<?php echo $row['NOMBRE']; ?>" class="input-50">
            <br>
            <label>Precio:</label>
            <input type="text" REQUIRED name="precio" value="<?php echo $row['PRECIO_UNIT']; ?>" class="input-50">
            <br>
            <label>Caducidad:</label>
            <input type="date" REQUIRED name="caducidad" value="<?php echo $row['CADUCIDAD']; ?>" class="input-50">
            <br>
            <label>Cantidad:</label>
            <input type="text" REQUIRED name="cantidad" value="<?php echo $row['CANT']; ?>" class="input-50">
            <br>
            <label>Imagen:</label>
            <img height="50px" src="data:image/jpg;base64,<?php echo  base64_encode($row['IMG']); ?>"/>
            <input type="file" REQUIRED name="imagen" value="" class="input-50">
            <br>
            <label>Descripcion:</label>
            <input type="text" REQUIRED name="descripcion" value="<?php echo $row['DESCRIP']; ?>" class="input-50">
            <br>




      <center><input type="submit" name="Guardar" value="Guardar" class="btn-enviar"></center>
      <br>

    </div>

  </form>
</div>






  </body>
</html>
