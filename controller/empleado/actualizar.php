<?php

if ($_POST)
{
	require("../../model/mysql.php"); 
	$pdo = new db();
	$id = $_POST["id"];
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$cargo = $_POST["cargo"];
    $estado = $_POST["estado"];


	try
	{
		$pdo->mysql->beginTransaction();
		$pst = $pdo->mysql->prepare("update empleado set nombre=:nombre,apellido=:apellido,correo=:correo,telefono=:telefono,cargo=:cargo,estado=:estado where id=:id");
		$pst->bindParam(":id", $id, PDO::PARAM_STR);
		$pst->bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$pst->bindParam(":apellido", $apellido, PDO::PARAM_STR);				
		$pst->bindParam(":correo", $correo, PDO::PARAM_STR);	
		$pst->bindParam(":telefono", $telefono, PDO::PARAM_STR);
        $pst->bindParam(":cargo", $cargo, PDO::PARAM_STR);
        $pst->bindParam(":estado", $estado, PDO::PARAM_BOOL);
		$pst->execute();

		$pdo->mysql->commit();
		header("Location:../../view/layout/layouts/layout.php?menu=mostrarempleado");
	}
	catch(PDOException $ex)
	{
		$pdo->mysql->rollback();
		echo "El empleado no pudo ser actualizado.<br>".$ex->getMessage();
		echo "<a href='#' onclick=javascript:window.history.back()>Regresar</a>"; 
	}
}