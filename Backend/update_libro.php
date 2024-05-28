<?php
require 'config.php';

$id = $_GET['id'];
$data = json_decode(file_get_contents('php://input'), true);
$libros = readJsonFile('libros.json');

foreach ($libros as &$l) {
    if ($l['_id']['$oid'] == $id) {
        $l = array_merge($l, $data);
        break;
    }
}

file_put_contents('libros.json', json_encode($libros));
echo json_encode(['mensaje' => 'Libro actualizado']);
?>
