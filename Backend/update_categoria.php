<?php
require 'config.php';

$id = $_GET['id'];
$data = json_decode(file_get_contents('php://input'), true);
$categorias = readJsonFile('categorias.json');

foreach ($categorias as &$c) {
    if ($c['_id']['$oid'] == $id) {
        $c = array_merge($c, $data);
        break;
    }
}

file_put_contents('categorias.json', json_encode($categorias));
echo json_encode(['mensaje' => 'Categoría actualizada']);
?>
