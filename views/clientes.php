<?php
    include_once '../controller/Controller.class.php';
    include_once '../model/Cliente.class.php';

    session_start();
    $c = new Controller();

    if(!$c->verificaLogin()){
        header('Location: ../index.php');
        exit;
    }

    $c->logouf();

    $lista = $c->listaClientes();
    $c->deleteCliente();

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="pt-br" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="pt-br" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="pt-br"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" lang="pt-br" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCORE Admin Dashboard Template | Data Tables</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/theme.css" />
    <link rel="stylesheet" href="../css/MoneAdmin.css"/>
    <link rel="stylesheet" href="../plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="../plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">

        <?php
            include 'menu.php';
        ?>
        <!--PAGE CONTENT -->
        <div id="content">
            <div class="inner">
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3>Lista de Clientes</h3>
                            <?php if (isset($_REQUEST['info'])):?>
                            <?php    $info = $_REQUEST['info']; ?>
                            <?php    echo '<h4 class = "alert alert-danger" style = "margin: 10px auto; text-align:                                           center">' . $info . '</h4>'; ?>
                            <?php endif; ?>
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Titular do Plano</th>
                                            <th>Matricula</th>
                                            <th>Nome</th>
                                            <th>Data Nascimento</th>
                                            <th style="text-align: center;">Edite</th>
                                            <th style="text-align: center;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($lista): ?>
                                        <?php foreach($lista as $clientes): ?>
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo $clientes['titular']; ?></td>
                                            <td class="center"><?php echo $clientes['matricula']; ?></td>
                                            <td class="center"><?php echo $clientes['nome']; ?></td>
                                            <td class="center"><?php echo date("d/m/Y", strtotime($clientes['dtnasc'])); ?></td>
                                            <td style="text-align: center;">
                                                <button class="btn btn-primary" onClick="javascript:window.location.href='editarcontrato.php?cod=<?php echo $clientes['matricula'];?>'"><i class="icon-pencil icon-white"></i> Editar</button>
                                            </td>
                                            <td style="text-align: center;">
                                                <form>
                                                    <input type="hidden" name="cod" value="<?php echo $clientes['id']; ?>" />
                                                    <button onclick="return confirm('Tem certeza que deseja excluir este cliente?')" class="btn btn-danger" name="delete"><i class="icon-remove icon-white"></i> Deletar</button>
                                                </form>

                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
       <!--END PAGE CONTENT -->
    </div>

     <!--END MAIN WRAPPER -->

     <!-- FOOTER -->
     <div id="footer">
         <p>Gerenciador de planos 2016</p>
     </div>
     <!--END FOOTER -->

     <!-- GLOBAL SCRIPTS -->
    <script src="../plugins/jquery-2.0.3.min.js"></script>
     <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
    <script src="../plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS -->
</body>
     <!-- END BODY -->
</html>
