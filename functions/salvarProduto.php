<?php
include "connector.php";
$conn = connector();

$nome = $_POST['txProduto'];
$descricao = $_POST['txDescricao'];
$quantidade = $_POST['txQuantidade'];

$stmt = $conn-> prepare("insert into tbProduto values(
                             null,
                             $nome,
                             $descricao,
                             $quantidade,
)");
$stmt->execute();
echo "<script>";
echo "alert('Produto cadastrado com sucesso');";
echo "</script>";