<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center my-4">Editar Produto</h1>
        <?php
        include("header.php");
        include("functions/connector.php");
        $conn = connector();
        $id = $_GET['id'];
        $stmt = $conn->prepare("SELECT * FROM tbProdutos WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch()
        ?>

<section>
    <form method="post">
        <div class="form-group">
            <div>
                <label for="txProduto"> Nome </label>
                <input type="text" class="form-control" name="txProduto" value="<?php echo htmlspecialchars($row['nome']); ?>">
            </div>
            <div>
                <label for="txDescricao"> Descrição </label>
                <textarea name="txDescricao" class="form-control"><?php echo htmlspecialchars($row['descricao']); ?></textarea>
            </div>
            <div>
                <label for="txQuantidade"> Quantidade </label>
                <input type="number" class="form-control" name="txQuantidade" value="<?php echo htmlspecialchars($row['quantidade']); ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</section>

<?php
if (isset($_POST['txProduto'])) {
    $nome = $_POST['txProduto'];
    $descricao = $_POST['txDescricao'];
    $quantidade = $_POST['txQuantidade'];

    // Prevenir SQL Injection
    $stmt = $conn->prepare("UPDATE tbProdutos SET nome = '$nome', descricao = '$descricao', quantidade = $quantidade WHERE id = $id");
    $stmt->execute();

    echo "<script>";
    echo "alert('Produto alterado com sucesso');";
    echo "window.location.href = 'index.php';";
    echo "</script>";
}
?>
</body>
</html>
