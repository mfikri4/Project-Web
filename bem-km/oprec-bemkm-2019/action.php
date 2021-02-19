<?php
require_once "conn.php";

if(isset($_POST['submit'])){
  session_start();
  $nama = mysqli_real_escape_string($conn,$_POST["nama"]);
  $nim = mysqli_real_escape_string($conn,$_POST["nim"]);
  $alamat = mysqli_real_escape_string($conn,$_POST["alamat"]);
  $ttl = mysqli_real_escape_string($conn,$_POST["ttl"]);
  $fakultas = mysqli_real_escape_string($conn,$_POST["fakultas"]);
  $progdi = mysqli_real_escape_string($conn,$_POST["progdi"]);
  $email = mysqli_real_escape_string($conn,$_POST["email"]);
  $nohp = mysqli_real_escape_string($conn,$_POST["nohp"]);
  $motivasi = mysqli_real_escape_string($conn,$_POST["motivasi"]);
  $kementerian1 = mysqli_real_escape_string($conn,$_POST["kementerian1"]);
  $alasan1 = mysqli_real_escape_string($conn,$_POST["alasan1"]);  
  $kementerian2 = mysqli_real_escape_string($conn,$_POST["kementerian2"]);
  $alasan2 = mysqli_real_escape_string($conn,$_POST["alasan2"]);

  $nama = strtoupper($nama);
  $nim = strtoupper($nim);
  $alamat = strtoupper($alamat);
  $ttl = strtoupper($ttl);
  $fakultas = strtoupper($fakultas);
  $progdi = strtoupper($progdi);
  $email = strtoupper($email);
  $nohp = strtoupper($nohp);
  $motivasi = strtoupper($motivasi);
  $kementerian1 = strtoupper($kementerian1);
  $alasan1 = strtoupper($alasan1);
  $kementerian2 = strtoupper($kementerian2);
  $alasan2 = strtoupper($alasan2);
  
  
  $sql = "INSERT INTO oprec (nama, nim ,alamat, ttl, fakultas, progdi, email,nohp , motivasi, kementerian1,alasan1, kementerian2,alasan2)
  VALUES ('$nama','$nim','$alamat','$ttl','$fakultas','$progdi','$email','$nohp','$motivasi','$kementerian1','$alasan1','$kementerian2','$alasan2')";
  $query = mysqli_query($conn,$sql);

  if($query){
    $_SESSION["nama"] = $nama;
    $_SESSION["nim"] = $nim;
    $_SESSION["alamat"] = $alamat;
    $_SESSION["ttl"] = $ttl;
    $_SESSION["fakultas"] = $fakultas;    
    $_SESSION["progdi"] = $progdi;
    $_SESSION["email"] = $email;
    $_SESSION["nohp"] = $nohp;
    $_SESSION["motivasi"] = $motivasi;
    $_SESSION["kementerian1"] = $kementerian1;
    $_SESSION["alasan1"] = $alasan1;
    $_SESSION["kementerian2"] = $kementerian2;
    $_SESSION["alasan2"] = $alasan2;

    $_SESSION["start"] = true;   
    header('Location: sukses');
    // echo "<script>alert('Transaksi Sukses.Data Sudah ada dalam Laporan');window.location='sukses.php'</script>";

  }else{
    echo "<script>alert('Pendaftaran Gagal , Silahkan Hubungi Panitia');window.location='oprec-bemkm'</script>";
  }
}else{
  echo "<script>alert('No Direct Access');window.location='index.html'</script>";

}

///header("Location: sukses.php");

 ?>
