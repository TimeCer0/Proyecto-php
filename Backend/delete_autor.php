<?php
require 'config.php';

$id = $_GET['id'];
$autores = readJsonFile('autores.json');

$autores = array_filter($autores, function($a) use ($id) {
    return $a['_id']['$oid'] !== $id;
});

file_put_contents('autores.json', json_encode($autores));
echo json_encode(['mensaje' => 'Autor eliminado']);
?>
