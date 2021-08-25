<?php
    require_once("./clientes.php");

    class ControllerCadastrar{
        
        //Instância 
        private $clientes;
        
        //Construtor da classe
        public function __construct(){
            $this->clientes = new Clientes();
            $this->executar();
        }

        //Método que capta os dados do formulário e executa o cadastro via instância "clientes"
        public function executar(){
            $this->clientes->setNome($_POST['txbNome']);
            $this->clientes->setTelefone($_POST['txbTelefone']);
            $this->clientes->setOrigem($_POST['slctOrigem']);
            $this->clientes->setData_contato(date('Y-m-d', strtotime($_POST['txbDataContato'])));
            $this->clientes->setObservacao($_POST['txbObservacao']);

            $answer = $this->clientes->cadastrar();

            echo "<script>alert('".$answer."');document.location='../../cadastrar.html'</script>";
        }

    }

    new ControllerCadastrar();
?>