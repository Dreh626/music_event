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
      <a class="navbar-item">
        Inicio
      </a>

      <a class="navbar-item">
        Sobre
      </a>
      </div>
    </div>

    <!-- <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-light">
          Olá,
          <//?php echo $_SESSION['usuario']; ?>
          </a>
          <a class="button is-primary" href="logout.php">
            <strong>Sair</strong>
          </a>
        </div>
      </div>
    </div>
  </div> -->
</nav>


<!-- Formuláriio -->
<form method="POST" action="cadastro_usuario.php">
<div class="container">
<div class="field">
  <label class="label">Nome do usuario</label>
  <div class="control">
    <input class="input" type="text" name="nome_usuario" placeholder="Entre com o nome do usuario">
  </div>
</div>

<div class="field">
  <label class="label">Senha</label>
  <div class="control">
    <input class="input" type="password" name="senha_usuario" placeholder="Entre com a senha que deseja ">
  </div>
</div>

<div class="field">
  <label class="label">Nome</label>
  <div class="control">
    <input class="input" type="text" name="nome" placeholder="Entre com seu Nome">
</div>

<div class="field">
  <label class="label">Email</label>
  <div class="control">
    <input class="input" type="text" name="email_usuario" placeholder="Entre com seu Email">
</div>

  <div class="field">
  <label class="label">Rua</label>
  <div class="control">
    <input class="input" type="text" name="rua_usuario" placeholder="Entre com sua rua">
</div>

<div class="field">
  <label class="label">Bairro</label>
  <div class="control">
    <input class="input" type="text" name="bairro_usuario" placeholder="Entre com seu bairro">
</div>

<div class="field">
  <label class="label">Cidade</label>
  <div class="control">
    <input class="input" type="text" name="cidade_usuario" placeholder="Entre com sua cidade">
</div>

<div class="field">
  <label class="label">CEP</label>
  <div class="control">
    <input class="input" type="text" name="cep_usuario" placeholder="Entre com seu CEP" maxlength="8">
</div>

<div class="field">
  <label class="label">Estado</label>
  <div class="control">
    <div class="select">
      <select name="estado_usuario">
        <option>Selecione seu estado</option>
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
        <option value="ES">Estrangeiro</option>
      </select>
    </div>
  </div>
</div>


<div class="field is-grouped">
  <div class="control">
    <button type="submit" class="button is-link btn__edit">Cadastrar</button>
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
