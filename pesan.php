<?php
include "datapesan.php";
$to='amidsasongko@gmail.com';
$name = 'PESANAN ';
$email= 'admin@gabrielatrans.com';
$subject= 'PEMESANAN';
$mobil=$_POST["mobil"];
$pergi=$_POST["pergi"];
$waktu=$_POST["waktu"];
$pulang=$_POST["pulang"];
$name=$_POST["name"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$tujuan=$_POST["tujuan"];
    
     $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    $message ='<table style="width:100%">
        <tr><td>Nama: '.$name.'</td></tr>
        <tr><td>Alamat: '.$address.'</td></tr>
        <tr><td>Tujuan:'.$tujuan.'</td></tr>
        <tr><td>telp/wa: '.$phone.'</td></tr>
        <tr><td>Mobil :'.$mobil.'</td></tr>
        <tr><td>Pergi: '.$pergi.'</td></tr>
        <tr><td>Jam: '.$waktu.'</td></tr>
        <tr><td>Pulang: '.$pulang.'</td></tr>

    </table>';
    if (@mail($to, $email, $message, $headers))
    {
        include'matursuwun.php';
    }else{
        include'sepurane.php';
    }
?>
