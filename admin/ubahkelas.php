<?php 

if(!isset($_GET['id_kelas']) || $_GET['id_kelas'] == '') header('Location: datakelas.php');

require_once '../koneksi.php';
$id_kelas = $_GET['id_kelas'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_kelas WHERE id_kelas = $id_kelas");
$siswa = mysqli_fetch_assoc($query);

$active = 'master'; 
?>
<?php require_once 'index.php'; ?>
<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Ubah Siswa
							</div>
							<div class="float-right">
								<a href="datakelas.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_ubahkelas.php?id_kelas=<?= $siswa['id_kelas'] ?>" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama_kelas">Nama Kelas</label>
								<input type="text" value="<?= $siswa['nama_kelas'] ?>" class="form-control" id="nama_kelas" placeholder="nama" autocomplete="off" required="required" name="nama_kelas">
							</div>
							<div class="form-group">
								<label for="ruang">Ruang</label>
								<input type="text" value="<?= $siswa['ruang'] ?>" class="form-control" id="ruang" placeholder="ruang" autocomplete="off" required="required" name="ruang">
							</div>
                            <br>
                            <div class="col">
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="ubah">Ubah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="datasiswa.php" class="btn btn-sm btn-secondary">Kembali</a>
							</div>
						</form>