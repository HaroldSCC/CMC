<div class="container mt-3">
    <!-- Button trigger modal -->
  <button title="Agregar"  data-trigger="hover" type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal" style="float:right">
    <i class="fas fa-user-plus btn-outline-dark"></i>
  </button>
  <br><br>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Empleado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../../../../mvc/controller/empleado/guardar.php" method="post">
            <div class="form-group">
              <label>id</label>
              <input autocomplete="off" type="number" name="id" class="form-control" maxlength="10" required="true"  placeholder="Enter id">
            </div>

            <div class="form-group">
              <label>nombre</label>
              <input autocomplete="off" type="text" name="nombre" class="form-control" maxlength="30" required="true"  placeholder="Enter nombre">
            </div>

            <div class="form-group">
              <label>apellido</label>
              <input autocomplete="off" type="text" name="apellido" class="form-control" maxlength="30" required="true"  placeholder="Enter apellido">
            </div>

            <div class="form-group">
              <label>correo</label>
              <input autocomplete="off" type="email" name="correo"  class="form-control"  maxlength="50" required="true"  placeholder="Enter correo">
            </div>

            <div class="form-group">
              <label>telefono</label>
              <input autocomplete="off" type="text" name="telefono" class="form-control" maxlength="12" required="true"  placeholder="Enter telefono" pattern="[0-9]{1,10}">
            </div>

            <div class="form-group">
              <label>cargo</label>
              <select name="cargo" value="" class="form-control">
                <option value="contador">contador</option>
                <option value="auxiliar">auxiliar</option>
                <option value="legislador">legislador</option>
                <option value="fiscal">fiscal</option>
              </select>
            </div>

            <div class="form-group">
              <label>estado</label>
              <select name="estado" value="" class="form-control">
                <option value="1">activo</option>
                <option value="0">inactivo</option>
              </select>
            </div>

            <h3>Usuario</h3>

            <div class="form-group">
              <label>usuario</label>
              <input type="text" autocomplete="off" name="usuario" class="form-control" maxlength="64" required="true"  placeholder="Enter usuario">
            </div>

            <div class="form-group">
              <label>clave</label>
              <input type="password" autocomplete="off" name="clave" class="form-control" maxlength="64" required="true"  placeholder="Enter clave">
            </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" >enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
