<?php
require_once 'conexao.php';
//verifica se existe conexão com bd, caso não tenta criar uma nova

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nome_usuario = $_POST['nome_usuario'];
$senha_usuario = $_POST['senha_usuario'];
$nome = $_POST['nome'];
$email_usuario = $_POST['email_usuario'];
$rua_usuario = $_POST['rua_usuario'];
$bairro_usuario = $_POST['bairro_usuario'];
$cidade_usuario = $_POST['cidade_usuario'];
$cep_usuario = $_POST['cep_usuario'];
$estado_usuario = $_POST['estado_usuario'];

$sql = "INSERT INTO usuario (usuario,senha,nome,email,rua,bairro, cidade, cep, estado) VALUES ('$nome_usuario','$senha_usuario','$nome','$email_usuario','$rua_usuario','$bairro_usuario',
'$cidade_usuario','$cep_usuario','$estado_usuario')";

if ($conn->query($sql) === true) {
    header('Location: painel.php?mensagem=Cadastrado feito com sucesso');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

