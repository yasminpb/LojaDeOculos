<?php include 'menu.php' ?>

<?php
include 'connection.php';
if (isset($_GET['id_cliente'])) {
    $id = $_GET['id_cliente'];
    $sql = mysqli_query($connectionBD, "SELECT * FROM clientes WHERE id_cliente = $id");
    $count = (is_array($sql)) ? count($sql) : 1;
    if ($count) {
        $n = mysqli_fetch_array($sql);
        $nome_cliente = $n['nome_cliente'];
        $cpf = $n['cpf'];
        $endereco = $n['endereco'];
        $telefone = $n['telefone'];
    }
}

if (isset($_POST['editar'])) {
    $id = $_GET["id_cliente"];
    $nome_cliente = $_POST["nome_cliente"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];

    $queryUpdate = "UPDATE clientes SET nome_cliente = '$nome_cliente', cpf = '$cpf', endereco = '$endereco', telefone = '$telefone' WHERE id_cliente = $id";

    $consulta = mysqli_query($connectionBD, $queryUpdate);
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar clientes</title>
</head>

<body>
<h2 style="text-align: center;">Editar cliente</h2>
    <div class="container" col-md-6 offset-md-3>
        <form method="post">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="nome_cliente" id="" value="<?php echo $nome_cliente ?>">
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="cpf" id="" value="<?php echo $cpf ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="endereco" id="" value="<?php echo $endereco ?>">
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="telefone" id="" value="<?php echo $telefone ?>">
                </div>
                <br>
                <div>
                    <button type="submit" name="editar" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>