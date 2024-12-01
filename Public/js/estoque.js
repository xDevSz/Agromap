document.getElementById('form-add-estoque').addEventListener('submit', function (event) {
    event.preventDefault();

    // Coleta os valores do formulário
    const itemType = document.getElementById('item-type').value;
    const itemQuantity = document.getElementById('item-quantity').value;
    const itemDate = document.getElementById('item-date').value;

    // Validação simples
    if (!itemType || !itemQuantity || !itemDate) {
        alert('Preencha todos os campos!');
        return;
    }

    // Cria o elemento do item
    const itemDiv = document.createElement('div');
    itemDiv.className = 'estoque-item';
    itemDiv.innerHTML = `
        <p><strong>Item:</strong> ${itemType}</p>
        <p><strong>Quantidade:</strong> ${itemQuantity}</p>
        <p><strong>Data:</strong> ${itemDate}</p>
        <button class="remove-item">Remover</button>
    `;

    // Adiciona o item à lista
    document.getElementById('estoque-list').appendChild(itemDiv);

    // Limpa o formulário
    document.getElementById('form-add-estoque').reset();

    // Adiciona funcionalidade ao botão de remover
    itemDiv.querySelector('.remove-item').addEventListener('click', function () {
        itemDiv.remove();
    });
});
