<?php
require 'conexao.php';

$produto = $_POST['produto'];
$categoria = $_POST['categoria_id'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$em_estoque = $_POST['em_estoque'];

$stmt = $pdo->prepare("INSERT INTO produtos (produto, categoria_id, preco, descricao, em_estoque) 
                       VALUES (:produto, :categoria, :preco, :descricao, :em_estoque)");
$stmt->bindParam(':produto', $produto);
$stmt->bindParam(':categoria', $categoria);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':em_estoque', $em_estoque);
$stmt->execute();

header("Location: index.php");
?>