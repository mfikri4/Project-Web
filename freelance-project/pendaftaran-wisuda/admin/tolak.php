<?php
include "../koneksi.php";
$id= $_GET ['id'];
$status = $_POST['status'];

	mysqli_query($koneksi,"UPDATE wisuda SET status='Ditolak' WHERE id='$id'");

		header("location:./?p=pendaftar&id=1");

?>