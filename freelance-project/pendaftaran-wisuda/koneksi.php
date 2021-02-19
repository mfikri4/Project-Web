<?php
// konfigurasi database
$host		=	"localhost";
$user		=	"root";
$password	=	"";
$database	=	"ta_wisuda";
// peritah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
if (!$koneksi) {
	die ('Gagal terhubung dengan Mysql: '. mysqli_connect_error());
}
?>