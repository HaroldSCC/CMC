<?php
$url= $_SERVER["REQUEST_URI"];
if (isset($_GET ['menu'])) {
    if($_GET ['menu'] =='mostrarmenu'){
        require_once('../../menu.php');  
    }
    if($_GET ['menu'] =='mostrarempresa'){ 
        require_once('../../empresa.php'); 
    }
    if($_GET ['menu'] =='mostrarcliente'){ 
        require_once('../../cliente.php'); 
    }
    if($_GET ['menu'] =='mostrarempleado'){ 
        require_once('../../empleado.php'); 
    }
    if($_GET ['menu'] =='mostrarmodificarcliente'){ 
        require_once('../../../controller/cliente/modificar.php'); 
    }
    if($_GET ['menu'] =='mostrarmodificarempleado'){ 
        require_once('../../../controller/empleado/modificar.php'); 
    }
    if($_GET ['menu'] =='mostrarmodificarempresa'){ 
        require_once('../../../controller/empresa/modificar.php'); 
    }
    if($_GET ['menu'] =='mostrarmodificargempleado'){ 
        require_once('../../../controller/empresa/gempleados.php'); 
    }
}else {
    require_once('../../empresa.php'); 
}
?>
