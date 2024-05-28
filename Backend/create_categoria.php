<?php
require 'config.php';

$data = json_decode(file_get_contents('php://input'), true);
$categorias = readJsonFile('categorias.json');

$data['_id'] = ['\$oid' => uniqid()];
$categorias[] = $data;

file_put_contents('categorias.json', json_encode($categorias));
echo json_encode($data);
?>
