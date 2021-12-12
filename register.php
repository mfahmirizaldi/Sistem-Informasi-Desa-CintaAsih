<?php include 'konek.php'; ?>
<link href="demo1/css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="demo1/js/jquery-2.1.3.min.js"></script>
<script src="demo1/js/sweetalert.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Desa Cinta Asih</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="main/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="main/vendors/base/vendor.bundle.base.css">
  <link href="main/js/sweetalert.css" rel="stylesheet" type="text/css">
  <script src="main/js/jquery-2.1.3.min.js"></script>
  <script src="main/js/sweetalert.min.js"></script>
  <script src="main/js/sweetalert-dev.js"></script>
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="main/css/style.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <style>
    .btn-primary {
      color: #fff;
      background-color: #1f283e !important;
      border-color: #1f283e !important;
    }

    .confirm {
      background-color: #1a2035 !important;
    }

    .text-primary {
      color: #1a2035 !important;
      text-decoration: underline;
    }


    .btn-primary:hover {
      color: #fff;
      background-color: #1a2035 !important;
      border-color: #1a2035 !important;
    }
  </style>
  <!-- endinject -->
  <link rel="shortcut icon" href="main/images/favicon.png" />
</head>

<body>

  <div class="d-flex w-100 h-100 mx-auto flex-column">
    <!-- navbar -->
    <nav class="navbar fixed-top p-3 bg-light mx-auto">
      <div class="container-fluid">
        <img class="my-auto float-md-start" src="img/logo.png" width="50px" height="50px">
        <a href="index.php">
          <h2 class="mx-2 my-auto">Cinta Asih</h2>
        </a>
        <nav class="mx-auto nav nav-masthead">
          <li class="nav-item">
            <a class="mx-auto nav-link" aria-current="page" href="index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="mx-auto nav-link" href="tentangdesa.php">Tentang Desa</a>
          </li>
          <li class="nav-item dropdown">
            <a class="mx-auto nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Layanan Administrasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="prosedur.php">Prosedur</a></li>
              <li><a class="dropdown-item" href="waktupelayanan.php">Waktu Pelayanan</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="mx-auto nav-link" href="kabar.php">Kabar Desa</a>
          </li>

        </nav>
        <div class="mx-auto my-auto p-auto">
          <button class="mx-2 btn btn-mppl" data-bs-toggle="modal" data-bs-target="#loginPrompt">Masuk</button>
          <a href="register.php"><button class="mx-2 btn btn-outline-mppl">Daftar</button></a>
        </div>
      </div>
    </nav>

    <!-- Modal dialog -->
    <div class="modal fade" id="loginPrompt" tabindex="-1" aria-labelledby="loginPrompttext" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginPrompttext">Pilih Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body mx-auto text-center">
            <span>Pengunjung? Klik User</span><br>
            <a href="login.php" class="btn btn-mppl">User</a>
            <br><br>
            <span>Administrator? Klik Admin</span><br>
            <a href="loginadmin.php" class="btn btn-secondary">Admin</a>
          </div>
        </div>
      </div>
    </div>

    <!-- main page -->
    <main class="px-0 my-auto">
      <div class="mt-5 pt-5" id="img-gradient2">
        <!-- login -->
        <div class="content-wrapper d-flex align-items-center auth px-0" style="background:none">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5" style="border-radius: 1rem;">
                <div class="brand-logo">
                  <img src="main/img/logo_desa.png" width="150" height="54" alt="logo">
                </div>
                <h4 style="color: #1a2035;">REGISTER</h4>
                <h6 class="font-weight-light" style="color: #1a2035;">Signing up is easy. It only takes a few steps</h6>
                <form method="POST" class="pt-3">
                  <div class="form-group">
                    <input type="number" name="nik" class="form-control form-control-lg" placeholder="NIK Anda.." oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="16" required autofocus style="padding-left : 0.94rem;">
                  </div>
                  <div class="form-group">
                    <input type="text" name="nama" class="form-control form-control-lg" placeholder="Nama Lengkap Anda.." required style="padding-left : 0.94rem;">
                  </div>
                  <div class="form-group">
                    <select name="jekel" id="" class="form-control">
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" name="kota" class="form-control form-control-lg" placeholder="Kota Lahir Anda.." required style="padding-left : 0.94rem;">
                  </div>
                  <div class="form-group">
                    <input type="date" name="tgl" class="form-control form-control-lg" required style="padding-left : 0.94rem;">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required style="padding-left : 0.94rem;">
                  </div>
                  <div class="mb-4">

                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="register">
                      DAFTAR
                    </button>
                  </div>
                  <div class="mt-3">
                    <a class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn" href="http://localhost/Sistem-Informasi-Desa-CintaAsih/" style="text-align: center;margin-top: 4px;padding-top: 13px;">BATAL</a>
                  </div>
                  <div class="text-center mt-4 font-weight-light" style="color: #1f283e;">
                    Sudah memiliki akun? <a href="login.php" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="mppl-bg text-white py-5">
      <div class="container">
        <div class="row">
          <h4><b>Desa Cinta Asih</b></h4>
        </div>
        <div class="row">
          <div class="col-2">
            <img src="img/logo.png" class="mx-auto d-block">
          </div>
          <div class="col-2">
            <div class="row">
              <a id="awhite" href="#">Platform</a>
            </div>
            <div class="row">
              <a id="awhite" href="#">Bantuan Center</a>
            </div>
            <div class="row">
              <a id="awhite" href="#">Keamanan</a>
            </div>
          </div>
          <div class="col-2">
            <div class="row">
              <a id="awhite" href="#">Warga</a>
            </div>
            <div class="row">
              <a id="awhite" href="#">Studi Kasus</a>
            </div>
            <div class="row">
              <a id="awhite" href="#">Cerita Warga</a>
            </div>
          </div>
          <div class="col-2">
            <div class="row">
              <a id="awhite" href="#">Kecamatan</a>
            </div>
            <div class="row">
              <a id="awhite" href="#">Tentang</a>
            </div>
            <div class="row">
              <a id="awhite" href="#"></a>
            </div>
          </div>
          <div class="col-1">
            <!-- blankspace -->
          </div>
          <div class="col-3">
            <a href="#"><img src="img/instagram.png"></a>
            <a href="#"><img src="img/twitter.png"></a>
            <a href="#"><img src="img/facebook.png"></a>
            <br>
            <span><b>Call Center</b> : (022) 877722311</span>
          </div>
        </div>
      </div>
    </footer>
  </div>


  <!-- insert register -->
  <?php
  if (isset($_POST['register'])) {
    $nik = $_POST['nik'];
    $password = $_POST['password'];
    $hak_akses = "Pemohon";

    $sql_simpan = "INSERT INTO data_user (nik,password,hak_akses) VALUES ('$nik','$password','$hak_akses')";
    $query_simpan = mysqli_query($konek, $sql_simpan);

    if ($query_simpan == 1) {
      $nik = $_POST['nik'];
      $nama = $_POST['nama'];
      $jekel = $_POST['jekel'];
      $kota = $_POST['kota'];
      $tgl = $_POST['tgl'];
      $ins = "INSERT INTO data_pemohon (nik,nama,jekel,tempat_lahir,tanggal_lahir) VALUES ('$nik','$nama','$jekel','$kota','$tgl')";
      $quey = mysqli_query($konek, $ins) or die(mysqli_error($konek));

      if ($quey == 1) {
        echo "<script language='javascript'>swal('Selamat...', 'Akun Berhasil dibuat!', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=login.php">';
      }
    } else {
      echo "<script language='javascript'>swal('Gagal...', 'Akun Gagal dibuat!', 'error');</script>";
      echo '<meta http-equiv="refresh" content="3; url=register.php">';
    }
  }

  ?>
  <!-- plugins:js -->
  <script src="main/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="main/js/off-canvas.js"></script>
  <script src="main/js/hoverable-collapse.js"></script>
  <script src="main/js/template.js"></script>
  <!-- endinject -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- endinject -->
  <script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
</body>

</html>
