<?php
require_once 'conexao.php';
//verifica se existe conexão com bd, caso não tenta criar uma nova

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nome_evento = $_POST['nome_evento'];
$link_evento = $_POST['link_evento'];
$email_evento = $_POST['email_evento'];
$categoria_evento = $_POST['categoria_evento'];
$desc_evento = $_POST['desc_evento'];

$sql = "INSERT INTO evento (nome,link,email,categoria,descricao) VALUES ('$nome_evento','$link_evento','$email_evento','$categoria_evento','$desc_evento')";

if ($conn->query($sql) === true) {
    header('Location: painel.php?mensagem=Cadastrado com sucesso');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

