<?php
    require_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music Event</title>
</head>
<body>
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


    <div class="exibi_dados">
    <?php
$query = sprintf("SELECT nome,link,email,categoria,descricao FROM evento");
// executa a query
$dados = mysqli_query($query, $conexao);
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>

<?php
// se o número de resultados for maior que zero, mostra os dados
if ($total > 0) {
    // inicia o loop que vai mostrar todos os dados
    do {
        ?>
            <p><?=$linha['nome']?> / <?=$linha['link']?> / <?=$linha['email']?>/ <?=$linha['categoria']?>/ <?=$linha['descricao']?></p>
<?php
// finaliza o loop que vai mostrar os dados
    } while ($linha = mysqli_fetch_assoc($dados));
    // fim do if
}
?>
</body>
</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($dados);
?>
    </div>

