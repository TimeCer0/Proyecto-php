<?php
require 'config.php';

$id = $_GET['id'];
$categorias = readJsonFile('categorias.json');
$categoria = null;

foreach ($categorias as $c) {
    if ($c['_id']['$oid'] == $id) {
        $categoria = $c;
        break;
    }
}

echo json_encode($categoria);
?>
