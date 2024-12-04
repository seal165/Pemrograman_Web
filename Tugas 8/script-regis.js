// script-regis.js
document.addEventListener("DOMContentLoaded", function() {
    const registerForm = document.getElementById("registerForm");

    registerForm.addEventListener("submit", function(event) {
        event.preventDefault();
        
        const email = document.getElementById("email").value;
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        const registrationData = {
            email: email,
            username: username,
            password: password
        };

        fetch('proses-register.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams(registrationData)
        })
        .then(response => response.text())
        .then(message => {
            alert(message); // Menampilkan pesan sukses/gagal
            registerForm.reset(); // Reset form setelah pengiriman
        })
        .catch(error => console.log('Error:', error));
    });
});