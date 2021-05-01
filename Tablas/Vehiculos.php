<?php
include '../BaseDatos.php';
 ?>

 <br>
<center><h1>Vehiculo</h1><center>
<br>
 <table class="table table-responsive">
   <thead class="thead">
     <tr>
       <th scope="col">Id del vehiculo </th>
       <th scope="col">Vendedor</th>
       <th scope="col">Matricula</th>
       <th scope="col">Modelo del vehiculo</th>
       <th scope="col">Motor</th>
       <th scope="col">Capacidad de carga</th>

         <th scope="col">Editar</th>
         <th scope="col">Eliminar</th>
     </tr>
   </thead>
   <tbody>


             <?php
                $sucur="SELECT v.ID_MATRICULA, ve.NOMBRE, v.MATRICULA, v.MODELO, v.MOTOR, v.CAPAC
                        FROM vehiculo as v, vendedores as ve
                        WHERE v.ID_VENDEDOR=ve.ID_VENDEDOR ";




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


  <td class="text-center">
   <a href="../Funciones/FAIVehiculo.php?ID=<?php echo $varia1[0]?>" class="btn btn-warning" role="button" aria-pressed="true"><i class="far fa-edit"></i></a>
   </td>

   <td class="text-center">

   <a href="../Funciones/EliminarVehiculo.php?ID=<?php echo $varia1[0]?>" class="btn btn-danger" role="button" aria-pressed="true"><i class="fas fa-times"></i></a>

  </td>
     </tr>

 <?php } ?>




   </tbody>
 </table>
