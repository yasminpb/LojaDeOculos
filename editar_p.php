<?php include 'menu.php' ?>

<?php
include 'connection.php';
if (isset($_GET['id_produto'])) {
    $id = $_GET['id_produto'];
    $sql = mysqli_query($connectionBD, "SELECT * FROM produtos WHERE id_produto=$id");
    $count = (is_array($sql)) ? count($sql) : 1;
    if ($count) {
        $n = mysqli_fetch_array($sql);
        $nome_produto = $n['nome_produto'];
        $marca = $n['marca'];
        $preco = $n['preco'];
    }
}

if (isset($_POST['editar'])) {
    $id = $_GET["id_produto"];
    $nome_produto = $_POST["nome_produto"];
    $marca = $_POST["marca"];
    $preco = $_POST["preco"];
    $queryUpdate = "UPDATE produtos SET nome_produto = '$nome_produto', marca = '$marca', preco = '$preco' WHERE id_produto = $id";

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
    <title>Editar produtos</title>
</head>

<body>
<h2 style="text-align: center;">Editar produtos</h2>
    <div class="container" col-md-6 offset-md-3>
        <form method="post">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="nome_produto" id="" value="<?php echo $nome_produto ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="marca" id="" value="<?php echo $marca ?>">
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="preco" id="" value="<?php echo $preco ?>">
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