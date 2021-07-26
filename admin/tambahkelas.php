<?php require_once 'index.php'; ?>

<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							
							<div class="float-right">
								<a href="datakelas.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_tambahkelas.php" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama_kelas">Kelas</label>
								<input type="text" class="form-control" id="nama_kelas" placeholder="Masukan Kelas" autocomplete="off" required="required" name="nama_kelas">
							</div>
							<div class="form-group">
								<label for="ruang">Ruang</label>
								<input type="text" class="form-control" id="ruang" placeholder="Masukan Ruang" autocomplete="off" required="required" name="ruang">
							</div>
                            <br>
                            <div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="tambah">Tambah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="datakelas.php" class="btn btn-sm btn-secondary">Kembali</a>
							</div>
						</form>