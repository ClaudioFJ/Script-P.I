<?php
require 'conexao.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$produto = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<form method="POST" action="atualizar.php">
    <input type="hidden" name="id" value="<?= $produto['id']; ?>">
    Produto: <input type="text" name="produto" value="<?= htmlspecialchars($produto['produto']); ?>" required><br>
    Categoria: <input type="text" name="categoria" value="<?= htmlspecialchars($produto['categoria']); ?>" required><br>
    Preço: <input type="number" step="0.01" name="preco" value="<?= $produto['preco']; ?>" required><br>
    Descrição: <textarea name="descricao"><?= htmlspecialchars($produto['descricao']); ?></textarea><br>
    Em Estoque: <input type="number" name="em_estoque" value="<?= $produto['em_estoque']; ?>" required><br>
    <input type="submit" value="Atualizar Produto">
</form>