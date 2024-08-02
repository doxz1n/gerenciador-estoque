<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php include("header.php") ?>
<section>
    <form action="salvarProduto.php" method="post">
        <div class="form-group">
            <div>
                <label for="txProduto"> Nome </label>
                <input type="text" class="form-control" name="txProduto">
            </div>
            <div>
                <label for="txDescricao"> Mensagem </label>
                <textarea name="txDescricao" class="form-control"></textarea>
            </div>
            <div>
                <label for="txQuantidade"> Quantidade </label>
                <input type="number" class="form-control" name="txQuantidade">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</section>
</body>
</html>