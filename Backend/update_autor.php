<?php
require 'config.php';

$id = $_GET['id'];
$data = json_decode(file_get_contents('php://input'), true);
$autores = readJsonFile('autores.json');

foreach ($autores as &$a) {
    if ($a['_id']['$oid'] == $id) {
        $a = array_merge($a, $data);
        break;
    }
}

file_put_contents('autores.json', json_encode($autores));
echo json_encode(['mensaje' => 'Autor actualizado']);
?>
