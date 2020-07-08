 
<?php
$estado = "";
$cambiar = "";
if ($_GET)
{
	require("../../model/mysql.php"); 
	$pdo = new db();
	$nit = $_GET["nit"];
    $empresas = $pdo->mysql->query("select estado from empresa where nit='$nit'");
        foreach($empresas as $empresa)
        {
			$estado = $empresa['estado'];

        }

	if ($estado == '1') {

	$cambiar= '0';

	}else {

	$cambiar= '1';	

	}

	try
	{
		$pdo->mysql->beginTransaction();
		$pst = $pdo->mysql->prepare("update empresa set estado=:cambiar where nit=:nit");
		$pst->bindParam(":nit", $nit, PDO::PARAM_STR);
		$pst->bindParam(":cambiar", $cambiar, PDO::PARAM_BOOL);
		$pst->execute();



		$pdo->mysql->commit();
		header("Location:../../view/layout/layouts/layout.php?menu=mostrarempresa");
	}
	catch(PDOException $ex)
	{
		$pdo->mysql->rollback();
		echo "El empresa no pudo ser actualizado.<br>".$ex->getMessage();
		echo "<a href='#' onclick=javascript:window.history.back()>Regresar</a>"; 
	}
}
