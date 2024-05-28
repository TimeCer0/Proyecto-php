<?php
require 'config.php';

$id = $_GET['id'];
$libros = readJsonFile('libros.json');

$libros = array_filter($libros, function($l) use ($id) {
    return $l['_id']['$oid'] !== $id;
});

file_put_contents('libros.json', json_encode($libros));
echo json_encode(['mensaje' => 'Libro eliminado']);
?>
