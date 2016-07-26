<?php plantilla::start(); ?>

<!DOCTYPE html>
<html>
  <body>
    <div class="container">
      <h3 style="color:black">Registrar Usuario</h3>
      <div class="row">

      <form action="" method="post">
        <div class="col-md-12" >
          <div class="col-md-6">

            <div class="form-group input-group" >
              <span style="color: #2E9AFE"class="input-group-addon">ID:</span>
              <input type="text" class="form-control" name="UsuarioID" readonly>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Nombre:</span>
              <input class="form-control" name="Nombre" required="Nombre">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Apellido:</span>
              <input type="text" class="form-control" name="Apellido" required="Apellido">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Cedula:</span>
              <input type="text" class="form-control" name="Cedula" required="Cedula" >
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Direccion:</span>
              <input type="text" class="form-control" name="Direccion" required="Direccion">
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">Telefono:</span>
              <input type="text" class="form-control" name="Telefono" required="Telefono">
            </div>
              </div>

          <div class="col-md-6">
            <div class="form-group input-group">
              <span class="input-group-addon">Usuario:</span>
              <input type="text" class="form-control" name="NombreUsuario" required="NombreUsuario">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Contraseña:</span>
              <input type="text" class="form-control" name="Contrasena" required="Contrasena">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Departamento:</span>
              <select class="list-group-item" name="DepartamentoID">
                <option value="">Seleccione Departamento</option>

              </select>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Rol:</span>
              <select class="list-group-item" name="RolID">
                <option value="">Seleccione Rol</option>

              </select>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Estado de Usuario:</span>
              <select class="list-group-item" name="EstadoUsuarioID">
                <option value="">Seleccione Estado</option>

              </select>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Equipo:</span>
              <select class="list-group-item" name="EquipoID">
                <option value="">Seleccione Equipo</option>

              </select>
            </div>
          </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
        </div>
      </form>
    </div>

  </body>
</html>
