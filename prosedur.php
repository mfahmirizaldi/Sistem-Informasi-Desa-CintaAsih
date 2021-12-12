<?php include 'konek.php'; ?>
<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nekociaa">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Desa Cinta Asih</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
</head>

<body class="d-flex h-100 mppl-color-bg">

    <div class="d-flex w-100 h-100 mx-auto flex-column">
        <!-- navbar -->
        <nav class="navbar fixed-top p-3 bg-light mx-auto">
            <div class="container-fluid">
                <img class="my-auto float-md-start" src="img/logo.png" width="50px" height="50px">
                <a href="index.php">
                    <h2 class="mx-2 my-auto">Cinta Asih</h2>
                </a>
                <nav class="m-auto nav nav-masthead">
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
                        <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
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
            <!-- konten -->
            <div class="mt-5 pt-5" id="img-gradient2">
                <section>
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12">
                                <div class="card bg-dark text-dark bg-white" style="border-radius: 1rem;">
                                    <div class="card-body p-5">
                                        <h1 class="text-center mb-5">Prosedur Permohonan</h1>
                                        <div class="row">
                                            <div class="col">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <td><img src="img/no1.png" width="32px"></td>
                                                            <td class="ps-2">
                                                                <h4>Login</h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td class="ps-2" style="color: #777777;">Pemohon surat melakukan login melalui halaman login.</td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                            <div class="col">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <td><img src="img/no2.png" width="32px"></td>
                                                            <td class="ps-2">
                                                                <h4>Menginput Data</h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td class="ps-2" style="color: #777777;">Menginput data yang dibutuhkan setelah login sebelumnya.</td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <td><img src="img/no3.png" width="32px"></td>
                                                            <td class="ps-2">
                                                                <h4>Mengajukan Surat Permohonan</h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td class="ps-2" style="color: #777777;">Setelah menginput data dengan lengkap dan benar, pemohon surat memilih surat yang akan diajukan serta melengkapi formulir kemudian dikirim untuk menunggu persetujuan lurah.</td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                            <div class="col">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <td><img src="img/no4.png" width="32px"></td>
                                                            <td class="ps-2">
                                                                <h4>Permohonan Disetujui</h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td class="ps-2" style="color: #777777;">Jika permohonan disetujui lurah, staf akan mencetak surat sesuai yang diajukan kemudian pemohon datang untuk mengambil dan menandatangani surat di kantor kelurahan.</td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- end konten -->
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
</body>

<!-- nekolicious.github.io -->

</html>