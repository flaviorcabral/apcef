<?php
 include_once 'controller/Controller.class.php';
 include_once 'model/Contrato.class.php';
 include_once 'model/Conexao.class.php';
 include_once 'model/Cliente.class.php';

    $c = new Contrato();
    $cli = new Cliente();
    $con = new Controller();
   // $result = $cli->total();
   // $result = $cli->buscaClientes('Flavio Rodrigo', '10/07/1981');
    //print_r()
   //$result = $con->totalClientes();
    // $result = $c->buscaContrato('201547');
   //$result = $c->deleteContrato('201545');
   //$result = $cli->addCliente('teste10', 'Maria de Lourdes', '10/09/1951');

  $result = $c->editeContrato('50', 'teste198','teste193','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','maria','10/09/1951');


    //$result = $c->deleteContrato('6');

    //$lista = $c->listaContratos();
    //$con = new Conexao();

    //$result = $con->getConexao();

    var_dump($result);

