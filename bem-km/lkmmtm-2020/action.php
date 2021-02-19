<?php
require_once "conn.php";

if(isset($_POST['submit'])){
  session_start();
  
  $id = mysqli_real_escape_string($conn,$_POST["id"]);
  $nama = mysqli_real_escape_string($conn,$_POST["nama"]);
  $nim = mysqli_real_escape_string($conn,$_POST["nim"]);
  $jenis_kelamin = mysqli_real_escape_string($conn,$_POST["jenis_kelamin"]);
  $fakultas = mysqli_real_escape_string($conn,$_POST["fakultas"]);
  $progdi = mysqli_real_escape_string($conn,$_POST["progdi"]);
  $nomer_wa = mysqli_real_escape_string($conn,$_POST["nomer_wa"]);
  $instagram = mysqli_real_escape_string($conn,$_POST["instagram"]);
  $asal = mysqli_real_escape_string($conn,$_POST["asal"]);

  $id = strtoupper($id);
  $nama = strtoupper($nama);
  $nim = strtoupper($nim);
  $jenis_kelamin = strtoupper($jenis_kelamin);
  $fakultas = strtoupper($fakultas);
  $progdi = strtoupper($progdi);
  $nomer_wa = strtoupper($nomer_wa);
  $instagram = strtoupper($instagram);
  $asal = strtoupper($asal);
  
  
  $sql = "INSERT INTO lkmm2020 (id, nama, nim ,jenis_kelamin, fakultas, progdi, nomer_wa ,instagram,asal)
  VALUES ('$id','$nama','$nim','$jenis_kelamin','$fakultas','$progdi','$nomer_wa','$instagram','$asal')";
  $query = mysqli_query($conn,$sql);

  if($query){
    $_SESSION["nama"] = $nama;
    $_SESSION["nim"] = $nim;
    $_SESSION["fakultas"] = $fakultas;
	  $_SESSION["progdi"] = $progdi;
	  $_SESSION["nomer_wa"] = $nomer_wa;
    $_SESSION["asal"] = $asal;

    $_SESSION["start"] = true;   
    header('Location: sukses');
    // echo "<script>alert('Transaksi Sukses.Data Sudah ada dalam Laporan');window.location='sukses/index.php'</script>";

  }else{
    echo "<script>alert('Pendaftaran Gagal , Silahkan Hubungi Panitia');window.location='index.php'</script>";
  }
}else{
  echo "<script>alert('No Direct Access');window.location='index.html'</script>";

}

///header("Location: sukses.php");

 ?>
