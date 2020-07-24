<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

// Takes raw data from the request
$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json);



$to = "mihainuica@gmail.com";
// $to = "mihainuica@gmail.com";
// $to = "salonmarigold-ro.20150623.gappssmtp.com";
// $to = "salonmarigold@salonmarigold.ro";
$subject = filter_var($data->subject, FILTER_SANITIZE_STRING);
$txt = "Nume: ". strip_tags($data->name) . "\r\n" . "\r\n" . "Email: " . filter_var($data->email, FILTER_SANITIZE_EMAIL) . "\r\n" . "\r\n" . strip_tags($data->message);
$headers = "From: " . filter_var($data->email, FILTER_SANITIZE_EMAIL) . "\r\n" . "\r\n"; 



$response = json_encode($data);

echo($response);

mail($to,$subject,$txt,$headers);
?>