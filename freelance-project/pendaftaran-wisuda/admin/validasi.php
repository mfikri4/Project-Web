<?php
include "../koneksi.php";
$id= $_GET ['id'];
$status = $_POST['status'];
$sql="UPDATE wisuda SET status='Validasi' WHERE id='$id'";
	mysqli_query($koneksi,$sql)
	or die ("Gagal Perintah SQL".mysql_error());
	$_SESSION['pesan'] = 'Data berhasil di tambahkan';
		header("location:./?p=pendaftar&id=1");
			

?>