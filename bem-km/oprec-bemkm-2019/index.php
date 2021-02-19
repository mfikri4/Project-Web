<!--
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
?>
  <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Open Recruitment BEM-KM Udinus 2019/2020">
    <meta name="author" content="BEM-KM Udinus">
    <meta name="keywords" content="Open Recruitment BEM-KM Udinus 2019/2020">

    <!-- Title Page-->
    <title>OPEN RECUITMENT BEM-KM UDINUS 2019/2020</title>
         
    
    <script src='https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>'></script>

    <!-- Icons font CSS-->

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
 

</head>
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
              
                <div class="card-body">
                    <h1 class="title">Open Recruitment BEM-KM Udinus 2019/2020</h1>
                    <h5>Selamat Datang di Website BEM-KM UDINUS OPEN RECRUITMENT anggota periode2019/2020<br><h5><br><br>

                      <form action="action.php"method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama</label>
                                    <input class="input--style-4" type="text" name="nama"required placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NIM</label>
                                    <input class="input--style-4" type="text" name="nim"required placeholder="A11.2017.XXXX">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Alamat Rumah / Kos</label>
                                    <input class="input--style-4" type="text" name="alamat"required placeholder="Jalan. xxxx">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tempat, Tanggal lahir</label>
                                    <input class="input--style-4" type="text" name="ttl"required placeholder="Semarang, xxxx">
                                </div>
                            </div>
                        </div>                        
                        <div class="row row-space">
                            <div class="col-2">
                              <div class="input-group">
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
                            </div>
                            <div class="col-2">
                              <div class="input-group">
                                  <label class="label">Program Studi</label>
                                  <input class="input--style-4" type="text" name="progdi"required placeholder="Teknik Informatika">
                              </div>
                            </div>

                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email"required placeholder="budi@gmail.com">
                                </div>
                            </div>
                            <div class="col-2">
                              <div class="input-group">
                                  <label class="label">Nomor Handphone</label>
                                  <input class="input--style-4" type="text" name="nohp"required placeholder="082123456xxx">
                              </div>
                            </div>
                        </div>
                                                <div class="row row-space">
   
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Motivasi ikut Bem-Km</label>
                                      <textarea class="input--style-4" name="motivasi" rows="3" data-rule="textarea" data-msg="Please write something for us" placeholder="apa motivasimu ?"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                              <div class="input-group">
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
                            </div>
                            <div class="col-2">
                              <div class="input-group">
                                  <label class="label">Alasan 1</label>
                                  <textarea class="input--style-4" name="alasan1" rows="3" data-rule="textarea" data-msg="Please write something for us" placeholder="Apa Alasanmu?"></textarea>
                              </div>
                            </div>

                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                              <div class="input-group">
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
                            </div>                 
                              <div class="col-2">
                              <div class="input-group">
                                  <label class="label">Alasan 2</label>
                                  <textarea class="input--style-4" name="alasan2" rows="3" data-rule="textarea" data-msg="Please write something for us" placeholder="Apa Alasanmu?"></textarea>
                              </div>
                            </div>
                   </div>

                    
        		<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" /><br >

                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
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
 
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
-->