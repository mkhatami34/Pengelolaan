<?php 

if(!isset($_GET['id_kelas']) || $_GET['id_kelas'] == '') header('Location: datakelas.php');

require_once '../koneksi.php';
$id_kelas = $_GET['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$ruang = $_POST['ruang'];
$query = mysqli_query($koneksi, "UPDATE tb_kelas SET nama_kelas = '$nama_kelas', ruang = '$ruang' WHERE id_kelas = {$id_kelas} ");
if($query){
	$_SESSION['sukses'] = 'Data Berhasil Diubah!';
	header('Location: datakelas.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Diubah!';
	header('Location: datakelas.php');
}

?>