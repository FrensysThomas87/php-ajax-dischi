<?php

@require_once __DIR__ . '/../database/database.php';

header('Content-Type: application/json');



foreach ($disks as $value) {
  if(array_key_exists('genre', $_GET) && !empty($_GET['genre'])){
    $json = json_encode($disk['genre']);
    echo $json;
  }else{
    $json = json_encode($disks);
    echo $json;
  }

}
