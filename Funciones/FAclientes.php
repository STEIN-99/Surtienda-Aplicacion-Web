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

<div class="formr">
  <form action="AgregarCliente.php" method="post" >
    <h2 class="formr-titulo">Formulario de registro</h2>
    <div class="contenedor">
      <form class="" action="../Funciones/AgregarCliente.php" method="post">


        <label >Nombre</label>
        <input type="text" name="cliente" value="">
        <br>
        <label >Apellido Paterno</label>
        <input type="text" name="paterno" value="">
        <br>
        <label >Apellido Materno</label>
        <input type="text" name="materno" value="">
        <br>
        <label >Nombre del Local</label>
        <input type="text" name="nlocal" value="">
        <br>
        <label >Nombre de usuario</label>
        <input type="text" name="usua" value="">
        <br>
        <label >Contraseña</label>
        <input type="password" name="contra" value="">
        <br>
        <label>Telefono</label>
        <input type="text" name="tel" value="">
        <br>
        <label>Direccion</label>
        <input type="text" name="direcc" value="">
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
