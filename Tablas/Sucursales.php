<?php
include '../BaseDatos.php';
 ?>


<table class="table table-responsive">
  <thead class="thead">
    <tr>
      <th  scope="col">ID</th>
      <th  scope="col">Nombre</th>
      <th  scope="col">Direccion</th>

        <th  scope="col">Editar</th>
        <th  scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
            <?php
               $sucur="SELECT ID_SUCURSAL,NOMBRE,DIRECCION FROM sucursales";
               $mos=mysqli_query($con,$sucur);
              while($varia1=mysqli_fetch_array($mos)){
              ?>
<tr>
<td> <?php echo $varia1[0]?> </td>
<td> <?php echo $varia1[1]?> </td>
<td> <?php echo $varia1[2]?> </td>


<td class="text-center">
 <a href="../Funciones/FAtienda.php?ID=<?php echo $varia1[0]?>" class="btn btn-warning" role="button" aria-pressed="true"><i class="far fa-edit"></i></a>
 </td>

 <td class="text-center">

 <a href="../Funciones/Eliminartienda.php?ID=<?php echo $varia1[0]?>" class="btn btn-danger" role="button" aria-pressed="true"><i class="fas fa-times"></i></a>

</td>


    </tr>
<?php } ?>
  </tbody>
</table>
