<?php
session_start();
include 'verifica_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <title>Music Event</title>
</head>
<body>

<!-- menu -->
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="principal.php">
        Inicio
      </a>

      <a class="navbar-item">
        Sobre
      </a>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-light">
          Olá, <?php echo $_SESSION['usuario']; ?>
          </a>
          <a class="button is-primary" href="logout.php">
            <strong>Sair</strong>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>


<!-- Formuláriio -->
<form method="POST" action="cadastro.php">
<div class="container">
<div class="field">
  <label class="label">Nome do evento</label>
  <div class="control">
    <input class="input" type="text" name="nome_evento" placeholder="Entre com o nome do Envento">
  </div>
</div>

<div class="field">
  <label class="label">Link do evento</label>
  <div class="control">
    <input class="input" type="text" name="link_evento" placeholder="Entre com o ">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
  </div>
</div>

<div class="field">
  <label class="label">Email do responsável</label>
  <div class="control">
    <input class="input" type="email" name="email_evento" placeholder="Entre com seu Email">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
</div>

<div class="field">
  <label class="label">Categoria do Evento</label>
  <div class="control">
    <div class="select">
      <select name="categoria_evento">
        <option>Selecione a categoria</option>
        <option value="Funk">Funk</option>
        <option value="Eletro-House">Eletro- House</option>
        <option value="Sertanejo">Sertanejo</option>
        <option value="Rap">Rap</option>
        <option value="Opera">Opera</option>

      </select>
    </div>
  </div>
</div>

<div class="field">
  <label class="label">Descrição do Evento</label>
  <div class="control">
    <textarea class="textarea" name="desc_evento" placeholder="Descreva o evento" maxlength="250"></textarea>
  </div>
</div>



<div class="field is-grouped">
  <div class="control">
    <button type="submit" class="button is-link btn__edit">Cadastrar evento</button>
  </div>
  <div class="control">
  <button class="button is-block is-link  is-fullwidth bg-primary btn__edit_cancel"
                            onClick="javascript:window.location.href='principal.php'">Sair</button>
  </div>
</div>
</div>
</form>


<?php
if (isset($_GET['mensagem']) && (!empty($_GET['mensagem']))) {
    echo $_GET['mensagem'];
}

?>
</body>
</html>
