<?php
require 'config.php';

$prestamos = readJsonFile('prestamos.json');
echo json_encode($prestamos);
?>
