<?php
include 'connection.php';

// Recuperar dados do formulário de vendas
$data_venda = $_POST['data_venda'];
$valor_compra = $_POST['valor_total'];
$id_cliente = $_POST['id_cliente'];
$qtd_produtos = $_POST['qtd_produtos'];

// Preparar a consulta para inserir na tabela vendas
$sql_v = $connectionBD->prepare("INSERT INTO vendas (data_venda, valor_total, id_cliente, qtd_produtos) VALUES (?, ?, ?, ?)");
$sql_v->bind_param("sdii", $data_venda, $valor_compra, $id_cliente, $qtd_produtos);

// Executar a consulta e verificar se foi bem-sucedida
if ($sql_v->execute()) {
    header('Location: CD_vendas.php');
} else {
    echo "Erro ao inserir os dados: " . $connectionBD->error;
}

// Fechar a consulta e a conexão
$sql_v->close();
$connectionBD->close();
?>
