<?php
include '../funciones/BaseDatos.php';
 ?>


<div class="estilo" id="Clientes">
<table>
    <thead class="thead">
      <tr>
        <th scope="col">Id del cliente</th>
        <th scope="col">Usuario</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido paterno</th>
        <th scope="col">Apellido materno</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Local</th>      

        <th scope="col">Eliminar</th>
        
      </tr>
    </thead>
    <tbody>
              <?php
                $sucur= mysqli_query($con,"SELECT c.ID_CLIENTES, u.CORREO_ELEC, u.CONTRASENA, c.NOMBRE, c.APELLIDO_PAT, c.APELLIDO_MAT, c.DIRECCION, c.TELEFONO, c.NOM_LOCAL
                                            FROM clientes AS c, usuarios AS u
                                            WHERE c.ID_USUA=u.ID_USUA
                
                ");

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
  <td> <?php echo $varia1[8]?> </td>



  <td class="text-center">
  <button class="btnrojo" onclick="eliminarcliente(<?php echo $varia1['ID_CLIENTES']?>)">Eliminar</button>
  </td>
      </tr>
  <?php } ?>
  <td class="text-center">
  <button onclick="modalSClientes();">Agregar</button>
  </td>
    </tbody>
  </table>

</div>