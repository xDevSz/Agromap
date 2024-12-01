<?php include 'includes/auth.php'; ?>

<div class="container">
    <!-- Botão "Entrar" no canto superior direito -->
    <a href="<?= URL ?>/Usuarios/entrar" class="login-button">Entrar</a>
    
    <!-- Logo no canto superior esquerdo -->
    <img src="<?= URL ?>/Public/images/agromap-logo.png" alt="AgroMap Logo" class="header-image">
    
    <div class="content">
        <!-- Texto principal -->
        <div class="text-content">
            <h1>Agromap: seu guia<br>essencial no futuro<br>da agricultura!</h1>
            <p>Explore nossas ferramentas inovadoras e descubra informações essenciais que vão otimizar sua produção e impulsionar seu negócio. Junte-se a nós e faça parte da revolução agrícola!</p>
            <a href="<?= URL ?>/Usuarios/cadastro" class="button">Criar conta</a>
        </div>

        <!-- Imagem principal -->
        <img src="<?= URL ?>/Public/images/agromap-image.png" alt="Ilustração do AgroMap" class="main-image">
    </div>
</div>

<?php include 'includes/footer.php'; ?>
