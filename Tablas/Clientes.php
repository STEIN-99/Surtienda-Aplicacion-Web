<?php
include '../BaseDatos.php';
 ?>
  <link rel="stylesheet" href="css/tablas.css">
 <table class="table table-responsive">
   <thead class="thead">
     <tr>
       <th scope="col">ID Cliente</th>
       <th scope="col">ID colonia </th>
       <th scope="col">ID municipio</th>
       <th scope="col">ID usuarios</th>
       <th scope="col">Nombre</th>
       <th scope="col">Apellido Paterno</th>
       <th scope="col">Apellido Materno</th>
       <th scope="col">Direccion</th>
       <th scope="col">Telefono</th>
       <th scope="col">Nombre del Local</th>

         <!-- <th scope="col">Editar</th> -->

     </tr>
   </thead>
   <tbody>

             <?php
                $sucur="SELECT * FROM clientes";
                $mos=mysqli_query($con,$sucur);
                $i = 0;
               while($vaia1=mysqli_fetch_array($mos)){
                 $cve[$i] = $vaia1[0];

               ?>
 <tr>
 <td> <?php echo $vaia1[0]?> </td>
 <td> <?php echo $vaia1[1]?> </td>
 <td> <?php echo $vaia1[2]?> </td>
 <td> <?php echo $vaia1[3]?> </td>
 <td> <?php echo $vaia1[4]?> </td>
 <td> <?php echo $vaia1[5]?> </td>
 <td> <?php echo $vaia1[6]?> </td>
 <td> <?php echo $vaia1[7]?> </td>
 <td> <?php echo $vaia1[8]?> </td>
 <td> <?php echo $vaia1[9];?> </td>

<?php $i++; ?>

 <!-- <td class="text-center">
   <a href="../Funciones/EliminarCLI.php?ID=<?php echo $cve[$i]?>" class="btn btn-danger" role="button" aria-pressed="true"><i class="fas fa-times"></i></a>
 </td> -->

     </tr>
 <?php } ?>
   </tbody>
 </table>
