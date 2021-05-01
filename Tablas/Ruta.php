<?php
include '../BaseDatos.php';
 ?>

<br>
<center>
 <h1>Informacion de las Rutas</h1></center>
 <br>
  <table class="table table-responsive">
    <thead class="thead">
      <tr>
        <th scope="col">Nombre de Ruta</th>
        <th scope="col">Nombre del Cliente</th>
        <th scope="col">Nombre del Local</th>


          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>


              <?php
                 $sucur="SELECT  r.RUTAS AS 'Nombre de Ruta',  c.NOMBRE AS 'Nombre del Cliente', c.NOM_LOCAL AS 'Nombre del Local'
                 FROM ruta AS r, clientes AS c, ruta_tiendas AS d
                 WHERE d.ID_RUTA=r.ID_RUTA AND d.ID_CLIENTES=c.ID_CLIENTES ";




                 $mos=mysqli_query($con,$sucur);
                while($varia1=mysqli_fetch_array($mos)){


                ?>
  <tr>
  <td> <?php echo $varia1[0]?> </td>
  <td> <?php echo $varia1[1]?> </td>
    <td> <?php echo $varia1[2]?> </td>

   <td class="text-center">
    <a href="../Funciones/FARutatienda.php" class="btn btn-warning" role="button" aria-pressed="true"><i class="far fa-edit"></i></a>
    </td>

    <td class="text-center">

    <a href="../Funciones/Eliminarruta.php?ID=<?php echo $varia1[0]?>" class="btn btn-danger" role="button" aria-pressed="true"><i class="fas fa-times"></i></a>

   </td>
      </tr>

  <?php } ?>




    </tbody>
  </table>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<br>
<center>
<h1>Agregar rutas</h1></cnter>
<br>
 <table class="table table-responsive">
   <thead class="thead">
     <tr>
       <th scope="col">ID</th>
       <th scope="col">Nombre</th>


         <th scope="col">Editar</th>
         <th scope="col">Eliminar</th>
     </tr>
   </thead>
   <tbody>


             <?php
                $sucur="SELECT * FROM ruta";




                $mos=mysqli_query($con,$sucur);
               while($varia1=mysqli_fetch_array($mos)){


               ?>
 <tr>
 <td> <?php echo $varia1[0]?> </td>
 <td> <?php echo $varia1[1]?> </td>


  <td class="text-center">
   <a href="../Funciones/FARuta.php?ID=<?php echo $varia1[0]?>" class="btn btn-warning" role="button" aria-pressed="true"><i class="far fa-edit"></i></a>
   </td>

   <td class="text-center">

   <a href="../Funciones/Eliminarruta.php?ID=<?php echo $varia1[0]?>" class="btn btn-danger" role="button" aria-pressed="true"><i class="fas fa-times"></i></a>

  </td>
     </tr>

 <?php } ?>




   </tbody>
 </table>
 <script type="text/javascript">
