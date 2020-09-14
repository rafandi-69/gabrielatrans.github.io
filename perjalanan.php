<?php
$servername = "localhost";
$database = "gabrielatrans";
$username = "root";
$password = "";

    
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}//
 
echo " ";

 

if (mysqli_query($conn, $sql)) {
      echo " ";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>