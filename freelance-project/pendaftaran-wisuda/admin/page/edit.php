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
        <?php
           if(!isset($_GET['id']))
           $id = $_GER['$id'];
           $exec= mysqli_query($koneksi,"SELECT * FROM wisuda WHERE id='$id'");

               
           $no=0;
           while($r=mysqli_fetch_array($exec))
           
           {
               $no++;
       ?>
        <center>
            <h3 style="color: red">Edit Data Pendaftar<span class='fa fa-user'></span></h3>
        </center>
        <form method="POST">
            <table class="table table">
                <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                <tr>
                    <th width="25%">Nama</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $r[1]; ?>">
                    </td>
                </tr>
                <tr>
                    <th width="25%">NIM</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" id="nim" name="nim" class="form-control" value="<?php echo $r[2]; ?>" n>
                    </td>
                </tr>
                <tr>
                    <th width="25%">Tempat Tanggal Lahir</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" id="ttl" name="ttl" class="form-control" value="<?php echo $r[3]; ?>"></td>
                </tr>
                <tr>
                    <th width="25%">Jenis Kelamin</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control"
                            value="<?php echo $r[4]; ?>"></td>
                </tr>
                <tr>
                    <th width="25%">Alamat</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $r[5]; ?>">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Nomor Telepon</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" id="telepon" name="telepon" class="form-control"
                            value="<?php echo $r[6]; ?>"></td>
                </tr>
                <tr>
                    <th width="25%">Email</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" id="email" name="email" class="form-control" value="<?php echo $r[7]; ?>">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Nama Ayah</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" id="ayah" name="ayah" class="form-control" value="<?php echo $r[8]; ?>">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Nama IBU</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" id="ibu" name="ibu" class="form-control" value="<?php echo $r[9]; ?>"></td>
                </tr>
                <tr>
                    <th width="25%">Dosen pembimbing</th>
                    <td width="1%"> : </td>
                    <td><input type="text" id="dosbing" name="dosbing" class="form-control"
                            value="<?php echo $r['dosbing']; ?>">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Judul Skripsi</th>
                    <td width="1%"> : </td>
                    <td><input type="text" id="judul_skripsi" name="judul_skripsi" class="form-control"
                            value="<?php echo $r['judul_skripsi']; ?>">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Fakultas</th>
                    <td width="1%"> : </td>
                    <td><input type="text" id="fakultas" name="fakultas" class="form-control"
                            value="<?php echo $r['fakultas']; ?>">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Jurusan</th>
                    <td width="1%"> : </td>
                    <td><input type="text" id="jurusan" name="jurusan" class="form-control"
                            value="<?php echo $r['jurusan']; ?>">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Lama Masa Studi</th>
                    <td width="1%"> : </td>
                    <td><input type="text" id="lama_studi" name="lama_studi" class="form-control"
                            value="<?php echo $r['lama_studi']; ?>"></td>
                </tr>
                <tr>
                    <th width="25%">Tanggal Lulus</th>
                    <td width="1%"> : </td>
                    <td><input type="text" id="tanggal_lulus" name="tanggal_lulus" class="form-control"
                            value="<?php echo $r['tanggal_lulus']; ?>"></td>
                </tr>
                <tr>
                    <th width="25%">IPK</th>
                    <td width="1%"> : </td>
                    <td><input type="text" id="ipk" name="ipk" class="form-control" value="<?php echo $r['ipk']; ?>">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Status Data</th>
                    <td width="1%"> : </td>
                    <td><input type="text" id="status" name="status" class="form-control"
                            value="<?php echo $r['status']; ?>"></td>
                </tr>


                <td><input type="submit" class="btn btn-danger" value="SIMPAN"></td>


                </td>
                </tr>
                <?php
            }
        ?>

            </table>

        </form>

    </div>

</div>