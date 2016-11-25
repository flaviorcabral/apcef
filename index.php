<?php
    include_once 'model\Conexao.class.php';
    include_once 'model\Usuario.class.php';
    include_once 'controller\Controller.class.php';

    $c = new Controller();
    $c->login();

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="pt-br" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="pt-br" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="pt-br"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" lang="pt-br" />
    <title>Gerenciador | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="plugins/magic/magic.css" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <img src="img/logo.png" id="logoimg" alt=" Logo" />
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form method="get" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Informe seu Usuário e Senha
                </p>
                <input type="text" name="usuario" placeholder="Usuário" class="form-control" />
                <input type="password" name="senha" placeholder="Senha" class="form-control" />
                <button class="btn text-muted text-center btn-danger" name="login" type="submit">Acessar</button>
                <?php if ($c->login)
                    echo '<h4 class = "alert alert-warning" style = "margin: 10px auto; text-align: center">' . $c->login . '</h4>';
                 ?>
            </form>
        </div>
    </div>
</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="plugins/jquery-2.0.3.min.js"></script>
      <script src="plugins/bootstrap/js/bootstrap.js"></script>
   <script src="js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
