<?php
session_start();
include 'konek.php';
$level = "pemohon";
?>
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
  <link href="main/css/sweetalert.css" rel="stylesheet" type="text/css">
  <style>
    .confirm {
      background-color: #1a2035 !important;
    }

    .btn-primary {
      color: #fff;
      background-color: #1f283e !important;
      border-color: #1f283e !important;
    }

    .btn-primary:hover {
      color: #fff;
      background-color: #1a2035 !important;
      border-color: #1a2035 !important;
    }
  </style>
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
                <h4 style="color: #1a2035;">LOGIN ADMIN</h4>
                <h6 class="font-weight-light" style="color: #1a2035;">Sign in to continue.</h6>
                <form method="POST" class="pt-3">
                  <div class="form-group">
                    <select name="hak_akses" id="" class="form-control text-uppercase">
                      <option value="" selected="selected">Login sebagai</option>
                      <?php
                      $SQL = "SELECT * FROM data_user WHERE hak_akses='Staf' or hak_akses='Lurah'";
                      $QUERY = mysqli_query($konek, $SQL);
                      while ($data = mysqli_fetch_array($QUERY, MYSQLI_BOTH)) {
                        $hak_akses = $data['hak_akses'];
                      ?>
                        <option value="<?php echo $hak_akses; ?>"><?php echo $hak_akses; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                    <!-- <input type="text" name="nik" class="form-control form-control-xs text-uppercase" placeholder="Password" required autofocus> -->
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-xs text-uppercase" placeholder="Password" required autofocus style="padding-left: 15px;">
                  </div>
                  <div class="mt-3">
                    <!-- <a href="SBAdmin/index.html" class="btn btn-block btn-primary btn-sm font-weight-medium auth-form-btn">LOGIN</a> -->
                    <button type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                      LOGIN
                    </button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">

                  </div>
                  <div class="mb-2">
                    <a class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn" href="http://localhost/Sistem-Informasi-Desa-CintaAsih/" style="text-align: center;margin-top: 4px;padding-top: 13px;">BATAL</a>
                  </div>
                  <!-- <div class=" text-center mt-4 font-weight-light">
                      Belum memiliki akun? <a href="beranda.php" class="text-primary">Buat</a>
                  </div> -->
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

  <!-- login -->
  <?php
  if (isset($_POST['login'])) {
    // $nik = $_POST['nik'];
    $password = $_POST['password'];
    $hak_akses = $_POST['hak_akses'];

    $sql_login = "SELECT * FROM data_user WHERE hak_akses='$hak_akses' AND password='$password'";
    $query_login = mysqli_query($konek, $sql_login);
    $data_login = mysqli_fetch_array($query_login, MYSQLI_BOTH);
    $jumlah_login = mysqli_num_rows($query_login);

    if ($jumlah_login > 0) {
      session_start();
      $_SESSION['hak_akses'] = $data_login['hak_akses'];
      $_SESSION['password'] = $data_login['password'];

      echo "<script language='javascript'>swal('Selamat...', 'Login Berhasil!', 'success');</script>";
      echo '<meta http-equiv="refresh" content="3; url=demo1/main2.php">';
    } else {
      echo "<script language='javascript'>swal('Gagal...', 'Login Gagal', 'error');</script>";
      echo '<meta http-equiv="refresh" content="3; url=loginadmin.php">';
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- endinject -->
  <script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
</body>

</html>
<!-- oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "16"  -->