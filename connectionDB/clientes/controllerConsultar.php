<?php
    require_once("clientes.php");

    class controllerConsultar{

        //Instância da classe "clientes"
        private $clientes;

        //Construtor da classe
        public function __construct(){
            $this->clientes = new Clientes();
            $this->executar();
        }

        //Método que executa a consulta dos registros, verifica se algum foi encontrado e em caso afirmativo os apresenta na página
        public function executar(){
            $registries_found = false;//Indica se os registros foram encontrados

            $db_registries = $this->clientes->consultar("*");

            //Se a variável "db_registries" tiver recebido uma mensagem de erro ao invés dos registros
            if(is_string($db_registries)){

                echo "<script>
                        alert('Erro ao consultar registros');
                        console.log('Erro ao consultar registros: ".$db_registries."');
                      </script>";

            }else{

                foreach($db_registries as $registry){
                    $registries_found = true;
                    ?>
                    
                    <tr>
                        <td><?php echo $registry[1] ?></td>
                        <td><?php echo $registry[2] ?></td>
                        <td><?php echo $registry[3] ?></td>
                        <td><?php echo $registry[4] ?></td>
                        <td><?php echo $registry[5] ?></td>
                        <td><a href="./editar.php?executar=consulta&id=<?php echo $registry[0] ?>"><img src="./img/editar.png" width="25" height="25" alt="Editar Registro"></a></td>
                        <td><a href="./excluir.html?id=<?php echo $registry[0] ?>"><img src="./img/excluir.png" width="25" height="25" alt="Excluir Registro"></a></td>
                    </tr>
                    
                    <?php
                }

            }

            //Nenhum registro foi encontrado
            if(!$registries_found){
                ?>
                
                <tr>
                    <td colspan=6>Nenhum registro foi encontrado</td>
                </tr>
                
                <?php
            }
        }
    }

    new controllerConsultar();
?>