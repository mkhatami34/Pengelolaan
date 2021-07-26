<?php 

if(!isset($_GET['id_siswa']) || $_GET['id_siswa'] == '') header('Location: datasiswa.php');

require_once '../koneksi.php';
$id_siswa = $_GET['id_siswa'];
$query = mysqli_query($koneksi, "SELECT foto FROM tb_siswa WHERE id_siswa = {$id_siswa}");
$row = mysqli_fetch_assoc($query);

if(file_exists("images/" . $row['foto'])) unlink("images/" . $row['foto']) or die('foto tidak bisa dihapus');

$query = mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE id_siswa = {$id_siswa}");
if($query){
	$_SESSION['sukses'] = 'Data Berhasil Dihapus!';
	header('Location: datasiswa.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Dihapus!';
	header('Location: datasiswa.php');
}