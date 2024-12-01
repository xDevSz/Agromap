<?php include 'includes/main.php'; ?>

<link rel="stylesheet" href="<?= URL ?>/Public/css/plantio.css">

<div class="content">
    <div class="container">
        <div class="grafico-area">
            <div class="grafico-container">
                <div class="grafico" id="grafico">
                    <p class="grafico-titulo" id="grafico-titulo">Colheita</p>
                </div>
                <div class="legenda">
                    <p><span class="cor-verde"></span> Arroz - <span id="arroz-perc">31%</span> <span id="arroz-kg">31kg</span></p>
                    <p><span class="cor-vermelha"></span> Milho - <span id="milho-perc">37%</span> <span id="milho-kg">37kg</span></p>
                    <p><span class="cor-marrom"></span> Mandioca - <span id="mandioca-perc">10%</span> <span id="mandioca-kg">10kg</span></p>
                </div>
            </div>
            <div class="formulario">
                <div class="campo">
                    <label for="data-plantio"><strong>Dia do último plantio</strong></label>
                    <input type="date" id="data-plantio" />
                </div>
                <div class="campo">
                    <label for="tipo-plantio"><strong>O que foi plantado?</strong></label>
                    <input type="text" id="tipo-plantio" placeholder="Digite o tipo" />
                </div>
                <div class="campo">
                    <label for="quantidade-plantada"><strong>Quantidade plantada (kg)</strong></label>
                    <input type="number" id="quantidade-plantada" placeholder="Digite a quantidade" />
                </div>
                <button class="confirmar" onclick="atualizarGrafico()">Confirmar</button>
            </div>
        </div>
    </div>
</div>

<script>
    function atualizarGrafico() {
        const tipoPlantio = document.getElementById('tipo-plantio').value.toLowerCase();
        const quantidade = parseInt(document.getElementById('quantidade-plantada').value, 10);

        const colheitas = {
            arroz: 31,
            milho: 37,
            mandioca: 10,
        };

        if (colheitas[tipoPlantio] !== undefined && !isNaN(quantidade)) {
            colheitas[tipoPlantio] += quantidade;
        } else {
            alert('Por favor, insira um tipo válido (arroz, milho ou mandioca) e uma quantidade válida.');
            return;
        }

        const total = colheitas.arroz + colheitas.milho + colheitas.mandioca;
        const arrozPerc = Math.round((colheitas.arroz / total) * 100);
        const milhoPerc = Math.round((colheitas.milho / total) * 100);
        const mandiocaPerc = Math.round((colheitas.mandioca / total) * 100);

        document.getElementById('arroz-perc').textContent = `${arrozPerc}%`;
        document.getElementById('milho-perc').textContent = `${milhoPerc}%`;
        document.getElementById('mandioca-perc').textContent = `${mandiocaPerc}%`;

        document.getElementById('arroz-kg').textContent = `${colheitas.arroz}kg`;
        document.getElementById('milho-kg').textContent = `${colheitas.milho}kg`;
        document.getElementById('mandioca-kg').textContent = `${colheitas.mandioca}kg`;

        document.getElementById('grafico').style.background = `conic-gradient(
            #28a745 0% ${arrozPerc}%,
            #dc3545 ${arrozPerc}% ${arrozPerc + milhoPerc}%,
            #6c757d ${arrozPerc + milhoPerc}% 100%
        )`;
    }
</script>

<?php include 'includes/footer.php'; ?>
