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

    /*function addCliente($mat,$nome,$dtnasc)
    {
        try {
            $sql = "INSERT INTO clientes VALUES (?,?,?)";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $mat);
            $stmt->bindValue(2, $nome);
            $stmt->bindValue(3, $dtnasc);
            $stmt->execute();

            return 'Cliente inserido com sucesso!';
        }catch (Exception $ex){
            if($ex->errorInfo[1] == 1062){
                return 'Cliente já cadastrado';
            }else{
                return 'Erro ao cadastrar Cliente';
            }
        }

    }*/

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

}

?>