<?php  
    if ($_SESSION['cargo'] ==  "administrador") {
      }else {
        die();
    }
?>
<div class="container">
<br>
<br><br>
<center><h1>Empleados</h1></center>
    <?php
          require_once('formularios/empleadoregistrar.php');
    ?>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table  table-hover table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>correo</th>
        <th>telefono</th>
        <th>cargo</th>
        <th>estado</th>
        <th colspan="2"></th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
      $pdo = new db();
      $Empleados = $pdo->mysql->query("select * from empleado");
      foreach($Empleados as $Empleado)
      {
        echo "<tr";
            
        if ($Empleado['estado']=="0") {

          echo " class='table-danger'";
        }
        
        echo ">
            <td>{$Empleado['id']}</td>
            <td>{$Empleado['nombre']}</td>
            <td>{$Empleado['apellido']}</td>
            <td>{$Empleado['correo']}</td>
            <td>{$Empleado['telefono']}</td>
            <td>{$Empleado['cargo']}</td>
            <td>";
            if ($Empleado['estado']) {
              echo 'habilitado';
            }else {
              echo 'Inhabilitado';
            }

            echo "</td>
            <td><a title='Modificar' data-toggle='popover' data-trigger='hover' href='?menu=mostrarmodificarempleado&id={$Empleado['id']}'><i class='fas fa-user-edit'></i></a></td>
            <td><a href='../../../../mvc/controller/empleado/estado.php?id={$Empleado['id']} '";
                    if ($Empleado['estado']=='1' && $Empleado['id'] != '1') {
                      echo " title='Inhabilitar' data-toggle='popover' data-trigger='hover'><i class='fas fa-user-times btn-outline-danger'></i></a></td>";
                      }elseif ($Empleado['id'] != '1') {
                      echo " title='habilitar' data-toggle='popover' data-trigger='hover'><i class='fas fa-check btn-outline-success'></i></a></td>";
                    }
            echo "
            </tr>";
    }
    ?>
    </tbody>
  </table>
</div>