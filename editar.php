<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--CSS necessário-->
        <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.css">

        <title>Crud MySQL - Editar</title>
    </head>
    <body>
      <!--Menu Superior-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark container-fluid">
        <div class="container-fluid">
          <a class="navbar-brand nav-link mb-0 h1" href="./index.html">
            <img src="./img/logo-dark-2.png" alt="Logo Robot Solutions" width="35" heigth="35" class="d-inline-block align-text-top">
            Robot Solotuions
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./cadastrar.html">Cadastrar</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./consultar.php">Consultar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!--Conteúdo da Página-->
      <div class="container p-3">
        <form name="frmEditarCliente" method="POST" action="">
          <h1 class="text-center" style="font-size:30pt">Editar</h1>

          <?php require_once("connectionDB/clientes/controllerEditar.php") ?>
          
        </form>
      </div>

      <!--Script base para o Bootstrap-->
      <script src="./js/bootstrap/js/bootstrap.js"></script>

    </body>
</html>
