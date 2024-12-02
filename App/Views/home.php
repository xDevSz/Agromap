<?php include 'includes/main.php'; ?>
<link rel="stylesheet" href="<?= URL ?>/Public/css/home4.css">

<div class="content">
    <div class="dashboard-container">
        <!-- Sessão de Vacinação -->
        <div class="vacina-area">
            <h2>Próximas Vacinações</h2>
            <table>
                <thead>
                    <tr>
                        <th>Vacina</th>
                        <th>Data</th>
                        <th>Tipo de Gado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Aftosa</td>
                        <td>05/12/2024</td>
                        <td>Bovino</td>
                    </tr>
                    <tr>
                        <td>Raiva</td>
                        <td>10/12/2024</td>
                        <td>Ovinos</td>
                    </tr>
                    <tr>
                        <td>Clostridioses</td>
                        <td>20/12/2024</td>
                        <td>Bovino</td>
                    </tr>
                    <tr>
                        <td>Botulismo</td>
                        <td>25/12/2024</td>
                        <td>Bubalinos</td>
                    </tr>
                </tbody>
            </table>
            <p class="info-extra">* Certifique-se de atualizar o calendário anualmente.</p>
        </div>

        <!-- Sessão de Plantio -->
        <div class="plantio-area">
            <h2>Plantios Recentes</h2>
            <ul>
                <li>Plantio de Soja - 01/12/2024</li>
                <li>Plantio de Milho - 25/11/2024</li>
                <li>Plantio de Trigo - 15/11/2024</li>
                <li>Plantio de Café - 10/11/2024</li>
                <li>Plantio de Cacau - 05/11/2024</li>
            </ul>
            <p class="info-extra">* Verifique denúncias relacionadas aos plantios recentes.</p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<script src="<?= URL ?>/Public/js/home.js"></script>

