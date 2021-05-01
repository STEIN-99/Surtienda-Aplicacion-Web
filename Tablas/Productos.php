<?php
include '../funciones/BaseDatos.php';
 ?>


<div class="estilo" id="Productos">
<table>
    <thead class="thead">
      <tr>
        <th scope="col">Id del producto</th>
        <th scope="col">Marca</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Img</th>
        <th scope="col">Precio</th>
        

        <th scope="col">Eliminar</th>
        
      </tr>
    </thead>
    <tbody>
              <?php
                $sucur= mysqli_query($con,"SELECT p.ID_PRO, m.NOMBRE, p.NOMBRE, p.DESCRIP, p.IMG, p.PRECIO
                FROM  producto AS p, marcas AS m 
                WHERE  p.ID_MARCAS=m.ID_MARCAS");

                while($varia1=mysqli_fetch_array($sucur)){
                ?>
  <tr>
  <td> <?php echo $varia1[0]?> </td>
  <td> <?php echo $varia1[1]?> </td>
  <td> <?php echo $varia1[2]?> </td>
  <td> <?php echo $varia1[3]?> </td>
  <td>  <img height="50px" src="../<?php echo ($varia1[4]); ?>"/></td>
  <td> <?php echo $varia1[5]?> </td>



  <td class="text-center">
  <button class="btnrojo" onclick="eliminarProducto(<?php echo $varia1['ID_PRO']?>)">Eliminar</button>
  </td>
      </tr>
  <?php } ?>
  <td class="text-center">
  <button onclick="modalProductos();">Agregar</button>
  </td>
    </tbody>
  </table>


