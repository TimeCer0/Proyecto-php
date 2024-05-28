<?php
require 'config.php';

$usuarios = readJsonFile('usuarios.json');
echo json_encode($usuarios);
?>
