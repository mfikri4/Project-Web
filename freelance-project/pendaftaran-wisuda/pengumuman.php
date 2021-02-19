<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>WEBSITE PENDAFTARAN WISUDA</title>
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
                    <marquee> WEBSITE PENDAFTARAN WISUDA </marquee>
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right mainNav">
                    <li class="c1 active"><a href="./"><span class="fa fa-home"></span> Home</a></li>
                    <li class="c2"><a href="pengumuman.php"><span class="fa fa-users"></span> Pengumuman</a></li>
                    <li class="c3"><a href="pendaftaran.php"><span class="fa fa-pencil"></span> Pendaftaran</a></li>


                    <li class="c7"><a href="admin"><span class="fa fa-lock"></span> Login</a></li>

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
                <h1 class="animated flipInY delay1">Pendaftaran Online</h1> <br />
                <p>Mari Lulus Bareng !</p>
            </div>

            <div class="fluid_container">
                <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                    <div data-thumb="assets/images/wisuda.jpg" data-src="assets/images/wisuda.jpg">
                        <h2>We develop.</h2>
                    </div>
                    <div data-thumb="assets/images/wisuda2.jpg" data-src="assets/images/wisuda2.jpg">
                    </div>
                    <div data-thumb="assets/images/wisuda3.jpg" data-src="assets/images/wisuda3.jpg">
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

        <div class='row' id='home-content'>
            <div class='col-lg-12'>
                <script type="text/javascript">
                $(document).ready(function() {



                    $("body").on("click", ".edit", function(e) {
                        var clickedID = this.id.split('-'); //Split string (Split works as PHP explode)
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
                        var kelas15 = ".data-14-" + DbNumberID;
                        var kelas16 = ".data-15-" + DbNumberID;
                        var kelas17 = ".data-16-" + DbNumberID;
                        var kelas18 = ".data-17-" + DbNumberID;

                        var id = $(kelas1).html();
                        var nama = $(kelas2).html();
                        var nim = $(kelas3).html();
                        var ttl = $(kelas4).html();
                        var jenis_kelamin = $(kelas5).html();
                        var alamat = $(kelas6).html();
                        var telpon = $(kelas7).html();
                        var email = $(kelas8).html();
                        var ayah = $(kelas9).html();
                        var ibu = $(kelas10).html();
                        var fakultas = $(kelas11).html();
                        var jurusan = $(kelas12).html();
                        var ipk = $(kelas13).html();
                        var tanggal_lulus = $(kelas14).html();
                        var judul_skripsi = $(kelas15).html();
                        var lama_studi = $(kelas16).html();
                        var dosbing = $(kelas17).html();
                        var statusdaftar = $(kelas18).html();
                        $("#id").val(id);
                        $("#nama").val(nama);
                        $("#id").attr("readonly", "true");
                        $('.edit-dialog').modal('toggle');
                    });

                })
                </script>

                <center>
                    <h2 style="color: red">PENGUMUMAN HASIL PENDAFTARAN WISUDA <span class='fa fa-user'></span></h2>
                </center>
                <center>
                    <h5 style="color: green">*) bagi Pendaftar Yang ditolak agar dapat menghubungi CP dibawah ini. <span
                            class='fa fa-user'></span></h5>
                </center>
                <table class="table table-striped">
                    <tr>
                        <th width="5%">
                            No.
                        </th>

                        <th>
                            Nama Mahasiswa
                        </th>
                        <th>
                            Jenis kelamin
                        </th>
                        <th>
                            Jurusan
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                        </th>
                    </tr>
                    <?php
        if(!isset($_GET['data']))
        $exec= mysqli_query($koneksi,"select * from wisuda ");
        else{
            $data=trim(addslashes($_GET['data']));
            $exec= mysqli_query($koneksi,"select * from wisuda");
        }
            
        $no=0;
        while($r=mysqli_fetch_array($exec))
        
        {
            $no++;

    ?>
                    <tr>
                        <td width="5%">
                            <?php echo $no; ?>
                        </td>

                        <td>
                            <span class="<?php echo $no; ?>"><?php echo $r['nama']; ?></span>
                        </td>
                        <td>
                            <span class="<?php echo $no; ?>"><?php echo $r['jenis_kelamin']; ?></span>
                        </td>
                        <td>
                            <span class="<?php echo $no; ?>"><?php echo $r['jurusan']; ?></span>
                        </td>
                        <td>
                            <span class="<?php echo $no; ?>"><?php echo $r['status']; ?></span>
                        </td>


                        <td>

                            </a>&nbsp;<button class="btn btn-primary" data-toggle="modal"
                                data-target=".bs-example-modal-lg<?php echo $r[0]; ?>">Detail</button>

                            <div class="modal fade bs-example-modal-lg<?php echo $r[0]; ?>" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                                            class="data-0-<?php echo $r[0]; ?>"><?php echo $r[1]; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">NIM</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-1-<?php echo $r[0]; ?>"><?php echo $r[2]; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Tempat Tanggal Lahir</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-2-<?php echo $r[0]; ?>"><?php echo $r[3]; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Jenis Kelamin</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-3-<?php echo $r[0]; ?>"><?php echo $r[4]; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Alamat</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-4-<?php echo $r[0]; ?>"><?php echo $r[5]; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Nomor Telepon</th>
                                                    <td width="1%"> : </td>
                                                    <td> <?php echo $r[6]; ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Email</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-6-<?php echo $r[0]; ?>"><?php echo $r[7]; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Nama Ayah</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-6-<?php echo $r[0]; ?>"><?php echo $r[8]; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Nama IBU</th>
                                                    <td width="1%"> : </td>
                                                    <td> <span
                                                            class="data-7-<?php echo $r[0]; ?>"><?php echo $r[9]; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Dosen pembimbing</th>
                                                    <td width="1%"> : </td>
                                                    <td> <?php echo $r['dosbing']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Judul Skripsi</th>
                                                    <td width="1%"> : </td>
                                                    <td> <?php echo $r['judul_skripsi']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Fakultas</th>
                                                    <td width="1%"> : </td>
                                                    <td> Rp. <?php echo $r['fakultas']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Jurusan</th>
                                                    <td width="1%"> : </td>
                                                    <td> <?php echo $r['jurusan']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Lama Masa Studi</th>
                                                    <td width="1%"> : </td>
                                                    <td> <?php echo $r['lama_studi']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Tanggal Lulus</th>
                                                    <td width="1%"> : </td>
                                                    <td> <?php echo $r['tanggal_lulus']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">IPK</th>
                                                    <td width="1%"> : </td>
                                                    <td> <?php echo $r['ipk']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Status Pendaftaran</th>
                                                    <td width="1%"> : </td>
                                                    <td> <?php echo $r['status']; ?></td>
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
                                <i class="fa fa-map-marker"></i> Nisa Atun Nikmah<br>
                                <i class="fa fa-phone"></i> 085 866 589 633<br>
                                <i class="fa fa-envelope-o"></i> nisaatunikmah@std.unissula.ac.id
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
                                Copyright 2020 &copy; Nisa Atun Nikmah
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