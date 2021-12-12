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
<?php
if (isset($_GET['nik'])) {
	$nik = $_GET['nik'];
	$sql = "SELECT * FROM data_user natural join data_pemohon WHERE nik='$nik'";
	$query = mysqli_query($konek, $sql);
	$data = mysqli_fetch_array($query, MYSQLI_BOTH);
	$nama = $data['nama'];
	$password = $data['password'];
	$hak_akses = $data['hak_akses'];
}
?>

<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<form method="POST">
				<div class="card">
					<div class="card-header">
						<div class="card-title">FORM UBAH USER</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>Nik</label>
									<input type="number" name="nik" value="<?php echo $nik; ?>" class="form-control">
								</div>

								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="text" name="password" value="<?php echo $password; ?>" class="form-control">
								</div>
								<div class="form-group">
									<label>Hak Akses</label>
									<input type="text" name="hak_akses" value="<?php echo $hak_akses; ?>" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="card-action">
						<button name="ubah" class="btn btn-success btn-sm">Ubah</button>
						<a href="?halaman=tampil_user" class="btn btn-default btn-sm">Batal</a>
					</div>
				</div>
		</div>
		</form>
	</div>
</div>
<?php

if (isset($_POST['ubah'])) // when click on Update button
{
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$hak_akses = $_POST['hak_akses'];

	$edit = mysqli_query($konek, "UPDATE data_user
	SET 
	nik = '$nik',
	password='$password',
	hak_akses='$hak_akses';
	WHERE nik=$_SESSION[nik]");

	if ($edit) {
		mysqli_close($konek); // Close connection
		echo "<script langupassword='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_user">';
		exit;
	} else {
		echo "<script langupassword='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_user">';
	}
}
?>