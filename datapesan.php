<?php
include"maturnuwun.php";
$servername = "localhost";
$database = "u5514040_trans";
$username = "u5514040_rafandi";
$password = "karebet212";
$mobil=$_POST["mobil"];
$pergi=$_POST["pergi"];
$waktu=$_POST["waktu"];
$pulang=$_POST["pulang"];
$name=$_POST["name"];
$address=$_POST["address"];
$tujuan=$_POST["tujuan"];
$phone=$_POST["phone"];
    
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}//
 
echo " ";

 
$sql = "INSERT INTO pesan (mobil,pergi,waktu,pulang,name,address,tujuan,phone) VALUES ('$mobil','$pergi','$waktu','$pulang','$name','$address','$tujuan','$phone')";
if (mysqli_query($conn, $sql)) {
      echo " ";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>