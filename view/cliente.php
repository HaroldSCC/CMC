<div class="container">
<br>
<br><br>
<center><h1>Clientes</h1></center>
    <?php
          require_once('formularios/clienteregistrar.php');
    ?>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table  table-hover table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>nombre</th>
        <th>cedula</th>
        <th>dian</th>
        <th>firmavirtual</th>
        <th>fechavencimiento</th>
        <th>estado</th>
        <th colspan="2"></th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
      $pdo = new db();
      $Clientes = $pdo->mysql->query("select * from Pnatural");
      foreach($Clientes as $Cliente)
      {
        echo "<tr";
            
        if ($Cliente['estado']=='0') {

          echo " class='table-danger'";
        }
        
        echo ">
            <td>{$Cliente['id']}</td>
            <td>{$Cliente['nombre']}</td>
            <td>{$Cliente['cedula']}</td>
            <td>{$Cliente['dian']}</td>
            <td>{$Cliente['firmavirtual']}</td>
            <td>{$Cliente['fechavencimiento']}</td>
            <td>{$Cliente['estado']}</td>
            <td><a title='Modificar' data-toggle='popover' data-trigger='hover' href='?menu=mostrarmodificarcliente&id={$Cliente['id']}'><i class='fas fa-user-edit'></i></a></td>
            <td><a href='../../../../mvc/controller/Cliente/estado.php?id={$Cliente['id']}' ";
                    if ($Cliente['estado']=='1') {
                      echo " title='Inhabilitar' data-toggle='popover' data-trigger='hover'><i class='fas fa-user-times btn-outline-danger'></i></a></td>";
                    }else {
                       echo " title='habilitar' data-toggle='popover' data-trigger='hover'><i class='fas fa-check btn-outline-success'></i></a></td>";
                    }
            echo "
            </tr>";
      }
    ?>
    </tbody>
  </table>
</div>