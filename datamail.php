<?php
$servername = "localhost";
$database = "u5514040_trans";
$username = "u5514040_rafandi";
$password = "karebet212";
$name = $_POST["name"];
$email= $_POST["email"];
$subject= $_POST["subject"];
$message= $_POST["message"];
    
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo " ";
 
$sql = "INSERT INTO mail (name, email, subject, message) VALUES ('$name', '$email', '$subject' , '$message')";
if (mysqli_query($conn, $sql)) {
      echo " ";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
