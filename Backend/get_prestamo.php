<?php
require 'config.php';

$id = $_GET['id'];
$prestamos = readJsonFile('prestamos.json');
$prestamo = null;

foreach ($prestamos as $p) {
    if ($p['_id']['$oid'] == $id) {
        $prestamo = $p;
        break;
    }
}

echo json_encode($prestamo);
?>
