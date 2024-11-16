<?php
//adicionar a coneção com o banco
include 'connection.php';

$nome_produto = $_POST['nome_produto'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];

$sql = mysqli_query($connectionBD, "INSERT INTO produtos(nome_produto, marca, preco) VALUES('$nome_produto', '$marca', '$preco')");

if ($sql) {
    header('Location: cd_produtos.php');
}
?>
