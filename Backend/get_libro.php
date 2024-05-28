<?php
require 'config.php';

$id = $_GET['id'];
$libros = readJsonFile('libros.json');
$libro = null;

foreach ($libros as $l) {
    if ($l['_id']['$oid'] == $id) {
        $libro = $l;
        break;
    }
}

echo json_encode($libro);
?>
