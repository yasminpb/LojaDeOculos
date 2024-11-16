<?php
include 'connection.php';
// Consultar vendas agrupadas por mês
$sql = "SELECT DATE_FORMAT(data_venda, '%Y-%m') AS mes, SUM(valor_total) AS total_vendas
        FROM vendas GROUP BY mes ORDER BY mes";
$result = $connectionBD->query($sql);

// Preparar os dados para o gráfico
$meses = [];
$vendas = [];

while ($row = $result->fetch_assoc()) {
    $meses[] = $row['mes'];
    $vendas[] = $row['total_vendas'];
}
// Enviar os dados para o gráfico
echo json_encode(['meses' => $meses, 'vendas' => $vendas]);
?>
