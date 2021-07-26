<?php 

if(!isset($_GET['id_siswa']) || $_GET['id_siswa'] == '') header('Location: datasiswa.php');

require_once '../koneksi.php';
$id_siswa = $_GET['id_siswa'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_siswa = $id_siswa");
$query_kelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
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
								<a href="datasiswa.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_ubahsiswa.php?id_siswa=<?= $siswa['id_siswa'] ?>" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama_lengkap">Nama</label>
								<input type="text" value="<?= $siswa['nama_lengkap'] ?>" class="form-control" id="nama_lengkap" placeholder="nama" autocomplete="off" required="required" name="nama_lengkap">
							</div>
							<div class="form-group">
								<label for="nis">NIS</label>
								<input type="number" value="<?= $siswa['nis'] ?>" class="form-control" id="nis" placeholder="nis" autocomplete="off" required="required" name="nis">
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="jenis_kelamin">Jenis Kelamin</label>
										<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
											<option value="Laki-Laki" <?= $siswa['jenis_kelamin'] == 'Laki-Laki' ? 'selected' : '' ?>>Laki Laki</option>
											<option value="Perempuan" <?= $siswa['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="no_telp">No HP</label>
										<input type="text" value="<?= $siswa['no_telp'] ?>" class="form-control" id="no_telp" placeholder="no hp" autocomplete="off" required="required" name="no_telp">
									</div>
								</div>
							</div>
							<div class="col">
									<div class="form-group">
										<label for="agama">Agama</label>
										<input type="text" value="<?= $siswa['agama'] ?>" class="form-control" id="agama" placeholder="no hp" autocomplete="off" required="required" name="agama">
									</div>
								</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="tempat_lahir">Tempat Lahir</label>
										<input type="text" value="<?= $siswa['tempat_lahir'] ?>" class="form-control" id="tempat_lahir" placeholder="tempat lahir" autocomplete="off" required="required" name="tempat_lahir">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="tgl_lahir">Tanggal Lahir</label>
										<input type="date" value="<?= $siswa['tgl_lahir'] ?>" class="form-control" id="tgl_lahir" placeholder="tanggal_lahir" autocomplete="off" required="required" name="tgl_lahir">
									</div>
								</div>
							</div>
							<div class="col">
									<div class="form-group">
										<label for="nama_ayah">Nama Ayah</label>
										<input type="text" value="<?= $siswa['nama_ayah'] ?>" class="form-control" id="nama_ayah" placeholder="Nama Ayah" autocomplete="off" required="required" name="nama_ayah">
									</div>
								</div>
						
							<div class="col">
									<div class="form-group">
										<label for="nama_ibu">Nama Ibu</label>
										<input type="text" value="<?= $siswa['nama_ibu'] ?>" class="form-control" id="nama_ibu" placeholder="Nama Ayah" autocomplete="off" required="required" name="nama_ibu">
									</div>
								</div>
														<div class="col">
									<div class="form-group">
										<label for="foto">Foto</label>
										<input type="file" class="form-control-file mb-2" id="foto" autocomplete="off" name="foto">
									</div>
									*foto sebelumnya <br>
									<img src="images/<?= $siswa['foto'] ?>" alt="" width="20%" class="img-thumbnail mt-2">
								</div>
								<div class="col">
									<div class="form-group">
										<label for="id_kelas">Kelas</label>
										<select name="id_kelas" id="id_kelas" class="form-control">
											<?php while($row = mysqli_fetch_assoc($query_kelas)) : ?>
												<option value="<?= $row['id_kelas'] ?>"><?= $row['nama_kelas'] ?></option>
											<?php endwhile; ?>
										</select>
									</div>
								</div>
						
							<div class="col">
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"><?= $siswa['alamat'] ?></textarea>
							</div>
							<div class="col">
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="ubah">Ubah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="datasiswa.php" class="btn btn-sm btn-secondary">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>