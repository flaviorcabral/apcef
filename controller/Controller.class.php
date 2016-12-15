<?php


class Controller {

    public $login = false;
    public $cadastro = false;
    public $deleteCliente = false;
    public $deleteContrato = false;
    public $update = false;
    public $listaClientes;

    function login() {
      
            if (isset($_REQUEST['login'])) {

                $login = preg_replace('/[^[:alpha:]_]/', '', $_REQUEST['usuario']);
                $senha = preg_replace('/[^[:alnum:]_]/', '',$_REQUEST['senha']);
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

                    $this->login = 'Usuáro/Senha incorretos!';
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

        if( $_SERVER['REQUEST_METHOD']=='POST' ) {
            $request = md5(implode($_POST));

            if (isset($_SESSION['prox_request']) && $_SESSION['prox_request'] == $request) {
                header("Refresh:1; URL:../views/formulario.php");

            } else {
                $_SESSION['prox_request'] = $request;
                if (isset($_REQUEST['salvar'])) {
                    $mat = $_REQUEST['matricula'];
                    $nome = $_REQUEST['ntitular'];
                    $dtvenc = $_REQUEST['dtvenc'];
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

                    $cad = new Contrato();

                    if ($cad->addContrato($mat, $dtvenc, $nome, $opt, $nasc, $cpf, $rg, $org, $prof, $mae, $end, $num, $bairro, $cid, $uf, $cep, $tel, $email, $opt1, $dp1, $dt1, $dp2, $dt2, $dp3, $dt3, $dp4, $dt4, $dp5, $dt5, $dp6, $dt6, $dp7, $dt7, $dp8, $dt8, $dp9, $dt9, $dp10, $dt10)) {
                        $this->cadastro = 'Plano cadastrado com Sucesso!';
                    } else {
                        echo "<script>alert('Matricula informada ja Existente!');";
                        echo "location.href='javascript:history.back();'</script>";
                    }
                }
            }
        }

            if (isset($_REQUEST['delete'])) {
                $cod = $_REQUEST['cod'];
                $chm = new Contrato();
                $this->deleteContrato = $chm->deleteContrato($cod);
                echo "<script>location.href='contratos.php?info=$this->deleteContrato' </script>";
            }

    }

    function editarContrato(){
        if(!$this->verificaLogin()){
            header('Location: ../index.php');
            exit;
        }

        if(isset($_REQUEST['editar'])){
            $id = $_REQUEST['id'];
            $mat = $_REQUEST['cod'];
            $nome = $_REQUEST['ntitular'];
            $dtvenc = $_REQUEST['dtvenc'];
            $nasc = $_REQUEST['dtnasc'];
            $sexo = $_REQUEST['sexo'];
            $cpf = $_REQUEST['cpf'];
            $rg = $_REQUEST['rg'];
            $org = $_REQUEST['org'];
            $profissao = $_REQUEST['profissao'];
            $mae = $_REQUEST['mae'];
            $end = $_REQUEST['end'];
            $num = $_REQUEST['num'];
            $bairro = $_REQUEST['bairro'];
            $cid = $_REQUEST['cidade'];
            $uf = $_REQUEST['uf'];
            $cep = $_REQUEST['cep'];
            $tel = $_REQUEST['telefone'];
            $email = $_REQUEST['email'];
            $status = $_REQUEST['status'];
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

                $this->update = $upd->editeContrato($id, $mat, $dtvenc, $nome, $nasc, $sexo, $cpf, $rg, $org, $profissao, $mae, $end, $num, $bairro, $cid, $uf, $cep, $tel, $email, $status, $dp1, $dt1, $dp2, $dt2, $dp3, $dt3, $dp4, $dt4, $dp5, $dt5, $dp6, $dt6, $dp7, $dt7, $dp8, $dt8, $dp9, $dt9, $dp10, $dt10);

                if ($this->update) {
                    header('Location: contratos.php?info=' . $this->update);
                }else{
                    echo "<script>alert('Nenhuma alteração detectada. Clicar em voltar!');";
                    echo "location.href='javascript:history.back();'</script>";
                }
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
    
    function contratosVencendo(){
        $chm = new Contrato();
        $vencendo = $chm->listaVencendo();
        
        return $vencendo;
    }

    function buscarContrato($cod){
        $chm = new Contrato();
        $result = $chm->buscaContrato($cod);

        return $result;
    }

    function totalContratos(){
        $chm = new Contrato();
        $total = $chm->total();

        return $total;
    }

    function totalContAbertos(){
        $chm = new Contrato();
        $total = $chm->totalAbertos();

        return $total;
    }

    function buscaTitular($mat){
        $chm = new Contrato();
        $titular = $chm->buscarTitular($mat);

        return $titular;
    }

    function listaClientes(){
        $chm = new Cliente();
        $clientes = $chm->listaClientes();

        return $clientes;
    }

    function buscaCliente($cod){
        $chm = new Cliente();
        $result = $chm->buscaClientes($cod);

        return $result;
    }

    function deleteCliente(){
        if (isset($_REQUEST['delete'])) {
            $cod = $_REQUEST['cod'];
            $chm = new Cliente();
            $this->deleteCliente = $chm->deletecliente($cod);
            echo "<script>location.href='clientes.php?info=$this->deleteCliente' </script>";
        }
    }


}
