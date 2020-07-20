<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

$result = file_get_contents(__DIR__ . '/projectCards.json');

echo ($result);
?>