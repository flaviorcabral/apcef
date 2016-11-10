<?php
    include_once '..\controller\Controller.class.php';

    session_start();
    $_SESSION['nome'];
    $c = new Controller();
    $c->logouf();

    if(!$c->verificaLogin()){
        header('Location: ../index.php');
        exit;
    }

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
                        </div>
                        <div style="position: relative; top: -30px; left: -30px;">
                        <button class="btn btn-success" style="position: relative; left: 950px; top: -20px;" onClick="javascript:window.location.href='formulario.php'"><i class="icon-plus-sign icon-white"></i> Add Plano</button>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Matricula</th>
                                            <th>Titular</th>
                                            <th>CPF</th>
                                            <th>Telefone</th>
                                            <th style="text-align: center;">Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td class="center">12345</td>
                                            <td class="center">Flavio Rodrigo Cabral Pereira</td>
                                            <td class="center">Win 95+</td>
                                            <td class="center">083 98157-7582</td>
                                            <td style="text-align: center;">
                                                <button class="btn"><i class="icon-eye-open"></i> View</button>
                                                <button class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</button>
                                                <button class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</button>
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">5</td>
                                            <td style="text-align: center;">
                                                <button class="btn"><i class="icon-eye-open"></i> View</button>
                                                <button class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</button>
                                                <button class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</button>
                                            </td>

                                        </tr>

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
