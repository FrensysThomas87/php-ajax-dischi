<?php

@require_once __DIR__ . '/../database/database.php';

header('Content-Type: application/json');


$genreQuery = $_GET['genre'];

function filterByGenre($originalArray, $genere){
  $filtered = [];
  foreach ($originalArray as $album) {
    if( $genere === $album['genre'] ){
      $filtered[] = $album['genre'];
    }
    var_dump($filtered);
    return $filtered;
  }

}


if(!empty($genreQuery)){
  $disks = filterByGenre($disks, $genreQuery);
}else{
  $json = json_encode($disks);
  echo $json;
}
