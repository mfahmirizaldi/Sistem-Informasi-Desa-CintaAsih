<?php
session_start();
include 'konek.php';
$level = "pemohon";
?>
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
      <div class="container-fluid mx-auto">
        <img class="my-auto float-md-start" src="img/logo.png" width="50px" height="50px">
        <a href="index.php">
          <h2 class="mx-2 my-auto">Cinta Asih</h2>
        </a>
        <nav class="m-auto nav nav-masthead">
          <li class="nav-item">
            <a class="mx-auto nav-link active" aria-current="page" href="#">Beranda</a>
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

    <!-- Cinta asih -->
    <div class="p-5 mt-5" id="img-gradient">
      <div class="my-5 py-5">
        <h1>Desa Cinta Asih</h1>
        <p style="width: 30%;">Desa cinta asih bertekad untuk memberdayakan sumber daya manusia yang ada . Dan melayani
          serta menjaga keasrian dari desa cinta asih yang terkenal dengantempat yang indah dan nyaman.</p>
      </div>
    </div>

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
    <main class="px-0 my-auto bg-light">
      <!-- motto -->
      <div class="container my-5">
        <div class="row mx-auto">
          <div class="col-sm"><img class="row mx-auto" src="img/siap.png"></div>
          <div class="col-sm"><img class="row mx-auto" src="img/ramah.png"></div>
          <div class="col-sm"><img class="row mx-auto" src="img/puas.png"></div>
        </div>
        <div class="row mx-auto text-center mb-5">
          <div class="col-sm">Siap melayani setiap saat</div>
          <div class="col-sm">Melayani sepenuh hati</div>
          <div class="col-sm">Warga puas dan terbantu</div>
        </div>
      </div>

      <!-- kepala desa -->
      <div class="mx-auto py-5 px-3 mppl-color-bg">
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <div class="container mx-auto">
          <div class="row">
            <!-- kiri -->
            <div class="col my-auto">
              <p>Assalamu’alaikum warahmatullahi wabarakatuh
                Dan salam sejahtera bagi kita semua
                <br><br>
                Kepada masyarakat Desa Manduro sekalian yang saya muliakan. Pada kesempatan yang berbahagia ini, kiranya
                tiada kata – kata yang patut untuk kita ucapkan terlebih dahulu melainkan puji syukur yang sedalam –
                dalamnya, atas rahmat dan karunia Allah SWT sehingga pembuatan website Desa Banjarsari dapat terlaksana
                dengan baik.
                <br><br>
                Kami sebagai Kepala Desa Cinta Asih di sini tentu merasa berbahagia dan terima kasih atas dukungan dari
                semua pihak, utamanya dari Perangkat Desa Manduro yang telah berpartisipasi dalam pembuatan website ini
                dan semoga bermanfaat. Tentu saja sebagai kami berharap adanya website ini dapat memudahkan warga dalam
                urusan dengan Desa sehingga kita dapat saling berhubungan tanpa ribet harus datang ke desa
                <br><br>
                Demikian, sambutan dari saya
                Wassalamu’alaikum warahmatullahi wabarakatuh
              </p>
            </div>
            <div class="col-sm-1"></div>
            <!-- Kanan -->
            <div class="col my-auto mx-auto">
              <div class="row px-auto mx-auto">
                <div class="mx-auto px-auto">
                  <div class="row ms-auto">
                    <h1 class="mppl-color">Kepala Desa</h1>
                    <!-- BORDER -->
                    <div class="col-3 align-self-start border-bottom border-5 border-mppl">
                    </div>
                  </div>
                  <div class="mx-auto">
                    <img class="mx-auto d-block" src="img/profil.png">
                  </div>
                </div>
                <div class="row mx-auto text-center">
                  <h4>Dr. Muhammad Acil S.T, M.Kom</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- kabar desa -->
      <div class="bg-light mx-auto py-5 px-3">
        <div class="container">
          <div class="row">
            <!-- kiri -->
            <div class="col m-auto">
              <div>
                <img class="mx-auto my-4 d-block" src="img/vaksin.png">
                <h3 id="bold-text">Warga Lakukan Vaksinasi</h3>
                <span id="komentar">30 Komentar</span>
                <p class="my-3 mppl-color-light">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quo praesentium delectus, velit non
                  modi, blanditiis similique quae soluta ipsa obcaecati animi alias libero sapiente impedit dicta fugit.
                  Ab, minima.
                </p>
                <a href="kabar.php"><button class="btn btn-mppl rounded-pill">Lihat Berita ></button></a>
              </div>
            </div>
            <div class="col-sm-1"></div>
            <!-- Kanan -->
            <div class="col my-auto mx-auto">
              <div class="row px-auto mx-auto">
                <div class="mx-auto">
                  <div class="row ms-auto">
                    <h1 class="mppl-color">Kabar Desa</h1>
                    <!-- BORDER -->
                    <div class="col-3 align-self-start border-bottom border-5 border-mppl">
                    </div>
                  </div>
                  <!-- berita lain -->
                  <div class="mx-auto my-5">
                    <h3 id="bold-text"><img class="me-3" style="width: 25px;" src="img/news.png"><a href="#">Judul
                        Berita</a></h3>
                    <p class="mppl-color-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quia
                      error aliquid autem nesciunt ullam dolor saepe fugiat veniam tenetur hic alias sint quidem
                      molestiae quis obcaecati, corrupti laudantium? Nulla.</p>
                  </div>
                  <div class="mx-auto my-5">
                    <h3 id="bold-text"><img class="me-3" style="width: 25px;" src="img/news.png"><a href="#">Judul
                        Berita</a></h3>
                    <p class="mppl-color-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quia
                      error aliquid autem nesciunt ullam dolor saepe fugiat veniam tenetur hic alias sint quidem
                      molestiae quis obcaecati, corrupti laudantium? Nulla.</p>
                  </div>
                  <div class="mx-auto my-5">
                    <h3 id="bold-text"><img class="me-3" style="width: 25px;" src="img/news.png"><a href="#">Judul
                        Berita</a></h3>
                    <p class="mppl-color-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quia
                      error aliquid autem nesciunt ullam dolor saepe fugiat veniam tenetur hic alias sint quidem
                      molestiae quis obcaecati, corrupti laudantium? Nulla.</p>
                  </div>
                  <div class="mx-auto my-5">
                    <h3 id="bold-text"><img class="me-3" style="width: 25px;" src="img/news.png"><a href="#">Judul
                        Berita</a></h3>
                    <p class="mppl-color-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quia
                      error aliquid autem nesciunt ullam dolor saepe fugiat veniam tenetur hic alias sint quidem
                      molestiae quis obcaecati, corrupti laudantium? Nulla.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- lokasi desa -->
      <div class="mx-auto py-5 px-3">
        <div class="container mx-auto">
          <div class="row">
            <!-- kiri -->
            <div class="col my-auto mx-auto">
              <div class="row px-auto mx-auto">
                <div class="mx-auto px-auto">
                  <div class="row ms-auto">
                    <h1 class="mppl-color">Lokasi Desa</h1>
                    <!-- BORDER -->
                    <div class="col-3 align-self-start border-bottom border-5 border-mppl"></div>
                  </div>
                  <div class="mx-auto my-5">
                    <img class="mx-auto d-block rounded-circle" src="img/sekre.png">
                    <div class="my-3">
                      <p><b>Alamat:</b><br>
                        Samarang, Kec. Samarang, Kabupaten Garut, Jawa Barat 44161
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>
            <!-- Kanan -->
            <div class="col my-5 mx-auto">
              <div class="row px-auto mx-auto">
                <div class="mx-auto px-auto">
                  <div class="mx-auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1867.9998472772277!2d107.83833198960102!3d-7.22331725050739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ba939408ef13%3A0x2bceceef7dca5d3a!2sKantor%20Desa%20Cintaasih!5e0!3m2!1sen!2sid!4v1638083144327!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- footer -->

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