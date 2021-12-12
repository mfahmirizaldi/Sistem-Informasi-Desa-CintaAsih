<?php
include "konek.php";


$query = "DELETE FROM data_user
							WHERE nik ='$_POST[$nik]'
                            DELETE FROM data_pemohon
							WHERE nik ='$_POST[$nik]'
								";

mysqli_query($koneks, $query)
    or die("Gagal Perintah SQL" . mysql_error());
