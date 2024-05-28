<?php
require 'config.php';

$categorias = readJsonFile('categorias.json');
echo json_encode($categorias);
?>
