<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cogulandia</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="../index.php"><img src="../Imgs/cogulogos.jpg" alt="Minha Logo"></a>
            </div>
        </nav>
    </header><br><br>
    <div class="login-wrapper">
        <div class="login">
            <h1>Login</h1>
            <form action="../../controllers/UsuarioController.php" method="POST">
                <input type="hidden" name="acao" value="autenticar">
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($_COOKIE['email'] ?? '', ENT_QUOTES); ?>">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" value="<?php echo htmlspecialchars($_COOKIE['senha'] ?? '', ENT_QUOTES); ?>">
                <label>
                    <input type="checkbox" name="lembrar" <?php if(isset($_COOKIE['email'])) echo 'checked';  ?>>Lembrar senha
                </label>
                <input type="submit" value="Entrar">
            </form>
            <?php if (isset($_GET['erro']) && $_GET['erro'] == 1): ?>
                <p>Usuário ou senha incorretos.</p>
            <?php endif; ?>
            <p><a href="registro.php">Não tem uma conta? Cadastre-se</a></p>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-bottom">
            <p>&copy; 2024 Cogulandia. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
