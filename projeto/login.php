<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
<Div>
    <h1>Login</h1>
    <form action="verifica_login.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuário" required><br><br>
        <input type="password" name="senha" placeholder="Senha" required><br><br>
        <button type="submit">Entrar</button>
    </form>
    <br><br>
    <h2>Não possui login? Realize seu cadastro</h2>
    <a href="cadastro.php"><button>Cadastrar</button></a>
</Div>
</body>
</html>
