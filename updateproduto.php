<?php

include "functions/connector.php";
$id = $_GET['id'];
$conn = connector();
$stmt = $conn->prepare("Update from tbProdutos where idProduto = '$id'");
$stmt->execute();

echo "<script>";
echo "alert('Produto atualizado com sucesso');";
echo "</script>";;
