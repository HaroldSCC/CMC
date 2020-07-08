 
<?php

if ($_POST)
{
	require("../../model/mysql.php"); 
	$pdo = new db();
	$nit = $_POST["nit"];
	$empresanombre = $_POST["empresanombre"];
	$personanombre = $_POST["personanombre"];
	$cedula = $_POST["cedula"];
	$dian = $_POST["dian"];
	$firmavirtual = $_POST["firmavirtual"];
	$fechavencimiento = $_POST["fechavencimiento"];
    $estado = $_POST["estado"];
	



	try
	{
		$pdo->mysql->beginTransaction();
		$pst = $pdo->mysql->prepare("update empresa set empresanombre=:empresanombre,personanombre=:personanombre,dian=:dian,cedula=:cedula,firmavirtual=:firmavirtual,fechavencimiento=:fechavencimiento,estado=:estado  where nit=:nit");
		$pst->bindParam(":nit", $nit, PDO::PARAM_STR);
		$pst->bindParam(":empresanombre", $empresanombre, PDO::PARAM_STR);
		$pst->bindParam(":personanombre", $personanombre, PDO::PARAM_STR);
		$pst->bindParam(":dian", $dian, PDO::PARAM_STR);
		$pst->bindParam(":cedula", $cedula, PDO::PARAM_STR);
		$pst->bindParam(":firmavirtual", $firmavirtual, PDO::PARAM_STR);
		$pst->bindParam(":fechavencimiento", $fechavencimiento, PDO::PARAM_STR);
		$pst->bindParam(":estado", $estado, PDO::PARAM_BOOL);

		$pst->execute();
		$pdo->mysql->commit();
		header("Location:../../view/layout/layouts/layout.php?menu=mostrarempresa");
	}
	catch(PDOException $ex)
	{
		$pdo->mysql->rollback();
		echo "El cliente no pudo ser actualizado.<br>".$ex->getMessage();
		echo "<a href='#' onclick=javascript:window.history.back()>Regresar</a>"; 
	}
}
