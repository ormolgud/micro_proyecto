  <div id="login">
      <div name="contentfrm" id="contentform">
        <form name="formlogin" method="post" action="?controller=login&action=registerNew" >

          <br />

          <div id="title">
            <h1>INICIAR SESIÓN</h1>
          </div>

          <div class="form-goup" id="divUser">
            <label for="txtUser">Usuario</label>
            <input class="form-control" type="user" name="usuario" id="txtUser" required placeholder="Ingrese su usuario">
          </div>

          <div class="form-goup">
            <label for="txtPass">Contraseña</label>
            <input class="form-control" type="password" name="pass" id="txtPass" required placeholder="Ingrese su contraseña">
          </div>

          <div class="checkbox">
            <label for="txtReme"><input type="checkbox" name="recordar" id="txtReme" required> Recordarme en este equipo</label>
          </div>

          <div class="form-goup">
          <button class="btn">INGRESAR</button>
          <a href="?controller=login&action=register" class="btn">REGÍSTRATE</a>

        </form>
      </div>
    </div>
