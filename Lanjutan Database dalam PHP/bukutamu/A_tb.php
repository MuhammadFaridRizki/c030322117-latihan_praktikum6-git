<?php
$dbname='db_tamu';
$host='localhost';
$password='';
$username='root';
//Koneksi Ke MySQL
$cnn = mysqli_connect($host,$username,$password,$dbname);  
//Membuat Koneksi 
if(!$cnn){ 
	die("Koneksi Failed : ".mysqli_connect_error()); } 
//Membuat Tabel
$sql ="CREATE TABLE bukutamu (
	id integer not null auto_increment,
	nama varchar(25),
	email varchar(50),
	url varchar(100),
	komentar text,
	constraint pk_bukutamu primary key(id)
)";
if (mysqli_query($cnn, $sql)){ 
 echo "Table Berhasil di Buat"; 
 } else { 
 echo "Table Gagal di Buat :".mysqli_error($cnn); } 
 mysqli_close($cnn); 
 ?>
