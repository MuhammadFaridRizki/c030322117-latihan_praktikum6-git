<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$nis = $_GET['nis'];

// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])) { // Jika user menceklis checkbox yang ada di form ubah, lakukan :
    // Ambil data foto yang dipilih dari form
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    // Rename nama fotonya dengan menambahkan tanggal dan jam upload
    $fotobaru = date('dmYHis') . $foto;

    // Set path folder tempat menyimpan fotonya
    $path = "images/" . $fotobaru;

    // Proses upload
    if(move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
        // Query untuk mengupdate data siswa berdasarkan NIS yang dikirim
        $query = "UPDATE datasiswa SET nama='$nama', jenis_kelamin='$jenis_kelamin', telp='$telp', alamat='$alamat', foto='$fotobaru' WHERE nis='$nis'";
        
        // Eksekusi/Jalankan query update
        $sql = mysqli_query($connect, $query);

        if($sql) {
            // Hapus file foto sebelumnya yang ada di folder images
            $query = "SELECT foto FROM datasiswa WHERE nis='$nis'";
            $result = mysqli_query($connect, $query);
            $data = mysqli_fetch_array($result);

            if(is_file("images/" . $data['foto'])) { // Jika foto sebelumnya ada
                unlink("images/" . $data['foto']); // Hapus file foto sebelumnya
            }

            // Redirect ke halaman sukses
            header('location: sukses.php');
        } else {
            echo "Error: " . mysqli_error($connect);
        }
    } else {
        echo "Upload foto gagal.";
    }
} else {
    // Jika user tidak ingin mengubah foto, update data tanpa mengubah foto
    $query = "UPDATE datasiswa SET nama='$nama', jenis_kelamin='$jenis_kelamin', telp='$telp', alamat='$alamat' WHERE nis='$nis'";
    
    // Eksekusi/Jalankan query update
    $sql = mysqli_query($connect, $query);

    if($sql) {
        // Redirect ke halaman sukses
        header('location: sukses.php');
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>
