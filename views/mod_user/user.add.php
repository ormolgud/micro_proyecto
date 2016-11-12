<?php
  include 'views/include/menu.php';
?>

  <div id="contentForm">
    <h1>Ingresar Perfil (Rol)</h1>
    <form name="data[]" method="post" action="?controller=user&action=create">

      <div class="form-control">
        <label for="txtName">Nombre del rol</label>
        <input type="text" name="data[]" id="txtName" required />
      </div>

      <div class="form-control">
        <label for="txtDesc">Descripción</label>
        <textarea name="data[]" id="txtDesc" rows="2" cols="15" required></textarea>
      </div>

      <div class="form-control">
        <label for="listState">Estado</label>
        <select name="data[]" id="listStates" contenteditable="false">
          <option value="1" >Activo</option>
          <option value="0" >Inactivo</option>
        </select>
      </div>

      <div class="form-control">
        <label for="txtAuthor">Autor</label>
        <input type="text" name="data[]" id="txtAuthor" required />
      </div>

      <div class="form-control">
        <input type="submit" name="submit" value="Guardar" />
      </div>
    </form>
  </div>

<?php
  if(isset($_GET["msn"])){
    echo $_GET["msn"]."</div>";
  }
?>
