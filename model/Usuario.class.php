<?php

   require_once 'Conexao.class.php';

class Usuario {

    private $con;

    function __construct() {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }

    function addUsuario($nome,$email,$login, $senha) {
        if($this->con->exec("INSERT INTO usuario (nome,email, login, senha ) VALUES ('{$nome}', '{$email}', '{$login}', '{$senha}')")){
         return TRUE;
         }
        return FALSE;
    }

    function buscaUsuario($id) {
        $busca = $this->con->query("SELECT * FROM usuario WHERE id = '{$id}'");

        if ($busca->rowCount() > 0) {

            return $busca->fetch(PDO::FETCH_ASSOC);
        }

    }

    function deleteUsuario($id) {
        if ($this->con->exec("DELETE FROM usuario WHERE id = '{$id}'")) {

            return TRUE;
        }

        return FALSE;
    }

    function listaUsuarios() {
        $lista = $this->con->query("SELECT * FROM usuario");

        if ($lista->rowCount() > 0) {

            return $lista->fetchALL(PDO::FETCH_ASSOC);
        }
        return FALSE;
    }

    function updateUsuario($id, $nome, $email, $login,  $senha) {

        if ($this->con->exec("UPDATE usuario SET nome = '{$nome}' , email = '{$email}', login = '{$login}', senha = '{$senha}' WHERE id = '{$id}'")) {

            return TRUE;
        }

        return FALSE;
    }

    function validaAcesso($login, $senha) {

        $result = $this->con->query("SELECT * FROM usuario WHERE login = '{$login}' AND senha = '{$senha}'");

        if ($result->rowCount() > 0) {

            return $result->fetch(PDO::FETCH_ASSOC);
        }
        return FALSE;
    }

}

?>