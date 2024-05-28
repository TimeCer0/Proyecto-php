<?php
require 'config.php';

$data = json_decode(file_get_contents('php://input'), true);
$usuarios = readJsonFile('usuarios.json');

$data['_id'] = ['\$oid' => uniqid()];
$usuarios[] = $data;

file_put_contents('usuarios.json', json_encode($usuarios));
echo json_encode($data);
?>
