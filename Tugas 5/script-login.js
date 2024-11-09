document.addEventListener("DOMContentLoaded", function() {
  const loginForm = document.getElementById("loginForm");
  const cookieConsent = document.getElementById("cookieConsent");
  const acceptBtn = document.getElementById("acceptBtn");
  const declineBtn = document.getElementById("declineBtn");

  // Tampilkan pop-up cookie jika belum ada persetujuan
  if (!localStorage.getItem("cookieConsent")) {
    cookieConsent.style.display = "block";
  }

  // Fungsi untuk menerima cookie
  function acceptCookies() {
    localStorage.setItem("cookieConsent", "accepted");
    cookieConsent.style.display = "none";
  }

  // Fungsi untuk menolak cookie
  function declineCookies() {
    localStorage.setItem("cookieConsent", "declined");
    cookieConsent.style.display = "none";
  }

  // Tambahkan event listener ke tombol Accept dan Decline
  acceptBtn.addEventListener("click", acceptCookies);
  declineBtn.addEventListener("click", declineCookies);

  loginForm.addEventListener("submit", function(event) {
    event.preventDefault();
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Menyimpan username terakhir di localStorage
    localStorage.setItem("lastUsername", username);
    console.log(`Username yang terakhir kali login: ${localStorage.getItem("lastUsername")}`);
    
    // Login sederhana
    const correctUsername = "admin";
    const correctPassword = "admin123";

    if (username === correctUsername && password === correctPassword) {
      alert("Login berhasil, mengarahkan ke halaman admin...");

      // Cek jika pengguna menerima cookie
      if (localStorage.getItem("cookieConsent") === "accepted") {
        // Set cookie untuk username yang berhasil login, dengan durasi 30 hari
        const expiryDate = new Date();
        expiryDate.setTime(expiryDate.getTime() + (30 * 24 * 60 * 60 * 1000)); // 30 hari
        document.cookie = `username=${username}; path=/; expires=${expiryDate.toUTCString()}`;
      }

      // Redirect ke halaman admin
      window.location.href = "admin.php";
    } else {
      alert("Login gagal, periksa kembali username dan password.");
    }
  });
});