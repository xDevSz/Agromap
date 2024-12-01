<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroMap</title>
    <link rel="stylesheet" href="<?= URL ?>/Public/css/main10.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script>
        // Função para redirecionar o usuário para a tela de login
        function sair() {
            window.location.href = '<?= URL ?>/Usuarios/login1.php';
        }
    </script>
</head>
<body>
    <div class="header">
        <img src="<?= URL ?>/Public/images/AgroMap-NL.png" alt="Agromap" class="header-image">
        <p class="header-text">AgroMap</p>

        <div class="pesquisa-header">
            <img src="<?= URL ?>/Public/images/main/header/lupa14.png" alt="Lupa" class="icone-lupa">
            <input type="text" placeholder="Pesquisar..." class="barra-pesquisa">
        </div>

        <div class="botoes-header">
            <button class="btn">
                <img src="<?= URL ?>/Public/images/main/header/notificacoes22.png" alt="placeholder icon" class="icone-btn">
            </button>
            <button class="btn">
                <img src="<?= URL ?>/Public/images/main/header/configuracoes23.png" alt="placeholder icon" class="icone-btn">
            </button>
            <button class="btn" onclick="window.location.href='<?= URL ?>/Usuarios/perfil';">
                <img src="<?= URL ?>/Public/images/main/header/perfil.png" alt="placeholder icon" class="icone-btn">
            </button>
        </div>
    </div>

    <div class="barra-lateral">
        <h3>Menu</h3>
        <div class="botoes-bala">
            <button class="btl" onclick="window.location.href='<?= URL ?>/Usuarios/home';">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/Home.png" alt="Home" class="icone-btl">
                <span>Início</span>
            </button>
            <button class="btl" onclick="window.location.href='<?= URL ?>/Usuarios/plantio';">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/Plantio.png" alt="Plantio" class="icone-btl">
                <span>Plantio</span>
            </button>
            <button class="btl" onclick="window.location.href='<?= URL ?>/Usuarios/Vacinacao';">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/Vacinação.png" alt="Vacinação" class="icone-btl">
                <span>Vacinação</span>
            </button>
            <button class="btl" onclick="window.location.href='<?= URL ?>/Usuarios/Cotacao';">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/Cotação.png" alt="Cotação" class="icone-btl">
                <span>Cotação</span>
            </button>
            <button class="btl" onclick="window.location.href='<?= URL ?>/Usuarios/Maquinario';">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/Maquinário.png" alt="Maquinário" class="icone-btl">
                <span>Maquinário</span>
            </button>
            <button class="btl" onclick="window.location.href='<?= URL ?>/Usuarios/Estoque';">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/Estoque.png" alt="Estoque" class="icone-btl">
                <span>Estoque</span>
            </button>
        </div>

        <h3>Preferências</h3>
        <div class="botoes-bala">
            <button class="btl" onclick="window.location.href='<?= URL ?>/Configuracoes';">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/configuracoes22.png" alt="Configurações" class="icone-btl">
                <span>Configurações</span>
            </button>
            <button class="btl" onclick="window.location.href='<?= URL ?>/Ajuda';">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/ajuda22.png" alt="Ajuda" class="icone-btl">
                <span>Ajuda</span>
            </button>
        </div>
        <div class="sair">
            <button class="btl-sair" onclick="sair()">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/sair22.png" alt="Sair" class="icone-sair">
                <span class="texto-sair">Sair</span>
            </button>
        </div>
    </div>
</body>
</html>
