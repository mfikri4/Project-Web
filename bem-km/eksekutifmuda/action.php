<?php
require_once "conn.php";

if(isset($_POST['submit'])){
  session_start();
  $nama = mysqli_real_escape_string($conn,$_POST["nama"]);
  $nim = mysqli_real_escape_string($conn,$_POST["nim"]);
  $kelamin = mysqli_real_escape_string($conn,$_POST["kelamin"]);
  $alamat = mysqli_real_escape_string($conn,$_POST["alamat"]);
  $ttl = mysqli_real_escape_string($conn,$_POST["ttl"]);
  $fakultas = mysqli_real_escape_string($conn,$_POST["fakultas"]);
  $progdi = mysqli_real_escape_string($conn,$_POST["progdi"]);
  $email = mysqli_real_escape_string($conn,$_POST["email"]);
  $nohp = mysqli_real_escape_string($conn,$_POST["nohp"]);
  $ig = mysqli_real_escape_string($conn,$_POST["ig"]);
  $motivasi = mysqli_real_escape_string($conn,$_POST["motivasi"]);
  $kementerian1 = mysqli_real_escape_string($conn,$_POST["kementerian1"]);
  $alasan1 = mysqli_real_escape_string($conn,$_POST["alasan1"]);  
  $kementerian2 = mysqli_real_escape_string($conn,$_POST["kementerian2"]);
  $alasan2 = mysqli_real_escape_string($conn,$_POST["alasan2"]);

  $nama = strtoupper($nama);
  $nim = strtoupper($nim);
  $kelamin = strtoupper($kelamin);
  $alamat = strtoupper($alamat);
  $ttl = strtoupper($ttl);
  $fakultas = strtoupper($fakultas);
  $progdi = strtoupper($progdi);
  $email = strtoupper($email);
  $nohp = strtoupper($nohp);
  $ig = strtoupper($ig);
  $motivasi = strtoupper($motivasi);
  $kementerian1 = strtoupper($kementerian1);
  $alasan1 = strtoupper($alasan1);
  $kementerian2 = strtoupper($kementerian2);
  $alasan2 = strtoupper($alasan2);
  
  
  $sql = "INSERT INTO eksekutimuda (nama, nim ,kelamin,alamat, ttl, fakultas, progdi, email,nohp ,ig , motivasi, kementerian1,alasan1, kementerian2,alasan2)
  VALUES ('$nama','$nim','$kelamin','$alamat','$ttl','$fakultas','$progdi','$email','$nohp','$ig','$motivasi','$kementerian1','$alasan1','$kementerian2','$alasan2')";
  $query = mysqli_query($conn,$sql);

  if($query){
    $_SESSION["nama"] = $nama;
    $_SESSION["nim"] = $nim;
	$_SESSION["progdi"] = $progdi;

    $_SESSION["start"] = true;   
    header('Location: sukses');
    // echo "<script>alert('Transaksi Sukses.Data Sudah ada dalam Laporan');window.location='sukses.php'</script>";

  }else{
    echo "<script>alert('Pendaftaran Gagal , Silahkan Hubungi Panitia');window.location='index.php'</script>";
  }
}else{
  echo "<script>alert('No Direct Access');window.location='index.html'</script>";

}

///header("Location: sukses.php");

 ?>
