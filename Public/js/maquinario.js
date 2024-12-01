document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form-add-machine');
    const machineDisplay = document.getElementById('machines-list');

    let machines = []; // Array para armazenar as máquinas

    // Função para exibir máquinas
    const displayMachines = () => {
        machineDisplay.innerHTML = ''; // Limpa o conteúdo anterior

        if (machines.length === 0) {
            machineDisplay.innerHTML = '<p>Nenhuma máquina adicionada ainda.</p>';
            return;
        }

        machines.forEach((machine, index) => {
            const machineItem = document.createElement('div');
            machineItem.className = 'machine-item';
            machineItem.innerHTML = `
                <p><strong>Nome da Máquina:</strong> ${machine.name}</p>
                <p><strong>Tipo:</strong> ${machine.type}</p>
                <p><strong>Marca:</strong> ${machine.brand}</p>
                <p><strong>Ano:</strong> ${machine.year}</p>
                <p><strong>Status:</strong> ${machine.status}</p>
                <button class="delete-machine" data-index="${index}">Remover</button>
            `;
            machineDisplay.appendChild(machineItem);
        });
    };

    // Adiciona uma nova máquina
    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const newMachine = {
            name: document.getElementById('machine-name').value,
            type: document.getElementById('machine-type').value,
            brand: document.getElementById('machine-brand').value,
            year: document.getElementById('machine-year').value,
            status: document.getElementById('machine-status').value,
        };

        machines.push(newMachine); // Adiciona ao array
        displayMachines(); // Atualiza a exibição

        form.reset(); // Limpa o formulário
    });

    // Remove uma máquina
    machineDisplay.addEventListener('click', (event) => {
        if (event.target.classList.contains('delete-machine')) {
            const index = event.target.getAttribute('data-index');
            machines.splice(index, 1); // Remove a máquina do array
            displayMachines(); // Atualiza a exibição
        }
    });
});
