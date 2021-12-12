<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<style>
	.confirm {
		background-color: #1a2035 !important;
	}

	.btn-default {
		background: #f25961 !important;
		color: #fff !important;
	}

	.btn-default:hover {
		background: #f25961 !important;
		color: #fff !important;
	}

	.btn-success {
		background: #1a2035 !important;
		border-color: #1a2035 !important;
	}

	.btn-success:hover {
		background: #1a2035 !important;
		border-color: #1a2035 !important;
	}
</style>
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<form method="POST">
				<div class="card">
					<div class="card-header">
						<div class="card-title">FORM TAMBAH USER</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>Nik</label>
									<input type="number" name="nik" class="form-control" placeholder="Nik.." oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="16" required autofocu>
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap.." required>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="form-control" placeholder="Password.." required>
								</div>

							</div>
						</div>
					</div>
					<div class="card-action">
						<button name="simpan" class="btn btn-success btn-sm">Simpan</button>
						<a href="?halaman=tampil_user" class="btn btn-default btn-sm">Batal</a>
					</div>
				</div>
		</div>
		</form>
	</div>
</div>

<?php
if (isset($_POST['simpan'])) {
	$nik = $_POST['nik'];
	$password = $_POST['password'];
	$hak_akses = "Pemohon";

	$sql_simpan = "INSERT INTO data_user (nik,password,hak_akses) VALUES ('$nik','$password','$hak_akses')";
	$query_simpan = mysqli_query($konek, $sql_simpan);

	if ($query_simpan == 1) {
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];

		$ins = "INSERT INTO data_pemohon (nik,nama,jekel) VALUES ('$nik','$nama','Laki-Laki')";
		$quey = mysqli_query($konek, $ins) or die(mysqli_error($konek));

		if ($quey == 1) {
			echo "<script language='javascript'>swal('Selamat...', 'Simpan Berhasil!', 'success');</script>";
			echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_user">';
		}
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Simpan Gagal!', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tambah_user">';
	}
}


?>