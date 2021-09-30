<?php
    require_once("clientes.php");

    class controllerExcluir{

        //Instância para a classe "clientes"
        private $clientes;

        //Construtor da classe
        public function __construct(){
            $this->clientes = new Clientes();
            $this->executar();
        }

        //Método que realiza a exclusão do registro selecionado
        public function executar(){
            $this->clientes->setId($_GET['id']);

            $awnser = $this->clientes->excluir();

            if($awnser){
                echo "<script>
                        alert('Registro excluído com sucesso!');
                        document.location = '../../consultar.php';
                      </script>";
            }else if(is_string($awnser)){
                echo "<script>
                        alert('Erro ao excluir registro: ');
                        console.info('Erro ao excluir'". $awnser .");
                        document.location = '../../consultar.php';
                      </script>";
            }else{
                echo "<script>
                        alert('Erro ao excluir registro');
                        console.info('Erro ao excluir');
                        document.location = '../../consultar.php';
                      </script>";
            }
        }
    }

    new controllerExcluir();
?>