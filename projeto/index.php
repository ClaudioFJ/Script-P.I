<?php
require 'conexao.php';

$stmt = $pdo->query("SELECT * FROM produtos");
echo "Bem vindo a pagina do administrador!!!!!<br><br>";
echo "<a href='adicionar.php'>Adicionar Novo Produto</a><br><br>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "Produto: " . htmlspecialchars($row['produto']) . " | Categoria: " . htmlspecialchars($row['categoria']);
    echo " | Preço: R$" . number_format($row['preco'], 2, ',', '.') . " | Estoque: " . $row['em_estoque'];
    echo " <a href='editar.php?id={$row['id']}'>Editar</a>";
    echo " | <a href='deletar.php?id={$row['id']}'>Deletar</a><br>";
}
?>