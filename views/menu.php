<?php
        include_once '../controller/Controller.class.php';
        include_once '../model/Cliente.class.php';
        include_once '../model/Contrato.class.php';

        $chm = new Controller();
        $totalContratos = $chm->totalContratos();
        $totalContratosAbertos = $chm->totalContAbertos();


?>
<!-- HEADER SECTION -->
<div id="top">

    <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px; background-color: #005f8d">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="../views/contratos.php" class="navbar-brand">
                    <img src="../img/logo.jpg" style="height: 45px;position: relative; bottom: 5px"/></a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!--ADMIN SETTINGS SECTIONS -->
                    <div>
                        <p style="position: absolute; left: 1160px; top: 15px; font-weight: bold; color: white">Bem vindo, <?php echo $_SESSION['nome']; ?></p>
        </div>
<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-user"></i>&nbsp; <i class="icon-chevron-down "></i>
    </a>

    <ul class="dropdown-menu dropdown-user">
        <li class="divider"></li>
        <li><a href="?logouf"><i class="icon-signout"></i> Sair </a></li>
    </ul>

</li>
<!--END ADMIN SETTINGS -->
</ul>

</nav>

</div>
<!-- END HEADER SECTION -->



<!-- MENU SECTION -->
<div id="left" style="position: fixed;">
    <ul id="menu" class="collapse">
        <li class="panel ">
            <a href="../views/contratos.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                <i class=" icon-list-ol"> </i> Todos os Planos

                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                &nbsp; <span class="label label-default"><?php  ?></span>&nbsp;
            </a>
        </li>
        <li class="panel">
            <a href="../views/abertos.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                <i class="icon-folder-open"></i> Planos Abertos

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                &nbsp; <span class="label label-info"></span>&nbsp;
            </a>
        </li>
        <li class="panel">
            <a href="../views/vencendo.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                <i class=" icon-ban-circle"></i> Planos Vencidos

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                &nbsp; <span class="label label-info"></span>&nbsp;
            </a>
        </li>
        <li class="panel ">
            <a href="../views/clientes.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                <i class="icon-male"></i> Clientes

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                &nbsp; <span class="label label-success"></span>&nbsp;
            </a>
        </li>
       </ul>
</div>
<!--END MENU SECTION -->


