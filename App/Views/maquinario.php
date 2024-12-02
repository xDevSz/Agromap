<?php include 'includes/main.php'; ?>
<link rel="stylesheet" href="<?= URL ?>/Public/css/maquinario4.css">

<div class="content">
    <h1>Gerenciar Máquinas Agrícolas</h1>
    
    <div class="form-section">
        <!-- Formulário para adicionar máquinas -->
        <form id="form-add-machine">
            <label for="machine-name">Nome da Máquina:</label>
            <input type="text" id="machine-name" placeholder="Ex: Trator Massey Ferguson" required>

            <label for="machine-type">Tipo:</label>
            <input type="text" id="machine-type" placeholder="Ex: Trator, Colheitadeira" required>

            <label for="machine-brand">Marca:</label>
            <input type="text" id="machine-brand" placeholder="Ex: John Deere" required>

            <label for="machine-year">Ano:</label>
            <input type="number" id="machine-year" placeholder="Ex: 2020" required>

            <label for="machine-status">Status:</label>
            <select id="machine-status" required>
                <option value="" disabled selected>Selecione</option>
                <option value="Em uso">Em uso</option>
                <option value="Em manutenção">Em manutenção</option>
                <option value="Disponível">Disponível</option>
            </select>

            <button type="submit" id="add-machine">Adicionar Máquina</button>
        </form>
    </div>

    <!-- Área de exibição das máquinas -->
    <div id="machine-display">
        <h2>Máquinas Adicionadas:</h2>
        <div id="machines-list">
            <!-- Máquinas adicionadas aparecerão aqui -->
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<script src="<?= URL ?>/Public/js/maquinario.js"></script>
