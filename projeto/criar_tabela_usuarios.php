
<?php
try {
    $pdo = new PDO("sqlite:testedb.db");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        usuario TEXT UNIQUE NOT NULL,
        senha TEXT NOT NULL,
        nome TEXT,
        email TEXT,
        telefone TEXT,
        sexo TEXT,
        data_nascimento TEXT,
        cidade TEXT,
        estado TEXT,
        endereco TEXT
    )";

    $pdo->exec($sql);
    echo "Tabela 'usuarios' criada com sucesso.";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
