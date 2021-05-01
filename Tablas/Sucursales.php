<?php
include '../funciones/BaseDatos.php';
 ?>


<div class="estilo" id="Sucursales">
<table>
    <thead class="thead">
      <tr id="fila">
        <th scope="col">Id del producto</th>
        <th scope="col">Marca</th>
        <th scope="col">Nombre</th>

        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
        
      </tr>
    </thead>
    <tbody>
              <?php
                $sucur= mysqli_query($con,"SELECT * FROM  sucursales");

                while($varia1=mysqli_fetch_array($sucur)){
                ?>
  <tr>
  <td> <?php echo $varia1[0]?> </td>
  <td> <?php echo $varia1[1]?> </td>
  <td> <?php echo $varia1[2]?> </td>


  <td class="text-center">
  <button class="btnazul" onclick="eliminarDato(<?php echo $varia1['ID_SUCURSAL']?>)">Editar</button>
  </td>
  <td class="text-center">
  <button class="btnrojo" onclick="eliminarDato(<?php echo $varia1['ID_SUCURSAL']?>)">Eliminar</button>
  </td>
      </tr>
  <?php } ?>
  <td class="text-center">
  <button href="../Funciones/FAProducto.php?ID=<?php echo $varia1[6]?>">Agregar</button>
  </td>
    </tbody>
  </table>

  </div>