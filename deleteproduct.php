<?php
    include "functions/connector.php";
    $id = $_GET['id'];
    $conn = connector();
    $stmt = $conn->prepare("Delete from tbProdutos where idProdutos = '$id'");
    $stmt -> execute();

    echo "<script>";
    echo "alert('Produto excluido com sucesso');";
    echo "</script>";
    ;