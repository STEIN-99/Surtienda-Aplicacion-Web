<?php
include '../BaseDatos.php';
 ?>


<br>
 <center><h1>Itinerario</h1></center>
<br>
<table class="table table-responsive">
  <thead class="thead">
    <tr>
      <th  scope="col">Id de Itinerario</th>
      <th  scope="col">Nombre del vendedor</th>
      <th  scope="col">Nombre de la ruta</th>
      <th  scope="col">Matricula del vehiculo</th>
      <th  scope="col">Fecha</th>
      <th  scope="col">Hora de salida</th>
      <th  scope="col">Hora de llegada</th>

        <th  scope="col">  Editar</th>
        <th  scope="col">  Eliminar</th>
    </tr>
  </thead>
  <tbody>
            <?php
               $sucur="SELECT i.ID_FECHA, e.NOMBRE, r.RUTAS, v.MATRICULA,i.FECHA,i.HORA_SALI, i.HORA_LLEG
               FROM itinerario AS i, vendedores AS e, ruta AS r, vehiculo AS v
               WHERE i.ID_VENDEDOR=e.ID_VENDEDOR AND i.ID_RUTA=r.ID_RUTA AND i.ID_MATRICULA=v.ID_MATRICULA ";
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
<td class="text-center">
 <!-- <button class="btn btn-warning" data-target="#Editar" onclick="Agregaform ><i class="far fa-edit"></i></button> -->
 <a href="../Funciones/FAItinerario.php?ID=<?php echo $varia1[0]?>" class="btn btn-warning" role="button" aria-pressed="true"><i class="far fa-edit"></i></a>
</td>
<td class="text-center">
 <a href="../Funciones/Eliminaritinerario.php?ID=<?php echo $varia1[0]?>" class="btn btn-danger" role="button" aria-pressed="true"><i class="fas fa-times"></i></a>
</td>
    </tr>
<?php } ?>
  </tbody>
</table>
