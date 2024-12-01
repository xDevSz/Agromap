// Função para atualizar o horário
function atualizarHorario() {
    const agora = new Date();
    const horario = agora.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

    document.getElementById('horario-colheita').innerText = `Horário: ${horario}`;
    document.getElementById('horario-vacinacao').innerText = `Horário: ${horario}`;
}

// Atualiza o horário a cada segundo
setInterval(atualizarHorario, 1000);

// Chamada inicial para exibir o horário imediatamente
atualizarHorario();
