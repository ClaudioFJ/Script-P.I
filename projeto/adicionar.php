<?php
session_start();
$db = new SQLite3('testedb.db');
?>

<form method="POST" action="inserir.php">
    Produto: <input type="text" name="produto" required><br>
    
    <div>
    Categoria: 
        <select name="categoria_id">
            <?php
                $results = $db->query('SELECT * FROM categoria');
                    while ($row = $results->fetchArray()) {
                        echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>';
                }
            ?>
        </select>
    </div>
    
    Preço: <input type="number" step="0.01" name="preco" required><br>
    Descrição: <textarea name="descricao"></textarea><br>
    Em Estoque: <input type="number" name="em_estoque" required><br>
    <input type="submit" value="Salvar Produto">
</form>