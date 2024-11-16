<?php
include 'connection.php';
// Excluir produtos
$id_p = $_GET["id_produto"];
if (isset($_GET['id_produto'])) {
     $sqlExcluir_p = mysqli_query($connectionBD, "DELETE FROM produtos WHERE id_produto = {$id_p}")
          or die(mysqli_error($connectionBD));
     header('location: index.php');
}
?>