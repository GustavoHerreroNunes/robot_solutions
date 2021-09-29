<?php
    //Captando path do servidor
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);

    require_once("$root/Jefferson-aulas/exercicios/quinzena-6/connectionDB/connection.php");
    
    class Clientes{
        
        //Atributos
        private $conn;

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

                $this->conn = new Connect();
                $sql = $this->conn->prepare("insert into clientes values (null,?,?,?,?,?)");
                @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
                @$sql->bindParam(2, $this->getTelefone(), PDO::PARAM_STR);
                @$sql->bindParam(3, $this->getOrigem(), PDO::PARAM_STR);
                @$sql->bindParam(4, $this->getData_contato(), PDO::PARAM_STR);
                @$sql->bindParam(5, $this->getObservacao(), PDO::PARAM_STR);

                if($sql->execute() == true){
                    return "Cliente cadastrado com sucesso";
                }else{
                    return "Erro ao cadastrar cliente";
                }

                $this->conn = null;

            }catch(PDOException $error){

                return "Erro ao cadastrar cliente: ".$error->getMessage();
                
            }
        }

        //Método para Consultar registros contidos na tabela
        public function Consultar($param){
            if(isset($param)){//Se o parâmetro foi inserido

                try{
                    $sql_instruction = "select * from clientes";

                    if($param != "*"){//Se o parâmetro inserido não indicar a seleção de todos os registros

                        if($param > 0){//Se o parâmetro inserido não for menor ou igual a 0

                            $sql_instruction .= " where id = ".$param;

                        }else{
                            return "Parâmeto não pode ser menor ou igual a 0";
                        }
                    }
    
                    $this->conn = new Connect();
                    $sql = $this->conn->prepare($sql_instruction);
                    $sql->execute();
    
                    return $sql->fetchAll();
                    
                    $this->conn = null;
    
                }catch(PDOException $error){
    
                    return $error->getMessage();
    
                }
            }else{
                return "Parâmetro não inserido";
            }
        }

        //Método para Editar os dados de um registro selecionado
        public function Editar(){
            try{

                $this->conn = new Connect();
                $sql = $this->conn->prepare("update clientes set nome = ?, telefone = ?, origem = ?, data_contato = ?, observacao = ? where id = ?");
                @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
                @$sql->bindParam(2, $this->getTelefone(), PDO::PARAM_STR);
                @$sql->bindParam(3, $this->getOrigem(), PDO::PARAM_STR);
                @$sql->bindParam(4, $this->getData_contato(), PDO::PARAM_STR);
                @$sql->bindParam(5, $this->getObservacao(), PDO::PARAM_STR);
                @$sql->bindParam(6, $this->getId(), PDO::PARAM_STR);

                if($sql->execute() == true){
                    return true;
                }else{
                    return false;
                }

            }catch(PDOException $error){

                return  $error->getMessage();

            }
        }

    }
?>