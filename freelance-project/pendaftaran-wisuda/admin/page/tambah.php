</ol>
<!-- end:breadcrumb -->

<div class='row' id='home-content'>
    <div class='col-lg-12'>
        <center>
            <h3 style="color: red">Tambah Data Pendaftar<span class='fa fa-user'></span></h3>
        </center>
        <script type="text/javascript">
        $(document).ready(function() {

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
           if(!isset($_GET['data']))
           $exec= mysqli_query($koneksi,"select * from wisuda ");
           else{
               $data=trim(addslashes($_GET['data']));
               $exec= mysqli_query($koneksi,"select * from wisuda");
           }

           
           {
       ?>

        <form method="post" action="acttambah.php">
            <table class="table table-striped">
                <tr>
                    <th width="25%">Nama</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" name="nama" class="form-control" value="" placeholder="Nama Kamu"></td>
                </tr>
                <tr>
                    <th width="25%">NIM</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" name="nim" class="form-control" value="" placeholder="A119999221"></td>
                </tr>
                <tr>
                    <th width="25%">Tempat Tanggal Lahir</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" name="ttl" class="form-control" value="" placeholder="Pati, 5 Mei 2000">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Jenis Kelamin</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" name="jenis_kelamin" class="form-control" value="" placeholder="Laki Laki">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Alamat</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" name="alamat" class="form-control" value="" placeholder="Jalan Merak Mati">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Nomor Telepon</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" name="telepon" class="form-control" value="" placeholder="082 222 333 444">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Email</th>
                    <td width="1%"> : </td>
                    <td> <input type="email" name="email" class="form-control" placeholder="Teknik@gmail.com" value="">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Nama Ayah</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" name="ayah" class="form-control" value="" placeholder="Nama Ayah"></td>
                </tr>
                <tr>
                    <th width="25%">Nama IBU</th>
                    <td width="1%"> : </td>
                    <td> <input type="text" name="ibu" class="form-control" placeholder="Nama Ibu" value=""></td>
                </tr>
                <tr>
                    <th width="25%">Dosen pembimbing</th>
                    <td width="1%"> : </td>
                    <td><input type="text" name="dosbing" class="form-control" placeholder="Nama Dosen Pembimbing"
                            value=""></td>
                </tr>
                <tr>
                    <th width="25%">Judul Skripsi</th>
                    <td width="1%"> : </td>
                    <td><input type="text" name="judul_skripsi" class="form-control" placeholder="Jika Aku Menjadi Dia"
                            value=""></td>
                </tr>
                <tr>
                    <th width="25%">Fakultas</th>
                    <td width="1%"> : </td>
                    <td><input type="text" name="fakultas" class="form-control" placeholder="Fakultas Teknik Industri"
                            value=""></td>
                </tr>
                <tr>
                    <th width="25%">Jurusan</th>
                    <td width="1%"> : </td>
                    <td><input type="text" name="jurusan" class="form-control" placeholder="Teknik Industri" value="">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Lama Masa Studi</th>
                    <td width="1%"> : </td>
                    <td><input type="text" name="lama_studi" class="form-control" placeholder="8 Semester" value="">
                    </td>
                </tr>
                <tr>
                    <th width="25%">Tanggal Lulus</th>
                    <td width="1%"> : </td>
                    <td><input type="text" name="tanggal_lulus" class="form-control" value=""
                            placeholder="20 Januari 2022"></td>
                </tr>
                <tr>
                    <th width="25%">IPK</th>
                    <td width="1%"> : </td>
                    <td><input type="text" name="ipk" class="form-control" value="" placeholder="3.69"></td>
                </tr>
                <input type="hidden" name="status" value="Belum VALIDASI">

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