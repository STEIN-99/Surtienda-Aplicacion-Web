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

       $sucur="SELECT * FROM promociones WHERE ID_PROMO= '$id'";
       $result = $con->query($sucur);
       $row = $result->fetch_assoc();

      ?>



<div class="formr">
  <form action="Actualizarpromo.php?id=<?php echo $row['ID_PROMO']; ?>" method="post" enctype="multipart/form-data" >
    <h2 class="formr-titulo">Formulario de registro</h2>
    <div class="contenedor">



      <label>Imagen:</label>
      <img height="50px" src="data:image/jpg;base64,<?php echo  base64_encode($row['PROMOCIONES']); ?>"/>
      <input type="file" REQUIRED name="imagen" value="" class="input-50">

      <center><input type="submit" name="Guardar" value="Guardar" class="btn-enviar"></center>
      <br>

    </div>

  </form>
</div>






  </body>
</html>
