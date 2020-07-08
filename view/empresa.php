<div class="container">
<br>
<br><br>
<center><h1>Empresas</h1></center>
    <?php
          require_once('formularios/empresaregistrar.php');
          $persona= $_SESSION['empleado'];
    ?>

    <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table  table-hover table-striped">
    <thead>
      <tr>
        <th>nit</th>
        <th>empresa nombre</th>
        <th>persona nombre</th>
        <th colspan="4"></th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
      $pdo = new db();
      if ($_SESSION['cargo'] ==  "administrador") {
        $Empresas = $pdo->mysql->query("select * from Empresa");
      }else {
        $Empresas = $pdo->mysql->query("select * from Empresa e, visibilidad v where v.empresa= e.nit and v.cliente= $persona");        
      }

      foreach($Empresas as $Empresa)
      {
        echo "<tr";
            
        if ($Empresa['estado']== '0') {

          echo " class='table-danger'";
        }
        
        echo ">
            <td>{$Empresa['emp_nit']}</td>
            <td>{$Empresa['emp_empresanombre']}</td>
            <td>{$Empresa['emp_cliente']}</td>

            <td>";
            if ($Empresa['emp_estado']== '0') {
              echo 'inhabilitado';
            }else {
              echo 'habilitado';
            }
            
            echo "</td>";

            echo "<td><a title='Modificar' data-toggle='popover' data-trigger='hover' href='?menu=mostrarmodificarempresa&id={$Empresa['emp_nit']}'><i class='fas fa-user-edit'></i></a></td>
            <td><a href='../../../../mvc/controller/empresa/estado.php?nit={$Empresa['emp_nit']}' ";
                    if ($Empresa['emp_estado']=='1') {
                      echo " title='Inhabilitar' data-toggle='popover' data-trigger='hover'><i class='fas fa-user-times btn-outline-danger'></i></a></td>";
                    }else {
                       echo " title='habilitar' data-toggle='popover' data-trigger='hover'><i class='fas fa-check btn-outline-success'></i></a></td>";
                    }
            if ($_SESSION['cargo'] ==  'administrador') {
              echo "<td><a title='ver empleados' data-toggle='popover' data-trigger='hover' href='?menu=mostrarmodificargempleado&id={$Empresa['emp_nit']}'><i class='fas fa-cat'></i></a></td>";
              echo "<td>
              ";
              /*$visibildiades = $pdo->mysql->query("select cliente from Empresa e, visibilidad v where v.empresa= e.nit and v.empresa=".$Empresa['emp_nit']);
              foreach ($visibildiades as $visibildiad) 
              {
                echo "<li>{$visibildiad['cliente']}</li>";
              }*/
              echo "</td>"; 
            }
            echo "</tr>";
      }
    ?>
    </tbody>
  </table>
</div>