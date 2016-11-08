<?php

class Controller {

    function login() {
      
            if (isset($_REQUEST['login'])) {

                $login = $_REQUEST['usuario'];
                $senha = $_REQUEST['senha'];
                $usuario = new Usuario();
                $valida = $usuario->validaAcesso($login, $senha);

                if ($valida) {
                    $nome = $valida['nome'];

                    session_start();
                    $_SESSION['login'] = $login;
                    $_SESSION['nome'] = $nome;
                    
                    $data = date('d-m-y');
                    $hora = date('H:i:s');
                    $host = $_SERVER['REMOTE_ADDR'];
                    
                    $arquivo = fopen('logs/acesso.txt', 'a');
                    
                    if ($arquivo) {
                        $dados =  $data . " - " . $hora . " - " . $host . " - "  . $nome . "\r\n";
                        fwrite($arquivo, $dados);
                        fclose($arquivo);
                    }
                    header('Location: views/contratos.php');
                    exit;
                } else {
                    header('Location: index.php');
                    exit;
                }
            }
        
    }
    
    function verificaLogin(){
        
        if (!array_key_exists('login', $_SESSION)) {
            return FALSE;
        }
        return TRUE;
    }
    
    function logouf(){
        if (isset($_REQUEST['logouf'])) {
            
        
        session_start();
        
        if (isset($_SESSION['login'])) {
            session_destroy();
            
            header('Location: ../views/login.php');
            exit;
        
            }
        }
    }

    function cadastro() {
        
        if (!$this->verificaLogin()) {
            header('Location: ../views/login.php');
            exit;
        }
     
        if (isset($_REQUEST['cadastrar'])) {

            $nome = $_REQUEST['nome'];
            $sobrenome = $_REQUEST['sobrenome'];
            $email = $_REQUEST['email'];
            $opcao = $_REQUEST['option'];
            $login = $_REQUEST['login'];
            $senha = $_REQUEST['senha'];

            $cad = new Usuario();
            $this->cadastro = $cad->addUsuario($nome, $sobrenome, $email, $opcao, $login, $senha);
        }
      }  
     
    function listaUsuarios(){
        $usu = new Usuario();
        $lista = $usu->listaUsuarios();
        
        return $lista;
    }
            
    function buscaUsuario(){
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $usu = new Usuario();
            $usuario = $usu->buscaUsuario($id);
            
            return $usuario;
        }
    }
    
    function editar(){
        $resp = false;
        
        if (!$this->verificaLogin()) {
            header('Location: ../views/login.php');
            exit;
        }
        
        if (isset($_REQUEST['editar'])) {
            $id = $_REQUEST['id'];
            $nome = $_REQUEST['nome'];
            $sobrenome = $_REQUEST['sobrenome'];
            $email = $_REQUEST['email'];
            $perfil = $_REQUEST['option'];
            $login = $_REQUEST['login'];
            $senha = $_REQUEST['senha'];
            
            $usu = new Usuario();
            if ($usu->updateUsuario($id, $nome, $sobrenome, $email, $perfil, $login, $senha)) {
                $this->resp = TRUE;
                header('Location: ../views/lista_usuarios.php');
                exit;
            }
        }
        
        if (isset($_REQUEST['excluir'])) {
            $id = $_REQUEST['id'];
            $usu = new Usuario();
                if($usu->deleteUsuario($id)){
                    header('Location: ../views/lista_usuarios.php');
                    exit;
                }
            }
    }
            
    function listaChamados() {
        $chm = new Chamado();
        $listaChamados = $chm->listaChamados();

        return $listaChamados;
    }
    
    function chamadosAbertos(){
        $chm = new Chamado();
        $abertos = $chm->listaAbertos();
        
        return $abertos;
    } 
    
    function chamadosFechados(){
        $chm = new Chamado();
        $fechados = $chm->listaFechados();
        
        return $fechados;
    }
    
    function buscaChamado() {
        if (isset($_REQUEST['cod'])) {
            $cod = $_REQUEST['cod'];
            $chm = new Chamado();
            $chamado = $chm->buscaChamado($cod);

            return $chamado;
        }
    }

    function responder() {
        
        if (!$this->verificaLogin()) {
            header('Location: ../views/login.php');
            exit;
        }
        
         if (isset($_REQUEST['salvar'])) {
            
            session_start();
            
            $usuario = $_REQUEST['usuario'];
            $cod = $_REQUEST['cod'];
            $email = $_REQUEST['email'];
            $status = $_REQUEST['option'];
            $resposta = $_REQUEST['resposta'];
            $func = $_SESSION['login'];
            
            $chm = new Chamado();
            $resutl = $chm->editeChamado($cod, $status, $resposta, $func);

            if ($resutl) {
                $this->emailResposta($usuario, $email, $tipo, $resposta);
                header('Location: ../views/abertos.php');
                exit;
            }
        }
    }
    
    function emailRecebimento($nome, $email, $opcao){
        $to = $email;
        $subject = $opcao;
        $message = "Senhor(a) " . $nome . ", ". "\r\n".
            "sua mensagem foi enviada com sucesso, em no máximo 48 horas estaremos retornando o contato. \r\n".
            "Agradecemos o seu contato.";
        $headers = 'From: flaviorcabral@gmail.com'.'\r\n'.'MIME-Version: 1.0'.'\r\n' . 'Content-type: text/html; charset=utf-8';
        mail($to, $subject, $message, $headers);
    }
    
    function emailResposta($nome, $email, $opcao, $resp){
        $to = $email;
        $subject = $opcao;
        $message = "Senhor(a) " . $nome . ", ". "\r\n".
            "Referente ao contato segue resposta a sua solicitação: \r\n".
            $resp . "\r\n" .    
            "Agradecemos o seu contato.";
        $headers = 'From: flaviorcabral@gmail.com'.'\r\n'.'MIME-Version: 1.0'.'\r\n' . 'Content-type: text/html; charset=utf-8';
        mail($to, $subject, $message, $headers);
    }

}
