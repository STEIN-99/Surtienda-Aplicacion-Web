<?php
include '../BaseDatos.php';
 ?>



  <table class="table table-responsive">
    <thead class="thead">
      <tr>
        <th scope="col">Id del producto</th>
        <th scope="col">Sucursal</th>
        <th scope="col">Marca</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Caducidad</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Img</th>
        <th scope="col">Descripcion</th>


          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
              <?php
                 $sucur= mysqli_query($con,"SELECT p.ID_PRODUCTOS AS 'Id del producto', s.NOMBRE AS 'Nombre de la Sucursal', m.NOMBRE AS 'Nombre del Producto' , p.NOMBRE, p.PRECIO_UNIT, p.CADUCIDAD, p.CANT, p.IMG, p.DESCRIP
                 FROM  productos AS p, sucursales AS s, marcas AS m
                 WHERE  p.ID_SUCURSAL=s.ID_SUCURSAL AND p.ID_MARCAS=m.ID_MARCAS  ");

                while($varia1=mysqli_fetch_array($sucur)){
                ?>
  <tr>
  <td> <?php echo $varia1[0]?> </td>
  <td> <?php echo $varia1[1]?> </td>
  <td> <?php echo $varia1[2]?> </td>
  <td> <?php echo $varia1[3]?> </td>
  <td> <?php echo $varia1[4]?> </td>
  <td> <?php echo $varia1[5]?> </td>
  <td> <?php echo $varia1[6]?> </td>
  <td>  <img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($varia1[7]); ?>"/></td>
  <td> <?php echo $varia1[8]?> </td>

  <td class="text-center">
   <a href="../Funciones/FAProducto.php?ID=<?php echo $varia1[0]?>" class="btn btn-warning" role="button" aria-pressed="true"><i class="far fa-edit"></i></a>
   </td>

   <td class="text-center">

   <a href="../Funciones/EliminarProducto.php?ID=<?php echo $varia1[0]?>" class="btn btn-danger" role="button" aria-pressed="true"><i class="fas fa-times"></i></a>

  </td>
      </tr>
  <?php } ?>
    </tbody>
  </table>
