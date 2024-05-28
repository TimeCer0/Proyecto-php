<?php
require 'config.php';

$id = $_GET['id'];
$prestamos = readJsonFile('prestamos.json');

$prestamos = array_filter($prestamos, function($p) use ($id) {
    return $p['_id']['$oid'] !== $id;
});

file_put_contents('prestamos.json', json_encode($prestamos));
echo json_encode(['mensaje' => 'Préstamo eliminado']);
?>
