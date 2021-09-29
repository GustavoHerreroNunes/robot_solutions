<?php
    require_once("clientes.php");

    class controllerEditar{

        //Instância da classe "clientes"
        private $clientes;

        //Construtor da classe
        public function __construct(){
            $this->clientes = new Clientes();

            $action = $_GET['executar'];
            if($action == 'consulta'){
                $this->executarConsulta();
            }else if($action == 'edicao'){
                $this->executarEdicao();
            }else{
                echo "<script>
                        alert('Erro ao editar');
                        console.info('Entrada de execução inválida: '" . $action . ");
                      </script>";
            }
        }

        //Método que executa a consulta do dados do registro selecionado e as apresenta no formulário
        public function executarConsulta(){
            $registry_found = false;//Indica se o registro foi encontrado
            
            $registryId = $_GET['id'];

            $db_registry = $this->clientes->consultar($registryId);

            //Se a variável "db_registry" tiver recebido uma mensagem de erro ao invés do registro
            if(is_string($db_registry)){

                echo "<script>
                        alert('Erro ao consultar registro');
                        console.log('Erro ao consultar registro: ".$db_registry."');
                      </script>";

            }else{
                foreach($db_registry as $registry){
                    $registry_found = true;
                    ?>
                    
                    <div class="row">
                        <label for="txbNome" class="ps-0 pt-3 fs-6 text-secondary form-label">Nome:</label>
                        <input type="text" name="txbNome" id="txbNome" placeholder="Nome completo do cliente" class="form-control" value="<?php echo $registry[1]?>">
                    </div>

                    <div class="row">
                        <label for="txbTelefone" class="ps-0 pt-3 fs-6 text-secondary form-label">Telefone:</label>
                        <input type="text" name="txbTelefone" id="txbTelefone" placeholder="Telefone celular do cliente" class="form-control" value="<?php echo $registry[2]?>">
                    </div>

                    <div class="row">
                        <label for="slctOrigem" class="ps-0 pt-3 fs-6 text-secondary form-label">Origem:</label>
                    </div>

                    <div class="row">
                        <select name="slctOrigem" id="slctOrigem" class="form-select">
                        <option selected disabled>Como o cliente encontrou a loja</option>
                        <option value="Site">Site</option>
                        <option value="Google Ads">Google Ads</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Whatsapp">Whatsapp</option>
                        <option value="E-mail">E-mail</option>
                        </select>
                    </div>

                    <script>
                        document.frmEditarCliente.slctOrigem.value = "<?php echo $registry[3]?>";
                    </script>

                    <div class="row">
                        <label for="txbDataContato" class="ps-0 pt-3 fs-6 text-secondary form-label">Data de Contato:</label>
                        <input type="date" name="txbDataContato" id="txbDataContato" class="form-control" value="<?php echo $registry[4]?>">
                    </div>

                    <div class="row">
                        <label for="txbObservacao" class="ps-0 pt-3 fs-6 text-secondary form-label">Observação:</label>
                        <textarea name="txbObservacao" id="txbObservacao" maxlength="200" rows="4" placeholder="Uma observação sobre o cliente de até 200 caracteres" class="form-control"><?php echo $registry[5]?></textarea>
                    </div>

                    <div class="row d-grid gap-2 d-md-block mt-2 mt-sm-3">
                        <button type="submit" name="btnEditar" id="btnEditar" class="btn btn-primary col-lg-1">
                            Editar
                        </button>
                        
                        <a href="consultar.php" class="col-lg-1 p-0 text-decoration-none">
                        <button type="button" name="btnCancelar" class="btn btn-secondary col-12 col-lg-1 mb-lg-0 mb-1">
                            Cancelar
                        </button>
                        </a>
                    </div>

                    <?php
                }
            }

            //Nenhum registro foi encontrado
            if(!$registry_found){
                echo "<script>alert('Registro não encontrado'); document.location = 'consultar.php';</script>";
            }else{
                echo "<script>document.frmEditarCliente.action='connectionDB/clientes/controllerEditar.php?executar=edicao&id=" . $registryId . "'</script>";
            }

        }

        //Método que edita o registro selecionado, alterando-o com os dados informados
        public function executarEdicao(){
            $this->clientes->setId($_GET['id']);
            $this->clientes->setNome($_POST['txbNome']);
            $this->clientes->setTelefone($_POST['txbTelefone']);
            $this->clientes->setOrigem($_POST['slctOrigem']);
            $this->clientes->setData_contato(date('Y-m-d', strtotime($_POST['txbDataContato'])));
            $this->clientes->setObservacao($_POST['txbObservacao']);

            $answer = $this->clientes->editar();

            if($answer){
                echo "<script>
                        alert('Registro editado com sucesso');
                        document.location = '../../consultar.php';
                      </script>";
            }else{
                echo "<script>
                        alert('Erro ao editar registro');
                        document.location = '../../consultar.php';
                      </script>";
            }
        }

    }

    new controllerEditar();
?>