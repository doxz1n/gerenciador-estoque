<?php
    include "functions/connector.php";
    $id = $_GET['id'];
    $conn = connector();
    $stmt = $conn->prepare("Delete from tbProdutos where id = '$id'");
    $stmt -> execute();

    echo "<script>";
    echo "alert('Produto excluido com sucesso');";
echo "window.location.href = 'index.php';";
    echo "</script>";
    ;