</ol>
<!-- end:breadcrumb -->

<div class='row' id='home-content'>
    <div class='col-lg-12'>
        <script type="text/javascript">
        $(document).ready(function() {

            $("body").on("click", "#tambah", function(e) {
                $('#area-loading').html('');
                $("#kdpendaftar").removeAttr('readonly')
                $('#kdpendaftar').val('');
                $('#nama').val('');
                $('#jenkel').val('');
                $('#kdagama').val('');
                $('#tpt_lahir').val('');
                $('#tgl_lahir').val('');
                $('#alamat').val('');
                $('#statusanak').val('');
                $('#nmayah').val('');
                $('#kdpendidikana').val('');
                $('#kdpekerjaana').val('');
                $('#penghasilanayah').val('');
                $('#nmibu').val('');
                $('#kdpendidikani').val('');
                $('#kdpekerjaani').val('');
                $('#nohp').val('');
                $('#kdtk').val('');
                $('#statusdaftar').val('');

                $(".edit-dialog").modal('toggle');
            })
            $("body").on("click", ".hapus", function(e) {
                var clickedID = this.id.split('-'); //Split string (Split works as PHP explode)
                var DbNumberID = ".data-0-" + clickedID[1];
                $(".kdpendaftar").html($(DbNumberID).html());
                $('.dialog-hapus').modal('toggle');
                $("#konf").attr("href", "hapusdaftar.php?kdpendaftar=" + $(DbNumberID).html());
            });

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
                var status = $(kelas18).html();
                $("#id").val(id);
                $("#nama").val(nama);
                $("#id").attr("readonly", "true");
                $('.edit-dialog').modal('toggle');
            });

        })
        </script>

        <center>
            <h3 style="color: red">Hapus Data Pendaftaran<span class='fa fa-user'></span></h3>
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
                    Status Data
                </th>
                <th>
                    Hapus Data
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
                    <span class="<?php echo $no; ?>"><?php echo $r['status']; ?></span>
                </td>
                <td>
                    <a class="btn-sm btn-danger" href="hapus.php?id=<?php echo $r['id'];  ?>">Hapus</a>
                </td>


                <td>

                    </a>&nbsp;<button class="btn btn-success" data-toggle="modal"
                        data-target=".bs-example-modal-lg<?php echo $r[0]; ?>">Detail</button>
                </td>
                <td>
                    <div class="modal fade bs-example-modal-lg<?php echo $r[0]; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span
                                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Data Pendaftar</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped" width="100%">
                                        <tr>
                                            <th width="25%">Nama</th>
                                            <td width="1%"> : </td>
                                            <td> <span class="data-0-<?php echo $r[0]; ?>"><?php echo $r[1]; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="25%">NIM</th>
                                            <td width="1%"> : </td>
                                            <td> <span class="data-1-<?php echo $r[0]; ?>"><?php echo $r[2]; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="25%">Tempat Tanggal Lahir</th>
                                            <td width="1%"> : </td>
                                            <td> <span class="data-2-<?php echo $r[0]; ?>"><?php echo $r[3]; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="25%">Jenis Kelamin</th>
                                            <td width="1%"> : </td>
                                            <td> <span class="data-3-<?php echo $r[0]; ?>"><?php echo $r[4]; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="25%">Alamat</th>
                                            <td width="1%"> : </td>
                                            <td> <span class="data-4-<?php echo $r[0]; ?>"><?php echo $r[5]; ?></span>
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
                                            <td> <span class="data-6-<?php echo $r[0]; ?>"><?php echo $r[7]; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="25%">Nama Ayah</th>
                                            <td width="1%"> : </td>
                                            <td> <span class="data-6-<?php echo $r[0]; ?>"><?php echo $r[8]; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="25%">Nama IBU</th>
                                            <td width="1%"> : </td>
                                            <td> <span class="data-7-<?php echo $r[0]; ?>"><?php echo $r[9]; ?></span>
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
                                            <th width="25%">Status Data</th>
                                            <td width="1%"> : </td>
                                            <td> <?php echo $r['status']; ?></td>
                                        </tr>



                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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