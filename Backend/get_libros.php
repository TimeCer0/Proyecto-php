<?php
require 'config.php';

$libros = readJsonFile('libros.json');
echo json_encode($libros);
?>
