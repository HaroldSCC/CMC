<?php

if ($_POST)
{
	require("../../model/mysql.php"); 
	$pdo = new db();
	$id = $_POST["id"];
	$nombre = $_POST["nombre"];
	$cedula = $_POST["cedula"];
	$dian = $_POST["dian"];
	$firmavirtual = $_POST["firmavirtual"];
	$fechavencimiento = $_POST["fechavencimiento"];
	$estado = '1';

	try
	{
		$pdo->mysql->beginTransaction();
		;
		$pst = $pdo->mysql->prepare("insert into Pnatural() values(:id,:nombre,:cedula,:dian,:firmavirtual,:fechavencimiento,:estado)");
		$pst->bindParam(":id", $id, PDO::PARAM_STR);
		$pst->bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$pst->bindParam(":dian", $dian, PDO::PARAM_STR);
		$pst->bindParam(":cedula", $cedula, PDO::PARAM_STR);
		$pst->bindParam(":firmavirtual", $firmavirtual, PDO::PARAM_STR);
		$pst->bindParam(":fechavencimiento", $fechavencimiento, PDO::PARAM_STR);
		$pst->bindParam(":estado", $estado, PDO::PARAM_BOOL);


		$pst->execute();
		$id = $pdo->mysql->lastInsertId();
		$pdo->mysql->commit();
		header("Location:../../view/layout/layouts/layout.php?menu=mostrarcliente");
	}
	catch(PDOException $ex)
	{
		$pdo->mysql->rollback();

		echo "El cliente ya existe.";
		echo "<a href='#' onclick=javascript:window.history.back()>Regresar</a>"; 
		$HTTP_REFERER;
		header("Location:".$_SERVER['HTTP_REFERER']); 
		echo "El cliente ya existe.";
	}


}