<?php 
require_once '../koneksi.php';

$query = mysqli_query($koneksi,  "SELECT id_kelas, nama_kelas, ruang FROM tb_kelas");
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
								Daftar Siswa
							</div>
							<div class="float-right">
								<a href="tambahkelas.php">Tambah</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<table id="table_id" class="dataTable table table-bordered">
						    <thead>
						        <tr>
						            <th width="70px">No</th>
						          	<th><center>Kelas</th>
                                    <th><center>Ruang</th>
									<th width="100px">Aksi</th>
						        </tr>
						    </thead>
						    <tbody>
						       <?php while($row = mysqli_fetch_assoc($query)) : ?>
						       		<tr>
						       			<td><?= $no++ ?></td>
						       			<td><center><?= $row['nama_kelas'] ?></td>
						       			<td><center><?= $row['ruang'] ?></td>
										<td>
						       				<a href="ubahkelas.php?id_kelas=<?= $row['id_kelas'] ?>" class="btn btn-success btn-sm">Ubah</a>
											<a href="hapuskelas.php?id_kelas=<?= $row['id_kelas'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')">Hapus</a>
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
	