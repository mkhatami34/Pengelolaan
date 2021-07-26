<?php 

if(!isset($_POST['tambah'])) header('Location: tambahkelas.php');

require_once '../koneksi.php';
$nama_kelas = @mysqli_real_escape_string($koneksi, $_POST['nama_kelas']);
$ruang = @mysqli_real_escape_string($koneksi, $_POST['ruang']);
$query = mysqli_query($koneksi, "INSERT INTO tb_kelas (nama_kelas, ruang) VALUES ('$nama_kelas', '$ruang')");
if($query){
	$_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
	header('Location: datakelas.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Ditambahkan!';
	header('Location: datakelas.php');
}