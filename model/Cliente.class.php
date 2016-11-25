<?php

   require_once 'Conexao.class.php';

class Cliente {

    private $con;

    function __construct() {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }

    function addCliente($mat,$nome,$dtnasc) {
        if($this->con->exec("INSERT INTO clientes (matricula,nome, dtnasc) VALUES ('{$mat}', '{$nome}', '{$dtnasc}')")){
         return TRUE;
         }
        return FALSE;
    }

    function deletecliente($mat) {
        if ($this->con->exec("DELETE FROM clientes WHERE id = '{$mat}'")) {

            return 'Cliente deletado com Sucesso!';
        }

        return FALSE;
    }

    function listaClientes() {
        $lista = $this->con->query("SELECT * FROM clientes");

        if ($lista->rowCount() > 0) {

            return $lista->fetchALL(PDO::FETCH_ASSOC);
        }
        return FALSE;
    }

    function updateCliente($id, $nome, $data) {

        if ($this->con->exec("UPDATE clientes SET nome = '{$nome}', dtnasc = '{$data}' WHERE id = '{$id}'")) {

            return TRUE;
        }

        return FALSE;
    }

    function total(){
        $result = $this->con->exec("SELECT COUNT(*) FROM clientes");

        return $result;
    }

    function buscaClientes($name, $date) {
        $lista = $this->con->query("SELECT * FROM clientes WHERE nome = '{$name}' AND dtnasc = '{$date}'");

        if ($lista->rowCount() > 0) {

            return $lista->fetch(PDO::FETCH_ASSOC);
        }
        return FALSE;
    }

    function buscar($id){
        $cliente = $this->con->query("SELECT * FROM clientes WHERE id = '{$id}'");

        if ($cliente->rowCount() > 0) {

            return $cliente->fetch(PDO::FETCH_ASSOC);
        }
        return FALSE;
    }

}

?>