<?php 
include 'connection.php';

$resultadoPesquisa = ''; // Variável para armazenar os resultados
$query = '';

if (isset($_GET['query'])) {
    $query = mysqli_real_escape_string($connectionBD, $_GET['query']);

    // Consultar na tabela de clientes e produtos
    $sql = " SELECT nome_cliente AS nome, 'Cliente' AS tipo FROM clientes WHERE nome_cliente LIKE '%$query%' 
        UNION SELECT nome_produto AS nome, 'Produto' AS tipo FROM produtos WHERE nome_produto LIKE '%$query%'";

    $result= $connectionBD->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $resultadoPesquisa .= $row['nome'] . " (" . $row['tipo'] . ")<br>";
        }
    } else {
        $resultadoPesquisa = "Nenhum resultado encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menu</title>
</head>

<body>
    <!-- Menu -->
    <nav class="navbar" style="background-color: #000099;" data-bs-theme="blue">
        <div class="container">
            <a class="navbar-brand" >Sistema de gerenciamento de uma Ótica</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links para navegação -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="INDEX.php">Página inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="cd_clientes.php">Cadastrar clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="cd_produtos.php">Cadastrar produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="cd_vendas.php">Cadastrar vendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="grafico.php">Gráfico de vendas</a>
                    </li>
                </ul> 
            </div>
        </div>
    </nav>
    
    <!-- Procurar -->
     <div class="container mt-3">
        <form method="get" class="d-flex" role="search" >
            <input class="form-control me-2" type="search" placeholder="Digite aqui" name="query" aria-label="Search" required>
            <button class="btn btn-sm btn-primary" type="submit" >Pesquisar</button>
        </form>
    </div>
    
    <!-- Exibição dos resultados da pesquisa -->
    <div class="container mt-4">
        <h6><?php echo "Última pesquisa: ". $query; ?></h6>
        <h6><?php echo "Resultados: " ?></h6>
        <div class="mt-3">
            <?php echo $resultadoPesquisa; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
