<?php
    require_once("../connection.php");
    
    class Clientes{
        
        //Atributos

        private $conn 

        private $id;
        private $nome;
        private $telefone;
        private $origem;
        private $data_contato;
        private $observacao;

        //Getters e Setters
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getOrigem(){
            return $this->origem;
        }
        public function setOrigem($origem){
            $this->origem = $origem;
        }

        public function getData_contato(){
            return $this->data_contato;
        }
        public function setData_contato($data_contato){
            $this->data_contato = $data_contato;
        }

        public function getObservacao(){
            return $this->observacao;
        }
        public function setObservacao($observacao){
            $this->observacao = $observacao;
        }

        //Métodos para realizar as operações de CRUD na tabela "clientes"
        
        //Método para Cadastrar novos registros na tabela
        public function Cadastrar(){
            try{

                $this->conn = new Connection();
                $sql = $this->conn->prepare("insert into clientes values (null,?,?,?,?,?)");
                @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
                @$sql->bindParam(2, $this->getTelefone(), PDO::PARAM_STR);
                @$sql->bindParam(3, $this->getOrigem(), PDO::PARAM_STR);
                @$sql->bindParam(4, $this->getData_contato(), PDO::PARAM_STR);
                @$sql->bindParam(5, $this->getObservacao(), PDO::PARAM_STR);

                if($sql->execute() == true){
                    return "Cliente cadastrado com sucesso";
                }

                $this->conn = null;

                echo "<script>console.log('Passou do return')</script>";

            }catch(PDOException $error){

                return "Erro ao cadastrar cliente: ".$error->getMessage();
                
            }
        }

    }
?>