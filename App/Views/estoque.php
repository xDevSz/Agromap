<?php include 'includes/main.php'; ?>
<link rel="stylesheet" href="<?= URL ?>/Public/css/estoque.css"> 

<div class="content">
    <div class="estoque-container">
        <h1>Gerenciar Estoque</h1>

        <!-- Formulário para adicionar itens ao estoque -->
        <form id="form-add-estoque">
            <label for="item-type">Tipo de Item:</label>
            <select id="item-type" required>
                <option value="" disabled selected>Selecione</option>
                <option value="Saco de sementes">Saco de sementes</option>
                <option value="Litros de gasolina">Litros de gasolina</option>
                <option value="Litros de diesel">Litros de diesel</option>
                <option value="Veneno">Veneno</option>
                <option value="Outro">Outro</option>
            </select>

            <label for="item-quantity">Quantidade:</label>
            <input type="number" id="item-quantity" placeholder="Ex: 50" required>

            <label for="item-date">Data de Atualização:</label>
            <input type="date" id="item-date" required>

            <button type="submit" id="add-estoque">Adicionar ao Estoque</button>
        </form>

        <!-- Área de exibição do estoque -->
        <div id="estoque-display">
            <h2>Estoque Atual:</h2>
            <div id="estoque-list" style="display: flex; flex-wrap: wrap; gap: 20px;">
                <!-- Os itens adicionados aparecerão aqui -->
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<script src="<?= URL ?>/Public/js/estoque.js"></script>
