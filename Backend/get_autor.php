<?php
require 'config.php';

$id = $_GET['id'];
$autores = readJsonFile('autores.json');
$autor = null;

foreach ($autores as $a) {
    if ($a['_id']['$oid'] == $id) {
        $autor = $a;
        break;
    }
}

echo json_encode($autor);
?>
