const calendar = document.getElementById('calendar');
const monthName = document.getElementById('month-name');

let currentDate = new Date();

const months = [
    'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
    'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
];

let selectedDay = null; // Para armazenar o dia selecionado

function renderCalendar() {
    calendar.innerHTML = ''; // Limpa o calendário anterior
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();
    monthName.textContent = `${months[month]} ${year}`;

    // Dias do mês
    const firstDay = new Date(year, month, 1).getDay(); // Primeiro dia do mês
    const daysInMonth = new Date(year, month + 1, 0).getDate(); // Último dia do mês
    const prevDays = new Date(year, month, 0).getDate(); // Dias do mês anterior

    // Dias do mês anterior
    for (let i = firstDay; i > 0; i--) {
        const day = document.createElement('button');
        day.className = 'date faded';
        day.textContent = prevDays - i + 1;
        calendar.appendChild(day);
    }

    // Dias do mês atual
    for (let i = 1; i <= daysInMonth; i++) {
        const day = document.createElement('button');
        day.className = 'date';
        if (i === currentDate.getDate() && month === new Date().getMonth() && year === new Date().getFullYear()) {
            day.classList.add('current-day');
        }
        day.textContent = i;

        // Evento de clique para alterar a cor do dia
        day.addEventListener('click', () => selectDay(day));
        calendar.appendChild(day);
    }

    // Dias do próximo mês
    const totalCells = firstDay + daysInMonth;
    const nextDays = 42 - totalCells; // Garante 6 linhas completas
    for (let i = 1; i <= nextDays; i++) {
        const day = document.createElement('button');
        day.className = 'date faded';
        day.textContent = i;
        calendar.appendChild(day);
    }
}

function selectDay(day) {
    // Se o dia já estiver selecionado, remove a seleção (volta à cor original)
    if (selectedDay === day) {
        day.style.backgroundColor = '';
        day.style.color = '';
        selectedDay = null;
    } else {
        // Se outro dia estava selecionado, volta à cor original
        if (selectedDay) {
            selectedDay.style.backgroundColor = '';
            selectedDay.style.color = '';
        }

        // Marca o dia selecionado com a cor vermelha
        day.style.backgroundColor = 'red';
        day.style.color = 'white';
        selectedDay = day;
    }
}

function changeMonth(delta) {
    currentDate.setMonth(currentDate.getMonth() + delta);
    renderCalendar();
}

function goToToday() {
    currentDate = new Date();
    renderCalendar();
}

function goToTomorrow() {
    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    currentDate = tomorrow;
    renderCalendar();
}

// Inicializa o calendário
renderCalendar();
