<?php

    include_once '../controller/Controller.class.php';
    include_once '../model/Contrato.class.php';

    session_start();

    $c = new Controller();

    if(!$c->verificaLogin()){
        header('Location: ../index.php');
        exit;
    }

    $c->logouf();

    $mat = $_REQUEST['cod'];
    $contrato = $c->buscarContrato($mat);

    $c->editarContrato();

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="pt-br" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="pt-br" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="pt-br"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" lang="pt-br" />
    <title>Gerenciador | Edição de Cadastro</title>
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
                                    <h3> Edição de Contrato</h3>
                        <?php if (isset($_REQUEST['edite']))
                            echo '<h4 class = "alert alert-success" style = "margin: 10px auto; text-align:                                           center">' . $_SESSION['edite'] . '</h4>';
                        ?>
                            </div>
                    </div>
                    <div class="row" >
                        <div class="col-lg-12">
                            <div class="box">
                                <header class="dark">
                                    <div class="icons"><i class="icon-ok"></i></div>
                                    <h5>Cadastro do Titular</h5>
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
                                            <input type="hidden" name="id" value="<?php echo $contrato['id']; ?>"/>
                                            <label class="control-label col-lg-4">Matricula</label>
                                            <div class="col-lg-2">
                                                <input type="text" id="matricula" name="cod" value="<?php echo $contrato['matricula']; ?>" class="form-control"/>
                                            </div>
                                        </div>
                                            <div class="form-group" >
                                                <label class="control-label col-lg-4">Data de vencimento</label>
                                                <div class="col-lg-2">
                                                    <input type="date" id="dtvenc" name="dtvenc" value="<?php echo $contrato['dtvencimento']; ?>" class="form-control"/>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nome do Titular</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="titular" name="ntitular" class="form-control" value="<?php echo $contrato['ntitular']; ?>"  />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Data de Nascimento</label>
                                            <div class="col-lg-4">
                                                <input type="date" id="dtnasc" name="dtnasc" class="form-control" value="<?php echo $contrato['dtnasc']; ?>"/>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-4">Sexo</label>
                                                <div class="col-lg-2">
                                                    <select name="sexo" id="ption" class="validate[required] form-control" >
                                                        <?php  if($contrato['sexo'] == 'masculino'): ?>
                                                        <option value="masculino">Masculino</option>
                                                        <option value="feminino">Feminino</option>
                                                        <?php endif; ?>
                                                        <option value="feminino">Feminino</option>
                                                        <option value="masculino">Masculino</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label class="control-label col-lg-4">CPF</label>
                                            <div class="col-lg-3">
                                                <input type="text" id="cpf" name="cpf" class="form-control" value="<?php echo $contrato['cpf']; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Identidade</label>
                                            <div class="col-lg-3">
                                                <input type="text" id="rg" name="rg" class="form-control" value="<?php echo $contrato['rg']; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Orgão Emissor RG</label>
                                            <div class="col-lg-2">
                                                <input type="text" id="org" name="org" class="form-control" value="<?php echo $contrato['org']; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Profissão</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="profissao" name="profissao" class="form-control" value="<?php echo $contrato['profissao']; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nome da mãe</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="mae" name="mae" class="form-control" value="<?php echo $contrato['mae']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Endereço</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="end" name="end" class="form-control" value="<?php echo $contrato['endereco']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Numero</label>
                                            <div class="col-lg-2">
                                                <input type="text" id="num" name="num" class="form-control" value="<?php echo $contrato['num']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Bairro</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="bairro" name="bairro" class="form-control" value="<?php echo $contrato['bairro']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Cidade</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="cidade" name="cidade" class="form-control" value="<?php echo $contrato['cidade']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">UF</label>
                                            <div class="col-lg-2">
                                                <input type="text" id="uf" name="uf" class="form-control" value="<?php echo $contrato['uf']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">CEP</label>
                                            <div class="col-lg-2">
                                                <input type="text" id="cep" name="cep" class="form-control" value="<?php echo $contrato['cep']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Telefone</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="telefone" name="telefone" class="form-control" value="<?php echo $contrato['telefone']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">E-mail</label>
                                            <div class="col-lg-4">
                                                <input type="email" id="email" name="email" class="form-control" value="<?php echo $contrato['email']; ?>"/>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-4">Status</label>
                                                <div class="col-lg-2">
                                                    <select name="status" id="ption" class="validate[required] form-control" required>
                                                        <?php if($contrato['status'] == 'aberto'): ?>
                                                        <option value="aberto">Aberto</option>
                                                        <option value="fechado">Fechado</option>
                                                        <?php endif; ?>
                                                        <?php if($contrato['status'] == 'fechado'): ?>
                                                        <option value="fechado">Fechado</option>
                                                        <option value="aberto">Aberto</option>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <header class="dark">
                                    <div class="icons"><i class="icon-ok"></i></div>
                                    <h5>Cadastro dos Dependentes</h5>
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
                                        <br />
                                        <label class="control-label col-lg-4">Dependente Um</label>
                                        <div class="col-lg-4">
                                            <input type="text" id="dp1" name="dp1" class="form-control" value="<?php echo $contrato['ndep1']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-2">Data de Nascimento</label>
                                        <div class="col-lg-2">
                                            <input type="date" id="dtnasc1" name="dtnasc1" class="form-control" value="<?php echo $contrato['data1']; ?>">
                                        </div>
                                        <label class="control-label col-lg-4">Dependente Dois</label>
                                        <div class="col-lg-4">
                                            <input type="text" id="dp2" name="dp2" class="form-control" value="<?php echo $contrato['ndep2']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-2">Data de Nascimento</label>
                                        <div class="col-lg-2">
                                            <input type="date" id="dtnasc2" name="dtnasc2" class="form-control" value="<?php echo $contrato['data2']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-4">Dependente Três</label>
                                        <div class="col-lg-4">
                                            <input type="text" id="dp3" name="dp3" class="form-control" value="<?php echo $contrato['ndep3']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-2">Data de Nascimento</label>
                                        <div class="col-lg-2">
                                            <input type="date" id="dtnasc3" name="dtnasc3" class="form-control" value="<?php echo $contrato['data3']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-4">Dependente Quatro</label>
                                        <div class="col-lg-4">
                                            <input type="text" id="dp4" name="dp4" class="form-control" value="<?php echo $contrato['ndep4']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-2">Data de Nascimento</label>
                                        <div class="col-lg-2">
                                            <input type="date" id="dtnasc4" name="dtnasc4" class="form-control" value="<?php echo $contrato['data4']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-4">Dependente Cinco</label>
                                        <div class="col-lg-4">
                                            <input type="text" id="dp5" name="dp5" class="form-control" value="<?php echo $contrato['ndep5']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-2">Data de Nascimento</label>
                                        <div class="col-lg-2">
                                            <input type="date" id="dtnasc5" name="dtnasc5" class="form-control" value="<?php echo $contrato['data5']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-4">Dependente Seis</label>
                                        <div class="col-lg-4">
                                            <input type="text" id="dp6" name="dp6" class="form-control" value="<?php echo $contrato['ndep6']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-2">Data de Nascimento</label>
                                        <div class="col-lg-2">
                                            <input type="date" id="dtnasc6" name="dtnasc6" class="form-control" value="<?php echo $contrato['data6']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-4">Dependente Sete</label>
                                        <div class="col-lg-4">
                                            <input type="text" id="dp7" name="dp7" class="form-control" value="<?php echo $contrato['ndep7']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-2">Data de Nascimento</label>
                                        <div class="col-lg-2">
                                            <input type="date" id="dtnasc7" name="dtnasc7" class="form-control" value="<?php echo $contrato['data7']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-4">Dependente Oito</label>
                                        <div class="col-lg-4">
                                            <input type="text" id="dp8" name="dp8" class="form-control" value="<?php echo $contrato['ndep8']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-2">Data de Nascimento</label>
                                        <div class="col-lg-2">
                                            <input type="date" id="dtnasc8" name="dtnasc8" class="form-control" value="<?php echo $contrato['data8']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-4">Dependente Nove</label>
                                        <div class="col-lg-4">
                                            <input type="text" id="dp9" name="dp9" class="form-control" value="<?php echo $contrato['ndep9']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-2">Data de Nascimento</label>
                                        <div class="col-lg-2">
                                            <input type="date" id="dtnasc9" name="dtnasc9" class="form-control" value="<?php echo $contrato['data9']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-4">Dependente Dez</label>
                                        <div class="col-lg-4">
                                            <input type="text" id="dp10" name="dp10" class="form-control" value="<?php echo $contrato['ndep10']; ?>"/>
                                        </div>
                                        <label class="control-label col-lg-2">Data de Nascimento</label>
                                        <div class="col-lg-2">
                                            <input type="date" id="dtnasc10" name="dtnasc10" class="form-control" value="<?php echo $contrato['data10']; ?>"/>
                                        </div>
                                        <div class="form-actions no-margin-bottom" style="">
                                            <button type="submit" name="editar" class="btn btn-primary">Salvar Edição</button>
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
       <p>Gerenciador de planos 2016</p>
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
