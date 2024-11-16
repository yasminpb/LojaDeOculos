<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Cliente</title>
</head>

<body>
    <?php include 'menu.php'; ?>
    <!-- Cadastro de Clientes -->
    <h2 style="text-align: center;">Cadastro do Cliente</h2>
    <div class="container col-md-8 offset-md-2">
        <form action="save_c.php" method="post">
            <div class="row">
                <!-- 1ª Coluna -->
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nome do cliente" name="nome_cliente">
                </div>
                <!-- 2ª Coluna -->
                <div class="col">
                    <input type="text" class="form-control" placeholder="CPF" name="cpf">
                </div>
                <!-- 3ª Coluna -->
                <div class="col">
                    <input type="text" class="form-control" placeholder="Endereço" name="endereco">
                </div>
                <!-- 4ª Coluna -->
                <div class="col">
                    <input type="text" class="form-control" placeholder="Telefone" name="telefone">
                </div>
            </div>
            <br>
            <div>
                <!-- Botão de envio e voltar -->
                <button type="submit" class="btn btn-success rounded-3" name="editar">Salvar</button>
            </div>
        </form>
    </div>
</body>

</html>