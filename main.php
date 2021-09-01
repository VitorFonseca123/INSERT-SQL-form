<?php 

    require_once("cadastro.php");
    class cadastroCont{
        private $cadastro;

        public function __construct(){
            $this->cadastro = new Cadastro();
            $this-> incluir();
        }
        private function incluir(){
            $this->cadastro->setNome($_POST['txtNome']);
            $this->cadastro->setTelefone($_POST['cadtelefone']);
            $this->cadastro->setOrigem($_POST['txtorigem']);
            $this->cadastro->setData(date('Y-m-d',strtotime($_POST['cadData'])));
            $this->cadastro->setObservacao($_POST['observacoes']);
            
            $result = $this->cadastro->incluir();

            if($result>=1){
                echo "<script>alert('Registro incluido com sucesso!'document.location='index.php');</script>";
            }else{
                echo "<script>alert('Erro ao gravar registro');</script>";
            }

        }
    }
    new cadastroCont();
?>