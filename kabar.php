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
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="prosedur.php">Prosedur</a></li>
                            <li><a class="dropdown-item" href="waktupelayanan.php">Waktu Pelayanan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="mx-auto nav-link  active" href="kabar.php">Kabar Desa</a>
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
            <!-- daftar berita -->
            <div class="mt-5 pt-5">
                <div class="container bg-light p-5 my-2">
                    <div class="row align-items-start">
                        <div class="col-2">
                            <a href="#">
                                <img width="200px" src="img/vaksin.png">
                            </a>
                        </div>
                        <div class="col-8 ps-5">
                            <div class="row">
                                <span>
                                    oleh <a href="#" id="penulis">REAKSI</a> |
                                    <a href="#" id="tanggal">Nov 22, 2021</a> |
                                    <a href="#" id="kategori">KABAR DESA</a> |
                                    <a href="$" id="komentar">30 Komentar</a>
                                </span>
                            </div>
                            <div class="row">
                                <h3 class="my-2" id="judul-berita"><a href="#">Judul Berita</a></h3>
                            </div>
                            <div class="row">
                                <p class="mppl-color-light" style="font-size: larger;">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Quisquam excepturi ratione, beatae atque explicabo
                                    facilis accusantium qui, magni ex magnam repellat doloribus aliquid maiores expedita
                                    alias esse dicta, nulla quam.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container bg-light p-5 my-2">
                    <div class="row align-items-start">
                        <div class="col-2">
                            <a href="#">
                                <img width="200px" src="img/vaksin.png">
                            </a>
                        </div>
                        <div class="col-8 ps-5">
                            <div class="row">
                                <span>
                                    oleh <a href="#" id="penulis">REAKSI</a> |
                                    <a href="#" id="tanggal">Nov 22, 2021</a> |
                                    <a href="#" id="kategori">KABAR DESA</a> |
                                    <a href="$" id="komentar">30 Komentar</a>
                                </span>
                            </div>
                            <div class="row">
                                <h3 class="my-2" id="judul-berita"><a href="#">Judul Berita</a></h3>
                            </div>
                            <div class="row">
                                <p class="mppl-color-light" style="font-size: larger;">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Quisquam excepturi ratione, beatae atque explicabo
                                    facilis accusantium qui, magni ex magnam repellat doloribus aliquid maiores expedita
                                    alias esse dicta, nulla quam.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container bg-light p-5 my-2">
                    <div class="row align-items-start">
                        <div class="col-2">
                            <a href="#">
                                <img width="200px" src="img/vaksin.png">
                            </a>
                        </div>
                        <div class="col-8 ps-5">
                            <div class="row">
                                <span>
                                    oleh <a href="#" id="penulis">REAKSI</a> |
                                    <a href="#" id="tanggal">Nov 22, 2021</a> |
                                    <a href="#" id="kategori">KABAR DESA</a> |
                                    <a href="$" id="komentar">30 Komentar</a>
                                </span>
                            </div>
                            <div class="row">
                                <h3 class="my-2" id="judul-berita"><a href="#">Judul Berita</a></h3>
                            </div>
                            <div class="row">
                                <p class="mppl-color-light" style="font-size: larger;">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Quisquam excepturi ratione, beatae atque explicabo
                                    facilis accusantium qui, magni ex magnam repellat doloribus aliquid maiores expedita
                                    alias esse dicta, nulla quam.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container bg-light p-5 my-2">
                    <div class="row align-items-start">
                        <div class="col-2">
                            <a href="#">
                                <img width="200px" src="img/vaksin.png">
                            </a>
                        </div>
                        <div class="col-8 ps-5">
                            <div class="row">
                                <span>
                                    oleh <a href="#" id="penulis">REAKSI</a> |
                                    <a href="#" id="tanggal">Nov 22, 2021</a> |
                                    <a href="#" id="kategori">KABAR DESA</a> |
                                    <a href="$" id="komentar">30 Komentar</a>
                                </span>
                            </div>
                            <div class="row">
                                <h3 class="my-2" id="judul-berita"><a href="#">Judul Berita</a></h3>
                            </div>
                            <div class="row">
                                <p class="mppl-color-light" style="font-size: larger;">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Quisquam excepturi ratione, beatae atque explicabo
                                    facilis accusantium qui, magni ex magnam repellat doloribus aliquid maiores expedita
                                    alias esse dicta, nulla quam.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container bg-light p-5 my-2">
                    <div class="row align-items-start">
                        <div class="col-2">
                            <a href="#">
                                <img width="200px" src="img/vaksin.png">
                            </a>
                        </div>
                        <div class="col-8 ps-5">
                            <div class="row">
                                <span>
                                    oleh <a href="#" id="penulis">REAKSI</a> |
                                    <a href="#" id="tanggal">Nov 22, 2021</a> |
                                    <a href="#" id="kategori">KABAR DESA</a> |
                                    <a href="$" id="komentar">30 Komentar</a>
                                </span>
                            </div>
                            <div class="row">
                                <h3 class="my-2" id="judul-berita"><a href="#">Judul Berita</a></h3>
                            </div>
                            <div class="row">
                                <p class="mppl-color-light" style="font-size: larger;">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Quisquam excepturi ratione, beatae atque explicabo
                                    facilis accusantium qui, magni ex magnam repellat doloribus aliquid maiores expedita
                                    alias esse dicta, nulla quam.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container bg-light p-5 my-2">
                    <div class="row align-items-start text-center">
                        <div class="col order-first">
                            <a id="prevkabar" href="#" class="btn btn-mppl rounded-pill">
                                << Berita Sebelumnya</a>
                        </div>
                        <div class="col"></div>
                        <div class="col order-last">
                            <a id="nextkabar" href="#" class="btn btn-mppl rounded-pill"> Berita Selanjutnya >></a>
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
</body>

<!-- nekolicious.github.io -->

</html>