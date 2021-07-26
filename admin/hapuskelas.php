<?php 

if(!isset($_GET['id_kelas']) || $_GET['id_kelas'] == '') header('Location: datakelas.php');

require_once '../koneksi.php';
$id_kelas = $_GET['id_kelas'];
$query = mysqli_query($koneksi, "DELETE FROM tb_kelas WHERE id_kelas = {$id_kelas}");
if($query){
	$_SESSION['sukses'] = 'Data Berhasil Dihapus!';
	header('Location: datakelas.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Dihapus!';
	header('Location: datakelas.php');
}