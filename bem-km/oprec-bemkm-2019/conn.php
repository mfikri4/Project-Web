<?php
$servername = "localhost";
$username = "bemuniv_bemuniv";
$password = "17agustus";
$db ="bemuniv_test";

//create connections
$conn = new mysqli($servername,$username,$password,$db);

//check connection
if ($conn->connect_error) {
  die ("connection failed: " . $conn->connect_error);
}
// echo "connected succesfully";

 ?>
