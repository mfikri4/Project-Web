<?php

include "../koneksi.php";
if(isset($_POST['nama'])){

$nama=addslashes($_POST['nama']);
$nim=addslashes($_POST['nim']);
$ttl=addslashes($_POST['ttl']);
$jenis_kelamin=addslashes($_POST['jenis_kelamin']);
$alamat=addslashes($_POST['alamat']);
$telepon=addslashes($_POST['telepon']);
$email=addslashes($_POST['email']);
$ayah=addslashes($_POST['ayah']);
$ibu=addslashes($_POST['ibu']);
$fakultas=addslashes($_POST['fakultas']);
$jurusan=addslashes($_POST['jurusan']);
$ipk=addslashes($_POST['ipk']);
$tanggal_lulus=addslashes($_POST['tanggal_lulus']);
$judul_skripsi=addslashes($_POST['judul_skripsi']);
$lama_studi=addslashes($_POST['lama_studi']);
$dosbing=addslashes($_POST['dosbing']);
$status=addslashes($_POST['status']);
mysqli_query($koneksi,"INSERT INTO wisuda VALUES('','$nama','$nim','$ttl','$jenis_kelamin','$alamat','$telepon',
'$email','$ayah','$ibu','$fakultas','$jurusan','$ipk','$tanggal_lulus','$judul_skripsi','$lama_studi','$dosbing','$status')");

header("location:./index.php??pesan=add");

}
?>