
<!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                    <img src="../img/logo.png" alt="" /></a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!--ADMIN SETTINGS SECTIONS -->
                    <div>
                        <p style="position: absolute; left: 1170px; top: 15px;">Bem vindo <?php echo $_SESSION['nome']; ?></p>
</div>
<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
    </a>

    <ul class="dropdown-menu dropdown-user">
        <li class="divider"></li>
        <li><a href="?logouf"><i class="icon-signout"></i> Sair </a>
        </li>
    </ul>

</li>
<!--END ADMIN SETTINGS -->
</ul>

</nav>

</div>
<!-- END HEADER SECTION -->



<!-- MENU SECTION -->
<div id="left">
    <ul id="menu" class="collapse">
        <li class="panel ">
            <a href="../views/contratos.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                <i class="icon-tasks"> </i> Planos

                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                &nbsp; <span class="label label-default">10</span>&nbsp;
            </a>
        </li>
        <li class="panel ">
            <a href="../views/clientes.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                <i class="icon-pencil"></i> Clientes

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                &nbsp; <span class="label label-success">5</span>&nbsp;
            </a>
        </li>

        <li class="panel">
            <a href="../views/abertos.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                <i class="icon-table"></i> Planos em aberto

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                &nbsp; <span class="label label-info">6</span>&nbsp;
            </a>
        </li>
</div>
<!--END MENU SECTION -->


