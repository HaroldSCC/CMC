 <?php

 if ($_GET)
 {
 	try
 	{
 		require("../../model/mysql.php");
 		$pdo = new db();
 		$pdo->mysql->beginTransaction();
 		$id = $_GET["nit"];
 		$pst = $pdo->mysql->prepare("delete from cliente where nit = :nit");
		$pst->bindParam(":nit", $nit, PDO::PARAM_STR);
		$pst->execute();
		$pdo->mysql->commit();
		header("Location:../../view/layout/layouts/layout.php?menu=mostrarempresa");
 	}
 	catch(PDOException $ex)
 	{
 		echo "El cliente no pudo ser eliminado.";
 		$pdo->mysql->rollback();
 	}

 }