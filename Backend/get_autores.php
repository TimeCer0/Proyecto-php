<?php
require 'config.php';

$autores = readJsonFile('autores.json');
echo json_encode($autores);
?>
