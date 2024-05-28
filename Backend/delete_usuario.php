<?php
require 'config.php';

$id = $_GET['id'];
$usuarios = readJsonFile('usuarios.json');

$usuarios = array_filter($usuarios, function($u) use ($id) {
    return $u['_id']['$oid'] !== $id;
});

file_put_contents('usuarios.json', json_encode($usuarios));
echo json_encode(['mensaje' => 'Usuario eliminado']);
?>
