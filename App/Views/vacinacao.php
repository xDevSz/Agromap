<?php include 'includes/main.php'; ?>
<link rel="stylesheet" href="<?= URL ?>/Public/css/vacinacao2.css">

<div class="content">
    <!-- Contêiner principal -->
    <div class="vacina-container">
        <!-- Formulário para inserir dados -->
        <div class="formulario">
            <h2>Registrar Vacinação</h2>
            <div class="campo">
                <label for="tipo-vacina">Tipo da Vacina:</label>
                <input type="text" id="tipo-vacina" placeholder="Digite o tipo da vacina">
            </div>
            <div class="campo">
                <label for="data-aplicacao">Data da Aplicação:</label>
                <input type="date" id="data-aplicacao">
            </div>
            <div class="campo">
                <label for="data-proxima">Data da Próxima Aplicação:</label>
                <input type="date" id="data-proxima">
            </div>
            <div class="campo">
                <label for="tipo-gado">Tipo de Gado:</label>
                <input type="text" id="tipo-gado" placeholder="Digite o tipo de gado">
            </div>
            <div class="campo">
                <label for="marca-vacina">Marca da Vacina:</label>
                <input type="text" id="marca-vacina" placeholder="Digite a marca da vacina">
            </div>
            <div class="botao-container">
                <button class="confirmar" onclick="adicionarDados()">Adicionar</button>
            </div>
        </div>

        <!-- Área de visualização -->
        <div class="visualizacao">
            <h2>Informações Registradas</h2>
            <table id="tabela-vacinas">
                <thead>
                    <tr>
                        <th>Tipo da Vacina</th>
                        <th>Data da Aplicação</th>
                        <th>Data da Próxima</th>
                        <th>Tipo de Gado</th>
                        <th>Marca</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Linhas adicionadas dinamicamente -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function adicionarDados() {
        // Pega os valores dos inputs
        const tipoVacina = document.getElementById("tipo-vacina").value;
        const dataAplicacao = document.getElementById("data-aplicacao").value;
        const dataProxima = document.getElementById("data-proxima").value;
        const tipoGado = document.getElementById("tipo-gado").value;
        const marcaVacina = document.getElementById("marca-vacina").value;

        // Verifica se todos os campos foram preenchidos
        if (!tipoVacina || !dataAplicacao || !dataProxima || !tipoGado || !marcaVacina) {
            alert("Por favor, preencha todos os campos!");
            return;
        }

        // Cria uma nova linha na tabela
        const tabela = document.getElementById("tabela-vacinas").getElementsByTagName("tbody")[0];
        const novaLinha = tabela.insertRow();

        // Adiciona as células com os valores
        novaLinha.innerHTML = `
            <td>${tipoVacina}</td>
            <td>${dataAplicacao}</td>
            <td>${dataProxima}</td>
            <td>${tipoGado}</td>
            <td>${marcaVacina}</td>
        `;

        // Limpa os campos do formulário
        document.getElementById("tipo-vacina").value = "";
        document.getElementById("data-aplicacao").value = "";
        document.getElementById("data-proxima").value = "";
        document.getElementById("tipo-gado").value = "";
        document.getElementById("marca-vacina").value = "";
    }
</script>

<?php include 'includes/footer.php'; ?>
