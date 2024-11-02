function searchSchedule() {
    const region = document.getElementById("region").value;
    const transportation = document.getElementById("transportation").value;
    const from = document.getElementById("from").value;
    const to = document.getElementById("to").value;
    const scheduleData = document.getElementById("scheduleData");

    // Clear previous schedule data
    scheduleData.innerHTML = '';

    // Sample schedule data
    const schedules = [
        { date: 'Monday, 19/09/2024', name: 'Miaw Miaw', from: 'Blimbing', time: '07:30', to: 'Dinoyo', region: 'Malang', transport: 'Kereta Api' },
        { date: 'Tuesday, 20/09/2024', name: 'Kpop Show', from: 'Surabaya', time: '09:00', to: 'Banyuwangi', region: 'Surabaya', transport: 'Bus' },
        // Add more schedules as needed
    ];

    // Filter schedules based on selections
    const filteredSchedules = schedules.filter(schedule => {
        return (!region || schedule.region === region) &&
               (!transportation || schedule.transport === transportation) &&
               (!from || schedule.from === from) &&
               (!to || schedule.to === to);
    });

    // Populate the table with filtered schedules
    if (filteredSchedules.length > 0) {
        filteredSchedules.forEach(schedule => {
            const row = `<tr>
                <td>${schedule.date}</td>
                <td>${schedule.name}</td>
                <td>${schedule.time}</td>
                <td>${schedule.from}</td>
                <td>${schedule.to}</td>
            </tr>`;
            scheduleData.innerHTML += row;
        });
    } else {
        scheduleData.innerHTML = '<tr><td colspan="5">No schedule found</td></tr>';
    }
}