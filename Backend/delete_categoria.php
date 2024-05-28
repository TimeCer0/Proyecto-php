<?php
require 'config.php';

$id = $_GET['id'];
$categorias = readJsonFile('categorias.json');

$categorias = array_filter($categorias, function($c) use ($id) {
    return $c['_id']['$oid'] !== $id;
});

file_put_contents('categorias.json', json_encode($categorias));
echo json_encode(['mensaje' => 'Categoría eliminada']);
?>
