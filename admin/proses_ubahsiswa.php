<?php 

if(!isset($_POST['ubahsiswa'])) header('Location: ubahsiswa.php');


require_once '../koneksi.php';
$nama_lengkap = mysqli_real_escape_string($koneksi, isset($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '');
$nis = mysqli_real_escape_string($koneksi, isset($_POST['nis']) ? $_POST['nis'] : '');
$jenis_kelamin = mysqli_real_escape_string($koneksi, isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '');
$no_telp = mysqli_real_escape_string($koneksi, isset($_POST['no_telp']) ? $_POST['no_telp'] : '');
$tempat_lahir = mysqli_real_escape_string($koneksi, isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '');
$tgl_lahir = mysqli_real_escape_string($koneksi, isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : '');
$nama_ayah = mysqli_real_escape_string($koneksi, isset($_POST['nama_ayah']) ? $_POST['nama_ayah'] : '');
$nama_ibu = mysqli_real_escape_string($koneksi, isset($_POST['nama_ibu']) ? $_POST['nama_ibu'] : '');
$id_kelas = mysqli_real_escape_string($koneksi, isset($_POST['id_kelas']) ? $_POST['id_kelas'] : '');
$agama = mysqli_real_escape_string($koneksi, isset($_POST['agama']) ? $_POST['agama'] : '');
$alamat = mysqli_real_escape_string($koneksi, isset($_POST['alamat']) ? $_POST['alamat'] : '');
$id_siswa = $_GET['id_siswa'];

// persiapan upload foto

if($_FILES['foto']['error'] == 0){
	$ekstensi = $_FILES['foto']['name'];
	$ekstensi = pathinfo($ekstensi, PATHINFO_EXTENSION);

	$nama_foto = strtolower($nama_lengkap);
	$nama_foto = str_replace(' ', '-', $nama_foto) . '.' . $ekstensi;

	$asal = $_FILES['foto']['tmp_name'];
} else {
	// hapus foto sebelumnya
	$query_siswa = mysqli_query($koneksi, "SELECT foto FROM tb_siswa WHERE id_siswa = $id_siswa");
	$row = mysqli_fetch_assoc($query_siswa);
	
	$nama_foto = $row['foto'];
}

$tujuan = 'images/';
		
if($_FILES['foto']['error'] == 0){
	if($_FILES['foto']['size'] < 1000000){
		if (file_exists('images/' . $nama_foto)) unlink('images/' . $nama_foto);
		if(file_exists('images/' . $nama_foto)) unlink('images/' . $nama_foto);
		move_uploaded_file($asal, $tujuan . $nama_foto) or die('gagal upload foto');

		// ubah data
		$query = mysqli_query($koneksi, "UPDATE tb_siswa SET nama_lengkap = '$nama_lengkap', nis = $nis, jenis_kelamin = '$jenis_kelamin', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir',  nama_ayah = '$nama_ayah', nama_ibu = '$nama_ibu', alamat = '$alamat', foto = '$nama_foto', agama = '$agama', id_kelas = $id_kelas WHERE id_siswa = $id_siswa") or die(mysqli_error($koneksi));
		if($query){
			$_SESSION['sukses'] = 'Data Berhasil Diubah!';
			header('Location: datasiswa.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Diubah!';
			header('Location: datasiswa.php');
		}
	} else {
		$_SESSION['gagal'] = 'ukuran gambar tidak boleh lebih dari 1000kb!';
		header('Location: datasiswa.php');
	}
} else {
	$query = mysqli_query($koneksi, "UPDATE tb_siswa SET nama_lengkap = '$nama_lengkap', nis = $nis, jenis_kelamin = '$jenis_kelamin', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', nama_ayah = '$nama_ayah', nama_ibu = '$nama_ibu', alamat = '$alamat', foto = '$nama_foto', agama = '$agama', id_kelas = $id_kelas WHERE id_siswa = $id_siswa") or die(mysqli_error($koneksi));

	if($query){
			$_SESSION['sukses'] = 'Data Berhasil Diubah!';
			header('Location: datasiswa.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Diubah!';
			header('Location: datasiswa.php');
		}
}