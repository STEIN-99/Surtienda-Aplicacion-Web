<?php
include '../BaseDatos.php';
 ?>

<div id="contenedor">



  <table class="table table-responsive">
    <thead class="thead">
      <tr>
        <th  scope="col">ID</th>
        <th  scope="col">Imagen</th>


          <th  scope="col">Editar</th>
          <th  scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
              <?php
                 $sucur="SELECT * FROM promociones";
                 $mos=mysqli_query($con,$sucur);
                while($varia1=mysqli_fetch_array($mos)){
                ?>
  <tr>
  <td> <?php echo $varia1[0]?> </td>
  <td>  <img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($varia1[1]); ?>"/></td>


  <td class="text-center">
   <a href="../Funciones/FApromo.php?ID=<?php echo $varia1[0]?>" class="btn btn-warning" role="button" aria-pressed="true"><i class="far fa-edit"></i></a>
   </td>

   <td class="text-center">

   <a href="../Funciones/Eliminarpromo.php?ID=<?php echo $varia1[0]?>" class="btn btn-danger" role="button" aria-pressed="true"><i class="fas fa-times"></i></a>

  </td>


      </tr>
  <?php } ?>
    </tbody>
  </table>


</div>
