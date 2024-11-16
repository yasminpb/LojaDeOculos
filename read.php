<?php
include 'connection.php';
$listarSQL_c = mysqli_query($connectionBD, "SELECT * FROM clientes");
$listarSQL_p = mysqli_query($connectionBD, "SELECT * FROM produtos");
$listarSQL_v = mysqli_query($connectionBD, "SELECT * FROM vendas");
?>