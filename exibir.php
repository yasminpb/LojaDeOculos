<?php
include 'read.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabelas de dados</title>
</head>

<body>
    <br><br>
    <!-- Tabela Produto -->
    <h4 style="text-align: center;">Produtos cadastrados</h4>
    <div class="container" col-md-8 offset-md-4>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Funções</th>
                </tr>
            </thead>
            <?php while ($produtos = mysqli_fetch_assoc($listarSQL_p)) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $produtos['nome_produto'] ?></td>
                        <td><?php echo $produtos['marca'] ?></td>
                        <td><?php echo $produtos['preco'] ?></td>
                        <td>
                            <a href="excluir_p.php?id_produto=<?php echo $produtos['id_produto']; ?>"
                                class="btn btn-sm btn-danger">Excluir</a>
                            <a href="editar_p.php?id_produto=<?php echo $produtos['id_produto']; ?>"
                                class="btn btn-sm btn-primary">Editar</a>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>

    <!-- Tabela Cliente --> <br><br><br>

    <h4 style="text-align: center;">Clientes cadastrados</h4>
    <div class="container" col-md-10 offset-md-5>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Cliente</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Função</th>
                </tr>
            </thead>
            <?php while ($clientes = mysqli_fetch_assoc($listarSQL_c)) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $clientes['nome_cliente'] ?></td>
                        <td><?php echo $clientes['cpf'] ?></td>
                        <td><?php echo $clientes['endereco'] ?></td>
                        <td><?php echo $clientes['telefone'] ?></td>
                        <td>
                            <a href="editar_c.php?id_cliente=<?php echo $clientes['id_cliente']; ?>"
                                class="btn btn-sm btn-primary">Editar</a>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>