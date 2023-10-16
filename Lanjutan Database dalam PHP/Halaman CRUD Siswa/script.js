document.addEventListener("DOMContentLoaded", function() {
    const tambahSiswaForm = document.getElementById("tambah-siswa-form");
    const daftarSiswa = document.getElementById("daftar-siswa");

    tambahSiswaForm.addEventListener("submit", function(event) {
        event.preventDefault();

        const nama = tambahSiswaForm.nama.value;
        const kelas = tambahSiswaForm.kelas.value;

        if (nama && kelas) {
            const li = document.createElement("li");
            li.innerHTML = `${nama} (Kelas ${kelas}) <button>Hapus</button>`;
            daftarSiswa.appendChild(li);

            tambahSiswaForm.reset();
        }
    });

    daftarSiswa.addEventListener("click", function(event) {
        if (event.target.tagName === "BUTTON") {
            event.target.parentNode.remove();
        }
    });
});
