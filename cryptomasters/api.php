<?php
include 'classes/converter.php';

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: <origin> | *");

$code = $_GET['code'] ?? "BTC";
$converter = new CryptoConverter($code, 1);
$dollar = $converter->convert(1);
echo "{\"price\": $dollar}";
