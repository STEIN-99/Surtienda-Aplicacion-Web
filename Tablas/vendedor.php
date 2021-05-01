<?php
include '../funciones/BaseDatos.php';
 ?>


<div class="estilo" id="Vendedores">
<table>
    <thead class="thead">
      <tr>
        <th scope="col">Id del vendedor</th>
        <th scope="col">Rfc</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido paterno</th>
        <th scope="col">Apellido materno</th>
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
        <th scope="col">Fecha de nacimiento</th>
        
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
        
      </tr>
    </thead>
    <tbody>
              <?php
                $sucur= mysqli_query($con,"SELECT * FROM  vendedores");

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
  <td> <?php echo $varia1[7]?> </td>


  <td class="text-center">
  <button class="btnazul" onclick="eliminarvendedor(<?php echo $varia1['ID_VENDEDOR']?>)">Editar</button>
  </td>
  <td class="text-center">
  <button class="btnrojo" onclick="eliminarvendedor(<?php echo $varia1['ID_VENDEDOR']?>)">Eliminar</button>
  </td>
      </tr>
  <?php } ?>
  <td class="text-center">
  <button href="../Funciones/FAProducto.php?ID=<?php echo $varia1[6]?>">Agregar</button>
  </td>
    </tbody>
  </table>
</div>