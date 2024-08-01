<?php
include "connector.php";
$conn = connector();

$nome = $_POST['txProduto'];
$descricao = $_POST['txDescricao'];
$quantidade = $_POST['txQuantidade'];


echo ($nome . $descricao . $quantidade);
$stmt = $conn-> prepare("insert into tbProdutos values(
                             null,
                             '$nome',
                             '$descricao',
                             $quantidade
)");

$stmt->execute();
echo "<script>";
echo "alert('Produto cadastrado com sucesso');";
echo "</script>";