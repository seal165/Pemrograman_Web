document.addEventListener("DOMContentLoaded", function () {
    const infoButton = document.getElementById('infoButton');
    const infoMessage = document.getElementById('infoMessage');
    const fetchButton = document.getElementById("fetchButton");
    const jadwalElement = document.getElementById("jadwal");
    const registerForm = document.getElementById("registerForm");

    // Info Button & PopUp Message
    infoButton.addEventListener('click', () => {
        alert("Selamat datang di situs jadwal transportasi umum Jawa Timur!");
        infoMessage.style.display = (infoMessage.style.display === 'none' || infoMessage.style.display === '') ? 'block' : 'none';
        localStorage.setItem("visited", "true");
        if (localStorage.getItem("visited")) {
            console.log("Kamu telah mengunjungi halaman ini sebelumnya.");
        }
    });

    // Fetch Button to get schedule
    fetchButton.addEventListener("click", fetchJadwal);

    function fetchJadwal() {
        fetch('https://api.jadwaltransportasi.com/jawa-timur')
        .then(response => response.json())
        .then(data => {
            jadwalElement.textContent = `Jadwal terbaru: ${data.jadwal}`;
        })
        .catch(error => {
            console.error("Error fetching data:", error);
            jadwalElement.textContent = "Gagal mendapatkan jadwal.";
        });
    }

    // Dropdown Handling
    ["regionBtn", "transportationBtn", "fromBtn", "toBtn"].forEach(btnId => {
        document.getElementById(btnId).addEventListener("click", function () {
            alert(`Select your ${btnId.replace('Btn', '').toLowerCase()}`);
            toggleDropdown(`${btnId.replace('Btn', 'List')}`);
        });
    });

    // Save selected region in localStorage
    document.querySelectorAll("#regionList a").forEach(function (region) {
        region.addEventListener("click", function () {
            localStorage.setItem("selectedRegion", region.textContent);
            alert("Region " + region.textContent + " has been selected and saved.");
        });
    });

    // Fetch Schedule on page load
    fetchSchedule();

    function fetchSchedule() {
        fetch("https://api.example.com/schedule")
            .then(response => {
                if (!response.ok) {
                    throw new Error("Failed to fetch schedule");
                }
                return response.json();
            })
            .then(data => {
                const scheduleData = document.getElementById("scheduleData");
                scheduleData.innerHTML = "";
                data.forEach(schedule => {
                    const row = `
                        <tr>
                            <td>${schedule.date}</td>
                            <td>${schedule.name}</td>
                            <td>${schedule.from}</td>
                            <td>${schedule.to}</td>
                            <td>${schedule.time}</td>
                        </tr>
                    `;
                    scheduleData.insertAdjacentHTML("beforeend", row);
                });
            })
            .catch(error => {
                console.error("Error:", error);
                alert("Failed to load schedule.");
            });
    }

    function toggleDropdown(listId) {
        const list = document.getElementById(listId);
        list.style.display = (list.style.display === "block") ? "none" : "block";
    }
});

function updateSelection(category, value) {
    console.log(`Selected ${category}: ${value}`);
}