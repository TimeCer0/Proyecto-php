<?php
require 'config.php';

$id = $_GET['id'];
$usuarios = readJsonFile('usuarios.json');
$usuario = null;

foreach ($usuarios as $u) {
    if ($u['_id']['$oid'] == $id) {
        $usuario = $u;
        break;
    }
}

echo json_encode($usuario);
?>
