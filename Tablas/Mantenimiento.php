<?php
include '../BaseDatos.php';
 ?>

 <br>
<center><h1>Vehiculo</h1><center>
<br>
 <table class="table table-responsive">
   <thead class="thead">
     <tr>
       <th scope="col">Id</th>
       <th scope="col">Matricula del vehiculo</th>
       <th scope="col">Mantenimiento</th>
       <th scope="col">Fecha</th>
       <th scope="col">Sucursal</th>
       <th scope="col">Monto totsl</th>
       <th scope="col">Disponibilidad</th>
       <th scope="col">Descripcion</th>

         <th scope="col">Editar</th>
         <th scope="col">Eliminar</th>
     </tr>
   </thead>
   <tbody>


             <?php
                $sucur="SELECT * FROM mantenimiento";




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




  <td class="text-center">
   <a href="../Funciones/FAIMantenimiento.php?ID=<?php echo $varia1[0]?>" class="btn btn-warning" role="button" aria-pressed="true"><i class="far fa-edit"></i></a>
   </td>

   <td class="text-center">

   <a href="../Funciones/EliminarmANT.php?ID=<?php echo $varia1[0]?>" class="btn btn-danger" role="button" aria-pressed="true"><i class="fas fa-times"></i></a>

  </td>
     </tr>

 <?php } ?>




   </tbody>
 </table>
