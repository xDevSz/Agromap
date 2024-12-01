<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AgroMap</title>
    <link rel="stylesheet" href="<?= URL ?>/Public/css/auth5entrar.css"> <!-- Caminho para o CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- Logo -->
        <header>
            <img src="<?= URL ?>/Public/images/AgroMap-Preto.png" alt="Logo AgroMap" class="header-image">
        </header>

        <!-- Formulário de Login -->
        <div class="form-content">
            <h1>Login</h1>
            <p>Insira suas credenciais para acessar sua conta.</p>

            <form id="loginForm" onsubmit="processarLogin(event)">
                <!-- Seção de Login -->
                <div class="form-section">
                    <h2>Acesse sua Conta</h2>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Seu e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <!-- Botão de Login -->
                <button type="submit" class="button">Entrar</button>

                <!-- Link para Cadastro -->
                <p class="register-link">
                    Ainda não tem uma conta? <a href="cadastro">Cadastre-se</a>
                </p>
            </form>
        </div>
    </div>

    <script>
        // Função para simular o processo de login
        function processarLogin(event) {
            event.preventDefault(); // Impede o envio do formulário
            window.location.href = 'home'; 
            // Aqui você pode redirecionar o usuário ou implementar a lógica de autenticação.
        }
    </script>
</body>
</html>
