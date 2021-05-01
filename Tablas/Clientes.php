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
        
      </tr>
    </thead>
    <tbody id="respuesta">
  <td class="text-center">
  <button onclick="mosCliente();">Mostrar contenido cliente</button>
  </td>
    </tbody>
  </table>

</div>