<?php
$nik = $_GET['nik'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'surat';
$conn = mysqli_connect($hostname, $username, $password, $database);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM data_user WHERE nik = $nik";

if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
	echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_user">';
} else {
	echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
	echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_user">';
}
