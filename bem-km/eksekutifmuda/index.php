<?php
define('SITE_KEY', '6LeTaLMUAAAAANh0Qzv-_iIu6WrWOeUVRT8zzjl2');
define('SECRET_KEY', '6LeTaLMUAAAAAJ96r12ZEIhGqQktbrfK1CLtL1to');
if($_POST){
    function getCaptcha($SecretKey){
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }
    $Return = getCaptcha($_POST['g-recaptcha-response']);
    //var_dump($Return);
    if($Return->success == true && $Return->score > 0.5){
        echo "Succes!";
    }else{
        echo "You are a Robot!!";
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BEM KM UDINUS </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Beranda</a></li>
          <li><a href="#about">Syarat & Ketentuan</a></li>
          <li><a href="#services">Bidang</a></li>
          <li><a href="#contact">Pendaftaran</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">


      <div class="intro-img">
        <img src="img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>Program<br>Eksekutif Muda</h2>
        <div>

        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Program Eksekutif Muda </h3>
          <p>Timeline<br>
          29 Desember 2019 - 11 Januari 2020 <strong>Pendaftaran </strong><br>
          5 - 12 Januari <strong>Pengumpulan Berkas</strong><br>
          15 Januari 2020 <strong>Seleksi Wawancara</strong><br>
          16 Januari 2020 <strong>Pengumuman</strong><br>
          
            </p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h3 class="title"><a href="">Syarat dan Ketentuan.</a></h3>
            <div class="icon-box wow fadeInUp">
                    <div class="icon"><i class="fa fa-one"></i>1</div>
                    <h4 class="title"><a href=""></a>.</h4>
                    <p class="description">Mahasiswa aktif UDINUS angkatan 2018 atau 2019.</p>
                  </div>
      
                
      
                  <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-three"></i>3</div>
                    <h4 class="title"><a href=""></a>.</h4>
                    <p class="description">Mengisi formulir online di website bem.dinus.ac.id/eksekutifmuda</p>
                  </div>
                  <div class="icon-box wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon"><i class="fa fa-four"></i>4</div>
                    <h4 class="title"><a href=""></a>.</h4>
                    <p class="description">Dapat mendownload formulir pendaftaran dan twibbon di 
                        <a href="https://drive.google.com/drive/folders/1qbfEQTfUFBkQtz7CdoFlCqKASvECpSjR?usp=sharing"
                        >bit.ly/UnduhBerkasProgramEksekutifMuda</a>.</p>
                  </div>
                  <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon"><i class="fa fa-five"></i>5</div>
                        <h4 class="title"><a href=""></a>.</h4>
                        <p class="description">Mengunggah twibbon di akun Sosial Media dengan caption motivasi dan hastag #bemkmudinus #kabinetactive <strong>akun jangan di private</strong>. </p>
                  </div>
                  <div class="icon-box wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon"><i class="fa fa-six"></i>6</div>
                            <h4 class="title"><a href=""></a>.</h4>
                            <p class="description">hal-hal yang perlu dilampirkan:<br>
                              1. Cv Kreatif.<BR>
                              2. Form pendaftaran yang sudah diunduh diatas.<br>
                              3. Screenshot twibbon yang telah diunggah dan dicetak dilampirkan dalam berkas.<br>
                              4. Portofolio Hasil Karya<i> (jika ada)</i>.<br>
                              
                              </p>
                  </div>
                  <div class="icon-box wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon"><i class="fa fa-seven"></i>7</div>
                                <h4 class="title"><a href=""></a>.</h4>
                                <p class="description">Mengikuti seluruh rangkaian pendaftaran dengan benar.</p>
                  </div>
                  <div class="icon-box wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="icon"><i class="fa fa-eight"></i>8</div>
                                    <h4 class="title"><a href=""></a>.</h4>
                                    <p class="description">Mengumpulkan berkas serta persyaratan di camp BEM KM UDINUS gedung F.1.2. maksimal 12 Januari 2020 pukul 18.00 WIB (laki-laki: Map Merah, Perempuan: Map Biru.</p>
                  </div>
                  <div class="icon-box wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="icon"><i class="fa fa-nine"></i>9</div>
                                    <h4 class="title"><a href=""></a>.</h4>
                                    <p class="description">Di map dikasih Nama, NIM, Progdi dan Fakultas.</p>
                  </div>                                                                                                    
                  <div class="icon-box wow fadeInUp" data-wow-delay="0.9s">
                      <div class="icon"><i class="fa fa-ten"></i>10</div>
                      <h4 class="title"><a href=""></a>.</h4>
                      <p class="description">Jangan lupa berdoa minta doa restu kepada orang tua, tetap semangat dan bekerja keras.<br>SALAM KOLABORASI!!!</p>
                  </div>               
              </div>
            

          </div>

<!--            <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
              <img src="img/intro-img2.svg" class="img-fluid" alt="">
            </div>
-->
        </div>

    </section><!-- #about -->
    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
            <div class="container">
      
              <header class="section-header">         
                <h3>Kementerian</h3>
                <p>Ini kementerian yang ada di Keluarga Mahasiswa Badan Eksekutif Mahasiswa <br>Kabinet Active Periode 2019/2020.</p>
      
              </header>
      
              <div class="row">
      
                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                  <div class="box">
                    <h4 class="title"><a href="">Kementerian <br>Dalam Negeri</a></h4>
                    <p class="description">Adanya sinkronisasi kegiatan-kegiatan yang dilakukan oleh semua ormawa yang ada di UDINUS serta menjalin komunikasi, membina hubungan baik antar elemen KM UDINUS, dan melakukan sosialisasi kepada mahasiswa tentang isu-isu kekinian di UDINUS.</p>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                  <div class="box">
                      <h4 class="title"><a href="">Kementerian<br> Penelitian dan Pengembangan</a></h4>
                      <p class="description">Melakukan penelitian terhadap KM UDINUS dengan melakukan monitoring dan mengevaluasi kegiatan serta memastikan kesesuaian kinerja anggota BEM yang mengarah pada GBHK BEM serta memberikan masukan dan pengembangan terhadap kabinet.</p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                  <div class="box">
                      <h4 class="title"><a href="">Kementerian<br>Luar Negeri</a></h4>
                      <p class="description">Menjalin, memperkuat jaringan dan membina hubungan baik perorangan maupun lembaga-lembaga diluar UDINUS dan ikut berpartisipasi aktif dalam membangun citra positif UDINUS.</p>            
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                  <div class="box">
                      <h4 class="title"><a href="">Kementerian<br>Komunikasi dan Informasi</a></h4>
                      <p class="description">Mengoptimalkan pelayanan informasi kepada mahasiswa UDINUS dan memberikan informasi yang berhubungan dengan KM UDINUS kepada masyarakat umum secara luas.</p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                  <div class="box">             
                    <h4 class="title"><a href="">Kementerian<br>Sosial dan Masyarakat</a></h4>
                    <p class="description">Menjalin kerjasama dengan berbagai lembaga maupun perorangan dalam upaya menyelesaikan masalah-masalah sosial masyarakat guna meningkatkan kepedulian mahasiswa UDINUS terhadap masalah pendidikan, sosial, budaya, dan lingkungan hidup.</p>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                  <div class="box">                
                      <h4 class="title"><a href="">Kementerian<br>Ekonomi Kreatif</a></h4>
                      <p class="description">Menciptakan Sistem Administrasi Yang Terkontrol, Terkoordinasi, Transparan Serta Mewujudkan Sistem Manajemem Perekonomian Dan Usaha-Usaha Dalam Hal Pendanaan Secara Kontinu Sehingga Tercipta Dana Mandiri Yang Halal Dan Tidak Mengikat.</p>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.4s" data-wow-duration="1.6s">
                    <div class="box">
                      <h4 class="title"><a href="">Kementerian <br>Kesejahteraan Mahasiswa</a></h4>
                      <p class="description">Bergerak dalam meningkatkan kesejahteraan kepada mahasiswa, baik dalam hal penyaluran pendapat, akademis maupun kereligiusan mahasiswadengan tujuan terwujudnya kesejahteraan di bidang akademik, kesehatan, soaial dan agama bagi mahasiswa serta melakukan diskusi dan sosialisasi kepada mahasiswa tentang isu-isu kekinian.</p>
                    </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- #services -->
        <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
            <div class="container">
      
              <div class="section-header">
                <h3>Form Pendaftaran </h3>
                <p>Open Recruitment Program Eksekutif Muda 2020.</p>
              </div>
      
                  <div class="row">
                  
                  <div class="form">
                    <form action="action.php"method="POST">
                    

        
                    <div class="colom">
                      <div class="form-row-center">
                        <div class="form-group col-lg-8">
                          <label class="label">Nama</label>
                          <input type="text" name="nama" class="form-control" placeholder="Ali Husain ..." data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        </div>
                        <div class="form-group col-lg-8">
                            <label class="label">NIM</label>
                            <input type="text" name="nim" class="form-control" placeholder="a1X.20XX.XXXXX" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        </div>  
                        
                        <div class="form-group col-lg-8">       
                                <label class="label">Jenis Kelamin</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="kelamin">
                                        <option disabled="disabled" selected="selected">Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                                </div>                      
                        <div class="form-group col-lg-8">
                                <label class="label">Alamat Rumah / Kos</label>
                                <textarea class="form-control" name="alamat" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Jalan Nakula No. . . . . ?"></textarea>
                        </div>
                        <div class="form-group col-lg-8">
                            <label class="label">Tempat, Tanggal Lahir</label>
                            <input type="text" name="ttl" class="form-control"  placeholder="Semarang, 31 Mei 2000" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        </div>
                        <div class="form-group col-lg-8">       
                        <label class="label">Fakultas</label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="fakultas">
                                <option disabled="disabled" selected="selected">Pilih Fakultas</option>
                                <option value="FIK">Fakultas Ilmu Komputer</option>
                                <option value="FEB">Fakultas Ekonomi Bisnis</option>
                                <option value="FIB">Fakultas Ilmu Budaya</option>
                                <option value="FKES">Fakultas Kesehatan</option>
                                <option value="FT">Fakultas Teknik</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                        </div>
                        <div class="form-group col-lg-8">
                            <label class="label">Program Studi</label>
                            <input type="text" name="progdi" class="form-control" placeholder="Teknik . . . . " data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        </div>
                        <div class="form-group col-lg-8">
                                  <label class="label">Email</label>
                                  <input type="email" name="email" class="form-control"  placeholder="abcde@gmail.com" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            </div>
                        <div class="form-group col-lg-8">
                                      <label class="label">Nomer Handphone (WA)</label>
                                      <input type="nomor" name="nohp" class="form-control" placeholder="08XXXXXXXXX" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        </div>
                        <div class="form-group col-lg-8">
                                  <label class="label">Instagram</label>
                                  <input type="text" name="ig" class="form-control" placeholder="@abcde" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                         </div>
                    </div>
                </div>

                 <div class="kanan">

                    <div class="form-row-center">
                            <div class="form-group col-lg-11">       
                                    <label class="label">Motivasi ikut Program Eksekutif Muda BEM-KM Udinus</label>
                                    <textarea class="form-control" name="motivasi" rows="7" data-rule="required" data-msg="Please write something for us" placeholder="Apa Motivasimu?"></textarea>
                            </div>


                            <div class="form-group col-lg-8">       
                              <label class="label">Kementerian 1</label>
                              <div class="rs-select2 js-select-simple select--no-search">                                 
                                    <select name="kementerian1">
                                            <option disabled="disabled" selected="selected">Pilih Kementerian</option>
                                            <option value="mendagri">Kementerian Dalam Negeri</option>
                                            <option value="menlu">Kementerian Luar Negeri</option>
                                            <option value="sosmas">Kementerian Sosial Masyarakat</option>
                                            <option value="kominfo">Kementerian komunikasi dan Informasi</option>
                                            <option value="ekokraf">Kementerian Ekonomi Kreatif</option>
                                            <option value="litbang">Kementerian Penelitian dan Pengembangan</option>
                                            <option value="kesma">Kementerian Kesejahteraan Mahasiswa</option>

                                        </select>
                                  <div class="select-dropdown"></div>
                          </div>
                          </div>

                          <div class="form-group col-lg-11">                            
                                <label class="label">Alasan 1</label>
                                <textarea class="form-control" name="alasan1" rows="7" data-rule="required" data-msg="Please write something for us" placeholder="Alasan Kamu"></textarea>
                              </div>
                              </div>
                            <div class="form-group col-lg-8">       
                              <label class="label">Kementerian 2</label>
                              <div class="rs-select2 js-select-simple select--no-search">                                 
                                    <select name="kementerian2">
                                            <option disabled="disabled" selected="selected">Pilih Kementerian</option>
                                            <option value="mendagri">Kementerian Dalam Negeri</option>
                                            <option value="menlu">Kementerian Luar Negeri</option>
                                            <option value="sosmas">Kementerian Sosial Masyarakat</option>
                                            <option value="kominfo">Kementerian komunikasi dan Informasi</option>
                                            <option value="ekokraf">Kementerian Ekonomi Kreatif</option>
                                            <option value="litbang">Kementerian Penelitian dan Pengembangan</option>
                                            <option value="kesma">Kementerian Kesejahteraan Mahasiswa</option>

                                        </select>
                                  <div class="select-dropdown"></div>
                          </div>
                          </div>
                                <div class="form-group col-lg-11">                            
                                        <label class="label">Alasan 2</label>
                                        <textarea class="form-control" name="alasan2" rows="7" data-rule="required" data-msg="Please write something for us" placeholder="Alasan Kamu"></textarea>
                                      </div>
                                    <!--  <div class="form-group col-lg-11">                            
                                          <label class="label">Bukti Upload Twibbon (SS)</label>
                                          <input type="file" name="twibbon" id="twibbon">
                                      </div>  -->                
                        </div>


                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" /><br >

                        <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button>
</form>
                                      
                                    </div>            
                                    </div>
                                      
     </div>               

                 
</section><!-- #contact -->
      
  
    </main>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>BEM KM UDINUS 2019/2020</h3>
            <p>Kabinet Active .</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><a href="../#intro">Beranda</a></li>
              <li><a href="../#about">Tentang</a></li>
              <li><a href="../#services">Kementerian</a></li>
              <li><a href="../#why-us">Program Kerja</a></li>
              <li><a href="../#portfolio">Keseruan Kami</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Kontak Kami</h4>
            <p>
              Universitas Dian Nuswantoro Gedung F.1.2. <br>
              Pendrikan Kidul <br>
              Kota Semarang<br>
              Indonesia<br>
              <br>
              <strong>Email </strong>: bemkm.dinus@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://www.instagram.com/bemkmudinus/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCS6rA6PzOwDIUFHt5uHv6cg" class="youtube"><i class="fa fa-youtube"></i></a>
              <a href="https://open.spotify.com/episode/35lThPhehhxdYPgPxK31nW?si=5UMjlS9qQkO5Zo9-bG-psw" class="spotify"><i class="fa fa-spotify"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Blog</h4>
            <p>COMINGSOON.</p>
            <!--
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Ikuti">
            
            </form>
          -->
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright &copy;<strong> BEM KM UDINUS 2019</strong> | Kabinet Active
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File
  <script src="contactform/contactform.js"></script>
 -->
  <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/global.js"></script>
      
  <script>
      grecaptcha.ready(function() {
      grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'})
      .then(function(token) {
          //console.log(token);
          document.getElementById('g-recaptcha-response').value=token;
      });
      });
      </script>
   
</body>

</html>
