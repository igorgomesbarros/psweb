<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSWeb</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style.css"/>
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">PSWeb</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item dropdown" style="display: <?php echo (isset($_COOKIE["usuarioLogado"]) && isset($_COOKIE["nomeEmpresa"])) ? 'unset': 'none' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Serviço
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cadastro-servico.php">Cadastrar Serviço</a>
          <a class="dropdown-item" href="editar-servico.php">Editar Serviço</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav my-2 my-lg-0">
        <?php
            if(isset($_COOKIE["usuarioLogado"]) && isset($_COOKIE["nomeEmpresa"])){
               echo '<label> Olá, '.$_COOKIE["usuarioLogado"].' / '.$_COOKIE["nomeEmpresa"] .'</label>';
                echo '<a class="nav-link" href="login.php">Log-out</a>';
            }else{
                 echo '<a class="nav-link" href="login.php">Log-in</a>';
            }
        ?>
        <label></label>

    </ul>
  </div>
</nav>
</header>

<body>