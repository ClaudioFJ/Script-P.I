<?php
require 'conexao.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM produtos WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

header("Location: index.php");
?>