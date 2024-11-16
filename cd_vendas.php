<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Vendas</title>
</head>
<body>
    <?php include 'menu.php'; ?>
    <h2 style="text-align: center;">Cadastro de Vendas</h2>
    <div class="container col-md-8 offset-md-2">
        <form action="save_v.php" method="post">
            <div class="row">
                <!-- 1ª Coluna -->
                <div class="col">
                    <input type="date" class="form-control" placeholder="Data da venda" name="data_venda">
                </div>
                <!-- 2ª Coluna -->
                <div class="col">
                    <input type="number" step="0.01" class="form-control" placeholder="Valor da compra" name="valor_total">
                </div>
                <!-- 3ª Coluna -->
                <div class="col">
                    <input type="number" class="form-control" placeholder="Identificador do cliente" name="id_cliente">
                </div>
                <!-- 4ª Coluna -->
                <div class="col">
                    <input type="number" class="form-control" placeholder="Quantidade de produtos" name="qtd_produtos">
                </div>
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-success rounded-3" name="editar">Salvar</button>
            </div>
        </form>
    </div>
</body>
</html>
 