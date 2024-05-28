<?php
require 'config.php';

$id = $_GET['id'];
$data = json_decode(file_get_contents('php://input'), true);
$usuarios = readJsonFile('usuarios.json');

foreach ($usuarios as &$u) {
    if ($u['_id']['$oid'] == $id) {
        $u = array_merge($u, $data);
        break;
    }
}

file_put_contents('usuarios.json', json_encode($usuarios));
echo json_encode(['mensaje' => 'Usuario actualizado']);
?>
