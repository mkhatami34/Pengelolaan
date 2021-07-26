<?php 

if(!isset($_POST['tambah'])) header('Location: tambahsiswa.php');

require_once '../koneksi.php';
$nis = @mysqli_real_escape_string($koneksi, $_POST['nis']);
$nama_lengkap = @mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
$tempat_lahir = @mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
$tgl_lahir = @mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']);
$jenis_kelamin = @mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
$agama = @mysqli_real_escape_string($koneksi, $_POST['agama']);
$nama_ayah = @mysqli_real_escape_string($koneksi, $_POST['nama_ayah']);
$nama_ibu = @mysqli_real_escape_string($koneksi, $_POST['nama_ibu']);
$no_telp = @mysqli_real_escape_string($koneksi, $_POST['no_telp']);
$email = @mysqli_real_escape_string($koneksi, $_POST['email']);
$alamat = @mysqli_real_escape_string($koneksi, $_POST['alamat']);
$id_kelas = @mysqli_real_escape_string($koneksi, $_POST['id_kelas']);

// persiapan upload foto
$ekstensi = $_FILES['foto']['name'];
$ekstensi = pathinfo($ekstensi, PATHINFO_EXTENSION);

$nama_foto = strtolower($nama_lengkap);
$nama_foto = str_replace(' ', '-', $nama_foto) . '.' . $ekstensi;

$asal = $_FILES['foto']['tmp_name'];
$tujuan = 'images/';

if($_FILES['foto']['error'] == 0){
	if($_FILES['foto']['size'] < 1000000){
		if (file_exists($tujuan . $nama_foto)) unlink($tujuan . $nama_foto);

		$query = mysqli_query($koneksi, "INSERT INTO tb_siswa VALUES('', '$nis', '$nama_lengkap', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$agama', '$nama_ayah', '$nama_ibu', '$no_telp', '$email', '$alamat', '$id_kelas', '$nama_foto')") or die ($koneksi->error);  
		move_uploaded_file($asal, $tujuan . $nama_foto) or die('gagal upload foto');
		if($query){
			$_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
			header('Location: datasiswa.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Ditambahkan!';
			header('Location: datasiswa.php');
		}
	} else {
		$_SESSION['gagal'] = 'ukuran gambar tidak boleh lebih dari 1000kb!';
		header('Location: datasiswa.php');
	}
}
