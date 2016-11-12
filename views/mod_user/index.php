
        <!-- COMIENZA EL MODULO -->
<?php
  include 'views/include/menu.php';
?>

<h1>GESTIONAR USUARIOS</h1>
<p>Bienvenido al módulo para gestionar usuarios</p>
<?php
  if(isset($_GET["msn"])){
    echo $_GET["msn"]."</div>";
  }
?>

<table id="example" class="display">
  <thead>
    <tr>
      <th>cedula</th>
      <th>nombre</th>
      <th>correo</th>
      <th>clave</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>290287656</td>
      <td>pedro</td>
      <td>pedro@gmail.com</td>
      <td>holitas</td>
    </tr>
    <tr>
      <td>290287656</td>
      <td>hauri</td>
      <td>pedro@gmail.com</td>
      <td>holitas</td>
    </tr>
  </tbody>
</table>
