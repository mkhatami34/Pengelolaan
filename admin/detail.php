
<?php 
require_once '../koneksi.php';
if(!isset($_GET['id_siswa']) || $_GET['id_siswa'] == '') header('Location: datasiswa.php');

$id_siswa = $_GET['id_siswa'];
$query = mysqli_query($koneksi,  "SELECT tb_siswa.id_siswa, tb_siswa.nama_lengkap, tb_siswa.agama, tb_siswa.jenis_kelamin, tb_siswa.no_telp, tb_siswa.tempat_lahir, tb_siswa.tgl_lahir, tb_siswa.nama_ayah, tb_siswa.nama_ibu, tb_siswa.foto, tb_siswa.nis, tb_siswa.alamat, tb_kelas.nama_kelas AS id_kelas FROM tb_siswa LEFT JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas WHERE tb_siswa.id_siswa = $id_siswa");
$row = mysqli_fetch_assoc($query);

$active = 'datasiswa';
?>
<?php require_once 'index.php'; ?>
<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Detail Siswa - <strong><?= $row['nama_lengkap'] ?></strong>
							</div>
							<div class="float-right">
								<a href="datasiswa.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<table class="table table-stripped">
							<tr>
								<td><b>Nama</b></td>
								<td>:</td>
								<td><?= $row['nama_lengkap'] ?></td>
							</tr>
							<tr>
								<td><b>NIS</b></td>
								<td>:</td>
								<td><?= $row['nis'] ?></td>
							</tr>
                            <tr>
								<td><b>Agama</b></td>
								<td>:</td>
								<td><?= $row['agama'] ?></td>
							</tr>
							<tr>
								<td><b>Jenis Kelamin</b></td>
								<td>:</td>
								<td>
									<?= $row['jenis_kelamin'] == 'Laki-Laki' ? 'Laki Laki' : '' ?>
									<?= $row['jenis_kelamin'] == 'Perempuan' ? 'Perempuan' : '' ?>
								</td>
							</tr>
							<tr>
								<td><b>No Handphone</b></td>
								<td>:</td>
								<td><?= $row['no_telp'] ?></td>
							</tr>
							<tr>
								<td><b>Tempat Tanggal Lahir</b></td>
								<td>:</td>
								<td><?= $row['tempat_lahir'] ?>, <?= $row['tgl_lahir'] ?></td>
							</tr>
                            <tr>
								<td><b>Nama Ayah</b></td>
								<td>:</td>
								<td><?= $row['nama_ayah'] ?></td>
							</tr>
                            <tr>
								<td><b>Nama Ibu</b></td>
								<td>:</td>
								<td><?= $row['nama_ibu'] ?></td>
							</tr>
							<tr>
								<td><b>Kelas</b></td>
								<td>:</td>
								<td><?= $row['id_kelas'] ?></td>
							</tr>
							<tr>
								<td><b>Alamat</b></td>
								<td>:</td>
								<td><?= $row['alamat'] ?></td>
							</tr>
							<tr>
								<td><b>Foto</b></td>
								<td>:</td>
								<td><img src="images/<?= $row['foto'] ?>" alt="<?= $row['nama'] ?>" width="25%" class="img-thumbnail"></td>
							</tr>
							<tr>
								<td><b></td>
								<td></td>
								<td>
			
									<a href="datasiswa.php" class="btn btn-secondary btn-sm">Kembali</a>
								</td>
							</tr>
						</table>