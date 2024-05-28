<?php
function readJsonFile($filename) {
    $json = file_get_contents($filename);
    return json_decode($json, true);
}
?>
