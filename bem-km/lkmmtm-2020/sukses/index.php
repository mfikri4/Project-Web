<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>LKMM-TM 2020 - BEM-KM UDINUS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <script src="https://apis.google.com/js/platform.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="../index.html">Beranda</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main">
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>LKMMM-TM 2020</h2>
            <p>Sampai ketemu di acara Latihan Kepemimpiman Manajemen Mahasiswa Tingkat Menengah Tahun 2020.</p>
          </div>
          <div class="col-lg-3">
            <h3>Lokasi</h3>
            <p>Aula Gedung E lantai 3 Udinus</p>
          </div>
          <div class="col-lg-3">
            <h3>Waktu</h3>
            <p>Kamis-Jumat<br>5-6 Maret 2020</p>
          </div>
        </div>
      </div>
    </section>

    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <center>
            <?php session_start();
            if (isset($_SESSION["start"])){
              echo "<h2>Pendaftaran Berhasil !<br></h2>";
              ?>
          </center>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
            <ul id="faq-list">

              <li>
                <a data-toggle="collapse" class="collapsed" href="#faq1">Nama Peserta :
                  <?php echo $_SESSION["nama"] ?></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">

                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">NIM :
                  <?php echo $_SESSION["nim"] ?></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">Fakultas :
                  <?php echo $_SESSION["fakultas"]?></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">Program Studi :
                  <?php echo $_SESSION["progdi"]?></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq5" class="collapsed">Asal Ormawa/UKM :
                  <?php echo $_SESSION["asal"]?> </a>
                <div id="faq5" class="collapse" data-parent="#faq-list">
                </div>
              </li>

              <a data-toggle="collapse" href="#faq6" class="collapsed">Silahkan konfirmasi pendaftaran anda ke nomor
                berikut </a>
              <p>Siska : 0859-4346-0690</p>

            </ul>
            <a
              href="https://api.whatsapp.com/send?phone=6285943460690&amp;text=*[LKMM-TM%202020%20]*&nbsp;Saya%20sudah%20mendaftar%20LKMM-TM 2020&nbsp;Nama%20:%20<?php echo $_SESSION["nama"] ?> &nbsp; NIM%20:%20<?php echo $_SESSION["nim"] ?> &nbsp; Fakultas%20:%20<?php echo $_SESSION["fakultas"] ?> &nbsp; Program%20Studi%20:%20<?php echo $_SESSION["progdi"] ?> &nbsp; Asal%20Ormawa%20/%20UKM%20:%20<?php echo $_SESSION["asal"] ?> &nbsp; Terimakasih%20:3.">atau
              klik link berikut untuk konfirmasi pendaftaran via Whatsapp</a>
            <center> <a
                href="https://api.whatsapp.com/send?phone=6285943460690&amp;text=*[LKMM-TM%202020%20]*&nbsp;Saya%20sudah%20mendaftar%20LKMM-TM 2020&nbsp;Nama%20:%20<?php echo $_SESSION["nama"] ?> &nbsp; NIM%20:%20<?php echo $_SESSION["nim"] ?> &nbsp; Fakultas%20:%20<?php echo $_SESSION["fakultas"] ?> &nbsp; Program%20Studi%20:%20<?php echo $_SESSION["progdi"] ?> &nbsp; Asal%20Ormawa%20/%20UKM%20:%20<?php echo $_SESSION["asal"] ?> &nbsp; Terimakasih%20:3.">
                <img src="img/chat-wa.png" style="    max-width: 30%;" / /></a></center>

            <?php session_destroy(); }else{
                echo '<h3>CP PENDAFTARAN </h3><br>
                                      <p>Siska : 0859-4346-0690</p>';
              }?>
          </div>
        </div>

      </div>

    </section>

  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>BEM-KM Universitas Dian Nuswantoro</strong>
        </div>
        <div class="credits">
        </div>
      </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>