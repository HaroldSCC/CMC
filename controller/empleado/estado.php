<?php
$estado = "";
$cambiar = "";
if ($_GET)
{
	require("../../model/mysql.php"); 
	$pdo = new db();
	$id = $_GET["id"];
    $empleados = $pdo->mysql->query("select estado from empleado where id='$id'");
        foreach($empleados as $empleado)
        {
			$estado = $empleado['estado'];

        }

		if ($estado == '1') {

			$cambiar= '0';
		
			}else {
		
			$cambiar= '1';	
		
			}

	try
	{
		$pdo->mysql->beginTransaction();
		$pst = $pdo->mysql->prepare("update empleado set estado=:cambiar where id=:id");
		$pst->bindParam(":id", $id, PDO::PARAM_STR);
		$pst->bindParam(":cambiar", $cambiar, PDO::PARAM_BOOL);
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
