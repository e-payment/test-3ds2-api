<?php

ob_start();

// $data = json_decode(file_get_contents('php://input'), true);
// $data = file_get_contents('php://input');
// $data = json_encode($data, JSON_PRETTY_PRINT);

$data = file_get_contents('php://input');
print_r($data) . PHP_EOL;
print_r($_POST) . PHP_EOL;
print_r($_GET) . PHP_EOL;

error_log(ob_get_clean(), 4);

// header("Content-Type: application/json");
// echo '{ "status": 200 }';

header("Content-Type: text/plain");
print_r($_POST);

// EOF
