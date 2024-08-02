<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php include("header.php") ?>
<h1 class="text-center my-4">Painel Informativo</h1>
<section><table class='table table-striped'>
    <thead>
    <tr>
        <th scope='col'>ID</th>
        <th scope='col'>Nome</th>
        <th scope='col'>Descrição</th>
        <th scope='col'>Quantidade</th>
        <th scope='col'>Editar</th>
        <th scope='col'> Excluir  </th>
    </tr>
    </thead>
    <?php
    include("functions/connector.php");
    $conn = connector();
    $stmt = $conn -> prepare("select * from tbProdutos");
    $stmt -> execute();
    while ($row = $stmt->fetch()) {
        echo("<tr>");
        echo("<th scope = row> $row[id]  </th>");
        echo("<td>  $row[nome]  </td>");
        echo("<td>  $row[descricao]  </td>");
        echo("<td>  $row[quantidade] </td>");
        echo("<td> <a href='editarproduto.php?id=$row[id]' class='btn btn-primary'> Editar </a> </td> ");
        echo("<td> <a href='deleteproduct.php?id=$row[id]' class='btn btn-danger'> Excluir </a> </td> ");
        echo "</tr>";
    }
    echo "</table></section>";
    ?>

</body>
</html>