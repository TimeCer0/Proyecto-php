<?php
require 'config.php';

$data = json_decode(file_get_contents('php://input'), true);
$autores = readJsonFile('autores.json');

$data['_id'] = ['\$oid' => uniqid()];
$autores[] = $data;

file_put_contents('autores.json', json_encode($autores));
echo json_encode($data);
?>
