<?php
include '../BaseDatos.php';
 ?>
<br>
<center><h1>Vendedores</h1></center>
<br>
<table class="table table-responsive">
  <thead class="thead">
    <tr>
      <th scope="col">Vendedor</th>
      <th scope="col">Colonia </th>
      <th scope="col">Municipio</th>
      <th scope="col">rfc</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Fecha de Nacimiento</th>

        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>

            <?php


               $sucur="SELECT v.ID_VENDEDOR, c.NOMBRE, m.NOMBRE, v.RFC, v.NOMBRE, v.APELLIDO_PAT, v.APELLIDO_MAT, v.TELEFONO, v.DIRECCION, v.FECHA_NAC  FROM vendedores as v, colonia as c, municipio as m  WHERE v.ID_COLONIA=c.ID_COLONIA AND V.ID_MUNICIPIO=m.ID_MUNICIPIO";
               $mos=mysqli_query($con,$sucur);
               while($varia1=mysqli_fetch_array($mos)){
              ?>
<tr>
<td> <?php echo $varia1[0]?> </td>
<td> <?php echo $varia1[1]?> </td>
<td> <?php echo $varia1[2]?> </td>
<td> <?php echo $varia1[3]?> </td>
<td> <?php echo $varia1[4]?> </td>
<td> <?php echo $varia1[5]?> </td>
<td> <?php echo $varia1[6]?> </td>
<td> <?php echo $varia1[7]?> </td>
<td> <?php echo $varia1[8]?> </td>
<td> <?php echo $varia1[9]?> </td>

<td class="text-center">
 <!-- <button class="btn btn-warning" data-target="#Editar" onclick="Agregaform ><i class="far fa-edit"></i></button> -->

<a href="../Funciones/FAVendedor.php?ID=<?php echo $varia1['ID_VENDEDOR']; ?>"class="btn btn-warning" role="button" aria-pressed="true"><i class="far fa-edit"></i></a>

</td>
<td class="text-center">
 <a href="../Funciones/DeleteVendedor.php?ID=<?php echo $varia1['ID_VENDEDOR']; ?>"class="btn btn-danger" role="button" aria-pressed="true"><i class="fas fa-times"></i></a>
</td>
    </tr>
<?php } ?>
  </tbody>
</table>
