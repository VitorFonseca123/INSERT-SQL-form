<?php
    require_once('banco.php');

    class cadastro extends Banco{
        private $id;
        private $nome;
        private $telefone;
        private $origem;
        private $data;
        private $observacao;

        public function setId($string){
            $this->id = $string;
        }
        public function setNome($string){
            $this-> nome=$string; 
        }
        public function setTelefone($string){
            $this-> telefone=$string; 
        }
        public function setData($string){
            $this-> data=$string; 
        }
        public function setOrigem($string){
            $this-> origem=$string; 
        }
        public function setObservacao($string){
            $this-> observacao=$string; 
        }


        public function getNome(){
            return $this->nome ;
        }
        public function getTelefone(){
            return $this-> telefone;
        }
        public function getData(){
            return $this-> data;
        }
        public function getOrigem(){
            return $this-> origem;
        }
        public function getObservacao(){
            return $this-> observacao;
        }
        public function getid(){
            return $this-> id;
        }


        public function incluir(){
            return $this->setAgendamentos(
                $this->getNome(),
                $this->getTelefone(),
                $this->getOrigem(),
                $this->getData(),
                $this->getObservacao()
            );
        }
        public function listar($id){
            return $this->getAgendamentos($id);
        }
    
        public function editar(){
            return $this->updateAgendamentos($this->getId(),$this->getNome(),$this->getTelefone(),$this->getOrigem(),$this->getData(),$this->getObservacao());
        }
    
        public function excluir($id){
            return $this->deleteAgendamentos($id);
        }

    }
?>