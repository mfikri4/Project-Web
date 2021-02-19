<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="OPREC Anggota BEM-KM Udinus">
    <meta name="author" content="BEM-KM Udinus">
    <meta name="keywords" content="OPEN RECRUITMENT Anggota BEM-KM Udinus periode 2019/2020">

    <!-- Title Page-->
    <title>OPEN RECRUITMENT Anggota BEM-KM Udinus periode 2019/2020</title>

    <!-- Icons font CSS-->
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/main.css" rel="stylesheet" media="all">

    <title></title>
  </head>
  <body>
        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
            <div class="wrapper wrapper--w680">
              <div class="card card-4">
                  <div class="card-body">
                    <center>
                    <?php session_start();
                    if (isset($_SESSION["start"])){
                      echo "<h1>Pendaftaran Berhasil !<br></h1>";
                      ?>
                    </center>
                        <h2>Nama Peserta : <?php echo $_SESSION["nama"] ?> </h3>
                        <h3>NIM          : <?php echo $_SESSION["nim"] ?> </h3>
                        <h3>Jurusan      : <?php echo $_SESSION["progdi"]?> </h3><br>
                    <p>
                      1. Silahkan kirim Foto dan Cv Kreatif anda ke email bemkm.dinus@gmail.com. <br>
                      2. Mengunggah Twibbon dengan caption motivasi serta hastag #bemkmudinus #kabinetactive dan dapat diunduh melalui link di bawah.<br>
					  3. File yang perlu diunduh dan dikumpulkan bersama CV Kreatif di dalam map (laki-laki: Map Biru, Perempuan: Map Merah) di camp BEM KM F.1.2.</p>
                    <a href="https://drive.google.com/drive/folders/1qbfEQTfUFBkQtz7CdoFlCqKASvECpSjR?usp=sharing"
                    >unduh</a>
                    </p><br>
                      <h5>Silahkan konfirmasi pendaftaran anda ke nomor berikut:</h5><br>
                      <p>Hehe : 085868192422</p>
                      <a href="https://api.whatsapp.com/send?phone=6285868192422&amp;text=*[OPEN%20RECRUITMENT%20BEM-KM%20Periode%202019/2020]*&nbsp;Saya%20sudah%20mendaftar%20OPREC tahap 1&nbsp;Nama%20:%20<?php echo $_SESSION["nama"] ?>&nbsp;NIM%20:%20<?php echo $_SESSION["nim"] ?>&nbsp;Jurusan:%20<?php echo $_SESSION["progdi"] ?>&nbsp Mohon Maaf telah menganggu waktu kakak sebelumnya, Terimakasih :3. ">atau klik link berikut untuk konfirmasi pendaftaran via Whatsapp</a>
                      <center>  <a href="https://api.whatsapp.com/send?phone=6285868192422&amp;text=*[OPEN%20RECRUITMENT%20BEM-KM%20Periode%202019/2020]*&nbsp;Saya%20sudah%20mendaftar%20OPREC tahap 1&nbsp;Nama%20:%20<?php echo $_SESSION["nama"] ?>&nbsp;NIM%20:%20<?php echo $_SESSION["nim"] ?>&nbsp;Jurusan:%20<?php echo $_SESSION["progdi"] ?>&nbsp Mohon Maaf telah menganggu waktu kakak sebelumnya, Terimakasih :3. ">
                      <img src="https://lh3.googleusercontent.com/-N23V4qsFKs8/WMV9mGK5x5I/AAAAAAAAAPQ/BcC6qzLzJtcqKUWAX5TXX8KxuwDX5JXAgCLcB/h90/Button%2BChat%2Bvia%2BWhatsapp.png" style="    max-width: 50%;" / /></a></center>
                    
                    <?php session_destroy(); }else{
                      echo '<h3>CP PENDAFTARAN </h3><br>
                                            <p>Siapa : 085868192422</p>';
                    }?>
                    <p> Sampai berjumpa di sesi wawancara tgl 9 September 2019.</p>







                  </div>
                  </div>

            </div>
          </div>
  </body>
</html>
