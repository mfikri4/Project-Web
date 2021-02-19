<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include_once 'conn.php';
//tombol cari jika ditekan
$getvalues = $siswasmp;
if (isset($_POST["cari"]) ){
    
    $aku = cari($_POST["keyword"]);
    var_dump($siswasmp);
    
    if (isset ($siswasmp)){
        $getvalues = $siswasmp;
    }

    var_dump($getvalues);
}

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>WEBSITE SMP 4 JUWANA</title>
    <link rel="favicon" href="assets/images/favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css' href='assets/css/camera.css' type='text/css' media='all'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="./" style="color:red">
                    <span> WEBSITE SMP 4 JUWANA </span>
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right mainNav">
                    <li class="c1 active"><a href="./"><span class="fa fa-home"></span> Home</a></li>
                    <li class="c2"><a href="pengumuman.php"><span class="fa fa-users"></span> Pengumuman</a></li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->

    <!-- Header -->
    <header id="head">
        <div class="container">
            <div class="heading-text">
                <h1 class="animated flipInY delay1">Penerimaan Siswa Baru Tahun Ajaran 2020/2021</h1> <br />
                <p>SMP 4 JUWANA</p>
            </div>

            <div class="fluid_container">
                <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                    <div data-thumb="assets/images/slides/thumbs/img1.jpg" data-src="assets/images/slides/1.jpg">
                        <h2>Web develop.</h2>
                    </div>
                    <div data-thumb="assets/images/slides/thumbs/img2.jpg" data-src="assets/images/slides/2.jpg">
                    </div>
                    <div data-thumb="assets/images/slides/thumbs/img3.jpg" data-src="assets/images/slides/3.jpg">
                    </div>
                </div><!-- #camera_wrap_3 -->
            </div><!-- .fluid_container -->
        </div>
    </header>
    <!-- /Header -->

    <div class="container">
        <ol class='breadcrumb'>

        </ol>
        <!-- end:breadcrumb -->
        <?php if (isset($_POST["cari"])) {
            ?>
        <div class='row' id='home-content'>
            <div class='col-lg-12'>
                <script type="text/javascript">
                $(document).ready(function() {
                    $("body").on("click", ".edit", function(e) {
                        var clickedID = this.id.split(
                            '-'); //Split string (Split works as PHP explode)
                        var DbNumberID = clickedID[1];
                        var kelas1 = ".data-0-" + DbNumberID;
                        var kelas2 = ".data-1-" + DbNumberID;
                        var kelas3 = ".data-2-" + DbNumberID;
                        var kelas4 = ".data-3-" + DbNumberID;
                        var kelas5 = ".data-4-" + DbNumberID;
                        var kelas6 = ".data-5-" + DbNumberID;
                        var kelas7 = ".data-6-" + DbNumberID;
                        var kelas8 = ".data-7-" + DbNumberID;
                        var kelas9 = ".data-8-" + DbNumberID;
                        var kelas10 = ".data-9-" + DbNumberID;
                        var kelas11 = ".data-10-" + DbNumberID;
                        var kelas12 = ".data-11-" + DbNumberID;
                        var kelas13 = ".data-12-" + DbNumberID;
                        var kelas14 = ".data-13-" + DbNumberID;

                        var <?php echo $getvalues['nama']; ?> = $(kelas2).html();
                        var <?php echo $getvalues['jenis_kelamin']; ?> = $(kelas3).html();
                        var <?php echo $getvalues['nisn']; ?> = $(kelas4).html();
                        var <?php echo $getvalues['alamat']; ?> = $(kelas5).html();
                        var <?php echo $getvalues['nomor_telepon']; ?> = $(kelas6).html();
                        var <?php echo $getvalues['asal_sd']; ?> = $(kelas7).html();
                        var <?php echo $getvalues['nilai_un']; ?> = $(kelas8).html();
                        var <?php echo $getvalues['ayah']; ?> = $(kelas9).html();
                        var <?php echo $getvalues['pekerjaan_ayah']; ?> = $(kelas10).html();
                        var <?php echo $getvalues['ibu']; ?> = $(kelas11).html();
                        var <?php echo $getvalues['pekerjaan_ibu']; ?> = $(kelas12).html();
                        var <?php echo $getvalues['status']; ?> = $(kelas13).html();
                        $("#id").val(id);
                        $("#nama").val(nama);
                        $("#id").attr("readonly", "true");
                        $('.edit-dialog').modal('toggle');
                    });

                })
                </script>

                <center>
                    <h2 style="color: red">PENGUMUMAN HASIL SISWA SMP 4 JUWANA<span class='fa fa-user'></span></h2>
                </center>
                <center>
                    <h5 style="color: green">*) Harap mencari data menggunakan nama lengkap dan huruf kapital! <span
                            class='fa fa-user'></span></h5>
                </center>

                <form method="POST">
                    <label>Cari :</label>
                    <input type="text" name="keyword">
                    <button type="submit" name="cari">Cari</button>
                </form>

                <table class="table table-striped">
                    <tr>
                        <th width="5%">
                            No.
                        </th>

                        <th>
                            Nama Siswa
                        </th>
                        <th>
                            Jenis Kelamin
                        </th>
                        <th>
                            Asal SD
                        </th>
                        <th>
                            Nilai UN
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                        </th>
                    </tr>
                    <?php
        $no=0;
        
            $no++;
    ?>
                    <tr>
                        <td width="5%">
                            <?php echo $no; ?>
                        </td>

                        <td>
                            <span class="<?php echo $no; ?>"><?php echo $getvalues['nama']; ?></span>
                        </td>
                        <td>
                            <span class="<?php echo $no; ?>"><?php echo $getvalues['jenis_kelamin']; ?></span>
                        </td>
                        <td>
                            <span class="<?php echo $no; ?>"><?php echo $getvalues['asal_sd']; ?></span>
                        </td>
                        <td>
                            <span class="<?php echo $no; ?>"><?php echo $getvalues['nilai_un']; ?></span>
                        </td>
                        <td>
                            <span class="<?php echo $no; ?>"><?php echo $getvalues['status']; ?></span>
                        </td>


                        <td>

                            </a>&nbsp;<button class="btn btn-primary" data-toggle="modal"
                                data-target=".bs-example-modal-lg<?php echo $getvalues['id']; ?>">Detail</button>

                            <div class="modal fade bs-example-modal-lg<?php echo $getvalues['id']; ?>" tabindex="-1"
                                role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">&times;</span><span
                                                    class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Data Pendaftar</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped" width="100%">
                                                <tr>
                                                    <th width="25%">Nama</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-0-<?php echo $getvalues[0]; ?>"><?php echo $getvalues['nama']; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">NISN</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-1-<?php echo $getvalues[0]; ?>"><?php echo $getvalues['nisn']; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Asal SD</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-2-<?php echo $getvalues[0]; ?>"><?php echo $getvalues['asal_sd']; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Nilai UN</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-3-<?php echo $getvalues[0]; ?>"><?php echo $getvalues['nilai_un']; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Status</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-4-<?php echo $getvalues[0]; ?>"><?php echo $getvalues['status']; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Nomor Telepon</th>
                                                    <td width="1%"> : </td>
                                                    <td> <?php echo $getvalues['nomor_telepon']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Alamat</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-6-<?php echo $getvalues[0]; ?>"><?php echo $getvalues['alamat']; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Nama Ayah</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-6-<?php echo $getvalues[0]; ?>"><?php echo $getvalues['ayah']; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Pekerjaan Ayah</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-7-<?php echo $getvalues[0]; ?>"><?php echo $getvalues['pekerjaan_ayah']; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Nama Ibu</th>
                                                    <td width="1%"> : </td>
                                                    <td> <?php echo $getvalues['ibu']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Pekerjaan Ibu</th>
                                                    <td width="1%"> : </td>
                                                    <td> <?php echo $getvalues['pekerjaan_ibu']; ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <?php

            ?>

                </table>
                <?php
                }else {

                    foreach($getvalues as $smp):{
    ?>
                <div class='row' id='home-content'>
                    <div class='col-lg-12'>
                        <script type="text/javascript">
                        $(document).ready(function() {
                            $("body").on("click", ".edit", function(e) {
                                var clickedID = this.id.split(
                                    '-'); //Split string (Split works as PHP explode)
                                var DbNumberID = clickedID[1];
                                var kelas1 = ".data-0-" + DbNumberID;
                                var kelas2 = ".data-1-" + DbNumberID;
                                var kelas3 = ".data-2-" + DbNumberID;
                                var kelas4 = ".data-3-" + DbNumberID;
                                var kelas5 = ".data-4-" + DbNumberID;
                                var kelas6 = ".data-5-" + DbNumberID;
                                var kelas7 = ".data-6-" + DbNumberID;
                                var kelas8 = ".data-7-" + DbNumberID;
                                var kelas9 = ".data-8-" + DbNumberID;
                                var kelas10 = ".data-9-" + DbNumberID;
                                var kelas11 = ".data-10-" + DbNumberID;
                                var kelas12 = ".data-11-" + DbNumberID;
                                var kelas13 = ".data-12-" + DbNumberID;
                                var kelas14 = ".data-13-" + DbNumberID;

                                var <?php echo $smp['nama']; ?> = $(kelas2).html();
                                var <?php echo $smp['jenis_kelamin']; ?> = $(kelas3).html();
                                var <?php echo $smp['nisn']; ?> = $(kelas4).html();
                                var <?php echo $smp['alamat']; ?> = $(kelas5).html();
                                var <?php echo $smp['nomor_telepon']; ?> = $(kelas6).html();
                                var <?php echo $smp['asal_sd']; ?> = $(kelas7).html();
                                var <?php echo $smp['nilai_un']; ?> = $(kelas8).html();
                                var <?php echo $smp['ayah']; ?> = $(kelas9).html();
                                var <?php echo $smp['pekerjaan_ayah']; ?> = $(kelas10).html();
                                var <?php echo $smp['ibu']; ?> = $(kelas11).html();
                                var <?php echo $smp['pekerjaan_ibu']; ?> = $(kelas12).html();
                                var <?php echo $smp['status']; ?> = $(kelas13).html();
                                $("#id").val(id);
                                $("#nama").val(nama);
                                $("#id").attr("readonly", "true");
                                $('.edit-dialog').modal('toggle');
                            });

                        })
                        <?php
        }endforeach;

    ?>
                        </script>

                        <center>
                            <h2 style="color: red">PENGUMUMAN HASIL SISWA SMP 4 JUWANA <span class='fa fa-user'></span>
                            </h2>
                        </center>
                        <center>
                            <h5 style="color: green">*) bagi Pendaftar Yang diterima harap agar dapat menghubungi CP
                                dibawah ini
                                Untuk Keterangan lebih lanjut. <span class='fa fa-user'></span></h5>
                        </center>
                        <form method="POST">
                            <label>Cari :</label>
                            <input type="text" name="keyword">
                            <button type="submit" name="cari">Cari</button>
                        </form>

                        <table class="table table-striped">
                            <tr>
                                <th width="5%">
                                    No.
                                </th>

                                <th>
                                    Nama Siswa
                                </th>
                                <th>
                                    Jenis Kelamin
                                </th>
                                <th>
                                    Asal SD
                                </th>
                                <th>
                                    Nilai UN
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                </th>
                            </tr>
                            <?php
                    $no=0;
        
                    foreach($getvalues as $smp):{
        
            $no++;
    ?>
                            <tr>
                                <td width="5%">
                                    <?php echo $no; ?>
                                </td>

                                <td>
                                    <span class="<?php echo $no; ?>"><?php echo $smp['nama']; ?></span>
                                </td>
                                <td>
                                    <span class="<?php echo $no; ?>"><?php echo $smp['jenis_kelamin']; ?></span>
                                </td>
                                <td>
                                    <span class="<?php echo $no; ?>"><?php echo $smp['asal_sd']; ?></span>
                                </td>
                                <td>
                                    <span class="<?php echo $no; ?>"><?php echo $smp['nilai_un']; ?></span>
                                </td>
                                <td>
                                    <span class="<?php echo $no; ?>"><?php echo $smp['status']; ?></span>
                                </td>


                                <td>

                                    </a>&nbsp;<button class="btn btn-primary" data-toggle="modal"
                                        data-target=".bs-example-modal-lg<?php echo $smp['id']; ?>">Detail</button>

                                    <div class="modal fade bs-example-modal-lg<?php echo $smp['id']; ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span
                                                            aria-hidden="true">&times;</span><span
                                                            class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Data Pendaftar</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-striped" width="100%">
                                                        <tr>
                                                            <th width="25%">Nama</th>
                                                            <td width="1%"> : </td>
                                                            <td> <span
                                                                    class="data-0-<?php echo $smp[0]; ?>"><?php echo $smp['nama']; ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="25%">NISN</th>
                                                            <td width="1%"> : </td>
                                                            <td> <span
                                                                    class="data-1-<?php echo $smp[0]; ?>"><?php echo $smp['nisn']; ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="25%">Asal SD</th>
                                                            <td width="1%"> : </td>
                                                            <td> <span
                                                                    class="data-2-<?php echo $smp[0]; ?>"><?php echo $smp['asal_sd']; ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="25%">Nilai UN</th>
                                                            <td width="1%"> : </td>
                                                            <td> <span
                                                                    class="data-3-<?php echo $smp[0]; ?>"><?php echo $smp['nilai_un']; ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="25%">Status</th>
                                                            <td width="1%"> : </td>
                                                            <td> <span
                                                                    class="data-4-<?php echo $smp[0]; ?>"><?php echo $smp['status']; ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="25%">Nomor Telepon</th>
                                                            <td width="1%"> : </td>
                                                            <td> <?php echo $smp['nomor_telepon']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th width="25%">Alamat</th>
                                                            <td width="1%"> : </td>
                                                            <td> <span
                                                                    class="data-6-<?php echo $smp[0]; ?>"><?php echo $smp['alamat']; ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="25%">Nama Ayah</th>
                                                            <td width="1%"> : </td>
                                                            <td> <span
                                                                    class="data-6-<?php echo $smp[0]; ?>"><?php echo $smp['ayah']; ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="25%">Pekerjaan Ayah</th>
                                                            <td width="1%"> : </td>
                                                            <td> <span
                                                                    class="data-7-<?php echo $smp[0]; ?>"><?php echo $smp['pekerjaan_ayah']; ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="25%">Nama Ibu</th>
                                                            <td width="1%"> : </td>
                                                            <td> <?php echo $smp['ibu']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th width="25%">Pekerjaan Ibu</th>
                                                            <td width="1%"> : </td>
                                                            <td> <?php echo $smp['pekerjaan_ibu']; ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <?php

                }endforeach;

            }
            ?>

                        </table>

                    </div>

                </div>
            </div>
            <section class="news-box top-margin">

            </section>






            <footer id="footer">

                <div class="container">
                    <div class="row">
                        <div class="footerbottom">

                            <div class="col-md-12 col-sm-7">
                                <div class="footerwidget">
                                    <h4>Kontak</h4>
                                    <p>Hubungi Kami</p>
                                    <div class="contact-info">
                                        <i class="fa fa-map-marker"></i> Kelompok 5<br>
                                        <i class="fa fa-phone"></i> 082 136 841 556<br>
                                        <i class="fa fa-envelope-o"></i> mhs.dinus.ac.id
                                    </div>
                                </div><!-- end widget -->
                            </div>
                        </div>
                    </div>
                    <div class="social text-center">
                        <a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
                        <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
                        <a href="www.instagram.com/nisaatunn_"><i class="fa fa-instagram"></i></a>
                    </div>

                    <div class="clear"></div>
                    <!--CLEAR FLOATS-->
                </div>
                <div class="footer2">
                    <div class="container">
                        <div class="row">



                            <div class="col-md-12 panel">
                                <div class="panel-body">
                                    <p class="text-right">
                                        Copyright 2021 &copy; Searching Divide And Conquere
                                    </p>
                                </div>
                            </div>

                        </div>
                        <!-- /row of panels -->
                    </div>
                </div>
            </footer>

            <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
            <script src="assets/js/modernizr-latest.js"></script>
            <script type='text/javascript' src='assets/js/jquery.min.js'></script>
            <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>

            <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
            <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script>
            <script type='text/javascript' src='assets/js/camera.min.js'></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/custom.js"></script>
            <script>
            jQuery(function() {

                jQuery('#camera_wrap_4').camera({
                    transPeriod: 500,
                    time: 3000,
                    height: '600',
                    loader: 'false',
                    pagination: true,
                    thumbnails: false,
                    hover: false,
                    playPause: false,
                    navigation: false,
                    opacityOnGrid: false,
                    imagePath: 'assets/images/'
                });

            });
            </script>

</body>

</html>