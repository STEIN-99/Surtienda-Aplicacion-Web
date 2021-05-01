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
    </tr>
    </thead>
    <tbody id="respuesta">
    <td class="text-center">
  <button onclick="traerclientes();">Mostrar contenido</button>
  </td>
    </tbody>
</table>
</div>