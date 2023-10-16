document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("login-form");

    loginForm.addEventListener("submit", function(event) {
        event.preventDefault();

        // Di sini Anda perlu menambahkan logika untuk memeriksa login siswa.
        // Misalnya, Anda bisa melakukan permintaan ke server atau memeriksa dalam basis data.

        const username = loginForm.username.value;
        const password = loginForm.password.value;

        // Contoh validasi sederhana, gantilah ini dengan logika yang sesuai dengan proyek Anda.
        if (username === "siswa" && password === "password") {
            alert("Login berhasil!");
            // Redirect ke halaman lain atau lakukan tindakan sesuai kebutuhan.
        } else {
            alert("Login gagal. Coba lagi.");
        }
    });
});
