<!DOCTYPE html>
<html>
<head>
    <title>Gráfico de Vendas por Mês</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Centraliza e redimensiona o gráfico */
        .chart-container {
            width: 70%; /* Ocupa metade da tela */
            height: 500px; /*Almentar a altura*/
            margin: 0 auto; /* Centraliza o gráfico */
        }
    </style>
</head>
<body>
    <?php include 'menu.php'?>
    <h2 style="text-align: center;">Vendas por Mês</h2>
    <div class="chart-container">
        <canvas id="myChart"></canvas>
    </div>
    <script>
        // Obter os dados via AJAX
        fetch('data.php')
            .then(response => response.json())
            .then(data => {
                const ctx = document.getElementById('myChart').getContext('2d');
                const meses = data.meses; // Meses no eixo X
                const vendas = data.vendas; // Totais de vendas no eixo Y

                // Criar o gráfico de colunas
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: meses,
                        datasets: [{
                            label: 'Vendas (R$)',
                            data: vendas,
                            backgroundColor: '#003399',
                            borderColor: '#000066',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false, // Permite ajustar altura/largura
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Mês'
                                }
                            },
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Total de Vendas (R$)'
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top'
                            },
                            title: {
                                display: true,
                                text: 'Vendas por Mês'
                            }
                        }
                    }
                });
            });
    </script>
</body>
</html>
