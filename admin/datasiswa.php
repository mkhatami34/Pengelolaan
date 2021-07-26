
<?php 
require_once '../koneksi.php';

$query = mysqli_query($koneksi,  "SELECT tb_siswa.id_siswa, tb_siswa.nama_lengkap, tb_siswa.jenis_kelamin, tb_siswa.foto, tb_siswa.nis, tb_siswa.alamat, tb_kelas.nama_kelas AS id_kelas FROM tb_siswa LEFT JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas");
$no = 1;
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
								Data Kelas
							</div>
							<div class="float-right">
								<a href="tambahsiswa.php">Tambah</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<table id="table_id" class="dataTable table table-bordered">
						    <thead>
						        <tr>
						            <th>No</th>
						            <th width="150px">Foto</th>
									<th>Nama Lengkap</th>
                                    <th>NIS</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kelas</th>
									<th>Aksi</th>
						        </tr>
						    </thead>
						    <tbody>
						       <?php while($row = mysqli_fetch_assoc($query)) : ?>
						       		<tr>
						       			<td><?= $no++ ?></td>
						       			<td><img src="images/<?= $row['foto'] ?>" alt="<?= $row['nama_lengkap'] ?>" width="100%" class="img-thumbnail"></td>
						       			<td><a href="detail.php?id_siswa=<?= $row['id_siswa'] ?>"><?= $row['nama_lengkap'] ?></a></td>
										<td><?= $row['nis'] ?></td>
						       			<td><?= $row['jenis_kelamin'] ?></td>
						       			<td><?= $row['alamat'] ?></td>
						       			<td><?= $row['id_kelas'] ?></td>
										<td>
						       				<a href="ubahsiswa.php?id_siswa=<?= $row['id_siswa'] ?>" class="btn btn-success btn-sm">Ubah</a>
											<a href="hapussiswa.php?id_siswa=<?= $row['id_siswa'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')">Hapus</a>
						       			</td>
						       		</tr>
						       <?php endwhile; ?>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

	