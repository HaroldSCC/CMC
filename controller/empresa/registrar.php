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
	$estado = '1';

	try
	{
		$pdo->mysql->beginTransaction();
		;
		$pst = $pdo->mysql->prepare("insert into Empresa() values(:nit,:empresanombre,:personanombre,:cedula,:dian,:firmavirtual,:fechavencimiento,:estado)");
		$pst->bindParam(":nit", $nit, PDO::PARAM_STR);
		$pst->bindParam(":empresanombre", $empresanombre, PDO::PARAM_STR);
		$pst->bindParam(":personanombre", $personanombre, PDO::PARAM_STR);
		$pst->bindParam(":dian", $dian, PDO::PARAM_STR);
		$pst->bindParam(":cedula", $cedula, PDO::PARAM_STR);
		$pst->bindParam(":firmavirtual", $firmavirtual, PDO::PARAM_STR);
		$pst->bindParam(":fechavencimiento", $fechavencimiento, PDO::PARAM_STR);
		$pst->bindParam(":estado", $estado, PDO::PARAM_BOOL);

		$pst->execute();
		$nit = $pdo->mysql->lastInsertId();
		$pdo->mysql->commit();

		echo "Has sido registrado correctamente!";
		//header("Location:../../view/layout/layouts/layout.php?menu=mostrarempresa");
		echo "<a href='#' onclick=javascript:window.history.back()>Regresar</a>"; 
	}
	catch(PDOException $ex)
	{
		$pdo->mysql->rollback();

		echo "El cliente ya existe.";
		echo "<a href='#' onclick=javascript:window.history.back()>Regresar</a>"; 
		//$HTTP_REFERER;
		//header("Location:".$_SERVER['HTTP_REFERER']); 
		echo "El cliente ya existe.";
	}


}