<?php 

require_once '../koneksi.php';

$query = mysqli_query($koneksi, "SELECT id_kelas, nama_kelas FROM tb_kelas");

$active = 'master'; 

?>
<?php require_once 'index.php'; ?>

<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							
							<div class="float-right">
								<a href="datasiswa.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_tambahsiswa.php" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama_lengkap">Nama</label>
								<input type="text" class="form-control" id="nama_lengkap" placeholder="Masukan Nama" autocomplete="off" required="required" name="nama_lengkap">
							</div>
							<div class="form-group">
								<label for="nis">NIS</label>
								<input type="number" class="form-control" id="nis" placeholder="nis" autocomplete="off" required="required" name="nis">
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="jenis_kelamin">Jenis Kelamin</label>
										<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
											<option value="Laki-Laki">Laki Laki</option>
											<option value="Perempuan">Perempuan</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="no_telp">No HP</label>
										<input type="text" class="form-control" id="no_telp" placeholder="no hp" autocomplete="off" required="required" name="no_telp">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="tempat_lahir">Tempat Lahir</label>
										<input type="text" class="form-control" id="tempat_lahir" placeholder="tempat lahir" autocomplete="off" required="required" name="tempat_lahir">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="tgl_lahir">Tanggal Lahir</label>
										<input type="date" class="form-control" id="tgl_lahir" placeholder="tanggal lahir" autocomplete="off" required="required" name="tgl_lahir">
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col">
									<div class="form-group">
										<label for="agama">Agama</label>
										<select name="agama" id="agama" class="form-control">
                                        <option value="">- Pilih -</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
										</select>
									</div>
								</div><br><br>
                                <div class="row">
								<div class="col">
									<div class="form-group">
										<label for="nama_ayah">Nama Ayah</label>
										<input type="text" class="form-control" id="nama_ayah" placeholder="Nama Ayah" autocomplete="off" required="required" name="nama_ayah">
									</div>
								</div>
                                <div class="row">
                                <div class="col">
									<div class="form-group">
										<label for="nama_ibu">Nama Ibu</label>
										<input type="text" class="form-control" id="nama_ibu" placeholder="Nama Ibu" autocomplete="off" required="required" name="nama_ibu">
									</div>
								</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="foto">Foto</label>
										<input type="file" class="form-control-file" id="foto" autocomplete="off" required="required" name="foto">
									</div>
								</div><div class="row">
								<div class="col">
									<div class="form-group">
										<label for="id_kelaskelas">Kelas</label>
										<select name="id_kelas" id="id_kelas" class="form-control">
											<?php while($row = mysqli_fetch_assoc($query)) : ?>
												<option value="<?= $row['id_kelas'] ?>"><?= $row['nama_kelas'] ?></option>
											<?php endwhile; ?>
										</select>
									</div>
								</div>
							
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="tambah">Tambah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="datasiswa.php" class="btn btn-sm btn-secondary">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>