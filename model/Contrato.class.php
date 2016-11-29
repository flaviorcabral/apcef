<?php

    require_once 'Conexao.class.php';
    require_once 'Cliente.class.php';
    
class Contrato{
   
    private $con;

    function __construct() {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }
    
    function addContrato($mat, $dtvenc, $nome, $nasc, $sexo, $cpf, $rg, $org, $profissao, $mae, $end, $num, $bairro, $cid, $uf, $cep, $tel, $email, $status, $n1, $c1, $n2, $c2, $n3, $c3, $n4, $c4, $n5, $c5, $n6, $c6, $n7, $c7, $n8, $c8, $n9, $c9, $n10, $c10) {
        $data = date('Y-m-d');
        if($this->con->exec("INSERT INTO planos (matricula, dtabertura, dtvencimento, ntitular, sexo, dtnasc, cpf, rg, org, profissao, mae, endereco, num, bairro, cidade, uf, cep, telefone, email, status, ndep1, data1, ndep2, data2, ndep3, data3, ndep4, data4, ndep5, data5, ndep6, data6, ndep7, data7, ndep8, data8, ndep9, data9, ndep10, data10) VALUES ('{$mat}', '{$data}' , '{$dtvenc}','{$nome}', '{$nasc}', '{$sexo}', '{$cpf}','{$rg}', '{$org}', '{$profissao}', '{$mae}', '{$end}', '{$num}', '{$bairro}', '{$cid}', '{$uf}', '{$cep}', '{$tel}', '{$email}', '{$status}', '{$n1}', '{$c1}', '{$n2}', '{$c2}','{$n3}', '{$c3}', '{$n4}', '{$c4}', '{$n5}', '{$c5}', '{$n6}', '{$c6}', '{$n7}', '{$c7}', '{$n8}', '{$c8}', '{$n9}', '{$c9}', '{$n10}','{$c10}')")){

            $nmdepend = array($nome, $n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10);
            $dtdepend = array($nasc, $c1, $c2, $c3,$c4, $c5, $c6, $c7, $c8, $c9, $c10);

            $c = new Cliente();

            for($x = 0; $x <= 10; $x++){
                $nmdep = $nmdepend[$x];
                $dataNasc = $dtdepend[$x];
                if ($nmdep != '' && $dataNasc != '') {
                    $cliente = $c->buscaClientes($nmdep, $dataNasc);
                   if(!$cliente){
                    $this->con->exec("INSERT INTO clientes (titular, matricula, nome, dtnasc) VALUES ('{$nome}', '{$mat}', '{$nmdep}', '{$dataNasc}')");
                   }
                }
            }


            return true;

        }

        return false;

    }
    
    function editeContrato($mat, $dtvenc, $nome, $nasc, $sexo, $cpf, $rg, $org, $profissao, $mae, $end, $num, $bairro, $cid, $uf, $cep, $tel, $email, $status , $n1, $c1, $n2, $c2, $n3, $c3, $n4, $c4, $n5, $c5, $n6, $c6, $n7, $c7, $n8, $c8, $n9, $c9, $n10, $c10){

        if($this->con->exec("UPDATE planos SET dtvencimento = '{$dtvenc}',ntitular = '{$nome}', dtnasc = '{$nasc}',sexo = '{$sexo}',  cpf = '{$cpf}', rg = '{$rg}', org = '{$org}', profissao = '{$profissao}', mae = '{$mae}', endereco = '{$end}', num = '{$num}', bairro = '{$bairro}', cidade = '{$cid}', uf = '{$uf}', cep = '{$cep}', telefone = '{$tel}', email = '{$email}', status = '{$status}', ndep1 = '{$n1}', data1 = '{$c1}', ndep2 = '{$n2}', data2 = '{$c2}', ndep3 = '{$n3}', data3 = '{$c3}', ndep4 = '{$n4}', data4 = '{$c4}', ndep5 = '{$n5}', data5 = '{$c5}', ndep6 = '{$n6}', data6 = '{$c6}', ndep7 = '{$n7}', data7 = '{$c7}', ndep8 = '{$n8}', data8 = '{$c8}', ndep9 = '{$n9}', data9 = '{$c9}', ndep10 = '{$n10}', data10 = '{$c10}' WHERE matricula = '{$mat}'")){

            $nmdepend = array($nome, $n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10);
            $dtdepend = array($nasc, $c1, $c2, $c3,$c4, $c5, $c6, $c7, $c8, $c9, $c10);

            $c = new Cliente();

            for($x = 0; $x <= 10; $x++){
                $nmdep = $nmdepend[$x];
                $dataNasc = $dtdepend[$x];
                if ($nmdep != '' && $dataNasc != '') {
                    $cliente = $c->buscaClientes($nmdep, $dataNasc);
                    if(!$cliente){
                        $this->con->exec("INSERT INTO clientes (titular, matricula, nome, dtnasc) VALUES ('{$nome}','{$mat}', '{$nmdep}', '{$dataNasc}')");
                    }
                }
            }

            return 'Contrato alterado com sucesso!';
        }

        return FALSE;

    }

    function listaContratos(){
        $contratos = $this->con->query("SELECT * FROM planos");

        if ($contratos->rowCount() > 0) {
            
            return $contratos->fetchALL(PDO::FETCH_ASSOC);
        }
   
    }

    function listaAbertos(){
        $abertos = $this->con->query("SELECT * FROM planos WHERE status = 'aberto'");
        
        if ($abertos->rowCount() > 0) {
            
            return $abertos->fetchALL(PDO::FETCH_ASSOC);
        }
     
    }

    function listaVencendo(){
        $data = date('Y-m-d');
        $vencendo = $this->con->query("SELECT * FROM planos WHERE dtvencimento <= '{$data}'");
        
        if ($vencendo->rowCount() > 0) {
            
            return $vencendo->fetchALL(PDO::FETCH_ASSOC);
        }
       
    }

    function deleteContrato($mat){
        if($this->con->exec("DELETE FROM planos WHERE matricula = '{$mat}'")){
            return 'Contrato deletado com Sucesso!';
        }
        return false;
    }

    function buscaContrato($mat){
        $result = $this->con->query("SELECT * FROM planos WHERE matricula = '{$mat}'");

        if($result->rowCount() > 0){
            return $result->fetch(PDO::FETCH_ASSOC);
        }

    }

    function buscarTitular($mat){
        $result = $this->con->query("SELECT ntitular FROM planos WHERE matricula = '{$mat}'");

        if($result->rowCount() > 0){
            return $result->fetch(PDO::FETCH_ASSOC);
        }
    }

    function total(){
        $total = $this->con->query("SELECT COUNT(*) FROM planos");

        if($total->rowCount() > 0){
            return $total->fetch(PDO::FETCH_ASSOC);
        }
    }

    function totalAbertos(){
        $total = $this->con->exec("SELECT COUNT(*) FROM planos WHERE status = 'aberto'");

        return $total;
    }


}

?>

