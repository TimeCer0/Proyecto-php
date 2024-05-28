<?php
require 'config.php';

$id = $_GET['id'];
$data = json_decode(file_get_contents('php://input'), true);
$prestamos = readJsonFile('prestamos.json');

foreach ($prestamos as &$p) {
    if ($p['_id']['$oid'] == $id) {
        $p = array_merge($p, $data);
        break;
    }
}

file_put_contents('prestamos.json', json_encode($prestamos));
echo json_encode(['mensaje' => 'Préstamo actualizado']);
?>
