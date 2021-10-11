<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("$root/3ds/FormPW/Model/cadastro.php");

class CadastroCont{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        if(isset($_GET['funcao']) && $_GET['funcao'] == "cadastro"){
            $this->incluir();
        }else if(isset($_GET['funcao']) && $_GET['funcao'] == "editar"){
            $this->editar($_GET['id']);
        }
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['cadNome']);
        $this->cadastro->setTelefone($_POST['cadtelefone']);
        $this->cadastro->setOrigem($_POST['txtorigem']);
        $this->cadastro->setData(date('Y-m-d',strtotime($_POST['cadData'])));
        $this->cadastro->setObservacao($_POST['observacoes']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');</script>";
        }
    }

    public function listar($id){
        return $result = $this->cadastro->getAgendamentos($id);
    }
    private function editar($id){
        $this->cadastro->setId($id);
        $this->cadastro->setNome($_POST['txtNome']);
        $this->cadastro->setTelefone($_POST['cadtelefone']);
        $this->cadastro->setOrigem($_POST['txtorigem']);
        $this->cadastro->setData(date('Y-m-d',strtotime($_POST['cadData'])));
        $this->cadastro->setObservacao($_POST['observacoes']);
        $result = $this->cadastro->editar();
        if($result >= 1){
            echo "<script>alert('Registro alterado com sucesso!');document.location='consulta.php'</script>";
        }else{
            echo "<script>alert('Erro ao alterar o registro!');</script>";
        }
    }
    public function excluir($id){
        $result = $this->cadastro->excluir($id);
        if($result >= 1){
            echo "<script>alert('Registro excluido com sucesso!');document.location='consulta.php'</script>";
        }else{
            echo "<script>alert('Erro ao excluir o registro!');</script>";
        }
    }
}
new CadastroCont();