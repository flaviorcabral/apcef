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
        if ($this->con->exec("DELETE FROM clientes WHERE matricula = '{$mat}'")) {

            return TRUE;
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

}

?>