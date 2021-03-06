﻿<?php
    include_once '../controller/Controller.class.php';
    include_once '../model/Contrato.class.php';

    session_cache_expire(30);
    session_start();
    $c = new Controller();

    if(!$c->verificaLogin()){
        header('Location: ../index.php');
        exit;
    }

    $c->logouf();
    
    $lista = $c->contratosVencendo();
    $c->contratos();

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
                          <h3>Planos Vencidos/Vencendo</h3>
                            <?php if (isset($_POST['info'])):?>
                            <?php $info=$_REQUEST['info'];  ?>
                            <?php echo '<h4 class = "alert alert-success" style = "margin: 10px auto; text-align:                                           center">' . $info . '</h4>'; ?>
                            <?php endif; ?>
                                <button class="btn" style="position: relative; left: 950px; top: -30px;" onClick="javascript:window.location.href='formulario.php'"><i class="icon-plus-sign icon-white"></i> Add Plano</button>
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Matricula</th>
                                            <th>Vencimento</th>
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
                                            <td class="center"><?php echo $contratos['matricula'] ?></td>
                                            <td class="center"><?php echo date("d/m/Y", strtotime($contratos['dtvencimento'])); ?></td>
                                            <td class="center"><?php echo $contratos['ntitular'] ?></td>
                                            <td class="center"><?php echo $contratos['cpf'] ?></td>
                                            <td class="center"><?php echo $contratos['telefone'] ?></td>
                                            <td style="text-align: center;">
                                                <button class="btn" data-toggle="modal" data-target="#myModal<?php echo $contratos['matricula'] ?>"><i class="icon-eye-open"></i> Ver </button>
                                            </td>
                                            <td style="text-align: center;">
                                                <button class="btn btn-primary" onClick="javascript:window.location.href='editarcontrato.php?cod=<?php echo $contratos['matricula']; ?>'"><i class="icon-pencil icon-white"></i> Editar</button>
                                            </td>
                                            <td style="text-align: center;">
                                                <form>
                                                    <input type="hidden" name="cod" value="<?php echo $contratos['matricula']; ?>" />
                                                    <button onclick="return confirm('Tem certeza que deseja excluir este contrato?')" class="btn btn-danger" name="delete"><i class="icon-remove icon-white"></i>Delete</button>
                                                </form>
                                            </td>

                                        </tr>

                                                <!-- Inicio Modal -->
                                                <div class="modal fade" id="myModal<?php echo $contratos['matricula'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" align="center" id="myModalLabel">Informações do Contrato</h4>
                                                            </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Matricula</label>
                                                                        <?php echo $contratos['matricula'] ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Data de vencimento</label>
                                                                        <?php echo date("d/m/Y", strtotime($contratos['dtabertura'])); ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Data de vencimento</label>
                                                                        <?php echo date("d/m/Y", strtotime($contratos['dtvencimento'])); ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Titular</label>
                                                                        <?php echo $contratos['ntitular'] ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Data de Nascimento</label>
                                                                        <?php echo date("d/m/Y", strtotime($contratos['dtnasc'])); ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">CPF</label>
                                                                        <?php echo $contratos['cpf'] ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">RG</label>
                                                                        <?php echo $contratos['rg'] ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Profissão</label>
                                                                        <?php echo $contratos['profissao'] ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Mãe</label>
                                                                        <?php echo $contratos['mae'] ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Endereço</label>
                                                                        <?php echo $contratos['endereco'] ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Bairro</label>
                                                                        <?php echo $contratos['bairro'] ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Cidade</label>
                                                                        <?php echo $contratos['cidade'] ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">UF</label>
                                                                        <?php echo $contratos['uf'] ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">CEP</label>
                                                                        <?php echo $contratos['cep'] ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Telefone</label>
                                                                        <?php echo $contratos['telefone'] ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">E-mail</label>
                                                                        <?php echo $contratos['email'] ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Status</label>
                                                                        <?php echo $contratos['status'] ?>
                                                                    </div>
                                                                    <?php if($contratos['ndep1'] != ''): ?>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Dependente 001</label>
                                                                        <?php echo $contratos['ndep1'] ?>
                                                                    </div>
                                                                    <?php endif; ?>
                                                                    <?php if($contratos['ndep2'] != ''): ?>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Dependente 002</label>
                                                                        <?php echo $contratos['ndep2'] ?>
                                                                    </div>
                                                                    <?php endif; ?>
                                                                    <?php if($contratos['ndep3'] != ''): ?>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Dependente 003</label>
                                                                        <?php echo $contratos['ndep3'] ?>
                                                                    </div>
                                                                    <?php endif; ?>
                                                                    <?php if($contratos['ndep4'] != ''): ?>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Dependente 004</label>
                                                                        <?php echo $contratos['ndep4'] ?>
                                                                    </div>
                                                                    <?php endif; ?>
                                                                    <?php if($contratos['ndep5'] != ''): ?>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Dependente 005</label>
                                                                        <?php echo $contratos['ndep5'] ?>
                                                                    </div>
                                                                    <?php endif; ?>
                                                                    <?php if($contratos['ndep6'] != ''): ?>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Dependente 006</label>
                                                                        <?php echo $contratos['ndep6'] ?>
                                                                    </div>
                                                                    <?php endif; ?>
                                                                    <?php if($contratos['ndep7'] != ''): ?>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Dependente 007</label>
                                                                        <?php echo $contratos['ndep7'] ?>
                                                                    </div>
                                                                    <?php endif; ?>
                                                                    <?php if($contratos['ndep8'] != ''): ?>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Dependente 008</label>
                                                                        <?php echo $contratos['ndep8'] ?>
                                                                    </div>
                                                                    <?php endif; ?>
                                                                    <?php if($contratos['ndep9'] != ''): ?>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Dependente 009</label>
                                                                        <?php echo $contratos['ndep9'] ?>
                                                                    </div>
                                                                    <?php endif; ?>
                                                                    <?php if($contratos['ndep10'] != ''): ?>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-4">Dependente 0010</label>
                                                                        <?php echo $contratos['ndep10'] ?>
                                                                    </div>
                                                                    <?php endif; ?>
                                                                </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Fim Modal -->

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
