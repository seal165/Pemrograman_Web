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
});