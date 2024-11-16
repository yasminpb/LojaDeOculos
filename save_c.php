<?php
//adicionar a coneção com o banco
include 'connection.php';

$nome_cliente = $_POST['nome_cliente'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

$sql = mysqli_query($connectionBD, "INSERT INTO clientes(nome_cliente, cpf, endereco, telefone) VALUES('$nome_cliente', '$cpf', '$endereco', '$telefone')");

if ($sql) {
    header('Location: cd_clientes.php');
}
?>