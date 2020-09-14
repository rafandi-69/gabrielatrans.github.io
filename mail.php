<?php
include "datamail.php";
    $to = 'amidsasongko@gmail.com';
    $mail= 'admin@gabrielatrans.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subject= $_POST["subject"];
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $mail . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>Nama :'.$name.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>subjek: '.$subject.'</td></tr>
        <tr><td>pesan: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'pesan terkirim.';
    }else{
        echo 'gagal';
    }


?>
