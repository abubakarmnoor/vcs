<?php 
//    ini_set( 'display_errors', 1 );
//    error_reporting( E_ALL );
//    $from = "ubuntu@vps-89b6d794.vps.ovh.ca";
//    $to = "abubakarmnoor1@gmail.com";
//    $subject = "PHP Mail Test script";
//    $message = "This is a test to check the PHP Mail functionality";
//    $headers = "From:" . $from;
//    mail($to,$subject,$message, $headers);
//    echo "Test email sent";

$headers = 'From: <ubuntu@vps-89b6d794.vps.ovh.ca>' . "\r\n" .
'Reply-To: <ubuntu@vps-89b6d794.vps.ovh.ca>';

mail('<localpro101@gmail.com>', 'update status send email', 'the message', $headers);
echo "Test email sent";
?>
