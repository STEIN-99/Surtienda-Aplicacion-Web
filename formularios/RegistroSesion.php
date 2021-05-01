<?php
include '../funciones/BaseDatos.php';
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
<link rel="stylesheet" href="../css/registrologin.css">

  </head>
  <body>

<div class="formr">
  <form id="form" >
    <h2 class="formr-titulo">Formulario de registro</h2>
    <div class="contenedor">
      <form  class="" >


        <label >Nombre</label>
        <input id="cliente" type="text" name="cliente" value="">
        <br>
        <label >Apellido Paterno</label>
        <input id="Apaterno" type="text" name="paterno" value="">
        <br>
        <label >Apellido Materno</label>
        <input id="Amaterno" type="text" name="materno" value="">
        <br>
        <label >Nombre del Local</label>
        <input id="Nombrel" type="text" name="nlocal" value="">
        <br>
        <label >Correo</label>
        <input id="NombreU" type="text" name="usua" value="">
        <br>
        <label >Contraseña</label>
        <input id="pass" type="password" name="contra" value="">
        <br>
        <label>Telefono</label>
        <input id="Tel" type="text" name="tel" value="">
        <br>
        <label>Direccion</label>
        <input id="direcc" type="text" name="direcc" value="">
        <br>
      <br>
      <center> <input id="guardar" type="submit" name="Guardar" value="Guardar"></center> 
      </form>
    </div>
  </form>
</div>
<script src="../js/Validarusuarios.js"></script>
  </body>
</html>
