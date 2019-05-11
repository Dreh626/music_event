<?php
session_start();
require_once 'conexao.php';

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

var_dump($_POST);


$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT usuario,senha FROM usuario WHERE usuario = '{$usuario}' AND senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

echo ($row);
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php');
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php?teste=qualq');
	exit();
}