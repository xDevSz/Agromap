<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - AgroMap</title>
    <link rel="stylesheet" href="<?= URL ?>/Public/css/auth4cadastro.css"> <!-- Caminho para o CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- Logo -->
        <header>
            <img src="<?= URL ?>/Public/images/AgroMap-Preto.png" alt="Logo AgroMap" class="header-image">
        </header>

        <!-- Formulário de Cadastro -->
        <div class="form-content">
            <h1>Cadastro</h1>
            <p>Complete o formulário abaixo para criar sua conta.</p>

            <form id="cadastroForm" onsubmit="redirecionarParaLogin(event)">
                <!-- Seção de Dados Pessoais -->
                <div class="form-section">
                    <h2>Seus Dados</h2>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Seu e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel" id="telefone" name="telefone" placeholder="+55 (XX) XXXXX-XXXX" required>
                    </div>
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade" placeholder="Sua cidade" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmar_senha">Confirmar Senha</label>
                        <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirme sua senha" required>
                    </div>
                </div>

                <!-- Informações da Propriedade -->
                <div class="property-section">
                    <h2>Informações da Propriedade</h2>
                    <div class="form-group">
                        <label for="localidade">Localidade</label>
                        <select id="localidade" name="localidade" required>
                            <option value="">Selecione</option>
                            <option value="urbana">Urbana</option>
                            <option value="rural">Rural</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea id="descricao" name="descricao" placeholder="Descreva a propriedade" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="alqueires">Número de Alqueires</label>
                        <select id="alqueires" name="alqueires" required>
                            <option value="">Selecione</option>
                            <option value="1-5">1-5</option>
                            <option value="6-10">6-10</option>
                            <option value="11+">11+</option>
                        </select>
                    </div>
                </div>

                <!-- Botão de Enviar -->
                <button type="submit" class="button">Cadastrar</button>
            </form>

            <!-- Link para login -->
            <p class="already-registered">
                Já possui cadastro? <a href="entrar" class="login-link">Entre!</a>
            </p>
        </div>
    </div>

    <script>
        // Função de redirecionamento
        function redirecionarParaLogin(event) {
            event.preventDefault(); // Impede o envio do formulário
            window.location.href = 'entrar'; 
        }
    </script>
</body>
</html>
