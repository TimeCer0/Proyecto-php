<?php
require 'config.php';

$data = json_decode(file_get_contents('php://input'), true);
$libros = readJsonFile('libros.json');

$data['_id'] = ['\$oid' => uniqid()];
$libros[] = $data;

file_put_contents('libros.json', json_encode($libros));
echo json_encode($data);
?>
