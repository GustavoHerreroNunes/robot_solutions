<?php
    //Definindo a zona de tempo padrão para a base de dados
    date_default_timezone_set('America/Sao_Paulo');

    //Classe para conexão com a base de dados
    class Connect extends PDO{
        private $host = "127.0.0.1";
        private $user = "root";
        private $pass = "";
        private $db = "robot_solutions";

        //Construtor, que realiza a conexão
        public function __construct(){
            parent::__construct("mysql:host=$this->host; dbname=$this->db", "$this->user", "$this->pass");
        }
    }
?>