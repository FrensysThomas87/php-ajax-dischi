<?php

@require_once __DIR__ . '/../database/database.php';

header('Content-Type: application/json');

$json = json_encode($disks);
echo $json;

?>
