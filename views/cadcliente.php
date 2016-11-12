<?php
    session_start();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="pt-br" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="pt-br" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="pt-br"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" lang="pt-br" />
    <title>Gerenciador | Editar cliente</title>
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
     <link rel="stylesheet" href="../plugins/validationengine/css/validationEngine.jquery.css" />
    <!-- END PAGE LEVEL  STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
     <!-- END HEAD -->

     <!-- BEGIN BODY -->
<body class="padTop53 ">

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
                                    <h1 > Edição de Cliente</h1>
                            </div>
                    </div>
                    <div class="row" >
                        <div class="col-lg-12">
                            <div class="box">
                                <header class="dark">
                                    <div class="icons"><i class="icon-ok"></i></div>
                                    <h5>Cadastro do cliente</h5>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <div class="btn-group">
                                                    <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                       href="#collapseOne">
                                                        <i class="icon-chevron-up"></i>
                                                    </a>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                    <form action="#" class="form-horizontal" id="block-validate">
                                        <div id="collapseOne" class="accordion-body collapse in body">
                                        <div class="form-group" >
                                            <label class="control-label col-lg-4">Matricula</label>
                                            <div class="col-lg-2">
                                                <input type="text" id="matricula" name="matricula" class="form-control" readonly="readonly"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nome do cliente</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="titular" name="ntitular" class="form-control"  />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Data de Nascimento</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="dtnasc" name="dtnasc" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-actions no-margin-bottom" style="">
                                            <input type="submit" value="Salvar" class="btn btn-primary btn-lg " />
                                        </div>
                                    </form>
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

     <script src="../plugins/validationengine/js/jquery.validationEngine.js"></script>
    <script src="../plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
    <script src="../plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
    <script src="../js/validationInit.js"></script>
    <script>
        $(function () { formValidation(); });
    </script>

     <!--END PAGE LEVEL SCRIPTS -->
     
</body>
     <!-- END BODY -->
</html>
