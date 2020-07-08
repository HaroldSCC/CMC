<br><br><br><br>

<form method="post" action="../../../controller/empresa/actualizar.php">
<?php
$pdo = new db();
try
{
	$id = $_GET["id"];
	$datoscliente = $pdo->mysql->prepare("select * from empresa where nit = :nit");
	$datoscliente->bindParam(":nit", $id, PDO::PARAM_INT);
	$datoscliente->execute();
	$cliente = $datoscliente->fetch();


}
catch(PDOException $e)
{
	print_r($e->getMessage());
}
?>

<h2>Agregar o quitar empleados de esta empresa <?php echo $cliente['empresanombre']; ?></h2>

  <div class="form-group">
    <label for="exampleInputEmail1">nit</label>
    <input autocomplete="off" type="text" name="nit" class="form-control" maxlength="10" required="true"  placeholder="Enter nit" value="<?php echo $id; ?>" readonly='readonly'>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">empresa nombre</label>
    <input autocomplete="off" type="text" name="empresanombre" class="form-control" maxlength="30" required="true"  placeholder="Enter empresanombre" value="<?php echo $cliente['empresanombre']; ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">persona nombre</label>
    <input autocomplete="off" type="text" name="personanombre" class="form-control" maxlength="30" required="true"  placeholder="Enter personanombre" value="<?php echo $cliente['personanombre']; ?>">
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
