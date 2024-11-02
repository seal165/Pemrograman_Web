const registerForm = document.getElementById("registerForm");

registerForm.addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah form dari pengiriman default

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    // Cek apakah password dan confirm password cocok
    if (password !== confirmPassword) {
        alert("Password dan Konfirmasi Password tidak cocok.");
        return; // Menghentikan eksekusi jika password tidak sama
    }

    // Simulasi pengiriman data registrasi ke server menggunakan Fetch
    const registrationData = {
        username: username,
        password: password
    };

    fetch('https://example.com/api/register', { // Ganti dengan URL endpoint yang sesuai
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(registrationData)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Registrasi gagal');
        }
        return response.json();
    })
    .then(data => {
        // Jika registrasi berhasil
        alert("Registrasi berhasil!");
        
        // Simpan username ke localStorage
        localStorage.setItem("registeredUsername", username);

        // Kosongkan form setelah berhasil
        registerForm.reset();
    })
    .catch(error => {
        console.error('Terjadi kesalahan:', error);
        alert('Registrasi gagal, silakan coba lagi.');
    });
});