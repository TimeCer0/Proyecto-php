<?php
require 'config.php';

$data = json_decode(file_get_contents('php://input'), true);
$prestamos = readJsonFile('prestamos.json');

$data['_id'] = ['\$oid' => uniqid()];
$prestamos[] = $data;

file_put_contents('prestamos.json', json_encode($prestamos));
echo json_encode($data);
?>
