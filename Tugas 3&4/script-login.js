const loginForm = document.getElementById("loginForm");

loginForm.addEventListener("submit", function (event) {
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
    window.location.href = "admin.html";
  } else {
    alert("Login gagal, periksa kembali username dan password.");
  }
});