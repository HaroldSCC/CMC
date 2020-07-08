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
          <h5 class="modal-title" id="exampleModalLabel">Registrar empresa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

<form action="../../../controller/empresa/guardar.php" method="post" >

  <div class="form-group">
    <label for="exampleInputEmail1">nit</label>
    <input autocomplete="off" type="text" name="nit" class="form-control" maxlength="10" required="true"  placeholder="Enter nit">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">empresa nombre</label>
    <input autocomplete="off" type="text" name="empresanombre" class="form-control" maxlength="30" required="true"  placeholder="Enter empresanombre">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">persona nombre</label>
    <input autocomplete="off" type="text" name="personanombre" class="form-control" maxlength="30" required="true"  placeholder="Enter personanombre">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">dian</label>
    <input autocomplete="off" type="text" name="dian"  class="form-control"  maxlength="50" required="true"  placeholder="Enter dian">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">cedula</label>
    <input autocomplete="off" type="text" name="cedula" class="form-control" maxlength="10" required="true" pattern="[0-9]{1,10}" placeholder="Enter cedula">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">firma virtual</label>
    <input autocomplete="off" type="text" name="firmavirtual" class="form-control" maxlength="15" required="true"  placeholder="Enter firmavirtual">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">fecha de vencimiento</label>
    <input autocomplete="off" type="date" name="fechavencimiento" class="form-control" maxlength="15" required="true"  placeholder="Enter fechavencimiento">
  </div>

        </div>
        <div class="modal-footer">
  <button type="submit" class="btn btn-primary" >enviar</button>
</form>
        </div>
      </div>
    </div>
  </div>
