<?php


class Controller {
    public $cadastro;
    public $delete;
    public $update;

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
            
            header('Location: ../index.php');
            exit;
        
            }
        }
    }

    function contratos(){
        if(!$this->verificaLogin()){
            header('Location: ../index.php');
            exit;
        }

        if(isset($_REQUEST['salvar'])){
            $mat = $_REQUEST['matricula'];
            $nome = $_REQUEST['ntitular'];
            $opt = $_REQUEST['option'];
            $nasc = $_REQUEST['dtnasc'];
            $cpf = $_REQUEST['cpf'];
            $rg = $_REQUEST['rg'];
            $org = $_REQUEST['org'];
            $prof = $_REQUEST['profissao'];
            $mae = $_REQUEST['mae'];
            $end = $_REQUEST['end'];
            $num = $_REQUEST['num'];
            $bairro = $_REQUEST['bairro'];
            $cid = $_REQUEST['cidade'];
            $uf = $_REQUEST['uf'];
            $cep = $_REQUEST['cep'];
            $tel = $_REQUEST['telefone'];
            $email = $_REQUEST['email'];
            $opt1 = $_REQUEST['option1'];
            $dp1 = $_REQUEST['dp1'];
            $dt1 = $_REQUEST['dtnasc1'];
            $dp2 = $_REQUEST['dp2'];
            $dt2 = $_REQUEST['dtnasc2'];
            $dp3 = $_REQUEST['dp3'];
            $dt3 = $_REQUEST['dtnasc3'];
            $dp4 = $_REQUEST['dp4'];
            $dt4 = $_REQUEST['dtnasc4'];
            $dp5 = $_REQUEST['dp5'];
            $dt5 = $_REQUEST['dtnasc5'];
            $dp6 = $_REQUEST['dp6'];
            $dt6 = $_REQUEST['dtnasc6'];
            $dp7 = $_REQUEST['dp7'];
            $dt7 = $_REQUEST['dtnasc7'];
            $dp8 = $_REQUEST['dp8'];
            $dt8 = $_REQUEST['dtnasc8'];
            $dp9 = $_REQUEST['dp9'];
            $dt9 = $_REQUEST['dtnasc9'];
            $dp10 = $_REQUEST['dp10'];
            $dt10 = $_REQUEST['dtnasc10'];

            $cad =  new Contrato();

            $this->cadastro = $cad->addContrato($mat, $nome, $opt, $nasc, $cpf, $rg, $org, $prof, $mae, $end, $num, $bairro, $cid, $uf, $cep, $tel, $email, $opt1, $dp1, $dt1, $dp2, $dt2, $dp3, $dt3, $dp4, $dt4, $dp5, $dt5, $dp6, $dt6, $dp7, $dt7, $dp8, $dt8, $dp9, $dt9, $dp10, $dt10);


        }

        if(isset($_REQUEST['delete'])){
            $mat = $_REQUEST['cod'];
            $con = new Contrato();

            $this->delete = $con->deleteContrato($mat);

            if($this->delete){
                header('Location: views/contratos.php');
                exit;
            }
        }

    }

    function editarContrato(){
        if(!$this->verificaLogin()){
            header('Location: ../index.php');
            exit;
        }

        if(isset($_REQUEST['editar'])){
            $id = $_REQUEST['cod'];
            $nome = $_REQUEST['ntitular'];
            $nasc = $_REQUEST['dtnasc'];
            $opt = $_REQUEST['option'];
            $cpf = $_REQUEST['cpf'];
            $rg = $_REQUEST['rg'];
            $org = $_REQUEST['org'];
            $prof = $_REQUEST['profissao'];
            $num = $_REQUEST['num'];
            $bairro = $_REQUEST['bairro'];
            $cid = $_REQUEST['cidade'];
            $uf = $_REQUEST['uf'];
            $cep = $_REQUEST['cep'];
            $tel = $_REQUEST['telefone'];
            $email = $_REQUEST['email'];
            $opt1 = $_REQUEST['option1'];
            $dp1 = $_REQUEST['dp1'];
            $dt1 = $_REQUEST['dtnasc1'];
            $dp2 = $_REQUEST['dp2'];
            $dt2 = $_REQUEST['dtnasc2'];
            $dp3 = $_REQUEST['dp3'];
            $dt3 = $_REQUEST['dtnasc3'];
            $dp4 = $_REQUEST['dp4'];
            $dt4 = $_REQUEST['dtnasc4'];
            $dp5 = $_REQUEST['dp5'];
            $dt5 = $_REQUEST['dtnasc5'];
            $dp6 = $_REQUEST['dp6'];
            $dt6 = $_REQUEST['dtnasc6'];
            $dp7 = $_REQUEST['dp7'];
            $dt7 = $_REQUEST['dtnasc7'];
            $dp8 = $_REQUEST['dp8'];
            $dt8 = $_REQUEST['dtnasc8'];
            $dp9 = $_REQUEST['dp9'];
            $dt9 = $_REQUEST['dtnasc9'];
            $dp10 = $_REQUEST['dp10'];
            $dt10 = $_REQUEST['dtnasc10'];

            $upd = new Contrato();

            $this->update = $upd->editeContrato($id, $nome, $nasc, $opt, $cpf, $rg, $org, $prof, $num, $bairro, $cid, $uf, $cep, $tel, $email, $opt1, $dp1, $dt1, $dp2, $dt2, $dp3, $dt3, $dp4, $dt4, $dp5, $dt5, $dp6, $dt6, $dp7, $dt7, $dp8, $dt8, $dp9, $dt9, $dp10, $dt10);


        }
    }
            
    function listaContratos() {
        $chm = new Contrato();
        $lista = $chm->listaContratos();

        return $lista;
    }
    
    function contratosAbertos(){
        $chm = new Contrato();
        $abertos = $chm->listaAbertos();
        
        return $abertos;
    } 
    
    function contratosFechados(){
        $chm = new Contrato();
        $fechados = $chm->listaFechados();
        
        return $fechados;
    }

    function deleteContrato() {
        if (isset($_REQUEST['delete'])) {
            $cod = $_REQUEST['cod'];
            $chm = new Contrato();
            $status = $chm->deleteContrato($cod);

            return $status;
        }
    }


}
