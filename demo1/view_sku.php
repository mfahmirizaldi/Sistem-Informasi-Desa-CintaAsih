<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<style>
    .confirm {
        background-color: #1a2035 !important;
    }

    .btn-primary:disabled,
    .btn-primary:focus,
    .btn-primary:hover {

        background: #1f283e !important;
        border-color: #1f283e !important;
    }
</style>
<?php
if (isset($_GET['id_request_sku'])) {
    $id = $_GET['id_request_sku'];
    $sql = "SELECT * FROM data_request_sku natural join data_pemohon WHERE id_request_sku='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $id = $data['id_request_sku'];
    $nik = $data['nik'];
    $nama = $data['nama'];
    $tempat = $data['tempat_lahir'];
    $tgl = $data['tanggal_lahir'];
    $tgl2 = $data['tanggal_request'];
    $format1 = date('Y', strtotime($tgl2));
    $format2 = date('d-m-Y', strtotime($tgl));
    $format3 = date('d F Y', strtotime($tgl2));
    $agama = $data['agama'];
    $jekel = $data['jekel'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $pekerjaan = $data['pekerjaan'];
    $keperluan = $data['keperluan'];
    $request = $data['request'];
    $usaha = $data['usaha'];
    $acc = $data['acc'];
    $format4 = date('d F Y', strtotime($acc));
    if ($acc == 0) {
        $acc = "BELUM TTD";
    } elseif ($acc == 1) {
        $acc;
    }
}
?>
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold"></h2>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-tools">
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="date" name="tgl_acc" class="form-control">
                                <div class="form-group">
                                    <input type="submit" name="ttd" value="ACC" class="btn btn-primary btn-sm">
                                </div>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['ttd'])) {
                            $ket = "Surat sedang dalam proses cetak";
                            $tgl = $_POST['tgl_acc'];
                            $update = mysqli_query($konek, "UPDATE data_request_sku SET acc='$tgl', status=2, keterangan='$ket' WHERE id_request_sku=$id");
                            if ($update) {
                                echo "<script language='javascript'>swal('Selamat...', 'ACC Lurah Berhasil', 'success');</script>";
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=belum_acc_sku">';
                            } else {
                                echo "<script language='javascript'>swal('Gagal...', 'ACC Lurah Gagal', 'error');</script>";
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=view_sku">';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table border="1" align="center">
                        <table border="0" align="center">
                            <tr>
                                <td><img src="img/logodesa2.png" width="70" height="87" alt=""></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center>
                                        <font size="4">PEMERINTAHAN KABUPATEN GARUT</font><br>
                                        <font size="4">KECAMATAN SAMARANG</font><br>
                                        <font size="5"><b>DESA CINTAASIH</b></font><br>
                                        <font size="2"><i>JL. Pasir Muncang Samarang 44161</i></font><br>
                                    </center>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="45">
                                    <hr color="black">
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    <center>
                                        <font size="4"><b>SURAT KETERANGAN <?php echo $request; ?></b></font><br>
                                        <hr style="margin:0px" color="black">
                                        <span>Nomor : <?php echo $id; ?> / Ds. CintaASih / <?php echo $format1; ?></span>
                                    </center>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Lurah Desa CintaAsih Kabupaten <br> Garut, Menerangkan bahwa :
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?php echo $nama; ?></td>
                            </tr>
                            <tr>
                                <td>Tempat, tanggal lahir</td>
                                <td>:</td>
                                <td><?php echo $tempat . ", " . $format2; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><?php echo $jekel; ?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td><?php echo $agama; ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><?php echo $pekerjaan; ?></td>
                            </tr>
                            <tr>
                                <td>No. NIK</td>
                                <td>:</td>
                                <td><?php echo $nik; ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php echo $alamat; ?></td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan pengamatan kami bahwa orang yang bersangkutan adalah benar<br>memiliki usaha <b><u><?php echo $usaha; ?></u></b> di Wilayah Desa CintaAsih.
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    "Surat Keterangan ini digunakan untuk mendapatkan <b><i><u><?php echo $keperluan; ?></u></i></b>"<br>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat ini diberikan kepada yang bersangkutan agar dapat dipergunakan<br>&nbsp;&nbsp;&nbsp;&nbsp;untuk sebagaimana mestinya.
                                </td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <th></th>
                                <th width="100px"></th>
                                <th>Samarang, <?php echo $acc; ?></th>
                            </tr>
                            <tr>
                                <td>Tanda tangan <br> Yang bersangkutan </td>
                                <td></td>
                                <td>Lurah Desa Cinta Asih</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><img src="img/ttd.png" width="200" height="87" alt=""></td>
                            </tr>
                            <tr>
                                <td rowspan="15"></td>
                                <td></td>
                                <td rowspan="15"></td>
                            </tr>

                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b style="text-transform:uppercase"><u>(<?php echo $nama; ?>)</u></b></td>
                                <td></td>
                                <td><b style="text-transform:uppercase"><u>(Dr. Muhammad Acil S.T, M.Kom)</u></b></td>
                            </tr>
                        </table>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>