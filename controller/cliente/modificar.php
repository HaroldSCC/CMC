<br><br><br><br>
<form method="post" action="../../../controller/cliente/actualizar.php">
<?php
$pdo = new db();
try
{
	$id = $_GET["id"];
	$datoscliente = $pdo->mysql->prepare("select * from Pnatural where id = :id");
	$datoscliente->bindParam(":id", $id, PDO::PARAM_INT);
	$datoscliente->execute();
	$cliente = $datoscliente->fetch();


}
catch(PDOException $e)
{
	print_r($e->getMessage());
}
?>
<h2>Formulario de actulizacion de datos de <?php echo $cliente['nombre']; ?></h2>
  <div class="form-group">
    <label>id</label>
    <input autocomplete="off" type="text" name="id" class="form-control" maxlength="10" required="true"  placeholder="Enter id" value="<?php echo $id; ?>" readonly='readonly'>
  </div>

  <div class="form-group">
    <label>nombre</label>
    <input autocomplete="off" type="text" name="nombre" class="form-control" maxlength="30" required="true"  placeholder="Enter nombre" value="<?php echo $cliente['nombre']; ?>">
  </div>

  <div class="form-group">
    <label>cedula</label>
    <input autocomplete="off" type="text" name="cedula" class="form-control" maxlength="30" required="true"  placeholder="Enter cedula" value="<?php echo $cliente['cedula']; ?>">
  </div>

  <div class="form-group">
    <label>dian</label>
    <input autocomplete="off" type="text" name="dian" class="form-control" maxlength="30" required="true"  placeholder="Enter dian" value="<?php echo $cliente['dian']; ?>">
  </div>

  <div class="form-group">
    <label>firmavirtual</label>
    <input autocomplete="off" type="text" name="firmavirtual"  class="form-control"  maxlength="50" required="true"  placeholder="Enter firmavirtual" value="<?php echo $cliente['firmavirtual']; ?>">
  </div>

  <div class="form-group">
    <label>fechavencimiento</label>
    <input autocomplete="off" type="date" name="fechavencimiento" class="form-control" maxlength="10" required="true" pattern="[0-9]{1,10}" placeholder="Enter fechavencimiento" value="<?php echo $cliente['fechavencimiento']; ?>">
  </div>

  
  <div class="form-group">
  <label for="exampleInputEmail1">estado</label>
  <select name="estado" value="" class="form-control">
  <option value="<?php echo $cliente['estado']; ?>" selected><?php echo $cliente['estado']; ?></option>
  <option value="1">activo</option>
  <option value="0">inactivo</option>
  </select>
  </div>
        <div class="modal-footer">
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>

</form>
