<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center my-4">Editar Produto</h1>
<section><table class='table table-striped'>
        <thead>
        <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Nome</th>
            <th scope='col'>Descrição</th>
            <th scope='col'>Quantidade</th>
        </tr>
        </thead>
        <?php include("header.php");
        $id = $_GET['id'];
        include("functions/connector.php");
        $conn = connector();
        $stmt = $conn->prepare("select * from tbProdutos where id=$id ");
        $stmt -> execute();
        while($row = $stmt->fetch()){
            echo("<tr>");
            echo("<th scope = row> $row[id]  </th>");
            echo("<td>  $row[nome]  </td>");
            echo("<td>  $row[descricao]  </td>");
            echo("<td>  $row[quantidade] </td>");
            echo "</tr>";
        }
        ?>
    </table></section>
<section>
    <form method="post">
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
<?php
if(isset($_POST['txProduto'])){
    $nome = $_POST['txProduto'];
    $descricao = $_POST['txDescricao'];
    $quantidade = $_POST['txQuantidade'];

    $stmt = $conn ->prepare("Update tbProdutos set nome='$nome',descricao='$descricao',quantidade=$quantidade where id = $id ");
    $stmt -> execute();
    echo "<script>";
    echo "alert('Produto alterado com sucesso');";
    echo "window.location.href = 'index.php';";
    echo "</script>";
}
?>




