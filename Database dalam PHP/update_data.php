<?php

$cnn = mysqli_connect('localhost','root','','db_kampus'); 
if(!$cnn){
echo "Koneksi Gagal <br/>";
}else{
echo "Koneksi Berhasil <br/>";
}

mysqli_select_db($cnn,"db_kampus");

$sql = "UPDATE mahasiswa set nama='Rona Roni', telp = '081657775987', alamat = 'Jalan Gowokwaru' where nim = '10101111';";

$update = mysqli_query($cnn,$sql);

if (!$update){
echo "Data GAGAL Dirubah <br/>";
}else{
echo "Data BERHASIL Dirubah <br/>";

}
