<?php
require 'conexao.php';

$id = $_POST['id'];
$produto = $_POST['produto'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$em_estoque = $_POST['em_estoque'];

$stmt = $pdo->prepare("UPDATE produtos 
                       SET produto = :produto, categoria = :categoria, preco = :preco, descricao = :descricao, em_estoque = :em_estoque 
                       WHERE id = :id");
$stmt->bindParam(':produto', $produto);
$stmt->bindParam(':categoria', $categoria);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':em_estoque', $em_estoque);
$stmt->bindParam(':id', $id);
$stmt->execute();

header("Location: index.php");
?>