<?php
 include_once 'controller/Controller.class.php';
 include_once 'model/Contrato.class.php';
 include_once 'model/Conexao.class.php';
 include_once 'model/Cliente.class.php';

    $c = new Contrato();
    $cli = new Cliente();

    $result = $c->totalAbertos();
   //$result = $c->listaAbertos();
   //$result = $c->deleteContrato('teste11');
   //$result = $cli->addCliente('teste10', 'Maria de Lourdes', '10/09/1951');

    /*$result = $c->addContrato('teste11','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','teste','maria','10/09/1951');*/


    //$result = $c->deleteContrato('6');

    //$lista = $c->listaContratos();
    //$con = new Conexao();

    //$result = $con->getConexao();

    var_dump($result);

