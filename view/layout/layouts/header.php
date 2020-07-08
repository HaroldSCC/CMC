<?php

    session_start();
    require("../../../model/mysql.php");
    if (isset($_SESSION["sesion"])) {
    }else {
        header("Location: index.php");
    }
?>
<header id="header-wrap">
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
            <a href="index.html" class="navbar-brand">CMC <br>solutions group sas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                    <li class="nav-item active">
                        <a class="nav-link">
                            Menu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=mostrarempresa">
                            Empresas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=mostrarcliente">
                            Clientes
                        </a>
                    </li>
                    <?php
                        if ($_SESSION['cargo']=="administrador") {
                            echo"
                                <li class='nav-item'>
                                    <a class='nav-link' href='?menu=mostrarempleado'>
                                        Empleados
                                    </a>
                                </li>";
                        }
                    ?>
                    <li class="nav-item">
                        <a class='nav-link text-dark' title='Cerrar sesion' data-toggle='popover' data-trigger='hover' href='cerrar.php'>
                            <i class='fas fa-power-off'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <style>
        body{
            color: black;
        }
    </style>
</header>