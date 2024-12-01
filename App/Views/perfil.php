<?php include 'includes/main.php'; ?>

<link rel="stylesheet" href="<?= URL ?>/Public/css/perfil.css">

<div class="perfil-container">
    <div class="perfil-box">
        <!-- Foto de Perfil -->
        <div class="foto-perfil">
            <img id="foto-preview" src="<?= URL ?>/Public/images/default-avatar.jpg" alt="Foto de Perfil">
            <input type="file" id="upload-foto" accept="image/*">
            <label for="upload-foto">Alterar Foto</label>
        </div>

        <!-- Informações e Formulário -->
        <div class="info-e-form">
            <!-- Informações Básicas -->
            <div class="info-perfil">
                <p><strong>Nome de Usuário:</strong> <span class="dentro" id="nome-usuario">Usuário Padrão</span></p>
                <p><strong>Email:</strong> <span class="dentro" id="email-usuario">usuario@exemplo.com</span></p>
            </div>

            <!-- Formulário -->
            <form class="form-perfil">
                <div class="campo">
                    <label for="alterar-nome">Alterar Nome:</label>
                    <input type="text" id="alterar-nome" name="alterar-nome" placeholder="Digite o novo nome">
                </div>
                <div class="campo">
                    <label for="alterar-email">Alterar Email:</label>
                    <input type="email" id="alterar-email" name="alterar-email" placeholder="Digite o novo email">
                </div>
                <div class="campo">
                    <label for="senha-atual">Senha Atual:</label>
                    <input type="password" id="senha-atual" name="senha-atual" placeholder="Digite sua senha atual">
                </div>
                <div class="campo">
                    <label for="nova-senha">Nova Senha:</label>
                    <input type="password" id="nova-senha" name="nova-senha" placeholder="Digite a nova senha">
                </div>
                <div class="campo">
                    <label for="confirmar-senha">Confirmar Nova Senha:</label>
                    <input type="password" id="confirmar-senha" name="confirmar-senha" placeholder="Confirme a nova senha">
                </div>
                <button type="submit" class="btn-salvar">Salvar Alterações</button>
            </form>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>

<script>
    // Pré-visualização da foto de perfil
    const uploadFoto = document.getElementById('upload-foto');
    const fotoPreview = document.getElementById('foto-preview');

    uploadFoto.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                fotoPreview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>
