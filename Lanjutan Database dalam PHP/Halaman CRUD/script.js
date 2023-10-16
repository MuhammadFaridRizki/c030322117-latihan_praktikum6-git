document.addEventListener("DOMContentLoaded", function() {
    const tambahSiswaForm = document.getElementById("tambah-siswa-form");
    const ubahSiswaForm = document.getElementById("ubah-siswa-form");
    const daftarSiswa = document.getElementById("daftar-siswa");

    tambahSiswaForm.addEventListener("submit", function(event) {
        event.preventDefault();

        // Logika untuk menambahkan siswa (sama seperti sebelumnya)
    });

    ubahSiswaForm.addEventListener("submit", function(event) {
        event.preventDefault();

        // Logika untuk mengubah siswa (misalnya, berdasarkan ID siswa)
    });

    daftarSiswa.addEventListener("click", function(event) {
        if (event.target.tagName === "BUTTON") {
            // Logika untuk menghapus siswa (misalnya, berdasarkan ID siswa)
            event.target.parentNode.remove();
        }
    });
});
