<?php
    include_once '../controller/Controller.class.php';
    include_once '../model/Contrato.class.php';
    //include '../config.php';

    session_start();
    $c = new Controller();

    if(!$c->verificaLogin()){
        header('Location: ../index.php');
        exit;
    }

    $c->logouf();
    
    $lista = $c->listaContratos();
    $c->deleteContrato();

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="pt-br" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="pt-br" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="pt-br"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" lang="pt-br" />
    <title>Gerenciador | Todos os Contratos</title>
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
    <link rel="stylesheet" href="../css/MoneAdmin.css" />
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
                          <h3>Todos os Planos</h3>
                            <?php if (isset($_GET['info'])):?>
                            <?php $info=$_REQUEST['info'];  ?>
                            <?php echo '<h4 class = "alert alert-success" style = "margin: 10px auto; text-align:                                           center">' . $info . '</h4>'; ?>
                            <?php endif; ?>
                                <button class="btn btn-success" style="position: relative; left: 950px; top: -30px;" onClick="javascript:window.location.href='formulario.php'"><i class="icon-plus-sign icon-white"></i> Add Plano</button>
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Matricula</th>
                                            <th>Titular</th>
                                            <th>CPF</th>
                                            <th>Telefone</th>
                                            <th style="text-align: center;">Ver</th>
                                            <th style="text-align: center;">Edite</th>
                                            <th style="text-align: center;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($lista): ?>
                                        <?php foreach ($lista as $contratos):  ?>
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo $contratos['status'] ?></td>
                                            <td class="center"><?php echo $contratos['matricula'] ?></td>
                                            <td class="center"><?php echo $contratos['ntitular'] ?></td>
                                            <td class="center"><?php echo $contratos['cpf'] ?></td>
                                            <td class="center"><?php echo $contratos['telefone'] ?></td>
                                            <td style="text-align: center;">
                                                <button class="btn" data-toggle="modal" data-target="#formModal"><i class="icon-eye-open"></i> Ver </button>
                                            </td>
                                            <td style="text-align: center;">
                                                <button class="btn btn-primary" onClick="javascript:window.location.href='editarcontrato.php?cod=<?php echo $contratos['matricula']; ?>'"><i class="icon-pencil icon-white"></i> Editar</button>
                                            </td>
                                            <td style="text-align: center;">
                                                <form>
                                                    <input type="hidden" name="cod" value="<?php echo $contratos['matricula']; ?>" />
                                                    <button class="btn btn-danger" name="delete"><i class="icon-remove icon-white"></i>Delete</button>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Informações do Plano</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form">
                                    <div class="form-group">
                                        <label class="">Matricula</label>
                                        <input class="form-control" value="teste" />
                                    </div>
                                    <div class="form-group">
                                        <label>Titular</label>
                                        <input class="form-control" value="teste" />
                                    </div>
                                    <div class="form-group">
                                        <label>Data de Nascimento</label>
                                        <input class="form-control" value="teste" />
                                    </div>
                                    <div class="form-group">
                                        <label>CPF</label>
                                        <input class="form-control" value="teste" />
                                    </div>
                                    <div class="form-group">
                                        <label>RG</label>
                                        <input class="form-control" value="teste" />
                                    </div>
                                    <div class="form-group">
                                        <label>Endereço</label>
                                        <input class="form-control" value="teste" />
                                    </div>
                                    <div class="form-group">
                                        <label>Cidade</label>
                                        <input class="form-control" value="teste" />
                                    </div>
                                    <div class="form-group">
                                        <label>Telefone</label>
                                        <input class="form-control" value="teste" />
                                    </div>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input class="form-control" value="teste" />
                                    </div>
                                    <p><h4>Dependentes</h4></p>
                                    <div class="form-group">
                                        <input class="form-control" value="teste" />
                                        <input class="form-control" value="teste" />
                                        <input class="form-control" value="teste" />
                                        <input class="form-control" value="teste" />
                                        <input class="form-control" value="teste" />
                                        <input class="form-control" value="teste" />
                                        <input class="form-control" value="teste" />
                                        <input class="form-control" value="teste" />
                                        <input class="form-control" value="teste" />
                                        <input class="form-control" value="teste" />
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
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
